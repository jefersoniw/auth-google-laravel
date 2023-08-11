<?php

namespace App\Library;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Authenticate extends Model
{
    public function authGoogle($data)
    {
        $user = new User();
        $userFound = $user->where('email', $data->email)->one();
        if (!$userFound) {
            $user->create([
                'name' => $data->givenName . ' ' . $data->familyName,
                'email' => $data->email,
            ]);
        }

        \session()->put('user', $userFound);
        \session()->put('auth', true);

        return \redirect()->route('home.index');
    }

    public function logout()
    {
        unset($_SESSION['user'], $_SESSION['auth']);
    }
}
