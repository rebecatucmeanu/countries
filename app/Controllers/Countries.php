<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Countries extends Controller
{
    public function index() {
        return view('templates/header').view('templates/index').view('templates/footer');
    }

    public function showCountry($country) { 
        $data ['country'] = $country;
        return view('templates/header', $data).view('templates/index').view('templates/footer');
    }
}