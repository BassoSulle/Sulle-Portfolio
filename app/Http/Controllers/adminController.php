<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function index(){

        return view('admin_panel.index');

    }

    public function article(){

        return view('admin_panel.articles');

    }
    public function books(){

        return view('admin_panel.books');

    }

    public function projects(){

        return view('admin_panel.projects');

    }
    public function research(){

        return view('admin_panel.research');

    }

    public function add_article(){

        return view('admin_panel.add_article');

    }

    public function edit_article($article){

        return view('admin_panel.edit_article', [
            'article' => $article
        ]);

    }

    public function add_book(){

        return view('admin_panel.add_book');

    }

    public function edit_book($book){

        return view('admin_panel.edit_book',[
            'book'=>$book
        ]);

    }
    public function add_project(){

        return view('admin_panel.add_project');

    }

    public function edit_project($project){

        return view('admin_panel.edit_project', [
            'project' => $project
        ]);

    }
    
    public function add_research(){

        return view('admin_panel.add_research');

    }

    public function edit_research($research){

        return view('admin_panel.edit_research',[
            'research'=>$research
            ]);

    }
    public function profile(){

        return view('admin_panel.profile');

    }
}