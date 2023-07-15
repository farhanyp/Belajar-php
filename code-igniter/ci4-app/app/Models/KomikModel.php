<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model{

    protected $table = "komik";
    protected $primaryKey = 'id';

    public function getAll(){
        return $this->findAll();
    }

    public function getBySlug($slug){

        return $this->where(['slug' => $slug])->first();
    }
}

?>