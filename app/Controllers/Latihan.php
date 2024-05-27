<?php

namespace App\Controllers;
use App\Models\LatihanModel;

class Latihan extends BaseController
{
    protected $Mhs;

    public function __construct()
    {
        $this->Mhs = new LatihanModel();

    }

    public function index(){
        $data = [
            'title' => 'Data Mahasiswa',
            'pesan' => "Teknik Informatika",
            'mhsData' => $this->Mhs->mhsData(),
        ];

        return view('latihan_1', $data);
    }

    public function cv() {
        $data = [
            'title' => 'Curriculum Vitae',
        ];

        return view('body', $data);
    }
}