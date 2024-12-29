<?php

namespace App\Controllers;

use MongoDB;// composerla yüklendi
//genel dokümantasyon --> https://www.mongodb.com/docs/php-library/current/get-started/
//veri okuma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/read/
//veri yazma için dokümantasyon --> https://www.mongodb.com/docs/php-library/current/write/

//mongo kurulum için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-setup/
//ek bilgi için dokümantasyon --> https://www.mongodb.com/developer/languages/php/php-crud/

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

require 'vendor/autoload_classmap.php'; // Composer ile MongoDB kütüphanesi yüklenmiş olmalı

// Kullanıcı bilgileri
$kul_adi = "catsltasfevzi";
$sifre = "Fevzi2163.";
$adres = "cluster0.cu6ip.mongodb.net";
$veritabani = "siteniz";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    try {
        $client = new MongoDB\Client("mongodb+srv://$kul_adi:$sifre@$adres");
        $koleksiyon = $client->selectCollection($veritabani, 'comments');

        $sonuc = $koleksiyon->insertOne([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'created_at' => new MongoDB\BSON\UTCDateTime()
        ]);

        echo "Form başarıyla gönderildi! ID: " . $sonuc->getInsertedId();
    } catch (Exception $e) {
        echo "Bir hata oluştu: " . $e->getMessage();
    }
} else {
    echo "Form ile gelen veri yok.";
}
}
