<?php
namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesData extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    protected $listeners =["refreshData" => '$refresh'];
    public $search;
    public function updatedsearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $services = Service::where("title", "like", "%" . $this->search . "%")->paginate(5);
        return view('livewire.admin.services.services-data', get_defined_vars());
    }
}
