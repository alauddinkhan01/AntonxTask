<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function categoryBooks()
    {
        return $this->hasMany(ModelHasBooks::class, 'book_id', 'id')->where('model_type', 'authors');
    }
}
