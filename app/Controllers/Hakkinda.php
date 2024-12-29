<?php

namespace App\Controllers;

class Hakkinda extends BaseController
{
    public function index()
    {
        return view('tema/header') . view('sayfalar/hakkinda') . view('tema/footer');
    }
}
