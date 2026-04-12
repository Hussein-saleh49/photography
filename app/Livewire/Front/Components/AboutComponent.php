<?php

namespace App\Livewire\Front\Components;

use App\Models\Collection;
use App\Models\Setting;
use Livewire\Component;

class AboutComponent extends Component
{
    public $settings,$recent_photos;

    public function mount(){
        $this->settings = Setting::first();
          $this->recent_photos = Collection::latest()
            ->take(3)
            ->get()
            ->flatMap(function ($collection) {
                return $collection->getMedia('photos');
            })
            ->take(6);
    }
    public function render()
    {
        return view('livewire.front.components.about-component');
    }
}
