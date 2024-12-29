<?php

namespace App\Controllers;

class Iletisim extends BaseController
{
    public function index()
    {
        return view('tema/header').view('sayfalar/iletisim').view('tema/footer');
    }
}