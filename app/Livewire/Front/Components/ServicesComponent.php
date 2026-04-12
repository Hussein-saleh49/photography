<?php

namespace App\Livewire\Front\Components;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public function render()
    {
        $services = Service::take(6)->get();
        return view('livewire.front.components.services-component',compact("services"));
    }
}
