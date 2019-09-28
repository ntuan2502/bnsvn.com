<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sect;
use App\Config;
use App\Post;
use App\Category;
use App\User;
use App\Helpers\Local;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard')->with([]);
    }

    public function baiviet()
    {
        $posts = Post::all();
        $categories = Category::all();
        foreach ($posts as $post) {
            if (User::find($post->user_id)) {
                $post->user_name = User::find($post->user_id)->name;
            }
            if (Category::find($post->category_id)) {
                $post->category_name = Category::find($post->category_id)->name;
            }
        }
        return view('admin.baiviet.danhsach')->with([
            'posts' => $posts,
            'categories' => $categories
        ]);
    }

    public function thembaiviet()
    {
        return view('admin.baiviet.them')->with([]);
    }

    public function thembaivietPOST(Request $request)
    {
        $post = new Post;
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;
        $post->name = $request->name;
        $post->url = $request->url;
        $post->abstract = $request->abstract;
        if($request->image){
            Local::delete($post->image_url);
            $post->image_url = Local::uploadRandom($request->image);
        }
        $post->keywords = $request->keywords;
        $post->content = $request->content;
        $post->save();

        return redirect('/admin/baiviet')->with([
            'success' => 'Thêm bài viết thành công!',
        ]);
    }

    public function suabaiviet(Request $request, $id)
    {
        $post = Post::find($id);
        return view('admin.baiviet.sua')->with([
            'post' => $post,
        ]);
    }

    public function suabaivietPOST(Request $request, $id)
    {
        $post = Post::find($id);

        $post->category_id = $request->category;
        $post->name = $request->name;
        $post->url = $request->url;
        $post->abstract = $request->abstract;
        if($request->image){
            Local::delete($post->image_url);
            $post->image_url = Local::uploadRandom($request->image);
        }
        $post->keywords = $request->keywords;
        $post->content = $request->content;
        $post->save();

        return redirect('/admin/baiviet')->with([
            'success' => 'Sửa bài viết thành công!',
        ]);
    }

    public function xoabaiviet($id)
    {
        $post = Post::find($id);
        Local::delete($post->image_url);
        $post->delete();
        return redirect()->back()->with([
            'success' => 'Xóa bài viết thành công!',
        ]);
    }

    public function hephai()
    {
        return view('admin.hephai.danhsach')->with([]);
    }

    public function themhephai()
    {
        return view('admin.hephai.them')->with([]);
    }

    public function themhephaiPOST(Request $request)
    {
        $hephai = new Sect;

        $hephai->name = $request->name;
        $hephai->abstract = $request->abstract;
        $hephai->element = $request->element;
        $hephai->icon_url = $request->icon_url;
        $hephai->save();

        return redirect()->back()->with([
            'success' => 'Thêm hệ phái thành công!',
        ]);
    }

    public function suahephai($id)
    {
        $hephai = Sect::find($id);
        return view('admin.hephai.sua')->with([
            'hephai' => $hephai,
        ]);
    }

    public function suahephaiPOST(Request $request, $id)
    {
        $hephai = Sect::find($id);

        $hephai->name = $request->name;
        $hephai->abstract = $request->abstract;
        $hephai->element = $request->element;
        $hephai->icon_url = $request->icon_url;
        $hephai->save();

        return redirect()->back()->with([
            'success' => 'Sửa hệ phái thành công!',
        ]);
    }

    public function xoahephai($id)
    {
        $hephai = Sect::find($id);
        $hephai->delete();
        return redirect()->back()->with([]);
    }

    public function user()
    {
        return view('admin.user.danhsach')->with([]);
    }

    public function upload()
    {
        return view('admin.upload.index')->with([]);
    }
    public function uploadPOST(Request $request)
    {
        if ($request->image) {
            Local::upload($request->image);
            return redirect()->back();
        }
        return redirect('/');
    }

    public function setting()
    {
        $download = Config::where('name', 'download')->first();
        $version = Config::where('name', 'version')->first();
        $name_version = Config::where('name', 'name_version')->first();
        $update_time = Config::where('name', 'update_time')->first();
        $heading = Config::where('name', 'heading')->first();
        $mod_32bit = Config::where('name', 'mod_32bit')->first();
        $mod_64bit = Config::where('name', 'mod_64bit')->first();
        $background = Config::where('name', 'background')->first();
        return view('admin.setting')->with([
            'download' => $download,
            'version' => $version,
            'name_version' => $name_version,
            'update_time' => $update_time,
            'heading' => $heading,
            'mod_32bit' => $mod_32bit,
            'mod_64bit' => $mod_64bit,
            'background' => $background,
        ]);
    }

    public function settingPOST(Request $request)
    {
        $download = Config::where('name', 'download')->first();
        if (isset($request->download)) {
            $download->value = 'on';
            $download->save();
        } else {
            $download->value = null;
            $download->save();
        }
        $maintenance = Config::where('name', 'maintenance')->first();
        if (isset($request->maintenance)) {
            $maintenance->value = 'on';
            $maintenance->save();
        } else {
            $maintenance->value = null;
            $maintenance->save();
        }
        $version = Config::where('name', 'version')->first();
        $version->value = $request->version;
        $version->save();
        $name_version = Config::where('name', 'name_version')->first();
        $name_version->value = $request->name_version;
        $name_version->save();
        $update_time = Config::where('name', 'update_time')->first();
        $update_time->value = $request->update_time;
        $update_time->save();
        $heading = Config::where('name', 'heading')->first();
        $heading->value = $request->heading;
        $heading->save();
        $facebook = Config::where('name', 'facebook')->first();
        $facebook->value = $request->facebook;
        $facebook->save();
        $youtube = Config::where('name', 'youtube')->first();
        $youtube->value = $request->youtube;
        $youtube->save();
        $background = Config::where('name', 'background')->first();
        if ($request->file_background) {
            Local::delete($background->value);
            $background->value = Local::uploadRandom($request->file_background);
            $background->save();
        } else {
            $background->value = $request->background;
            $background->save();
        }
        $mod_32bit = Config::where('name', 'mod_32bit')->first();
        if ($request->file_mod_32bit) {
            Local::delete($mod_32bit->value);
            $mod_32bit->value = Local::upload($request->file_mod_32bit);
            $mod_32bit->save();
        } else {
            $mod_32bit->value = $request->mod_32bit;
            $mod_32bit->save();
        }
        $mod_64bit = Config::where('name', 'mod_64bit')->first();
        if ($request->file_mod_64bit) {
            Local::delete($mod_64bit->value);
            $mod_64bit->value = Local::upload($request->file_mod_64bit);
            $mod_64bit->save();
        } else {
            $mod_64bit->value = $request->mod_64bit;
            $mod_64bit->save();
        }
        return redirect()->back()->with([
            'success' => 'Cập nhật setting thành công!',
        ]);
    }

    public function chuyenmuc(){
        return view('admin.chuyenmuc.danhsach');
    }
    public function themchuyenmuc(){
        return view('admin.chuyenmuc.them');
    }
    public function themchuyenmucPOST(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->url = $request->url;
        $category->background_url = Local::uploadRandom($request->background);
        $category->save();
        return redirect('/admin/chuyenmuc')->with([
            'success' => 'Sửa chuyên mục thành công!',
        ]);
    }
    public function suachuyenmuc($id){
        $category = Category::find($id);
        return view('admin.chuyenmuc.sua')->with([
            'category' => $category,
        ]);
    }
    public function suachuyenmucPOST(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->url = $request->url;
        if($request->background){
            Local::delete($category->background_url);
            $category->background_url = Local::uploadRandom($request->background);
        }
        $category->save();
        return redirect('/admin/chuyenmuc')->with([
            'success' => 'Thêm chuyên mục thành công!',
        ]);
    }
    public function xoachuyenmuc($id){
        $category = Category::find($id);
        Local::delete($category->background_url);
        $category->delete();
        return redirect()->back()->with([
            'success' => 'Xóa chuyên mục thành công!',
        ]);
    }
}
