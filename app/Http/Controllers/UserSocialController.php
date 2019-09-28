<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserSocial;
use Socialite, Auth, Redirect, Session, URL;
use Illuminate\Support\Carbon;

class UserSocialController extends Controller
{
    public function redirectToProvider($provider)
    {
        if (!Session::has('pre_url')) {
            Session::put('pre_url', URL::previous());
        } else {
            if (URL::previous() != URL::to('login')) Session::put('pre_url', URL::previous());
        }
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser);
        return Redirect::to(Session::get('pre_url'));
    }

    public function findOrCreateUser($user, $provider)
    {
        $find = [
            'provider_id' => $user->id,
            'provider' => $provider,
        ];

        $account = UserSocial::where($find)->first();

        if ($account) {
            $account->user->avatar_url = $user->avatar;
            $account->user->updated_at = Carbon::now();
            $account->user->save();
            return $account->user;
        } else {
            $account = new UserSocial([
                'provider_id' => $user->id,
                'provider' => $provider
            ]);

            $authUser = User::where('email', $user->email)->first();

            if (!$authUser) {
                $authUser = new User;
                $authUser->email = $user->email;
                $authUser->name = $user->name;
                $authUser->password = bcrypt($user->email);
                $authUser->avatar_url = $user->avatar;
                $authUser->save();
            }
            else{
                $authUser->avatar_url = $user->avatar;
                $authUser->updated_at = Carbon::now();
                $authUser->save();
            }
            
            $account->user()->associate($authUser);
            $account->save();

            return $authUser;
        }
    }
}
