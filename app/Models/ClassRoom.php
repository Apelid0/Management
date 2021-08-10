<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;



    //Eloquent Relationships
    public function building(){
        return $this->belongsTo(Building::class);
    }

    public function shift(){
        return $this->hasMany(Shift::class);
    }
}
