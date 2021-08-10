<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;




    //Eloquent Relationships
    public function class_room(){
        return $this->hasMany(ClassRoom::class);
    }

    public function school(){
        return $this->belongsTo(School::class);
    }
}
