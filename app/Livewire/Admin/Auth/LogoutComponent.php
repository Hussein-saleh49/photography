<?php

namespace App\Livewire\Admin\Auth;

use App\Livewire\Actions\admin\Logout;
use Livewire\Component;

class LogoutComponent extends Component
{
      public function logout(Logout $logout): void
    {
        $logout();

        // $this->redirect("admin.login", navigate: true);
        $this->redirectRoute('admin.login', navigate: true);
        // $this->to_route("admin.login");
    }
    public function render()
    {
        return view('livewire.admin.auth.logout-component');
    }
}
