<?php
namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class BlogsUpdate extends Component
{
    use WithFileUploads;
    public $name, $description, $image, $category_id, $old_image, $blog_id;
    protected $rules = [
        "name"        => "required|string|min:3",
        "description" => "nullable|string|min:5|max:255",
        "image"       => "nullable|image|mimes:jpg,jpeg,png",
        "category_id" => "required|exists:categories,id",
    ];
    protected $validationAttributes = [
        "category_id" => "Category Type",
    ];
    protected $listeners = ['blogUpdate'];

    public function blogUpdate($id)
    {
        $blog = Blog::findOrFail($id);

        $this->blog_id     = $blog->id;
        $this->name        = $blog->name;
        $this->description = $blog->description;
        $this->category_id = $blog->category_id;

        $this->old_image = $blog->getFirstMediaUrl('image');

        $this->resetValidation();
        $this->dispatch('open-update-modal');
    }

    public function submit()
    {
        $this->validate();

        $blog = Blog::findOrFail($this->blog_id);

        // update text
        $blog->update([
            'name'        => $this->name,
            'description' => $this->description,
            'category_id' => $this->category_id,
        ]);

        // update cover
        if ($this->image) {

            $blog->clearMediaCollection('image');

            $blog->addMedia($this->image)
                ->toMediaCollection('image');
        }
        $this->reset(["name", "description", "image", "category_id","blog_id"]);

        $this->dispatch('close-update-modal');
        $this->dispatch('refreshData')->to(BlogsData::class);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.blogs.blogs-update', get_defined_vars());
    }
}
