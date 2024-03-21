<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

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

        $articles=Article::latest()->get();
        return view('articles', compact('articles'));

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
