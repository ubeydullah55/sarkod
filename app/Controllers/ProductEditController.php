<?php

namespace App\Controllers;

use App\Models\BilezikModel;
use App\Models\UsersModel;
use App\Models\SiparisModel;

class ProductEditController extends BaseController
{
    
    public function edit($id)
    {
        // $id parametresini kullanarak veri işlemi yapabilirsiniz
        $model = new BilezikModel();
        $bilezik = $model->find($id);
        // View'e bilezik bilgilerini gönderebilirsiniz
        return view('editProduct', ['bilezik' => $bilezik]);
    }
    public function editSave($id)
    {
        $bilezikModel = new BilezikModel();
    
        // Güncellenecek bileziğin mevcut verisini al
        $bilezik = $bilezikModel->find($id);
        if (!$bilezik) {
            return redirect()->back()->with('error', 'Bilezik bulunamadı.');
        }
    
        // Formdan gelen verileri al
        $bilezik_ad = $this->request->getPost('bilezik_ad');
        $bilezik_bas_gr = $this->request->getPost('bilezik_bas_gr');
        $bilezik_bit_gr = $this->request->getPost('bilezik_bit_gr');
        $baslangic_bilezikgenislik = $this->request->getPost('baslangic_bilezikgenislik');
        $bitis_bilezikgenislik = $this->request->getPost('bitis_bilezikgenislik');
        $bilezik_cnc = $this->request->getPost('bilezik_cnc');
    
        // Resim dosyasını al
        $resim = $this->request->getFile('bilezik_resim');
        $resimDosyasi = $bilezik['resim']; // Varsayılan olarak eski resmi kullan
    
        // Eğer yeni resim yüklenmişse işle
        if ($resim && $resim->isValid() && !$resim->hasMoved()) {
            $randomName = bin2hex(random_bytes(5)) . '.' . $resim->getExtension();
            $resim->move(FCPATH . 'products', $randomName);
    
            // Eski resmi sil (Eğer varsayılan resim değilse)
            if (!empty($bilezik['resim']) && file_exists(FCPATH . 'products/' . $bilezik['resim'])) {
                unlink(FCPATH . 'products/' . $bilezik['resim']);
            }
    
            $resimDosyasi = $randomName; // Yeni resmi kaydet
        }
    
        // Güncellenmiş veriler
        $data = [
            'name'     => $bilezik_ad,
            'bas_gr'   => $bilezik_bas_gr,
            'bit_gr'   => $bilezik_bit_gr,
            'bas_gen'  => $baslangic_bilezikgenislik,
            'bit_gen'  => $bitis_bilezikgenislik,
            'cnc'      => $bilezik_cnc,
            'resim'    => $resimDosyasi
        ];
    
        // Veritabanında güncelleme işlemi
        if ($bilezikModel->update($id, $data)) {
            return redirect()->to('/admin/yeniModelListele')->with('message', 'Bilezik başarıyla güncellendi.');
        } else {
            return redirect()->back()->with('error', 'Güncelleme sırasında bir hata oluştu, lütfen tekrar deneyin.');
        }
    }
    
    

}
