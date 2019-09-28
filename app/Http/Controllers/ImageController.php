<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Local;
use File;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        $url = Local::uploadRandom($request->image);
        return response()->json([
            'url' => $url
        ]);
    }

    public function deleteImage(Request $request)
    {
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https://' : 'http://';
        $HOST = $protocol . $_SERVER['HTTP_HOST'];
        $new_url = str_replace($HOST, '', $request->url);
        File::delete(base_path() . $new_url);
        return response()->json([
            'success' => 'OK!',
        ]);
    }
}
