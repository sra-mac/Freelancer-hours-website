<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Show extends Component
{
    public Project $project;

    public function mount($project_index){
        $this->project = Project::find($project_index);
    }
    public function render(){
        return view('livewire.projects.show');
    }
}
