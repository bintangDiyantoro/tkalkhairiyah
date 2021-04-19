<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data["title"] = "Halaman Utama";
		$data['description'] = 'TK Islam Al-Khairiyah adalah sekolah yang melayani pengajaran jenjang pendidikan dasar di Kabupaten Banyuwangi yang mengajarkan semua mata pelajaran wajib sesuai kurikulum yang berlaku disertai tambahan nilai-nilai agama Islam.';
		return view('home/index', $data);
	}
}
