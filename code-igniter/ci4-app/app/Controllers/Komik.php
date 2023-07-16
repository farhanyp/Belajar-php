<?php

namespace App\Controllers;

use App\Models\KomikModel;
use Config\Database;
use Exception;

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
        if(empty($data['komik'])){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Judul komik $slug tidak ditemukan");
        }
        
        return view('komik/detail', $data);
    }

    public function create(){

            $data = [
                "title" => "Insert Komik Page",
            ];
            
            return view('komik/create', $data);
    }

    public function save(){
        $getDataFromForm = $this->request->getVar();

        $slug = url_title($getDataFromForm['judul'], "-", true);
        $this->komikModel->insertData([
            'judul'     =>  $getDataFromForm["judul"],
            'slug'      =>  $slug,
            'penulis'   =>  $getDataFromForm["penulis"],
            'penerbit'    =>  $getDataFromForm["penerbit"],
            'sampul'      => $getDataFromForm["sampul"] 
        ]);

        session()->setFlashdata('pesan', "Berhasil memasukan data");
        
        return redirect()->to("/komik");
    
}
}