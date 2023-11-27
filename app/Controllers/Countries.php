<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Countries extends BaseController
{
    public function index() {
        return view('templates/header').view('templates/index').view('templates/Home').view('templates/footer');
    }

    public function showCountry1() { 
        $data ['country'] = 'Home';
        $data ['selected'] = 'Home';
        return view('templates/header', $data).view('templates/index').view('templates/Home').view('templates/footer');
    }

    public function showCountry2($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'Spain';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry3($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'France';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry4($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'Germany';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry5($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'Italy';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry6($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'United Kingdom';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry7($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'Portugal';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry8($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'Netherlands';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry9($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'Sweden';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry10($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'Switzerland';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }

    public function showCountry11($country) { 
        $data ['country'] = $country;
        $data ['selected'] = 'Norway';
        return view('templates/header', $data).view('templates/index').view('templates/'.$country).view('templates/footer');
    }
}