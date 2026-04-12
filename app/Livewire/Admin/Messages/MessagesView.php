<?php
namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use Livewire\Component;

class MessagesView extends Component
{
    public $record, $name, $email, $subject, $messageText;
    protected $listeners = ["messageShow"];
    public function messageShow($id)
    {
        $this->record      = Message::findOrFail($id);
        $this->name      = $this->record->name;
        $this->email = $this->record->email;
        $this->subject        = $this->record->subject;
        $this->messageText        = $this->record->message;

        $this->dispatch("open-show-modal");

    }
    public function render()
    {
        return view('livewire.admin.messages.messages-view');
    }
}
