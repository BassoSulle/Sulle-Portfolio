<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    public $project_id, $project;

    public function viewProject($project){
        $this->project_id = $project;

        $this->project = Project::find($this->project_id);
        
        return $this->dispatchBrowserEvent('openViewModal');

    }

    public function getDeleteProject($project){
        $this->project_id = $project;
        
        return $this->dispatchBrowserEvent('openDeleteModal');

    }

    public function DeleteProject(){
        $deleted_project = Project::where('id',$this->project_id)->delete();

        if ($deleted_project){
            $this->clearForm();
            $this->dispatchBrowserEvent('closeDeleteModal');
            $this->dispatchBrowserEvent('error_alert', 'Project deleted successfully');

        }else{
            $this->dispatchBrowserEvent('error_alert', 'An error occurred. Try again later.');
        }

    }

    public function clearForm(){
        $this->project_id='';

    }
    
    public function render()
    {
        $projects = Project::latest()->get();

        return view('livewire.project-list', [
            'projects' => $projects,
        ]);
    }
}