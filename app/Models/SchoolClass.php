<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    public function SchoolClassStudents()
    {
        return $this->hasMany('App\Models\Student', 'school_class_id', 'id');
    }

    
    public function teachers() 
    {
        return $this->belongsToMany(Teacher::class);
    }

}
