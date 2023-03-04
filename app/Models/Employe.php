<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    public function job()
    {
        return $this->belongsTo(Jobs::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
