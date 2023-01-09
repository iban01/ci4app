<?php

namespace App\Controllers;

use App\Models\LaguModel;

class lagu extends BaseController
{
    protected $laguModel;
    public function __construct()
    {
        $this->laguModel = new laguModel();
    }
    public function index()
    {
        $lagu = $this->laguModel->findAll();

        $data = [
            'title' => 'Daftar lagu',
            'lagu' => $lagu
        ];



       return view('lagu/index', $data);
    }
}