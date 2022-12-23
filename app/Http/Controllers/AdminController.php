<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\System;
use App\Models\Image;

class AdminController extends Controller
{
    function LoginPage() {
        return view('admin.login');
    }

    function LoginCheck(request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        $auth = AuthController::CheckLoginCredentials($username, $password);

        if(!$auth['isok']) {
            abort(403);
        } elseif($auth['isok']) {
            $request->session()->put('username', $auth['username']);
            return Redirect::to('/admin/dashboard');
            die();
        }


    }

    function AdminRedirect() {
        return Redirect::to('/admin/dashboard');
    }

    function Dashboard(request $request) {
        

        $username = $request->session()->get('username');
        return view('admin.dashboard', ['username'=>$username]);

    }

    function Systems(request $request) {
        

        $query = System::all();
        return view('admin.systems', ['systems'=>$query]);
    }

    function SystemsEdit(request $request, $id) {
        

        $query = System::where('id','=',$id)->first();
        return view('admin.systemsedit', ['system'=>$query]);
    }

    function SystemsAdd(request $request) {
        return view('admin.systemsadd');
    }

    function checkIfUserLogged(request $req) {
        if (!$req->session()->has('username')) {
          echo Redirect::to('/admin/login');
        }
    }

    function Images() {
        $query = System::all();
        return view('admin.images', ['systems'=>$query]);
    }

    function ImagesSystem($id) {
        $query = Image::where('systemid','=',$id)->get();
        // $query = Image::all();
        return view('admin.imagesview', ['images'=>$query, 'systemid'=>$id]);
    }

    function ImagesAdd(request $request, $id) {
        return view('admin.imagesadd', ['id'=>$id]);
    }

    function ImagesEdit(request $request, $id) {
        $query = Image::where('id','=',$id)->first();
        return view('admin.imagesedit', ['id'=>$id, 'image'=>$query]);
    }

}