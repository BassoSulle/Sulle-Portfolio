<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Book;
use App\Models\Project;

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

        $articles = Article::where('status', true)->latest()->get();
        return view('articles', compact('articles'));

    }
    public function projects(){

        $projects = Project::where('status', true)->latest()->get();
        return view('projects', compact('projects'));

    }

    public function project_details($project_id){

        $project = Project::find($project_id);
        return view('project_details', compact('project'));

    }
    public function researches(){

        return view('researches');

    }

    public function books(){
        $books=Book::where('status', true)->latest()->get();
        return view('books',compact('books'));

    }
    public function contact(){

        return view('contact');

    }


}