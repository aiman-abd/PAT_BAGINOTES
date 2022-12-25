<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_auth;
use CodeIgniter\I18n\Time;
use DateTime;

class Auth extends BaseController
{
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->Model_auth = new Model_auth();
        $this->builder = $this->db->table('pengguna');
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
        ob_start();
    }
    public function index()
    {
    }
    public function register()
    {
        if ($this->session->get('nama') == NULL) {

            helper('form');

            return view('template/auth/header') . view(
                'auth/viewRegister',
                [
                    'validation' => $this->validation,
                    'session' => $this->session,
                    'title' => 'Register' . $_ENV['app.name'],
                    'waktuHabis' =>  $this->session->waktuhabis = time() - 10,
                ],

            )
                . view('template/auth/footer');
        } else {
            return redirect()->to('/');
        }
    }
    public function save()
    {
        if ($this->session->get('nama') == NULL) {
            helper('form');

            if ($this->request->getMethod() === 'post') {

                if (!$this->validate(
                    [
                        'email' => [
                            'rules' => 'required|min_length[3]|is_unique[pengguna.email.id,{id}]',
                            'errors' => [
                                'required' => 'Email wajib di isi',
                                'min_length[3]' => 'Email terlalu pendek',
                                'is_unique' => 'Email sudah ada,silahkan gunakan yang lain',
                            ],
                        ],
                        'nama' => [
                            'rules' => 'required|min_length[3]|max_length[20]',
                            'errors' => [
                                'required' => 'Nama wajib di isi',
                                'min_length[3]' => 'Nama terlalu pendek',
                                'max_length[20]' => 'Nama terlalu panjang',
                            ],
                        ],

                        'password' => [
                            'rules' => 'required|trim|min_length[3]',
                            'errors' => [
                                'required' => 'Password wajib di isi',
                                'min_length[3]' => 'Password terlalu pendek',

                            ],
                        ],
                        'confirmation_password' => [
                            'rules' => 'required|trim|min_length[3]|matches[password]',
                            'errors' => [
                                'required' => 'Password konfirmasi wajib di isi',
                                'min_length[3]' => 'Password terlalu pendek',
                                'matches' => 'Password tidak sama,tolong samakan password',
                            ],
                        ],
                    ]

                )) {

                    $data['validation'] = $this->validator;
                    $data['session'] = $this->session;
                    $this->session->setTempdata('errorEmail', $this->validation->getError('email'), 10);
                    $this->session->setTempdata('errorNama', $this->validation->getError('nama'), 10);
                    $this->session->setTempdata('errorPassword', $this->validation->getError('password'), 10);
                    $this->session->setTempdata('errorPasswordConf', $this->validation->getError('confirmation_password'), 10);
                    return view('template/auth/header') . view('auth/viewRegister', [
                        'validation' => $this->validation,
                        'session' => $this->session,
                        'title' => 'Register' . $_ENV['app.name'],
                        'waktuHabis' =>  $this->session->waktuhabis = time() - 10,
                    ], $data)
                        . view('template/auth/footer', $data);
                } else {
                    $data = [

                        'email' => htmlspecialchars($this->request->getVar('email')),
                        'nama' => htmlspecialchars($this->request->getVar('nama')),
                        'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    ];
                    $this->Model_auth->save($data);
                    $this->session->setTempdata('berhasilDaftar', 'Selamat,akun anda sudah terdaftar, silahkan login ', 10);
                    return redirect()->to('/login');
                    // $this->session->set('errorNama',);

                }
            }
        } else {
            return redirect()->to('/');
        }
    }
    public function login()
    {
        if ($this->session->get('email') == NULL) {
            helper('form');
            $data = [
                'title' => 'Register' . $_ENV['app.name'],
            ];
            $this->session->waktuhabis = time() - 10;

            return view('template/auth/header') . view('auth/viewLogin', [
                'validation' => $this->validation,
                'session' => $this->session,
                'title' => 'Register' . $_ENV['app.name'],
                'waktuHabis' => $this->session->waktuhabis,
            ], $data)
                . view('template/auth/footer');
        } else {
            return redirect()->to('/');
        }
    }
    public function loginSave()
    {
        if ($this->session->get('email') == NULL) {
            if (!$this->validate(
                [
                    'login_email' => [
                        'rules' => 'required|min_length[3]',
                        'errors' => [
                            'required' => 'Email wajib di isi',
                            'min_length[3]' => 'Email terlalu pendek',

                        ],
                    ],



                    'login_password' => [
                        'rules' => 'required|trim',
                        'errors' => [
                            'required' => 'Password wajib di isi',


                        ],
                    ],

                ]

            )) {
                helper('form');
                $data = [
                    'title' => 'Register' . $_ENV['app.name'],
                ];
                $this->session->waktuhabis = time() - 10;
                $this->session->setTempdata('erroremail', $this->validation->getError('login_email'), 10);
                $this->session->setTempdata('errorPassword', $this->validation->getError('login_password'), 10);
                return view('template/auth/header') . view('auth/viewLogin', [
                    'validation' => $this->validation,
                    'session' => $this->session,
                    'title' => 'Register' . $_ENV['app.name'],
                    'waktuHabis' => $this->session->waktuhabis,
                ], $data)
                    . view('template/auth/footer');
            } else {
                $email = $this->request->getVar('login_email');
                $password = $this->request->getVar('login_password');
                $cek = $this->Model_auth->where('email', $email)->first();
                if ($cek) {
                    $passwordHash = $cek['password'];
                    if (password_verify($password, $passwordHash)) {
                        $data = [
                            'email' => $cek['email'],
                            'id' => $cek['id'],
                            'nama' => $cek['nama'],
                        ];
                        $this->session->set($data);
                        return redirect()->to('/');
                    } else {
                        $this->session->setTempdata('errorPassword', 'Password salah', 10);

                        return redirect()->to('/login');
                    }
                } else {
                    $this->session->setTempdata('erroremail', 'email tidak terdaftar', 10);
                    return redirect()->to('/login');
                }
            }
        } else {
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        $this->session->destroy();


        unset($_SESSION['email']);
        // or multiple values:
        unset(
            $_SESSION['nama'],
        );
        $this->session->setTempdata('berhasilDaftar', 'Anda sudah logout, Silahkan Login Kembali', 10);
        return redirect()->to('/login');
    }
}
