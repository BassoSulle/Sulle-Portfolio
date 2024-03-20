<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;


class AddArticle extends Component
{
    public $article_id, $article, $title, $article_link, $date, $status;

    public $editMode = false;
    
    public function mount($article) {

        if($article) {

            $this->editMode = true;
            
            $this->article_id = $article;
            
            $this->article = Article::find($article);

            $this->title = $this->article->title;
            $this->article_link = $this->article->article_link;
            $this->date = $this->article->date;
            $this->status = $this->article->status;

        }
        
    }
    
    protected $rules = [
            'title' => ['required', 'string'],
            'article_link' => ['required', 'string'],
            'date'=>'required',
            'status' => ['nullable']
        ];

    public function updated($fields){

        $this->validateOnly($fields);

    }

    public function save_article()
    {
        $validatedData = $this->validate();

        if($validatedData['status'] == 'visible') {
            $validatedData['status'] = true;

        } else {
            $validatedData['status'] = false;

        }

        if($this->editMode == false) {
            $article = Article::create([
                'title' =>$validatedData['title'],
                'article_link' =>$validatedData['article_link'],
                'date' =>$validatedData['date'],
                'status' => $validatedData['status'],
            ]);

            if($article) {
                return redirect()->route('article-list');

            }
            
        } else {
            $article = Article::where('id', $this->article_id)->update([
                'title' =>$validatedData['title'],
                'article_link' =>$validatedData['article_link'],
                'date' =>$validatedData['date'],
                'status' => $validatedData['status'],
            ]);

            if($article) {
                return redirect()->route('article-list');
                
            }

        }        
                
    }

    public function render()
    {
        $articles=Article::all();
            
        return view('livewire.add-article',[
                'articles'=>'$articles'
        ]);
        
    }
}