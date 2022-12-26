<?php

namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{

    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->builder = $this->db->table('User');
        $this->validation = \Config\Services::validation();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            return redirect()->to('auth/login');
        } else {
            $data = [
                'pageTitle' => 'Home',
                'session' => $this->session,
                'db' => $this->db,


            ];
            return view('dashboard/Home', $data);
        }
    }
    public function tambahcatatan()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            return redirect()->to('auth/login');
        } else {
            $data = [
                'pageTitle' => 'Tambah Catatan',
                'session' => $this->session,
                'db' => $this->db,


            ];

            return view('crud/Tambahcatatan', $data);
        }
    }
    public function tambahkelas()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            return redirect()->to('auth/login');
        } else {
            $data = [
                'pageTitle' => 'Tambah Kelas',
                'session' => $this->session,
                'db' => $this->db,
            ];
            return view('crud/Tambahkelas', $data);
        }
    }
    public function kelas()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            return redirect()->to('auth/login');
        } else {
            $data = [
                'pageTitle' => ' Kelas',
                'session' => $this->session,
                'db' => $this->db,
            ];

            return view('dashboard/Kelas', $data);
        }
    }
    public function probstat()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            return redirect()->to('auth/login');
        } else {
            $data['pageTitle'] = 'Probabilitas dan Statistika';
            return view('dashboard/Probstat', $data);
        }
    }
    public function catatansaya()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            return redirect()->to('auth/login');
        } else {
            $data = [
                'pageTitle' => ' Catatan Saya',
                'session' => $this->session,
                'db' => $this->db,
            ];

            return view('dashboard/Catatansaya', $data);
        }
        // $Model_catatan = new Model_catatan();
        // $catatan = $Model_catatan->findAll();
        // $data = [
        //     'catatan' => $catatan
        // ];

        // return view('user/catatansaya', $data);
    }
    public function subjek($nama_kelas = null)
    {
        $data = [
            'title' => 'Subjek' . $_ENV['app.name'],
            'session' => $this->session,
            'kelas' => $this->KelasModel->findAll(),
            'subjek' => $this->SubjekModel->where('id_kelas', $id_kelas)->findAll(),
            // 'id_kelas' => $id_kelas,
        ];
        return view('template/auth/header') .
            view('template/auth/viewSubjek') .
            view('template/auth/footer');
    }

    public function pengaturan()
    {
        if ($this->session->get('nama_pengguna') == NULL || $this->session->get('email_pengguna') == NULL) {
            return redirect()->to('auth/login');
        } else {
            $data = [
                'pageTitle' => ' Pengaturan Saya',
                'session' => $this->session,
                'db' => $this->db,
            ];
            return view('dashboard/Pengaturan', $data);
        }
    }
}

