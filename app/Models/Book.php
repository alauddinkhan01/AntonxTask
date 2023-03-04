<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    public function bookAuthors()
    {
        return $this->hasMany(ModelHasBooks::class, 'book_id', 'id')->where('model_type', 'authors');
    }

    public function bookCategories()
    {
        return $this->hasMany(ModelHasBooks::class, 'book_id', 'id')
        ->where('model_type', 'categories')
        ->with('categories');
        

    }
}
