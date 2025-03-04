<?php


namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SiparisModel;
use App\Models\BilezikModel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class SiparisCopyKayitController extends BaseController
{
    public function index(): string
    {
        if (!$this->session->get('isLoggedIn')) {
            return view('login'); // Login sayfasına yönlendir
        }
        
        $siparisId = $this->request->getPost('siparis_id');
        
        // Sipariş tablosunu kontrol et
        $siparisModel = new \App\Models\SiparisModel();
        $siparis = $siparisModel->where('id', $siparisId)->first(); 
        
        if ($siparis) {
            // Sipariş bulunduysa, bilezik_id ile bilezik bilgilerini de çek
            $bilezikId = $siparis['bilezik_id']; // Sipariş tablosundaki bilezik_id
            
            $bilezikModel = new \App\Models\BilezikModel();
            $bilezik = $bilezikModel->where('id', $bilezikId)->first();
            
            // QR kodu oluştur (QR kod ile ilgili kod ekleyebilirsiniz)
            // Örneğin: $qrCode = new QrCode('some data');

            // Sipariş ve bilezik verilerini view'e gönder
            return view('bilezikcopykayit', [
                'siparis' => $siparis,
                'bilezik' => $bilezik
            ]);
        } else {
            return redirect()->back()->with('error', 'Sipariş bulunamadı');
        }

        return view('homepage');
    }

    public function saveCopyBilezik()
    {
        // Formdan gelen verileri al
        $bilezik_id = $this->request->getPost('bilezik_id'); // Bilezik ID
        $bilezik_ad = $this->request->getPost('bilezik_ad'); // Bilezik Adı (isteğe bağlı)
        $bilezik_gr = $this->request->getPost('bilezikgr'); // Gram
        $bilezik_genislik = $this->request->getPost('bilezikgenislik'); // Genişlik
        $bilezik_cnc = $this->request->getPost('bilezik_cnc'); // CNC
        $tarih = date('Y-m-d H:i:s'); // Tarihi otomatik al

        // Modeli yükle
        $siparisModel = new SiparisModel();

        // Veritabanına kaydedilecek veri
        $data = [
            'bilezik_id' => $bilezik_id,       // Bilezik ID
            'agirlik' => $bilezik_gr,          // Gram
            'genislik' => $bilezik_genislik,   // Genişlik
            'tarih' => $tarih,                 // Tarih
            'cnc' => $bilezik_cnc,             // CNC
        ];

        // Veriyi kaydet
        if ($siparisModel->save($data)) {
            // Başarılı kayıttan sonra SiparisInceleController'a yönlendir
            $siparisId = $siparisModel->getInsertID();  // Yeni kaydedilen siparişin ID'sini al
            
            // Burada yönlendirmeyi istediğiniz gibi yapıyoruz
            return redirect()->to('admin/incele?siparis_id=' . $siparisId)
                             ->with('message', 'Sipariş başarıyla kaydedildi!');
        } else {
            // Hata mesajı
            return redirect()->back()->with('error', 'Bir hata oluştu, lütfen tekrar deneyin.');
        }
    }
}
