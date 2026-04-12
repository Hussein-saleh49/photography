<?php
namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;
use Livewire\WithPagination;

class SubscribersData extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    protected $listeners       = ["refreshData" => '$refresh'];
    public $search;
    public function updatedsearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $subscribers = Subscriber::where("email", "like", "%" . $this->search . "%")->paginate(5);
        return view('livewire.admin.subscribers.subscribers-data', get_defined_vars());
    }
}
