<?php
namespace App\Livewire\Admin\Auth;

use App\Models\Admin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Component;

class RegisterComponent extends Component
{
    public string $name                  = '';
    public string $email                 = '';
    public string $password              = '';
    public string $password_confirmation = '';

    public function submit(): void
    {
        $validated = $this->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($admin = Admin::create($validated)));

        Auth::guard("admin")->login($admin);

        $this->redirect(route("admin.index", absolute: false), navigate: true);
    }
    public function render()
    {
        return view('livewire.admin.auth.register-component')->layout("layouts.auth.master");
    }
}
