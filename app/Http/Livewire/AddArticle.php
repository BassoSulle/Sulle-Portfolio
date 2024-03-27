<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;


class AddArticle extends Component
{

    public $article_id, $article, $title, $article_link, $date, $status, $author, $publication_year;


    public $editMode = false;

    public function mount($article) {

        if($article) {

            $this->editMode = true;

            $this->article_id = $article;

            $this->article = Article::find($article);

            $this->author = $this->article->author;
            $this->publication_year = $this->article->publication_year;
            $this->title = $this->article->title;
            $this->article_link = $this->article->article_link;
            $this->date = $this->article->date;
            $this->status = $this->article->status;

        }

    }

    protected $rules = [
            'author' => ['required', 'string'],
            'publication_year' => ['required'],
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
                'author' =>$validatedData['author'],
                'publication_year' =>$validatedData['publication_year'],
                'title' =>$validatedData['title'],
                'article_link' =>$validatedData['article_link'],
                'date' =>$validatedData['date'],
                'status' => $validatedData['status'],
            ]);



            if($article) {
                 $this->dispatchBrowserEvent('success_alert', 'Article  Added sucessfully.!');
                    return redirect()->route('article-list');

            }
            else{

                return $this->dispatchBrowserEvent('error_alert', 'Article updation failed!.');

            }

        } else {
            $article = Article::where('id', $this->article_id)->update([
                'author' =>$validatedData['author'],
                'publication_year' =>$validatedData['publication_year'],
                'title' =>$validatedData['title'],
                'article_link' =>$validatedData['article_link'],
                'date' =>$validatedData['date'],
                'status' => $validatedData['status'],
            ]);

            if($article) {
                $this->dispatchBrowserEvent('success_alert', 'Article updated successfully');
                return redirect()->route('article-list');

            }

        }

    }

        public function getDeleteArticle(int $article_id){

            $this->article_id=$article_id;
        }


        public function deleteArticle(int $article_id){
            $this->article_id=$article_id;
            $articledeleted =Article::where( 'id',$this->article_id )->delete();

            if($articledeleted){
                $this->dispatchBrowserEvent('success_alert', 'Article Deleted successfully');

            }
            else{
                $this->dispatchBrowserEvent('error_alert', 'Action failed try again..!');

            }
        }


    public function render()
    {
        $articles=Article::latest()->get();

        return view('livewire.add-article',[
                'articles'=>'$articles'
        ]);

    }
}
