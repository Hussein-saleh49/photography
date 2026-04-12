<?php
namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersCreate extends Component
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
     $this->dispatch('subscribe-alert', message: 'Subscriber saved successfully');
    }
    public function render()
    {
        return view('livewire.admin.subscribers.subscribers-create');
    }
}
