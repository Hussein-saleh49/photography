<?php

namespace App\Livewire\Admin\Collections;

use App\Models\Collection;
use Livewire\Component;

class CollectionsDelete extends Component
{
    public $collectionId;
    public $title;

    protected $listeners = ['collectionDelete'];

    public function collectionDelete($id)
    {
        $collection = Collection::findOrFail($id);

        $this->collectionId = $collection->id;
        $this->title        = $collection->title;

        $this->dispatch('open-delete-modal');
    }

    public function submit()
    {
        $collection = Collection::findOrFail($this->collectionId);

        // delete media + record
        $collection->clearMediaCollection('cover');
        $collection->clearMediaCollection('photos');
        $collection->delete();

        $this->reset(['collectionId', 'title']);

        $this->dispatch('close-delete-modal');
        $this->dispatch('refreshData')->to(CollectionsData::class);
    }

    public function render()
    {
        return view('livewire.admin.collections.collections-delete');
    }
}