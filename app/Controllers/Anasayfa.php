<?php

namespace App\Controllers;

class Anasayfa extends BaseController
{
    public function index()
    {
        return view('tema/header').view('sayfalar/anasayfa').view('tema/footer');
    }
}
