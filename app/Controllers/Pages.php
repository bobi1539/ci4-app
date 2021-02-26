<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jalan sudirman no 23',
                    'kota' => 'bukittinggi'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'jalan hamka no 543',
                    'kota' => 'padang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
