<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getRouteKeyname()
    {
        return "slug";
    }

    protected $fillable= ['name','slug'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
