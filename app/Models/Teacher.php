<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function classes() 
    {
        return $this->belongsToMany(Category::class); // may try add to belongsToMany(Category::class, 'table_name'); but don't know
    }
}
