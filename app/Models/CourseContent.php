<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    use HasFactory;

    //Eloquent Relationships
    public function school_course(){
        return $this->belongsTo(SchoolCourse::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function teache(){
        return $this->hasMany(Teache::class);
    }

    public function enrol_subject(){
        return $this->hasMany(EnrolSubject::class);
    }

    public function shift(){
        return $this->hasMany(Shift::class);
    }

}
