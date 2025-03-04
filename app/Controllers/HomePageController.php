<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SiparisModel;

class HomePageController extends BaseController
{
    
    public function index(): string
    {
        if (!$this->session->get('isLoggedIn')) {
            return view('admin/login'); // Login sayfasına yönlendir
        }

        return view('homepage');
    }

    public function incele(): string
    {
        $siparisId = $this->request->getGet('siparis_id');
        
        if (!$siparisId) {
            return redirect()->back()->with('error', 'Sipariş ID boş olamaz');
        }

        // Sipariş tablosunu kontrol et
        $siparisModel = new SiparisModel();
        $siparis = $siparisModel->where('id', $siparisId)->first(); 

        if ($siparis) {
            // Sipariş bulunduysa, gerekli işlemleri yapabilirsiniz
            return view('siparisIncele', ['siparis' => $siparis]);
        } else {
            return redirect()->back()->with('error', 'Sipariş bulunamadı');
        }
    }
    

}
