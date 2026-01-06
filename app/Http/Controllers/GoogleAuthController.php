<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;



class GoogleAuthController extends Controller
{
    // Redirect to Google
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google callback
    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        $user = UserDetail::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar()
            ]
        );

        Auth::login($user);

        return redirect('/users');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
