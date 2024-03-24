<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Research;
use App\Models\Book;

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

        $researches=Research::where('status',true)->latest()->get();
        return view('researches',compact('researches'));

    }

    public function books(){
        $books=Book::where('status', true)->latest()->get();
        return view('books',compact('books'));

    }
    public function contact(){

        return view('contact');

    }


}
