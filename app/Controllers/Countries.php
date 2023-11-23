<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Countries extends Controller
{
    public function index() {
        return view('templates/header').view('templates/index').view('templates/footer');
    }
}