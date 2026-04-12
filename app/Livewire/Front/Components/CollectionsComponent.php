<?php

namespace App\Livewire\Front\Components;

use App\Models\Collection;
use Livewire\Component;

class CollectionsComponent extends Component
{
    public function render()
    {
        $collections = Collection::take(9)->get();
        return view('livewire.front.components.collections-component',get_defined_vars());
    }
}
