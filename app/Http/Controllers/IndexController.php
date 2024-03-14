<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){

        return view('layout.index');

    }

    public function aboutme(){

        return view('aboutme');

    }
    public function articles(){

        return view('articles');

    }
    public function projects(){

        return view('projects');

    }

    public function project_details(){

        return view('project_details');

    }
    public function researches(){

        return view('researches');

    }
    public function books(){

        return view('books');

    }
    public function contact(){

        return view('contact');

    }


}
