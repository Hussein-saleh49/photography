<?php
namespace App\Livewire\Admin\Collections;

use App\Models\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class CollectionsData extends Component
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
        $collections = Collection::where("title","like","%".$this->search."%")->paginate(5);
        return view('livewire.admin.collections.collections-data',compact("collections"));
    }
}
