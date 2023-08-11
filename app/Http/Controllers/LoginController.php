<?php

namespace App\Http\Controllers;

use App\Library\GoogleClient;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $googleClient = new GoogleClient;
        $googleClient->init();

        return \view('login.login', [
            'authUrl' => $googleClient->generateLink()
        ]);
    }

    public function register()
    {
        return view('login.register');
    }
}
