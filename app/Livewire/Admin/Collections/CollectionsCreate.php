<?php
namespace App\Livewire\Admin\Collections;

use App\Models\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;

class CollectionsCreate extends Component
{
    use WithFileUploads;
    public $title, $tag, $cover_image;
    public $images   = [];
    protected $rules = [
        "title"       => "required|string|min:3",
        "tag"         => "nullable|string",
        "cover_image" => "required|image|mimes:jpg,png,jpeg",
        "images"      => "required|array",
        "images.*"    => "required|image|mimes:jpg,png,jpeg",
    ];
    public function submit()
    {
        $this->validate();
        $collection = Collection::create([
            "title" => $this->title,
            "tag"   => $this->tag,
        ]);
        $collection
            ->addMedia($this->cover_image->getRealPath())
            ->toMediaCollection('cover');
        foreach ($this->images as $image) {
            $collection
                ->addMedia($image->getRealPath())
                ->toMediaCollection('photos');
        }

        $this->reset(["title", "tag", "cover_image", "images"]);
        $this->dispatch("close-add-modal");
        $this->dispatch("refreshData")->to(CollectionsData::class);

    }

    public function render()
    {
        return view('livewire.admin.collections.collections-create');
    }
}
