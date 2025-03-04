<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SiparisModel;
use App\Models\BilezikModel;
require_once APPPATH . 'Libraries/phpqrcode/qrlib.php';  // phpqrcode kütüphanesini dahil ettik

class SiparisInceleController extends BaseController
{
    public function index(): string
    {
        if (!$this->session->get('isLoggedIn')) {
            return view('login'); // Login sayfasına yönlendir
        }

        // GET ile gelen siparis_id'yi alıyoruz
        $siparisId = $this->request->getGet('siparis_id');
        
        // Eğer siparis_id yoksa hata mesajı verelim
        if (!$siparisId) {
            return redirect()->back()->with('error', 'Sipariş ID parametresi eksik.');
        }

        // Sipariş tablosunu kontrol et
        $siparisModel = new SiparisModel();
        $siparis = $siparisModel->where('id', $siparisId)->first(); 

        if ($siparis) {
            // Sipariş bulunduysa, bilezik_id ile bilezik bilgilerini de çek
            $bilezikId = $siparis['bilezik_id']; // Sipariş tablosundaki bilezik_id
            
            $bilezikModel = new BilezikModel();
            $bilezik = $bilezikModel->where('id', $bilezikId)->first();
            
            // QR kodu oluşturma
            $url = 'https://www.sarkod.com.tr/?siparis_id=' . $siparis['id']; // URL'yi sipariş ID'si ile oluştur
            
            // QR kodunu oluşturmak için phpqrcode kütüphanesini kullan
            ob_start(); // Çıktıyı yakalamak için
            \QRcode::png($url, null, QR_ECLEVEL_L, 10); // QR kodunu üret
            $qrCodeBase64 = base64_encode(ob_get_contents()); // QR kodunu Base64 formatına çevir
            ob_end_clean(); // Çıktı tamponunu temizle
            
            
            
            
            // Sipariş ve bilezik verilerini view'e gönder
            return view('siparisIncele', [
                'siparis' => $siparis,
                'bilezik' => $bilezik,
                'qrCode' => $qrCodeBase64,  // QR kodunu Base64 formatında view'e gönderiyoruz
            ]);
        } else {
            return redirect()->back()->with('error', 'Sipariş bulunamadı');
        }
    }
}
