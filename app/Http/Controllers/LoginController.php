<?php

namespace App\Http\Controllers;

use App\Library\Authenticate;
use App\Library\GoogleClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $googleClient = new GoogleClient;
        $googleClient->init();

        if ($googleClient->authenticated()) {
            $auth = new Authenticate();
            return $auth->authGoogle($googleClient->getData());
        }

        return \view('login.login', [
            'authUrl' => $googleClient->generateLink()
        ]);
    }

    public function register()
    {
        return view('login.register');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return \redirect()->route('login.index');
    }
}
