<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

   
        // ...
    
        public function callBackGoogle()
        {
            try {
                $user = Socialite::driver('google')->user();
    
                $findUser = User::where('google_id', $user->id)->first();
    
                if ($findUser) {
                    // If the user exists, generate a new token and store it
                    $token = $findUser->createToken('google-token')->plainTextToken;
    
                    Auth::login($findUser);
                    // Redirect to the dashboard with the token as a query parameter
                    return redirect()->route('dashboard', ['token' => $token]);
                } else {
                    $newUser = User::create([
                        'name' => $user->name,
                        'email' => $user->email,
                        'google_id' => $user->id,
                        'password' => Hash::make(Str::random(24)) // Generate a random secure password
                    ]);
    
                    // Generate a token for the new user and store it
                    $token = $newUser->createToken('google-token')->plainTextToken;
    
                    Auth::login($newUser);
                    // Redirect to the dashboard with the token as a query parameter
                    return redirect()->route('dashboard', ['token' => $token]);
                }
            } catch (\Throwable $th) {
                // Handle exceptions gracefully
                return redirect()->route('login.google')->with('error', 'Failed to login with Google. Please try again.');
            }
        }
    }

