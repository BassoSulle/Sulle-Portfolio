<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class AddProject extends Component
{
    use WithFileUploads;

    public $project, $title, $institute_name, $description, $image, $position, $start_date, $end_date, $status;

    public $project_id, $imageName;

    public $editMode=false;

    public function mount($project){
        if($project){

            $this->editMode=true;

            $this->project_id = $project;

            $this->project = Project::find( $this->project_id);

            $this->title=$this->project->title;
            $this->institute_name=$this->project->institute_name;
            $this->description=$this->project->description;
            // $this->image=$this->project->image;
            $this->position = $this->project->position;
            $this->start_date = $this->project->start_date;
            $this->end_date = $this->project->end_date;
            $this->status = $this->project->status;

        }

    }

    protected $rules = [
        'title' => ['required', 'string'],
        'institute_name' => ['required', 'string'],
        'description' => ['required', 'string'],
        'position' => ['required', 'string'],
        'start_date' => ['required', 'date'],
        'end_date' => ['required', 'date'],
        'status' => ['nullable']
    ];

    public function updated($fields){
        $this->validateOnly($fields);

    }

    public function save_project(){
        $validatedData=$this->validate();

        if($validatedData['status']=='visible'){
                $validatedData['status']=true;
        }
        else{
            $validatedData['status']=false;
        }

        if($this->editMode==false){
            if (!empty($this->image)) {
                // Get the original file name
                $this->imageName =date('YmdHi').'.'.$this->image->getClientOriginalExtension();

                // Store the image in the storage folder with its original name
                $this->image->storeAs('projects', $this->imageName, 'public');
            }

            $project = project::create([
                'title'=>$validatedData['title'],
                'image'=>$this->imageName,
                'institute_name'=>$validatedData['institute_name'],
                'description'=>$validatedData['description'],
                'position'=>$validatedData['position'],
                'start_date'=>$validatedData['start_date'],
                'end_date'=>$validatedData['end_date'],
                'status'=>$validatedData['status'],
            ]);

                if($project){
                    $this->dispatchBrowserEvent('success_alert', 'Project  Added successfully!');

                    return redirect()->route('project-list');

                }
                else{
                    return $this->dispatchBrowserEvent('error_alert', 'Error occurred try again later!');

                }

        } else{
            if (!empty($this->image)) {
                $path = 'storage/projects/'.$this->project->image;


                if (File::exists($path)) {
                    File::delete($path);

                    // Get the original file name
                    $this->imageName =date('YmdHi').'.'.$this->image->getClientOriginalExtension();

                    // Store the image in the storage folder with its original name
                    $this->image->storeAs('projects', $this->imageName, 'public');

                }
            } else {
                $this->imageName = $this->project->image;
                // $this->image->storeAs('service_icons', $this->this->imageName, 'public');
            }

            $project = project::where('id',$this->project_id)->update([
                'title'=>$validatedData['title'],
                'image'=>$this->imageName,
                'institute_name'=>$validatedData['institute_name'],
                'description'=>$validatedData['description'],
                'position'=>$validatedData['position'],
                'start_date'=>$validatedData['start_date'],
                'end_date'=>$validatedData['end_date'],
                'status'=>$validatedData['status'],
            ]);

            if($project){
                $this->dispatchBrowserEvent('success_alert', 'Project  updated successfully!');
                    return redirect()->route('project-list');
            }
            else{
                return $this->dispatchBrowserEvent('error_alert', 'Error occurred try again later!');

            }
        }

    }

    public function render()
    {
        return view('livewire.add-project');
    }
}
