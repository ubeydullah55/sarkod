<?php

namespace App\Controllers;

use App\Models\SiparisDetayModel;

class BilezikListeleController extends BaseController
{
    public function index()
    {
 
        $url = "https://sarkod.com.tr/bilezikListApi";
      //  $url = "http://localhost/sarkod/bilezikListApi";
        $json = file_get_contents($url);
        $data = json_decode($json, true); // JSON verisini PHP dizisine çevir
       
        if (!$data) {
            $data = [];
        }


        // Veriyi view'e gönder
        return view('bilezikListele', ['bilezikler' => $data]);

    }
}
