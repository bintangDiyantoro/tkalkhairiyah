<?php

namespace App\Controllers;

use App\Models\ModelGaleri;

class Galeri extends BaseController
{
    public function __construct()
    {
        $this->galeri = new ModelGaleri();
    }
    public function index()
    {
        $data["title"] = "Galeri";
        $data['description'] = 'TK Islam Al-Khairiyah adalah lembaga pendidikan pra-sekolah di Kabupaten Banyuwangi yang mengutamakan nilai-nilai agama Islam dalam kehidupan sehari-hari. Dengan metode belajar sambil bermain untuk mencetak lulusan menjadi anak yang santun, mandiri, aktif, kreatif menuju tingkat siap belajar di Sekolah Dasar';
        return view('main/gallery', $data);
    }
    public function lookup($param)
    {
        $data["title"] = "Galeri";
        $data['description'] = 'TK Islam Al-Khairiyah adalah lembaga pendidikan pra-sekolah di Kabupaten Banyuwangi yang mengutamakan nilai-nilai agama Islam dalam kehidupan sehari-hari. Dengan metode belajar sambil bermain untuk mencetak lulusan menjadi anak yang santun, mandiri, aktif, kreatif menuju tingkat siap belajar di Sekolah Dasar';
        $data["galeri"] = $this->galeri->lookup($param);
        return view('main/gal-template', $data);
    }
}
