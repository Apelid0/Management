<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    //Eloquent Relationships
    public function building(){
        return $this->hasMany(Building::class);
    }

    public function school_course(){
        return $this->hasMany(SchoolCourse::class);
    }
}
