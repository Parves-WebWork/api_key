<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FacebookController extends Controller
{
    public function loginUsingFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        try {
            $user = Socialite::driver('facebook')->user();

            $saveUser = User::updateOrCreate(
                [
                    'facebook_id' => $user->getId(),
                ],
                [
                    'name'     => $user->getName(),
                    'email'    => $user->getEmail(),
                    'password' => Hash::make($user->getName() . '@' . $user->getId()), // Generating a temporary password
                    'api_token' => Str::random(60), // Generating an API token for the user
                ]
            );

            Auth::loginUsingId($saveUser->id);

            return redirect()->route('dashboard')->with('token', $saveUser->api_token);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
