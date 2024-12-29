<?php

namespace App\Controllers;

class Ornekyazilar extends BaseController
{
    public function index()
    {
        return view('tema/header') . view('sayfalar/ornekyazi') . view('tema/footer');
    }
}
