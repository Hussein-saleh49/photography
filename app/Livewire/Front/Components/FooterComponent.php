<?php
namespace App\Livewire\Front\Components;

use App\Models\Blog;
use App\Models\Collection;
use App\Models\Setting;
use Livewire\Component;

class FooterComponent extends Component
{
    public $settings, $recent_photos, $archives;

    public function mount()
    {
        $this->settings      = Setting::first();
        $this->recent_photos = Collection::latest()
            ->take(3)
            ->get()
            ->flatMap(function ($collection) {
                return $collection->getMedia('photos');
            })
            ->take(6);

        $this->archives = Blog::selectRaw('
            YEAR(created_at) as year,
            MONTH(created_at) as month,
            COUNT(*) as total
        ')
            ->groupBy('year', 'month')
            ->orderByDesc('year')
            ->orderByDesc('month')
            ->get();
    }
    public function render()
    {
        return view('livewire.front.components.footer-component');
    }
}
