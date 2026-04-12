<?php
namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesCreate extends Component
{
    public $title, $description, $icon;
    protected $rules = [
        "title"        => "required|string|min:3",
        "description" => "nullable|string|min:5|max:255",
        "icon"        => "required|string",
    ];
    public function submit()
    {
        $data = $this->validate();
        Service::create($data);
        $this->reset(["title", "description", "icon"]);
        $this->dispatch("close-add-modal");
        $this->dispatch("refreshData")->to(ServicesData::class);

    }
    public function render()
    {
        return view('livewire.admin.services.services-create');
    }
}
