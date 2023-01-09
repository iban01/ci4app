<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Iban'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
            [
                'tipe' => 'Rumah',
                'alamat' => 'Pondok Kopi Blok R6/5',
                'kota' => 'Jakarta Timur'
            ],
            [
                'tipe' => 'Kantor',
                'alamat' => 'Pondok Kelapa',
                'kota' => 'Jakarta Timur'
            ]
            ]
        ]; 
        return view('pages/contact', $data);
    }
}
