<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\System;
use App\Models\Image;

class AdminActionsController extends Controller
{
    function SystemDelete(request $request)
    {
        $id = $request->input('id');
        
        $query = System::where('id','=',$id)->first()->delete();

        return Redirect::to('/admin/systems');

    }

    function SystemAdd(request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $category = $request->input('category');
        $slug = $request->input('slug');

        $db = new System;

        $db->slug=$slug;
        $db->friendly_name=$name;
        $db->description=$description;
        $db->category=$category;

        $db->save();
        
        
        return Redirect::to('/admin/systems');
    }

    function ImageAdd(request $request)
    {
        $filename = $request->input('filename');
        $sysid = $request->input('sysid');
        $description = $request->input('description');
        $path = $request->input('path');

        $db = new Image;

        $db->systemid=$sysid;
        $db->filename=$filename;
        $db->description=$description;
        $db->path=$path;
        $db->downloads=0;

        $db->save();
        
        
        return Redirect::to('/admin/images/'.$sysid);
    }

    function ImageDelete(request $request)
    {
        $id = $request->input('id');

        
        $query = Image::where('id','=',$id)->first()->delete();

        return Redirect::to('/admin/images');

    }

    function ImageEdit(request $request)
    {
        $imgid = $request->input('imgid');
        $filename = $request->input('filename');
        $sysid = $request->input('sysid');
        $description = $request->input('description');
        $path = $request->input('path');

        $db = Image::where('id','=',$imgid)->first();

        // $db->systemid=$sysid;
        // $db->filename=$filename;
        // $db->description=$description;
        // $db->path=$path;
        // $db->downloads=0;

        $sysid = $db['systemid'];

        $db->update(['systemid'=>$sysid,'filename'=>$filename,'path'=>$path,'description'=>$description]);
        
        
        return Redirect::to('/admin/images/'.$sysid);
    }

    function SystemEdit(request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $category = $request->input('category');
        $slug = $request->input('slug');
        $id = $request->input('id');

        $db = System::where('id','=',$id)->first();

        // $db->systemid=$sysid;
        // $db->filename=$filename;
        // $db->description=$description;
        // $db->path=$path;
        // $db->downloads=0;

        var_dump($slug);

        $db->update(['slug'=>$slug,'friendly_name'=>$name,'description'=>$description,'category'=>$category]);
        
        
        return Redirect::to('/admin/systems');
    }
}
