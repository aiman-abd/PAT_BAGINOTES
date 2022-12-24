<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_catatan;


class UserController extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Home';
        return view('dashboard/Home', $data);
    }
    public function tambahcatatan()
    {
        $data['pageTitle'] = 'Tambah Catatan';
        return view('crud/Tambahcatatan', $data);
    }
    public function tambahkelas()
    {
        $data['pageTitle'] = 'Tambah Kelas';
        return view('crud/Tambahkelas', $data);
    }
    public function kelas()
    {
        $data['pageTitle'] = 'Kelas';
        return view('dashboard/Kelas', $data);
    }
    public function probstat()
    {
        $data['pageTitle'] = 'Probabilitas dan Statistika';
        return view('dashboard/Probstat', $data);
    }
    public function catatansaya()
    {
        $data['pageTitle'] = 'Catatan Saya';
        return view('dashboard/Catatansaya', $data);

        // $Model_catatan = new Model_catatan();
        // $catatan = $Model_catatan->findAll();
        // $data = [
        //     'catatan' => $catatan
        // ];

        // return view('user/catatansaya', $data);
    }
    public function pengaturan()
    {
        $data['pageTitle'] = 'Pengaturan';
        return view('dashboard/Pengaturan', $data);
    }
}
