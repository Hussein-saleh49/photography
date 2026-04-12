<?php
namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;

class BlogsView extends Component
{
    public $record, $name, $description, $image, $category;

    protected $listeners = ["blogShow"];
    public function blogShow($id)
    {
        $this->record      = Blog::findOrFail($id);
        $this->name        = $this->record->name;
        $this->description = $this->record->description;
        $this->category    = $this->record->category?->name;
        $this->image       = $this->record->getFirstMediaUrl('image');

        $this->dispatch("open-show-modal");

    }

    public function render()
    {
        return view('livewire.admin.blogs.blogs-view');
    }
}
