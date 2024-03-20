<?php

namespace App\Http\Livewire;
use App\Models\Article;

use Livewire\Component;

class ArticleList extends Component
{

    public $article_id;



    // protected $rules = [
    //         'title' => ['required', 'string'],
    //         'article_link' => ['required', 'string'],
    //         'date'=>'required',
    //         'status' => ['nullable']
    //     ];

    // public function updated($fields){

    //     $this->validateOnly($fields);

    // }

    public function getDeleteArticle(int $article_id){
// dd($article_id);
        $this->article_id=$article_id;
        return $this->dispatchBrowserEvent('openDeleteModal');

    }

    public function DeleteArticle(){
        $deleted = Article::where('id',$this->article_id)->delete();

        if($deleted) {
            $this->clearForm();
            $this->dispatchBrowserEvent('closeDeleteModal');
            $this->dispatchBrowserEvent('error_alert', 'Article deleted successfully');

        } else {
            $this->dispatchBrowserEvent('error_alert', 'An error occurred. Try again later.');

        }

    }

    public function render()
    {

    $articles=Article::all();
        return view('livewire.article-list',['articles'=>$articles]);
    }
}
