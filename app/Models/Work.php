<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    //Eloquent Relationships
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function school_course(){
        return $this->belongsTo(SchoolCourse::class);
    }

    public function teache(){
        return $this->hasMany(Teache::class);
    }
}
