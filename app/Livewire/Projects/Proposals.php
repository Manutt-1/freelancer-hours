<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Proposals extends Component
{

    public Project $project;

    public bool $modal = false;

    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
