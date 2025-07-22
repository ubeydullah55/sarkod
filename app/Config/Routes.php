<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('bilezikListApi', 'ModelListeController::bilezikListApi');
$routes->group('admin', function($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->get('anasayfa', 'HomePageController::index');

    $routes->post('login/submit', 'LoginController::submit');
    $routes->get('logout', 'LoginController::logout');
    $routes->get('login', 'LoginController::index');
    $routes->get('incele', 'SiparisInceleController::index');
    $routes->get('yeniModelListele', 'ModelListeController::index');
    $routes->post('yenikayitcopy', 'SiparisCopyKayitController::index');
    $routes->post('copykayit', 'SiparisCopyKayitController::saveCopyBilezik');
    $routes->get('yeniurungir', 'YeniUrunGirController::index');
    $routes->post('bileziksecim', 'YeniUrunGirController::yeniSiparis');
    $routes->post('yeniSiparisSave', 'YeniUrunGirController::yeniSiparisSave');
    $routes->get('yeniModel', 'YeniModelController::index');
    $routes->get('edit/(:num)', 'ProductEditController::edit/$1');
    $routes->get('delete/(:num)', 'ProductEditController::delete/$1');
    $routes->post('yeniModelSave', 'YeniModelController::yeniModelSave');
    $routes->post('productEditSave/(:num)', 'ProductEditController::editSave/$1');

    $routes->get('siparisBarkod', 'SiparisBarkodController::index');
    $routes->post('siparisbarkodIncele', 'SiparisBarkodController::incele');
    $routes->get('siparisOlustur', 'SiparisOlusturController::index');
    $routes->post('siparisOlusturSave', 'SiparisOlusturController::yeniModelSave');
    $routes->get('coksatanlarListele', 'CokSatanlarController::index');
    $routes->post('trendEkle', 'CokSatanlarController::ekleTrend');
$routes->post('trendSil', 'CokSatanlarController::trendSil');
$routes->post('trendSiraGuncelle', 'CokSatanlarController::trendSiraGuncelle');

    
});

$routes->get('bilezikListele', 'BilezikListeleController::index');
$routes->get('/', 'ProductViewController::index');




