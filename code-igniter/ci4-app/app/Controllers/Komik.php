<?php

namespace App\Controllers;

use App\Models\KomikModel;
use Config\Database;

class Komik extends BaseController
{
    protected KomikModel $komikModel;

    public function __construct(){
        $this->komikModel = new KomikModel();
    }

    public function index()
    {

        $data = [
            "title" => "Komik Page",
            "komik" => $this->komikModel->getAll()
        ];
        
        return view('komik/index', $data);
    }

    public function detail($slug)
    {

        $data = [
            "title" => "Komik Page",
            "komik" => $this->komikModel->getBySlug($slug)
        ];

        return view('komik/detail', $data);
    }
}