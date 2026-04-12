<?php
namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesDelete extends Component
{

    public $record, $name;
    protected $listeners = ["messageDelete"];
    public function messageDelete($id)
    {
        $this->record = Message::findOrFail($id);
        $this->name   = $this->record->name;
        $this->dispatch("open-delete-modal");

    }
    public function submit()
    {
        $this->record->delete();
        $this->dispatch("close-delete-modal");
        $this->dispatch("refreshData")->to(MessagesData::class);
    }

    public function render()
    {
        return view('livewire.admin.messages.messages-delete');
    }
}
