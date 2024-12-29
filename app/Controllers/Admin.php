<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\AboutPageModel;

class Admin extends BaseController
{
    // Admin Paneli Anasayfası
    public function index()
    {
        return view('tema/header')
            . view('sayfalar/admin', ['username' => session()->get('username')])
            . view('tema/footer');
    }

    // Kullanıcı Listeleme
    public function kullanici_listesi()
    {
        $userModel = new UserModel();
        $users = $userModel->findAll(); // Veritabanındaki tüm kullanıcıları al

        return view('tema/header')
            . view('sayfalar/kullanici_listesi', ['users' => $users]) // Kullanıcıları view'a gönder
            . view('tema/footer');
    }

    // Yeni Kullanıcı Ekleme
    public function kullanici_ekle()
    {
        // Kullanıcı bilgilerini POST verisi olarak al
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // UserModel'ı yükle
        $userModel = new UserModel();

        // Aynı kullanıcı adıyla var mı kontrol et
        if ($userModel->where('username', $username)->first()) {
            return redirect()->to('/admin')->with('error', 'Bu kullanıcı adı zaten mevcut.');
        }

        // Yeni kullanıcı ekleme işlemi
        if ($userModel->addUser($username, $password)) {
            return redirect()->to('/admin/kullanici-listesi')->with('success', 'Kullanıcı başarıyla eklendi.');
        } else {
            return redirect()->to('/admin')->with('error', 'Kullanıcı eklenemedi.');
        }
    }

    // Kullanıcı Silme
    public function kullanici_sil($id)
    {
        $userModel = new UserModel();

        // Kullanıcıyı veritabanından sil
        if ($userModel->delete($id)) {
            return redirect()->to('/admin/kullanici-listesi')->with('success', 'Kullanıcı başarıyla silindi.');
        } else {
            return redirect()->to('/admin/kullanici-listesi')->with('error', 'Kullanıcı silinemedi.');
        }
    }

    // Kullanıcı Düzenleme
    public function kullanici_duzenle($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        // Kullanıcı bulunursa düzenleme formunu göster
        if ($user) {
            return view('tema/header')
                . view('sayfalar/kullanici_duzenle', ['user' => $user])
                . view('tema/footer');
        } else {
            return redirect()->to('/admin/kullanici-listesi')->with('error', 'Kullanıcı bulunamadı.');
        }
    }

    // Kullanıcıyı Güncelleme
    public function kullanici_guncelle($id)
    {
        $userModel = new UserModel();

        // Kullanıcıdan gelen POST verilerini al
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Güncellenebilir veri dizisini oluştur
        $data = [
            'username' => $username,
        ];

        // Şifreyi de güncellemek istiyorsa, hashleyip veri dizisine ekle
        if ($password) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        // Veriyi güncelle
        if ($userModel->update($id, $data)) {
            return redirect()->to('/admin/kullanici-listesi')->with('success', 'Kullanıcı başarıyla güncellendi.');
        } else {
            return redirect()->to('/admin/kullanici-listesi')->with('error', 'Kullanıcı güncellenemedi.');
        }
    }

    // Hakkında Sayfasını Düzenleme Formu
    public function edit_about()
    {
        $aboutModel = new AboutPageModel();
        $about = $aboutModel->find(1); // ID 1 ile Hakkında sayfasını bul
    
        if ($about) {
            return view('tema/header')
                . view('sayfalar/edit_about', ['about' => $about]) // View'ı doğru yolda çağır
                . view('tema/footer');
        } else {
            return redirect()->to('/admin')->with('error', 'Hakkında sayfası bulunamadı.');
        }
    }

    // Hakkında Sayfasını Güncelleme
    public function update_about()
    {
        $content = $this->request->getPost('content'); // Formdan gelen içerik
    
        $aboutModel = new AboutPageModel();
    
        // Hakkında sayfasını güncelle
        if ($aboutModel->update(1, ['content' => $content])) {
            // Güncelleme başarılıysa, sayfayı tekrar yükle
            return redirect()->to('/admin/edit-about')->with('success', 'Hakkında sayfası başarıyla güncellendi.');
        } else {
            return redirect()->to('/admin/edit-about')->with('error', 'Hakkında sayfası güncellenemedi.');
        }
    }
    
}

