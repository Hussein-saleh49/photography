<?php
namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SletterCreate extends Component
{
    public $email;
    protected $rules = [
        "email" => "required|email|unique:subscribers,email",
    ];
    public function updatedEmail()
    {
        $this->validateOnly("email");
    }
    public function submit()
    {
        $data = $this->validate();
        Subscriber::create($data);
        $this->reset('email');
        // dispatch event
        $this->dispatch('sletter-alert', message: 'Subscribed successfully');
    }
    public function render()
    {
        return view('livewire.admin.subscribers.sletter-create');
    }
}
