<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model{

    protected $table = "komik";
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];
    protected $useTimestamps = true;

    public function getAll(){
        return $this->findAll();
    }

    public function getBySlug($slug){

        return $this->where(['slug' => $slug])->first();
    }

    public function getById($id){

        return $this->where(['id' => $id])->first();
    }

    public function insertData($data){

        $result = $this->insert($data);

        return $result;
    }
    
}

?>