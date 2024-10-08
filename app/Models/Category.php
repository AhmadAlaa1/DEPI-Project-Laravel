<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Category extends Model
{
    use HasFactory;
    use InteractsWithMedia ;

    protected $fillable = ['name_ar,name_en'];
    protected $table = 'categories';


    // public function articles()
    // {
    //     return $this->hasMany(Article::class);
    // }
}
