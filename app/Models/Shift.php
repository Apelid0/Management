<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    public function class_room(){
        return $this->belongsTo(ClassRoom::class);
    }

    public function course_content(){
        return $this->belongsTo(CourseContent::class);
    }

    public function take(){
        return $this->hasMany(Take::class);
    }
}
