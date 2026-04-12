<?php
namespace App\Livewire\Front\Components;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;

class BlogSidebarComponent extends Component
{
    public $categories;
    public $popularBlogs;
    public $archives;

    public function mount()
    {

        $this->categories = Category::all();

        $this->popularBlogs = Blog::latest()->take(3)->get();

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
        return view('livewire.front.components.blog-sidebar-component');
    }
}
