<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelHasBooks extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class, 'model_id', 'id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'model_id', 'id');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'model_id', 'id');
    }
}
