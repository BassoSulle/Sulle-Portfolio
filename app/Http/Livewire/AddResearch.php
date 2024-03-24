<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Research;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;


class AddResearch extends Component
{
    use WithFileUploads;

    public $title, $research_desc,$research_image,$date,$status;
    public $imageName;
    public $research_id;
    public $editMode=false;

    public function mount($research){
        if($research){

            $this->editMode = true;
            $this->research_id=$research;

            $this->research=Research::find($research);

                $this->title= $this->research->title;
                $this->research_desc=$this->research->research_desc;
                // $this->research_image = $research->research_image;
                $this->date = $this->research->date;
                $this->status = $this->research->status;
          }

// dd($research);

    }



    protected $rules = [
        'title' => ['required', 'string'],
        'research_desc' => ['required'],
        'research_image' => ['nullable', 'image'],
        'date'=>'required',
        'status' => ['nullable']
    ];

    public function updated($fields){

    $this->validateOnly($fields);

    }

    public function addResearch(){

    $validatedData=$this->validate();
        if($validatedData['status']=='visible'){

        $validatedData['status']=true;
        }else{
        $validatedData['status']=false;
        }

        if($this->editMode==false){

            if (!empty($this->research_image)) {
                // Get the original file name
                $this->imageName = $this->title.'.'.$this->research_image->getClientOriginalExtension();

                // Store the image in the storage folder with its original name
                $this->research_image->storeAs('researches', $this->imageName, 'public');
            }

        $research=Research::create([
            'title'=>$validatedData['title'],
            'research_desc'=>$validatedData['research_desc'],
            'research_image'=>$this->research_image,
            'date'=>$validatedData['date'],
            'status'=>$validatedData['status'],

            ]);

        if($research){
            $this->dispatchBrowserEvent('success_alert', 'Research  added sucessfully.!');
            return redirect()->route('research-list');

        }
        else{
            $this->dispatchBrowserEvent('success_alert', 'Error  action failed try again later!');

        }

        }

    else{

        if (!empty($this->research_image)) {
            $path = 'storage/research/'.$this->research->research_image;

            if (File::exists($path)) {
                File::delete($path);

                // Get the original file name
                $this->imageName =$this->name.'.'.$this->research_image->getClientOriginalExtension();

                // Store the image in the storage folder with its original name
                $this->book_cover->storeAs('researches', $this->imageName, 'public');

            }
        } else {
            $this->imageName = $this->book->book_cover;
            // $this->image->storeAs('service_icons', $this->this->imageName, 'public');
        }

        $research=Research::where('id',$this->research_id)->update([
            'title'=>$validatedData['title'],
            'research_desc'=>$validatedData['research_desc'],
            'research_image'=>$this->research_image,
            'date'=>$validatedData['date'],
            'status'=>$validatedData['status'],

            ]);

        if($research){
            $this->dispatchBrowserEvent('success_alert', 'Research  updated sucessfully.!');
            return redirect()->route('research-list');
        }
        else{
            $this->dispatchBrowserEvent('error_alert', 'Error, action failed try again latter.!');

        }


    }
    }



    public function render()
    {
        return view('livewire.add-research');
    }
}
