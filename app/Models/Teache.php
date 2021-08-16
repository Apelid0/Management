<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teache extends Model
{
    use HasFactory;


    //Eloquent Relationships
    public function user(){
        return $this->belongsTo(Work::class);
    }

    public function course_content(){
        return $this->belongsTo(CourseContent::class);
    }
}
