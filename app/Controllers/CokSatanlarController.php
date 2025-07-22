<?php

namespace App\Controllers;

use App\Models\BilezikModel;
use App\Models\UsersModel;
use App\Models\SiparisModel;

class CokSatanlarController extends BaseController
{
    
public function index(): string
{
    if (!$this->session->get('isLoggedIn')) {
        return view('login');
    }

    $bilezikModel = new BilezikModel();

    // Tüm bilezikler (select için)
    $bilezikler = $bilezikModel->findAll();

    // Sıralanmış trend olanlar (sıra > 0)
    $trendler = $bilezikModel
        ->where('sira >', 0)
        ->orderBy('sira', 'ASC')
        ->findAll();

    return view('cokSatanlar', [
        'bilezikler' => $bilezikler,
        'trendler'   => $trendler
    ]);
}



public function ekleTrend()
{
    $bilezikID = $this->request->getPost('bilezik_id');

    if (!$bilezikID) {
        return $this->response->setStatusCode(400)->setJSON(['error' => 'Geçersiz istek']);
    }

    $bilezikModel = new \App\Models\BilezikModel();

    // Bu bilezik zaten trendde mi?
    $varMi = $bilezikModel->where('id', $bilezikID)->where('sira >', 0)->first();
    if ($varMi) {
        return $this->response->setStatusCode(409)->setJSON(['error' => 'Zaten trend listesinde']);
    }

    // En son sırayı al
    $sonTrend = $bilezikModel->where('sira >', 0)->orderBy('sira', 'DESC')->first();
    $yeniSira = $sonTrend ? $sonTrend['sira'] + 1 : 1;

    // Sıralamayı güncelle
    $bilezikModel->update($bilezikID, ['sira' => $yeniSira]);

    return $this->response->setStatusCode(200)->setJSON(['success' => true]);
}


// Silme metodu
public function trendSil()
{
    $id = $this->request->getPost('id');
    if (!$id) {
        return $this->response->setJSON(['success' => false]);
    }

    $bilezikModel = new \App\Models\BilezikModel();

    // sira=0 yaparak trend listesinden çıkar
    $bilezikModel->update($id, ['sira' => 0]);

    return $this->response->setJSON(['success' => true]);
}

// Sıra güncelleme metodu
public function trendSiraGuncelle()
{
    $data = $this->request->getJSON(true);

    if (!$data || !is_array($data)) {
        return $this->response->setJSON(['success' => false]);
    }

    $bilezikModel = new \App\Models\BilezikModel();

    foreach ($data as $item) {
        $bilezikModel->update($item['id'], ['sira' => $item['sira']]);
    }

    return $this->response->setJSON(['success' => true]);
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
                'resim'        => $bilezik['resim']
            ];
        }      
        return json_encode($customData);
    }

    

}
