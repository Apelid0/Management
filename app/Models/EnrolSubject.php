<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrolSubject extends Model
{
    use HasFactory;

    //Eloquent Relationships
    public function enrol(){
        return $this->belongsTo(Enrol::class);
    }

    //Eloquent Relationships
    public function course_content(){
        return $this->belongsTo(CourseContent::class);
    }

    public function take(){
        return $this->hasMany(Take::class);
    }
}
