<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Socialite;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Sect;
use App\Config;
use App\Post;
use App\Category;
use App\User;
use App\Role;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    public function boot()
    {
        View::composer('*', function ($view) {
            $user_now = Auth::user();
            if (Auth::check() && Role::find($user_now->role_id)) {
                $user_now->role_name = Role::find($user_now->role_id)->name;
            }
            $sects_all = Sect::all();
            $categories_all = Category::all();
            $posts_all = Post::all();
            $users_all = User::all();
            $maintenance = Config::where('name', 'maintenance')->first();
            $facebook = Config::where('name', 'facebook')->first();
            $youtube = Config::where('name', 'youtube')->first();
            $messenger = Config::where('name', 'messenger')->first();
            $view->with([
                'user_now' => $user_now,
                'sects_all' => $sects_all,
                'maintenance' => $maintenance,
                'facebook' => $facebook,
                'youtube' => $youtube,
                'messenger' => $messenger,
                'categories_all' => $categories_all,
                'posts_all' => $posts_all,
                'users_all' => $users_all,
            ]);
        });
    }
}
