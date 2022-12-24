<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Model_catatan;

class Catatan extends BaseController
{
    public function index()
    {
        $Model_catatan = new Model_catatan();
        $catatan = $Model_catatan->findAll();
        $data = [
            'catatan' => $catatan
        ];

        return view('catatan', $data);
    }

    public function add()
    {
        return view('add-catatan');
    }

    public function create()
    {
        $catatan = new Model_catatan();
        $catatan->insert([
            'judul' => $this->request->getPost('judul'),
            'subjek' => $this->request->getPost('subjek'),
            'berkas' => $this->request->getPost('berkas')
        ]);

        return redirect('catatan');
    }

    public function delete($id)
    {
        $catatan = new Model_catatan();
        $catatan->delete($id);

        return redirect('catatan');
    }

    public function edit($id)
    {
        $Model_catatan = new Model_catatan();
        $catatan = $Model_catatan->find($id);

        return view('edit-catatan', ['catatan' => $catatan]);
    }

    public function update($id)
    {
        $catatan = new Model_catatan();
        $newData = [
            'judul' => $this->request->getPost('judul'),
            'subjek' => $this->request->getPost('subjek'),
            'berkas' => $this->request->getPost('berkas')
        ];
        $catatan->update($id, $newData);

        return  redirect('catatan');
    }
}
