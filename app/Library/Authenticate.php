<?php

namespace App\Library;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authenticate extends Model
{
    public function authGoogle($data)
    {
        $user = new User();
        $userFound = $user->where('email', $data->email)->first();
        $passwordDefault = '12345678';

        if (!$userFound) {
            $user->create([
                'name' => $data->givenName . ' ' . $data->familyName,
                'email' => $data->email,
                'password' => Hash::make($passwordDefault),
            ]);
        }

        \session()->put('user', $userFound);
        \session()->put('auth', true);

        return \redirect()->route('home.index');
    }
}
