<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Home Page",
            'tes' => [1,2,3]
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            "title" => "About Page"
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            "title" => "Contact Page",
            "alamat" => [
                "kota" => "medan",
                "jalan" => "jln.medan"
            ]
        ];
        return view('pages/contact', $data);
    }
}
