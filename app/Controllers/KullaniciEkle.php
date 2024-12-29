<?php

namespace App\Controllers;

use App\Models\UserModel;

class KullaniciEkle extends BaseController
{
    // Kullanıcı Ekleme Sayfasını Gösterme
    public function index()
    {
        return view('tema/header') 
            . view('sayfalar/kullanici-ekle')  // Kullanıcı ekleme formunu gösterir
            . view('tema/footer');
    }

    // Kullanıcı Ekleme İşlemi
    public function addUser()
    {
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Kullanıcı adı kontrolü
        if ($userModel->where('username', $username)->first()) {
            return redirect()->to('/admin/kullanici-ekle')->with('error', 'Bu kullanıcı adı zaten mevcut.');
        }

        // Kullanıcıyı ekle
        if ($userModel->addUser($username, $password)) {
            return redirect()->to('/admin/kullanici-listesi')->with('success', 'Kullanıcı başarıyla eklendi.');
        } else {
            return redirect()->to('/admin/kullanici-ekle')->with('error', 'Kullanıcı eklenemedi.');
        }
    }
}