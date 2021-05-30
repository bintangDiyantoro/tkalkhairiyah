<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function index()
    {
        $data["title"] = "Profil";
        $data['description'] = 'TK Islam Al-Khairiyah adalah sekolah yang melayani pengajaran jenjang pendidikan dasar di Kabupaten Banyuwangi yang mengajarkan semua mata pelajaran wajib sesuai kurikulum yang berlaku disertai tambahan nilai-nilai agama Islam.';
        return view('main/profile', $data);
    }
}
