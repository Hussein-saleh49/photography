<?php
namespace App\Livewire\Front\Components;

use App\Models\Collection;
use Livewire\Component;

class CollectionsDetailsComponent extends Component
{
    public $collectionId;
    public $collection;

    public function mount($id)
    {
        $this->collectionId = $id;
        $this->collection = Collection::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.front.components.collections-details-component');
    }
}