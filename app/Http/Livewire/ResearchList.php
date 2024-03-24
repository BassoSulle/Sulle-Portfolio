<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Research;

class ResearchList extends Component
{
    public $research_id;

    public function getResearchDetails($research_id){

    $this->research_id=$research_id;
    return $this->dispatchBrowserEvent('openDeleteModal');

    }
    public function DeleteResearch(){
        $deleteResearch=Research::where('id',$this->research_id)->delete( );
            if($deleteResearch){
                $this->clearForm();
                $this->dispatchBrowserEvent('closeDeleteModal');
                $this->dispatchBrowserEvent('error_alert', 'Research deleted successfully');
            }
            else{
                $this->dispatchBrowserEvent('error_alert', 'An error occurred. Try again later.');

        }
    }

    public function clearForm(){
        $this->research_id='';
    }

    public function render()
    {
        $researches=Research::latest()->get();
        return view('livewire.research-list',['researches'=>$researches]);
    }
}
