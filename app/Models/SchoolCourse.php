<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Env;

class SchoolCourse extends Model
{
    use HasFactory;

    public function school(){
        return $this->belongsTo(School::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function course_content(){
        return $this->hasMany(CourseContent::class);
    }

    public function enrol(){
        return $this->hasMany(Enrol::class);
    }
}
