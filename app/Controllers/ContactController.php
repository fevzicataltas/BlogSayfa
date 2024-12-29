<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use MongoDB\Client;

class ContactController extends Controller
{
    public function index()
    {
        // İletişim sayfasını yükler
        return view('sayfalar/iletisim');
    }

    public function submitContact()
    {
        $mongoClient = new Client("mongodb+srv://catsltasfevzi:Fevzi2163@cluster0.cu6ip.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0");



       
        $database = $mongoClient->selectDatabase("siteniz"); // MongoDB'deki veritabanı adı
        $collection = $database->selectCollection("contact"); // MongoDB'deki koleksiyon adı

        // Formdan gelen verileri al
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        try {
            // Veriyi MongoDB'ye kaydet
            $collection->insertOne([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
                
            ]);

            // Başarı mesajı ile yönlendir
            return redirect()->to('/iletisim.php')->with('success', 'Mesaj başarıyla gönderildi.');
        } catch (\Exception $e) {
            // Hata mesajı ile yönlendir
            return redirect()->to('/iletisim.php')->with('error', 'Bir hata oluştu: ' . $e->getMessage());
        }
    }
}
