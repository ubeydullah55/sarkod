<?php

namespace App\Controllers;


use App\Models\SiparisModel;
use App\Models\BilezikModel;

class ProductViewController extends BaseController
{
    
    public function index(): string
    {      $siparisId = $this->request->getGet('siparis_id');
        if (!$siparisId) {
            return redirect()->back()->with('error', 'Sipariş ID parametresi eksik.');
        }
    
        // Sipariş bilgilerini alıyoruz
        $siparisModel = new SiparisModel();
        $siparis = $siparisModel->where('id', $siparisId)->first(); 
    
        if ($siparis) {
            // Siparişin tarihini formatlıyoruz (gün-ay-yıl)
            $productionDate = new \DateTime($siparis['tarih']);
            $formattedDate = $productionDate->format('d-m-Y');  // 'gün-ay-yıl' formatında
    
            // Sipariş bulunduysa, bilezik bilgilerini de çekiyoruz
            $bilezikId = $siparis['bilezik_id']; // Sipariş tablosundaki bilezik_id
            $bilezikModel = new BilezikModel();
            $bilezik = $bilezikModel->where('id', $bilezikId)->first();
    
            // Sipariş ve bilezik verilerini view'e gönderiyoruz
            return view('productview', [
                'siparis' => $siparis,
                'bilezik' => $bilezik,
                'formattedDate' => $formattedDate, // Formatlanmış tarihi view'e gönderiyoruz
            ]);
        } else {
            return redirect()->back()->with('error', 'Sipariş bulunamadı');
        }
    
        return view('productview');
    }

    

}
