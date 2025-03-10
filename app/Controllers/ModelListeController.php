<?php

namespace App\Controllers;

use App\Models\BilezikModel;
use App\Models\UsersModel;
use App\Models\SiparisModel;

class ModelListeController extends BaseController
{
    
    public function index(): string
    {
        if (!$this->session->get('isLoggedIn')) {
            return view('login'); // Login sayfasına yönlendir
        }
        $bilezikModel = new BilezikModel();
        $bilezikler = $bilezikModel->findAll();
        return view('modellistele', [
            'bilezikler' => $bilezikler
        ]);
    }

    public function bilezikListApi(): string
    {
        $bilezikModel = new BilezikModel();
        $bilezikler = $bilezikModel->findAll();
        return json_encode($bilezikler);
    }

    

}
