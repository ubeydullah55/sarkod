<?php


namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SiparisModel;
use App\Models\BilezikModel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class YeniModelController extends BaseController
{
    public function index(): string
    {
        if (!$this->session->get('isLoggedIn')) {
            return view('login'); // Login sayfasına yönlendir
        }
        
       
        return view('yenimodel');
    }

    public function yeniModelSave()
    {
        // Formdan gelen verileri al
        $bilezik_ad = $this->request->getPost('bilezik_ad');
        $bilezik_bas_gr = $this->request->getPost('bilezik_bas_gr');
        $bilezik_bit_gr = $this->request->getPost('bilezik_bit_gr');
        $baslangic_bilezikgenislik = $this->request->getPost('baslangic_bilezikgenislik');
        $bitis_bilezikgenislik = $this->request->getPost('bitis_bilezikgenislik');
        $bilezik_cnc = $this->request->getPost('bilezik_cnc');
        
        // Resim dosyasını al
        $resim = $this->request->getFile('bilezik_resim');
    
        // Eğer resim dosyası yüklenmişse
        if ($resim && $resim->isValid() && !$resim->hasMoved()) {
            // Rastgele bir dosya adı oluştur (10 karakter uzunluğunda, harf ve rakamlardan oluşan)
            $randomName = bin2hex(random_bytes(5)) . '.' . $resim->getExtension();
            
            // Dosyayı kök dizindeki "products" klasörüne kaydet
            $resim->move(FCPATH . 'products', $randomName);
            $resimDosyasi = $randomName; // Yüklenen dosyanın yeni adı
        } else {
            // Eğer resim yüklenmemişse, varsayılan bir resim kullan
            $resimDosyasi = 'default-bilezik.jpg';
        }
    
        // Bilezik modelini yükle
        $bilezikModel = new BilezikModel();
    
        // Veritabanı kaydı için veri
        $data = [
            'name' => $bilezik_ad,
            'bas_gr' => $bilezik_bas_gr,  // Başlangıç gramajı
            'bit_gr' => $bilezik_bit_gr,   // Bitiş gramajı
            'bas_gen' => $baslangic_bilezikgenislik, // Başlangıç genişliği
            'bit_gen' => $bitis_bilezikgenislik, // Bitiş genişliği
            'cnc' => $bilezik_cnc, // CNC
            'resim' => $resimDosyasi  // Yüklenen resim dosyasının adı
        ];
    
        // Kaydetme işlemi
        if ($bilezikModel->save($data)) {
            return redirect()->to('/admin/yeniurungir')->with('message', 'Yeni Model başarıyla kaydedildi!');
        } else {
            return redirect()->back()->with('error', 'Bir hata oluştu, lütfen tekrar deneyin.');
        }
    }
    
    

    
}
