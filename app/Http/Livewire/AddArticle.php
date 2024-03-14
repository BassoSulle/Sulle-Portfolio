<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddArticle extends Component
{
    public $title, $content;

    protected $rules = [
         'title' => 'required',
         'content' => 'required'
        ];

        public function save()
        {
            $this->validate();

            Contact::create([
                'name' => $this->name,
                'email' => $this->email,
            ]);
        }

    public function render()
    {
        return view('livewire.add-article');
    }
}
