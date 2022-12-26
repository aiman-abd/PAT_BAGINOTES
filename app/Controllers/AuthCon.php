<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class AuthCon extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->AuthModel = new AuthModel();
        $this->builder = $this->db->table('pengguna');
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }
    public function register()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            $data = [
                'title' => 'Register',
                'validation' => $this->validation,
                'session' => $this->session,
            ];

            helper('form');
            if ($this->request->getMethod() === 'post') {
                if (!$this->validate(
                    [
                        'email_user' => [
                            'rules' => 'required|min_length[3]|is_unique[pengguna.email.id,{id}]',
                            'errors' => [
                                'required' => 'Email wajib di isi',
                                'min_length[3]' => 'Email terlalu pendek',
                                'is_unique' => 'Email sudah ada,silahkan gunakan yang lain',
                            ],
                        ],

                        'nama_user' => [
                            'rules' => 'required|min_length[3]|max_length[20]',
                            'errors' => [
                                'required' => 'Nama wajib di isi',
                                'min_length[3]' => 'Nama terlalu pendek',
                                'max_length[20]' => 'Nama terlalu panjang',
                            ],
                        ],
                        'username_user' => [
                            'rules' => 'required|min_length[3]|max_length[20]|is_unique[pengguna.username.id,{id}]',
                            'errors' => [
                                'required' => 'Username wajib di isi',
                                'min_length[3]' => 'Username terlalu pendek',
                                'max_length[20]' => 'Username terlalu panjang',
                                'is_unique' => 'Username sudah ada, silahkan gunakan yang lain',

                            ],
                        ],
                        'password_user' => [
                            'rules' => 'required|trim|min_length[3]',
                            'errors' => [
                                'required' => 'Password wajib di isi',
                                'min_length[3]' => 'Password terlalu pendek',

                            ],
                        ],
                        'confirmation_password' => [
                            'rules' => 'required|trim|min_length[3]|matches[password_user]',
                            'errors' => [
                                'required' => 'Password konfirmasi wajib di isi',
                                'min_length[3]' => 'Password terlalu pendek',
                                'matches' => 'Password tidak sama,tolong samakan password',
                            ],
                        ],
                    ]

                )) {
                    $this->session->setTempdata('errorEmail', $this->validation->getError('email_user'), 10);
                    $this->session->setTempdata('errorUsername', $this->validation->getError('username_user'), 10);
                    $this->session->setTempdata('errorNama', $this->validation->getError('nama_user'), 10);
                    $this->session->setTempdata('errorPassword', $this->validation->getError('password_user'), 10);
                    $this->session->setTempdata('errorPasswordConf', $this->validation->getError('confirmation_password'), 10);
                    return view('template/auth/header', $data) .
                        view('template/auth/viewRegister') .
                        view('template/auth/footer');
                } else {
                    $data = [

                        'email' => htmlspecialchars($this->request->getVar('email_user')),
                        'username' => htmlspecialchars($this->request->getVar('username_user')),
                        'nama' => htmlspecialchars($this->request->getVar('nama_user')),
                        'password' => password_hash($this->request->getVar('password_user'), PASSWORD_DEFAULT),

                    ];
                    $this->AuthModel->save($data);
                    $this->session->setTempdata('berhasilDaftar', 'Selamat,akun anda sudah terdaftar, silahkan login ', 10);
                    return redirect()->to('/auth/login');
                }
            } else {
                return view('template/auth/header', $data) .
                    view('template/auth/viewRegister') .
                    view('template/auth/footer');
            }
        } else {
            return  redirect()->to('/user/home');
        }
    }
    public function login()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            helper('form');
            $data = [
                'title' => 'Login' . $_ENV['app.name'],
                'validation' => $this->validation,
                'session' => $this->session,
            ];

            if ($this->request->getMethod() === 'post') {
                if (!$this->validate(
                    [

                        'username_pengguna' => [
                            'rules' => 'required|min_length[3]|max_length[20]',
                            'errors' => [
                                'required' => 'Username wajib di isi',
                                'min_length[3]' => 'Username terlalu pendek',
                                'max_length[20]' => 'Username terlalu panjang',


                            ],
                        ],
                        'password_pengguna' => [
                            'rules' => 'required|trim|min_length[3]',
                            'errors' => [
                                'required' => 'Password wajib di isi',
                                'min_length[3]' => 'Password terlalu pendek',

                            ],
                        ],

                    ]

                )) {

                    $this->session->setTempdata('errorUsernamePengguna', $this->validation->getError('username_pengguna'), 10);
                    $this->session->setTempdata('errorPasswordPengguna', $this->validation->getError('password_pengguna'), 10);
                    return view('template/auth/header', $data) .
                        view('template/auth/viewLogin') .
                        view('template/auth/footer');
                } else {
                    $username = htmlspecialchars($this->request->getVar('username_pengguna'));
                    $password = htmlspecialchars($this->request->getVar('password_pengguna'));
                    $cek = $this->AuthModel->where('username', $username)->first();
                    if ($cek) {
                        $passwordHash = $cek['password'];
                        if (password_verify($password, $passwordHash)) {
                            $data = [

                                'nama_pengguna' => $cek['nama'],
                                'id_pengguna' => $cek['id_user'],
                                'email_pengguna' => $cek['email'],

                            ];
                            $this->session->set($data);
                            return redirect()->to('/user/home');
                        } else {
                            $this->session->setTempdata('errorPasswordPengguna', 'Password salah', 10);
                            return view('template/auth/header', $data) .
                                view('template/auth/viewLogin') .
                                view('template/auth/footer');
                        }
                    } else {
                        $this->session->setTempdata('errorUsernamePengguna', 'Username tidak ditemukan', 10);
                        return view('template/auth/header', $data) .
                            view('template/auth/viewLogin') .
                            view('template/auth/footer');
                    }
                }
            } else {
                return view('template/auth/header', $data) .
                    view('template/auth/viewLogin') .
                    view('template/auth/footer');
            }
        } else {

            return redirect()->to('/user/home');
        }
    }

    public function logout()
    {
        $this->session->destroy();

        unset($_SESSION['nama_pengguna']);
        // or multiple values:
        unset(
            $_SESSION['email_pengguna'],
            $_SESSION['nama_pengguna']
        );
        return redirect()->to('/auth/login');
    }

    // public function ()
    // {
    //     //
    // }
}
