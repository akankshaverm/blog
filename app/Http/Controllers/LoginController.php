<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver("google")->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver("google")->stateless()->user();

            //Logic for user authentication
            $user = User::where("email", $googleUser->getEmail())->first();

            if ($user) {
                //User exists,log them in
                Auth::login($user);
            } else {
                //User doesn't exist,create a new user
                $user = User::create([
                    "name" => $googleUser->getName(),
                    "email" => $googleUser->getEmail(),
                    "password" => "12345678"

                ]);
                //Log the new user in
                Auth::login($user);
            }
            return redirect()->intended("homepage");
        } catch (\Exception $e) {
            //Handle exception for example log the error
            return redirect()->route("login")->with("error", "An error occurred while trying to authenticate with Google.Please try agaon later.");
        }
    }
    public function auth_logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
