<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 * 
 * 
 */
$routes->get('/', 'Anasayfa::index');
$routes->get('hakkinda.php', 'Hakkinda::index');
$routes->get('iletisim.php', 'Iletisim::index');
$routes->get('ornekyazi.php', 'Ornekyazilar::index');
$routes->get('giris.php', 'Giris::index');



$routes->post('/giris', 'Giris::index'); // Form verilerini işlemek için
$routes->get('/admin', 'Admin::index');
$routes->get('admin/kullanici-ekle', 'KullaniciEkle::index');
$routes->get('/admin', 'Admin::index');


$routes->get('/admin/kullanici-listesi', 'Admin::kullanici_listesi');

$routes->get('/admin/kullanici-sil/(:num)', 'Admin::kullanici_sil/$1');
$routes->get('/admin/kullanici-duzenle/(:num)', 'Admin::kullanici_duzenle/$1');
$routes->post('/admin/kullanici-guncelle/(:num)', 'Admin::kullanici_guncelle/$1');

// routes.php
$routes->get('admin/kullanici-ekle', 'KullaniciEkle::index'); // GET isteği, kullanıcı ekleme sayfasını göster
$routes->post('admin/kullanici-ekle', 'KullaniciEkle::addUser'); // POST isteği, kullanıcı ekleme işlemini yap



// routes.php




// app/Config/Routes.php

$routes->get('/admin/edit-about', 'Admin::edit_about');  // Edit About sayfasına yönlendiren route
$routes->post('/admin/update-about', 'Admin::update_about');  // Hakkında sayfasını güncelleyen post route'u


$routes->get('/iletisim', 'ContactController::index'); // İletişim sayfasını yükler
$routes->post('contact/submit', 'ContactController::submitContact');















































