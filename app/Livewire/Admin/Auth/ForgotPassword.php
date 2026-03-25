<?php
namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Component;

class ForgotPassword extends Component
{
    public string $email = '';
    public function submit()
    {
        $this->validate([
            'email' => ['required', 'string', 'email'],
        ]);
        $status = Password::broker("admins")->sendResetLink(
            $this->only('email')
        );

        if ($status != Password::RESET_LINK_SENT) {
            $this->addError('email', __($status));

            return;
        }

        $this->reset('email');

        session()->flash('status', __($status));
    }
    public function render()
    {
        return view('livewire.admin.auth.forgot-password')->layout("layouts.auth.master");
    }
}
