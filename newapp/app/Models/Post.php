<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = $this->slugify($value);
    }

    private function slugify($value){
        $slug = str_replace(' ','-',strtolower($value));
        $count = Post::where('slug','LIKE',$slug.'%')->count();
        $suffix = $count ? $count+1:'';
        $slug .= $suffix;
        return $slug;
    }
}
