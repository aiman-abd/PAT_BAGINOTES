<?php

namespace App\Controllers;


class UserController extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('dashboard/Home', $data);
    }
    public function tambahjadwal()
    {
        $data['pageTitle'] = 'Tambah Jadwal';
        return view('crud/Tambahjadwal', $data);
    }
    public function kelas()
    {
        $data['pageTitle'] = 'Kelas';
        return view('dashboard/Kelas', $data);
    }
    public function catatansaya()
    {
        $data['pageTitle'] = 'Catatan Saya';
        return view('dashboard/Catatansaya', $data);
    }
    public function pengaturan()
    {
        $data['pageTitle'] = 'Pengaturan';
        return view('dashboard/Pengaturan', $data);
    }
}
