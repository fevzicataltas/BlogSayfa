<?php

namespace App\Controllers;

use App\Models\AboutPageModel;

class EditAbout extends BaseController{

    // Hakkında Sayfasını Düzenleme Formu
    public function edit_about()
    {
        $aboutModel = new AboutPageModel();
        $about = $aboutModel->find(1); // Hakkında sayfası için ID 1 kullanıyoruz

        if ($about) {
            return view('tema/header')
                . view('sayfalar/edit_about', ['about' => $about]) // Hakkında formunu view'a gönder
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
            return redirect()->to('/admin/edit-about')->with('success', 'Hakkında sayfası başarıyla güncellendi.');
        } else {
            return redirect()->to('/admin/edit-about')->with('error', 'Hakkında sayfası güncellenemedi.');
        }
    }







}