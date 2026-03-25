<?php
namespace App\Livewire\Admin\Auth;

use App\Livewire\Forms\admin\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class LoginComponent extends Component
{
    public LoginForm $form;

    public function submit()
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route("admin.index", absolute: false), navigate: true);

    }
    public function render()
    {
        return view('livewire.admin.auth.login-component')->layout("layouts.auth.master");
    }
}
