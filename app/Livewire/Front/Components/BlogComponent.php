<?php

namespace App\Livewire\Front\Components;

use App\Models\Blog;
use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        $blogs = Blog::paginate(5);
        return view('livewire.front.components.blog-component',get_defined_vars());
    }
}
