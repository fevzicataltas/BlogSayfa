<?php

namespace App\Controllers;

use App\Models\UserModel;

class Giris extends BaseController
{
    public function index()
    {
        $data = []; // Görünüme gönderilecek veriler

        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new UserModel();
            $user = $userModel->where('username', $username)->first();

            if ($user && password_verify($password, $user['password'])) {
                return redirect()->to('/admin');
            } else {
                $data['error'] = 'Geçersiz kullanıcı adı veya şifre.';
            }
        }

        return view('tema/header')
            . view('sayfalar/giris', $data)
            . view('tema/footer');
    }
}
