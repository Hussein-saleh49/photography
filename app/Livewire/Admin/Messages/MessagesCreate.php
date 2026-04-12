<?php
namespace App\Livewire\Admin\Messages;

use App\Models\Message;
use App\Models\Setting;
use Livewire\Component;

class MessagesCreate extends Component
{
    public $name, $email, $subject, $message;
    protected $rules = [
        "name" => "required|string|min:3",
        "email" => "required|email",
        "subject" => "nullable|string|min:3",
        "message" => "required|string|min:10",
    ];
    public function submit(){
        $data = $this->validate();
        Message::create($data);
        $this->reset(["name","email","subject","message"]);
        $this->dispatch("contact-alert", message : "message is sent successfully");
    }
    public function render()
    {
        $settings = Setting::first();
        return view('livewire.admin.messages.messages-create',compact("settings"));
    }
}
