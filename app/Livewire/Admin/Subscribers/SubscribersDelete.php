<?php
namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersDelete extends Component
{
    public $record, $email;
    protected $listeners = ["subscriberDelete"];
    public function subscriberDelete($id)
    {
        $this->record = Subscriber::findOrFail($id);
        $this->email  = $this->record->email;
        $this->dispatch("open-delete-modal");

    }
    public function submit()
    {
        $this->record->delete();
        $this->dispatch("close-delete-modal");
        $this->dispatch("refreshData")->to(SubscribersData::class);
    }

    public function render()
    {
        return view('livewire.admin.subscribers.subscribers-delete');
    }
}
