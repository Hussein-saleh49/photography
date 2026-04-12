<?php
namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;

class BlogsDelete extends Component
{
    public $record, $name, $blog_id;

    protected $listeners = ['blogDelete'];

    public function blogDelete($id)
    {
        $this->record  = Blog::findOrFail($id);
        $this->blog_id = $this->record->id;

        $this->name = $this->record->name;

        $this->dispatch('open-delete-modal');
    }

    public function submit()
    {
        $blog = Blog::findOrFail($this->blog_id);

        // delete media + record
        $blog->clearMediaCollection('image');
        $blog->delete();

        $this->reset(['blog_id', 'name']);

        $this->dispatch('close-delete-modal');
        $this->dispatch('refreshData')->to(BlogsData::class);
    }

    public function render()
    {
        return view('livewire.admin.blogs.blogs-delete');
    }
}
