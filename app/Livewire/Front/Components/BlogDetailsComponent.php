<?php
namespace App\Livewire\Front\Components;

use App\Models\Blog;
use Livewire\Component;

class BlogDetailsComponent extends Component
{
    public $blog;

    public function mount($id)
    {
        $this->blog = Blog::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.front.components.blog-details-component');
    }
}
