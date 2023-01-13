<?php

namespace App\Controllers;

use App\Models\UserModel;

class user extends BaseController
{
    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_user') ? $this->request->getVar('page_user') : 1;

        $keyword = $this->request->getVar('keyword');
        if($keyword) {
            $user = $this->UserModel->search($keyword);
        } else {
            $user = $this->UserModel;
        }

        $data = [
            'title' => 'Daftar User',
            // 'user' => $this->UserModel->findAll()
            'user' => $user->paginate(2,'user'),
            'pager' => $this->UserModel->pager,
            'currentPage' => $currentPage
        ];

       return view('user/index', $data);
    }
}