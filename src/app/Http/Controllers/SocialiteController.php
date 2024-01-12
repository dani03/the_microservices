<?php

namespace App\Http\Controllers;

use App\Enums\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{


    public function redirect(Provider $provider)
    {
        // dd($provider->value);
        $provider = $provider->value;

        return Socialite::driver($provider)->redirect();
    }
    public function callback(Provider $provider)
    {

        //on teste si l'utilisateur à bien accepter  l'authentification

        try {

            $user = Socialite::driver($provider->value)->user();
            $newUser = User::firstOrCreate([
                'email' => $user->getEmail(),
                'lastname' => $user->getNickname(),
                'name' => $user->getNickname(),
                'password' =>  Hash::make($user->email),
                'role_id' =>  2
            ]);

            Auth::login($newUser);
            return redirect()->to('/');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
