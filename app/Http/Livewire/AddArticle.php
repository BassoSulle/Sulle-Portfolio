<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;


class AddArticle extends Component
{
    public $title, $content,$date, $status;

    protected $rules = [
         'title' => 'required',
         'content' => 'required',
        'date'=>'required',
// '       status'=>'required'
        ];

    public function updated($fields){

        $this->validateOnly($fields);

    }

        public function save_article()
        {
           $validatedData = $this->validate();

           $article = Article::create([
            'title'=>$validatedData['title'],
            'content'=>$validatedData['content'],
            'date'=>$validatedData['date'],
            // 'status'=>$validatedData['status'],


            ]);
        }

    public function render()
    {
        $articles=Article::all();
            return view('livewire.add-article',[
            'articles'=>'$articles'
            ]);
    }
}
