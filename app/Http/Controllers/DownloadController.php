<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Image;

class DownloadController extends Controller
{
    function Download($id) {
        $query = Image::where('id', '=', $id)->first();

        if(empty($query)) {
            abort(404);
        }

        $paths = explode(',',$query['path']);

        $count = count($paths);
        $count = $count-1;

        $number = rand(0, $count);

        $link = $paths[$number];

        return Redirect::to($link);
    }
}
