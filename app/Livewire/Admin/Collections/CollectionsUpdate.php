<?php
namespace App\Livewire\Admin\Collections;

use App\Models\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;

class CollectionsUpdate extends Component
{
    use WithFileUploads;

    public $collectionId;

    public $title = '';
    public $tag   = '';

    public $cover       = null; // old cover url
    public $cover_image = null; // new upload

    public $photos = []; // old photos
    public $images = []; // new uploads

    protected $rules = [
        "title"       => "required|string|min:3",
        "tag"         => "nullable|string",
        "cover_image" => "nullable|image|mimes:jpg,png,jpeg",
        "images"      => "nullable|array",
        "images.*"    => "image|mimes:jpg,png,jpeg",
    ];

    protected $listeners = ['collectionUpdate'];

    public function collectionUpdate($id)
    {
        $collection = Collection::findOrFail($id);

        $this->collectionId = $collection->id;
        $this->title        = $collection->title;
        $this->tag          = $collection->tag;

        $this->cover  = $collection->getFirstMediaUrl('cover');
        $this->photos = $collection->getMedia('photos');

        $this->cover_image = null;
        $this->images      = [];
        $this->resetValidation();
        $this->dispatch('open-update-modal');
    }

    public function submit()
    {
        $this->validate();

        $collection = Collection::findOrFail($this->collectionId);

        // update text
        $collection->update([
            'title' => $this->title,
            'tag'   => $this->tag,
        ]);

        // update cover
        if ($this->cover_image) {
            $collection->clearMediaCollection('cover');

            $collection
                ->addMedia($this->cover_image)
                ->toMediaCollection('cover');
        }

        // add new photos
        if (! empty($this->images)) {
            foreach ($this->images as $image) {
                $collection
                    ->addMedia($image)
                    ->toMediaCollection('photos');
            }
        }

        $this->reset(['title', 'tag', 'cover', 'cover_image', 'photos', 'images']);

        $this->dispatch('close-update-modal');
        $this->dispatch('refreshData')->to(CollectionsData::class);
    }

    public function render()
    {
        return view('livewire.admin.collections.collections-update');
    }
}
