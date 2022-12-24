<?php

namespace App\Controllers;


class api extends BaseController
{
    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx|ppt|pptx';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            // Mengambil data yang disimpan setelah upload file berhasil
            $data = array('upload_data' => $this->upload->data());
          
            // Menampilkan pesan sukses
            echo "File berhasil diupload!";
        }
        $file_url = $this->input->post('file_url');

        // Menggunakan library curl untuk mengambil file dari URL yang diberikan
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $file_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);

        // Menentukan nama file dan lokasi penyimpanan
        $file_name = basename($file_url);
        $save_path = './uploads/' . $file_name;

        // Menyimpan file ke lokasi yang telah ditentukan
        file_put_contents($save_path, $data);

        // Menampilkan pesan sukses
        echo "File berhasil diupload dari Google Drive!";
    }
}