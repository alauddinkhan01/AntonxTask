<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function authorsBooks()
    {
        return $this->hasMany(ModelHasBooks::class, 'book_id', 'id')->where('model_type', 'authors');
    }
}
