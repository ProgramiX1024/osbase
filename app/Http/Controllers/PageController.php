<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\System;
use App\Models\Image;

class PageController extends Controller
{
    function Home() {
    	\App::setLocale(session('locale'));
        $systems = System::all();
        return view('home', ['systems'=>$systems]);
    }

    function PrivacyPolicy() {
    	\App::setLocale(session('locale'));
        return view('privacypolicy');
    }
	function Terms() {
    	\App::setLocale(session('locale'));
    	return view('terms');
    }
	function Crowdfunding() {
    	\App::setLocale(session('locale'));
        return view('crowdfunding');
    }

    function SystemView($os) {
    	\App::setLocale(session('locale'));
        $search = System::where('slug', '=', $os)->first();

        if(empty($search)) {
            abort(404);
        } else {
            $sysid = $search['id'];

            $imagesSearch = Image::where('systemid', '=', $sysid)->get();

            if(empty($imagesSearch)) {
                abort(404);
            }
            return view('system', ['info'=>$search,'id'=>$sysid, 'images'=>$imagesSearch]);
        }
        
    }

    function Timers() {
    	\App::setLocale(session('locale'));
        return view('timers');
    }

    function AboutUs() {
    	\App::setLocale(session('locale'));
        return view('aboutus');
    }

    function Search(Request $request) {
    	\App::setLocale(session('locale'));
        $searchquery = $request->input('q');

        $query = Image::where('description','LIKE','%'.$searchquery.'%')->get();

        if(empty($query)) {
            abort(404);
        }
        return view('search', ['query'=>$searchquery, 'images'=>$query]);
    } 
}
