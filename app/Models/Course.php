<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    //Eloquent Relationships
    public function school_course(){
        return $this->hasMany(SchoolCourse::class);
    }
}
