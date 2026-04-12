<?php
namespace App\Livewire\Admin\Collections;

use App\Models\Collection;
use Livewire\Component;

class CollectionsView extends Component
{

    public $record, $title, $tag, $cover_image;
    public $images       = [];
    protected $listeners = ["collectionShow"];
    public function collectionShow($id)
    {
        $this->record      = Collection::findOrFail($id);
        $this->title       = $this->record->title;
        $this->tag         = $this->record->tag;
        $this->cover_image = $this->record->getFirstMediaUrl('cover');
        $this->images      = $this->record->getMedia('photos');

        $this->dispatch("open-show-modal");

    }

    public function render()
    {
        return view('livewire.admin.collections.collections-view');
    }
}
