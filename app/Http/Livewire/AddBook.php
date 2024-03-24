<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;


class AddBook extends Component
{
    use WithFileUploads;

    public $book, $title,$book_desc,$book_cover,$author,$publisher,$location,$publication_year,$date,$status;

    public $book_id, $imageName;
    
    public $editMode=false;

    public function mount($book){
        if($book){

            $this->editMode=true;

            $this->book_id=$book;

            $this->book=Book::find($book);

                $this->title=$this->book->title;
                $this->book_desc=$this->book->book_desc;
                // $this->book_cover=$this->book->book_cover;
                $this->publication_year = $this->book->publication_year;
                $this->author = $this->book->author;
                $this->publisher = $this->book->publisher;
                $this->location = $this->book->location;
                $this->date = $this->book->date;
                $this->status = $this->book->status;

        }

    }

    protected $rules = [
        'author' => ['required', 'string'],
        'publication_year' => ['required'],
        'title' => ['required', 'string'],
        'publisher' => ['required', 'string'],
        'location' => ['required', 'string'],
        'book_cover' => ['nullable', 'image'],
        'book_desc' => ['required', 'string'],
        'date'=>'required',
        'status' => ['nullable']
    ];

    public function updated($fields){
        $this->validateOnly($fields);

    }


    public function addBook(){
        $validatedData=$this->validate();

        if($validatedData['status']=='visible'){
                $validatedData['status']=true;
        }
        else{
            $validatedData['status']=false;
        }

        if($this->editMode==false){
            if (!empty($this->book_cover)) {
                // Get the original file name
                $this->imageName = $this->title.'.'.$this->book_cover->getClientOriginalExtension();

                // Store the image in the storage folder with its original name
                $this->book_cover->storeAs('books', $this->imageName, 'public');
            }
            
            $book = Book::create([
                'author'=>$validatedData['author'],
                'title'=>$validatedData['title'],
                'book_cover'=>$this->imageName,
                'book_desc'=>$validatedData['book_desc'],
                'publisher'=>$validatedData['publisher'],
                'location'=>$validatedData['location'],
                'date'=>$validatedData['date'],
                'status'=>$validatedData['status'],
                'publication_year'=>$validatedData['publication_year'],
            ]);

                if($book){
                    $this->dispatchBrowserEvent('success_alert', 'Book  Added sucessfully.!');
                        return redirect()->route('book-list');
                }
                else{
                    return $this->dispatchBrowserEvent('error_alert', 'Error occured try again later!.');

                }

        } else{
            if (!empty($this->book_cover)) {
                $path = 'storage/books/'.$this->book->book_cover;

                if (File::exists($path)) {
                    File::delete($path);

                    // Get the original file name
                    $this->imageName =$this->name.'.'.$this->book_cover->getClientOriginalExtension();

                    // Store the image in the storage folder with its original name
                    $this->book_cover->storeAs('books', $this->imageName, 'public');

                }
            } else {
                $this->imageName = $this->book->book_cover;
                // $this->image->storeAs('service_icons', $this->this->imageName, 'public');
            }

            $book = Book::where('id',$this->book_id)->update([
                'author'=>$validatedData['author'],
                'title'=>$validatedData['title'],
                'book_cover'=>$this->imageName,
                'book_desc'=>$validatedData['book_desc'],
                'publisher'=>$validatedData['publisher'],
                'location'=>$validatedData['location'],
                'date'=>$validatedData['date'],
                'status'=>$validatedData['status'],
                'publication_year'=>$validatedData['publication_year'],
            ]);

            if($book){
                $this->dispatchBrowserEvent('success_alert', 'Book  updated successfully!');
                    return redirect()->route('book-list');
            }
            else{
                return $this->dispatchBrowserEvent('error_alert', 'Error occurred try again later!');

            }
        }

    }


    public function render()
    {
        $books =Book::latest()->get();
        
        return view('livewire.add-book',[
            'books'=> $books
        ]);
    }
}