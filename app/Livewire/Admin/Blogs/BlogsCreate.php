<?php
namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogsCreate extends Component
{
    use WithFileUploads;
    public $name, $description, $image, $category_id;
    protected $rules = [
        "name"        => "required|string|min:3",
        "description" => "nullable|string|min:5|max:255",
        "image"       => "required|image|mimes:jpg,jpeg,png",
        "category_id" => "required|exists:categories,id",
    ];
    protected $validationAttributes = [
        "category_id" => "Category Type",
    ];
    public function submit()
    {
        $this->validate();
        $blog = Blog::create([
            "name"        => $this->name,
            "description" => $this->description,
            "category_id" => $this->category_id,
        ]);
        if ($this->image) {
            $blog
                ->addMedia($this->image)
                ->toMediaCollection('image');
        }

        $this->reset(["name", "description", "image", "category_id"]);
        $this->dispatch("close-add-modal");
        $this->dispatch("refreshData")->to(BlogsData::class);

    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.blogs.blogs-create', compact("categories"));
    }
}
