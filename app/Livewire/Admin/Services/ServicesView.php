<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;


class ServicesView extends Component
{
     public $record, $title, $description, $icon;
     protected $listeners = ["serviceShow"];
    public function serviceShow($id)
    {
        $this->record      = Service::findOrFail($id);
        $this->title       = $this->record->title;
        $this->description = $this->record->description;
        $this->icon        = $this->record->icon;
    
        $this->dispatch("open-show-modal");

    }
    public function render()
    {
        return view('livewire.admin.services.services-view');
    }
}
