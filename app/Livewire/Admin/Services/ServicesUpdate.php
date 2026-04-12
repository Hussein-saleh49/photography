<?php
namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesUpdate extends Component
{
    public $record, $title, $description, $icon;
    protected $rules = [
        "title"       => "required|string|min:3",
        "description" => "nullable|string|min:5|max:255",
        "icon"        => "required|string",
    ];
    protected $listeners = ["serviceUpdate"];
    public function serviceUpdate($id)
    {
        $this->record      = Service::findOrFail($id);
        $this->title       = $this->record->title;
        $this->description = $this->record->description;
        $this->icon        = $this->record->icon;
        $this->resetValidation();
        $this->dispatch("open-update-modal");

    }
    public function submit()
    {
        $data = $this->validate();
        $this->record->update($data);
        $this->dispatch("close-update-modal");
        $this->dispatch("refreshData")->to(ServicesData::class);

    }
    public function render()
    {
        return view('livewire.admin.services.services-update');
    }
}
