<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id', 'client', 'date', 'budget', 'duration'];

    public function getProjectGalleryImages()
    {
        return $this->hasMany(ProjectGallery::class, 'project_id', 'id');
    }

    public function getProjectCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
