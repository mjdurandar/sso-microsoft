<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class MicrosoftAuthController extends Controller
{
    public function redirect() 
    {
        return Socialite::driver('azure')->redirect();
    }

    public function callbackMicrosoft()
    {
        try {
            $microsoftUser = Socialite::driver('azure')->user();
            
            // Check if the user already exists in the database
            $user = User::where('email', $microsoftUser->getEmail())->first();
    
            if (!$user) {
                // Create a new user if one doesn't exist
                $user = User::create([
                    'name' => $microsoftUser->getName(),
                    'email' => $microsoftUser->getEmail(),
                    'microsoft_id' => $microsoftUser->getId(),
                ]);
            }
    
            // Log in the user
            Auth::login($user);
    
            return redirect()->intended('/customers');
        } catch (\Exception $e) {
            // Handle any exceptions
            dd($e->getMessage());
        }
    }
    
}
