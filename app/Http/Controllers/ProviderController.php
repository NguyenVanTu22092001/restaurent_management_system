<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProviderController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        try {
            $SocialUser = Socialite::driver($provider)->user();
            if (User::where('email', $SocialUser->getEmail)->exists()) {
                redirect('/login')->withErrors(['email' => 'This email uses different method to login.']);
            }
            $user = User::where([
                'provider' => $provider,
                'provider_id' => $SocialUser->id,
            ])->first();
            if (!$user) {
                $user = User::create([
                    'name' =>  $SocialUser->name,
                    'email' => $SocialUser->getEmail(),
                    'username' => User::generateUserName($SocialUser->getNickname()),
                    'provider' => $provider,
                    'provider_id' => $SocialUser->getId(),
                    'provider_token' => $SocialUser->token,
                    'email_verified_at' => now()
                ]);
            }
            Auth::login($user);
            $user->addRole('user');
            return redirect('/');
        } catch (Exception $e) {
            return redirect('/login');
        }
        // $SocialUser = Socialite::driver($provider)->user();
        // dd($SocialUser);
    }
}
