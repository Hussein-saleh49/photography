<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
     public $record, $title;
       protected $listeners = ["serviceDelete"];
        public function serviceDelete($id)
    {
        $this->record      = Service::findOrFail($id);
        $this->title       = $this->record->title;
        $this->dispatch("open-delete-modal");

    }
    public function submit(){
        $this->record->delete();
        $this->dispatch("close-delete-modal");
        $this->dispatch("refreshData")->to(ServicesData::class);
    }
    public function render()
    {
        return view('livewire.admin.services.services-delete');
    }
}
