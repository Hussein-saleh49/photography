<?php
namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
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
        $messages = Message::where("name", "like", "%" . $this->search . "%")->paginate(5);
        return view('livewire.admin.messages.messages-data', get_defined_vars());
    }
}
