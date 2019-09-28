<?php

namespace App\Http\Controllers;

use App\Config;
use App\Category;
use App\Post;
use App\User;
use App\Helpers\Pagination;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    private $CATEGORY_ITEM = 6;
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

    public function category($url, Request $request)
    {
        if ((Category::where('url', $url)->count() < 1)) {
            return view('errors.404');
        }
        $category = Category::where('url', $url)->first();
        
        $posts = Post::where('category_id', $category->id);

        if ($posts) {
            $page = $request->query('page') ? $request->query('page') : 1;

            $number = $posts->count();
            $totalPage = (int) ($number / $this->CATEGORY_ITEM) + (($number % $this->CATEGORY_ITEM) !== 0);
            $previousPage = ($page == 1) ? 1 : ($page - 1);
            $nextPage = ($page == $totalPage) ? $totalPage : ($page + 1);
            $listPages = Pagination::initArray($page, $totalPage);
            $posts = $posts->skip($this->CATEGORY_ITEM * ($page - 1))->take($this->CATEGORY_ITEM)->orderBy('created_at', 'DESC')->get();

            foreach ($posts as $post) {
                $time = Carbon::parse($post->created_at);
                $post->day = $time->format('d');
                $post->month = $time->format('m');
                $post->year = $time->format('Y');
            }

            $currUrl = explode('?', $_SERVER['REQUEST_URI'])[0];

            return view('category')->with([
                'category' => $category,
                'posts' => $posts,
                'totalPage' => $totalPage,
                'previousPage' => $previousPage,
                'nextPage' => $nextPage,
                'listPages' => $listPages,
                'currPage' => $page,
                'currUrl' => $currUrl,
            ]);
        }
    }


    public function post($url)
    {
        if ((Post::where('url', $url)->count() < 1)) {
            return view('errors.404');
        }
        $post = Post::where('url', $url)->first();
        $post->views++;
        $post->save();

        if (User::find($post->user_id)) {
            $post->user_name = User::find($post->user_id)->name;
            $post->keyw = explode(',', $post->keywords);
        }

        $orther = Post::where('category_id', $post->category_id)->inRandomOrder()->get()->take(5);
        foreach ($orther as $orth) {
            if (User::find($orth->user_id)) {
                $orth->user_name = User::find($orth->user_id)->name;
            }
            $orth->datetime = Carbon::parse($orth->created_at)->format('d/m/Y');
        }
        $category = Category::find($post->category_id);
        return view('post')->with([
            'post' => $post,
            'category' => $category,
            'orther' => $orther
        ]);
    }
}
