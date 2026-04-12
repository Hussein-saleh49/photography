<?php
namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class BlogsData extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    protected $listeners       = ["refreshData" => '$refresh'];
    public $search;
    public function updatedsearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $blogs = Blog::where("name","like","%".$this->search."%")->paginate(5);
        return view('livewire.admin.blogs.blogs-data',compact("blogs"));
    }
}
