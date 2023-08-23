<?php

namespace App\Http\Controllers;

use App\Library\GoogleClient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if (\session()->has('user')) {
            //dd(session()->get('user'));
        }

        return view('home');
    }
}
