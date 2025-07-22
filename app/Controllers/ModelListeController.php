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
        $bilezikModel = new \App\Models\BilezikModel();
        $bilezikler = $bilezikModel->getBileziklerWithKategori();
    
        $customData = [];
    
        foreach ($bilezikler as $bilezik) {
            $customData[] = [
                'id'           => $bilezik['id'],
                'model_adi'    => $bilezik['name'],
                'kategori_id'  => $bilezik['kategori_id'] ?? null,
                'kategori_adi' => $bilezik['kategori_adi'] ?? 'Kategori Yok',
                'resim'        => $bilezik['resim'],
                'cnc'        => $bilezik['cnc'],
                'sira'        => $bilezik['sira']
            ];
        }      
        return json_encode($customData);
    }

    

}
