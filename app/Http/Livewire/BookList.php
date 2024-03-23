<?php

namespace App\Http\Livewire;
use App\Models\Book;
use Livewire\Component;

class BookList extends Component
{
    public $book_id;

    public function getDeleteBook($book_id){
        $this->book_id= $book_id;
        
        return $this->dispatchBrowserEvent('openDeleteModal');

    }

    public function DeleteBook(){
        $deleted_book=Book::where('id',$this->book_id)->delete();

        if ($deleted_book){
            $this->clearForm();
            $this->dispatchBrowserEvent('closeDeleteModal');
            $this->dispatchBrowserEvent('error_alert', 'Book deleted successfully');

        }else{
            $this->dispatchBrowserEvent('error_alert', 'An error occurred. Try again later.');
        }

    }

    public function clearForm(){
        $this->book_id='';

    }

    public function render()
    {
        $books=Book::all();

        return view('livewire.book-list',[
        'books'=>$books,
        ]);
    }
    
}