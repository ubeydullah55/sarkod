<?php

namespace App\Controllers;

use App\Models\BilezikModel;
use App\Models\UsersModel;
use App\Models\SiparisModel;

class YeniUrunGirController extends BaseController
{
    
    public function index(): string
    {
        if (!$this->session->get('isLoggedIn')) {
            return view('login'); // Login sayfasına yönlendir
        }
        $bilezikModel = new BilezikModel();
        $bilezikler = $bilezikModel->findAll();
        return view('yeniurun', [
            'bilezikler' => $bilezikler
        ]);
    }

    public function yeniSiparis()
    {
        // Bilezik ID'sini formdan al (post yöntemi ile)
        $bilezikId = $this->request->getPost('bilezik_id');
        // Eğer bilezik ID'si boşsa, hata mesajı dön
        if (empty($bilezikId)) {
            return redirect()->back()->with('error', 'Bilezik seçilmedi.');
        }

        // BilezikModel'i yükle ve seçilen bileziği al
        $bilezikModel = new BilezikModel();
        $bilezik = $bilezikModel->where('id', $bilezikId)->first();

        // Eğer bilezik bulunamazsa, hata mesajı dön
        if (!$bilezik) {
            return redirect()->back()->with('error', 'Bilezik bulunamadı.');
        }       
        return view('yenibilezikkayit', ['bilezik' => $bilezik]);
    }
    public function yeniSiparisSave()
    {
        // Formdan gelen verileri al
        $bilezik_id = $this->request->getPost('bilezik_id'); // Bilezik ID
        $bilezik_ad = $this->request->getPost('bilezik_ad'); // Bilezik Adı
        $bilezik_gr = $this->request->getPost('bilezikgr'); // Gram
        $bilezik_genislik = $this->request->getPost('bilezikgenislik'); // Genişlik
        $bilezik_cnc = $this->request->getPost('bilezik_cnc'); // CNC
        $tarih = date('Y-m-d H:i:s'); // Tarihi otomatik al

        // BilezikModel'i yükle ve bilezik verilerini al
        $bilezikModel = new BilezikModel();
        $bilezik = $bilezikModel->find($bilezik_id);

        // Eğer bilezik bulunamazsa, hata mesajı döndür
        if (!$bilezik) {
            return redirect()->back()->with('error', 'Bilezik bulunamadı.');
        }

        // Veritabanına kaydedilecek veri
        $data = [
            'bilezik_id' => $bilezik_id,       // Bilezik ID
            'agirlik' => $bilezik_gr,          // Gram
            'genislik' => $bilezik_genislik,   // Genişlik
            'tarih' => $tarih,                 // Tarih
            'cnc' => $bilezik_cnc,             // CNC
        ];

        // SiparisModel'i yükle
        $siparisModel = new \App\Models\SiparisModel();

        // Veriyi kaydet
        if ($siparisModel->save($data)) {
            // Başarılı kayıttan sonra SiparisInceleController'a yönlendir
            $siparisId = $siparisModel->getInsertID();  // Yeni kaydedilen siparişin ID'sini al
            
            // Yönlendirme
            return redirect()->to('admin/incele?siparis_id=' . $siparisId)
                             ->with('message', 'Yeni sipariş başarıyla kaydedildi!');
        } else {
            // Hata mesajı
            return redirect()->back()->with('error', 'Bir hata oluştu, lütfen tekrar deneyin.');
        }
    }
    

}
