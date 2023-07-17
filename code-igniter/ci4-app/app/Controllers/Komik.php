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

    public function create()
    {
        // d(session('validation'));
        $data = [
            "title" => "Insert Komik Page",
            "validation" => session('validation')
        ];
        
        return view('komik/create', $data);
    }

    public function save()
    {
        if(!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    'is_unique' => '{field} komik sudah terdaftar',
                    ]
                ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    ]
                ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    ]
                ],
            // 'sampul' => 'uploaded[sampul]'
            ])){
                $validation = \Config\Services::validation();
                // dd($validation);
                return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
        }
        $fileSampul = $this->request->getFile("sampul");
        if($fileSampul->getError() == 4){
            $nameSampul ="default.jpg";
        }else{
        $nameSampul = $fileSampul->getRandomName();
        $fileSampul->move('img', $nameSampul);
        }

        $slug = url_title($this->request->getVar("judul"), "-", true);
        $this->komikModel->insertData([
            'judul'     =>  $this->request->getVar("judul"),
            'slug'      =>  $slug,
            'penulis'   =>  $this->request->getVar("penulis"),
            'penerbit'  =>  $this->request->getVar("penerbit"),
            'sampul'    =>  $nameSampul
        ]);

        session()->setFlashdata('pesan', "Berhasil memasukan data");
        
        return redirect()->to("/komik");
    }

    public function delete($id)
    {
        $getImage = $this->komikModel->getById($id);

        if($getImage["sampul"] != "default.jpg"){
            unlink('img/'.$getImage["sampul"]);
        }

        $this->komikModel->delete($id);
        session()->setFlashdata('pesan','Data berhasil dihapus');
        return redirect()->to("/komik");
    }

    public function edit($slug)
    {
        session();

        $data = [
            "title" => "Edit Komik Page",
            "validation" => session('validation'),
            "oldKomik" => $this->komikModel->getBySlug($slug)
        ];
        
        return view('komik/edit', $data);
    }

    public function update($slug)
    {

        $komikLama = $this->komikModel->getBySlug($slug);
        $komikBaru = $this->request->getVar();
        if ($komikLama['judul'] == $komikBaru['judul']) {
            $ruleJudul ='required';
        }
        else{
            $ruleJudul ='required|is_unique[komik.judul]';
        };  
        
        if(!$this->validate([
            'judul' => [
                'rules' => $ruleJudul,
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    'is_unique' => '{field} komik sudah terdaftar',
                    ]
                ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    ]
                ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} komik harus diisi',
                    ]
                ]
            ])){
                $validation = \Config\Services::validation();
                return redirect()->to('/komik/create')->withInput()->with('validation', $validation);
            }
            
        $fileSampul = $this->request->getFile("sampul");
        $nameSampul= "";
        if($fileSampul->getError() == 4){
            $nameSampul = $this->request->getVar('sampul');
        }else{
            $nameSampul = $fileSampul->getRandomName();
            $fileSampul->move('img', $nameSampul);
        }

        // dd($nameSampul);

        $slug = url_title($this->request->getVar('judul'), "-", true);
        $this->komikModel->save([
            'id'        =>  $komikLama["id"],
            'judul'     =>  $this->request->getVar('judul'),
            'slug'      =>  $slug,
            'penulis'   =>  $this->request->getVar('penulis'),
            'penerbit'  =>  $this->request->getVar('penerbit'),
            'sampul'    =>  $nameSampul
        ]);

        session()->setFlashdata('pesan', "Berhasil memasukan data");
        
        return redirect()->to("/komik");
    }
}