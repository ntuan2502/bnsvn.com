<?php

namespace App\Http\Controllers;

use App\Config;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $download = Config::where('name', 'download')->first();
        $version = Config::where('name', 'version')->first();
        $name_version = Config::where('name', 'name_version')->first();
        $update_time = Config::where('name', 'update_time')->first();
        $heading = Config::where('name', 'heading')->first();
        $mod_32bit = Config::where('name', 'mod_32bit')->first();
        $mod_64bit = Config::where('name', 'mod_64bit')->first();
        $background = Config::where('name', 'background')->first();
        $posts = Post::orderBy('created_at', 'DESC')->get()->take(3);
        foreach ($posts as $post) {
            $time = Carbon::parse($post->created_at);
            $post->day = $time->format('d');
            $post->month = $time->format('m');
            $post->year = $time->format('Y');
        }
        return view('index')->with([
            'download' => $download,
            'version' => $version,
            'name_version' => $name_version,
            'update_time' => $update_time,
            'heading' => $heading,
            'mod_32bit' => $mod_32bit,
            'mod_64bit' => $mod_64bit,
            'background' => $background,
            'posts' => $posts,
        ]);
    }

    public function signoutPOST()
    {
        Auth::logout();
        return redirect()->back();
    }
}
