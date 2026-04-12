<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Blog extends Model implements HasMedia
{
    //
    use InteractsWithMedia;
    protected $guarded = ["id"];
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')->singleFile(); 
    }
}
