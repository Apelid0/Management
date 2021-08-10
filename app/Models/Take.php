<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Take extends Model
{
    use HasFactory;

        //Eloquent Relationships
        public function enrol_subject(){
            return $this->belongsTo(EnrolSubject::class);
        }

        public function shift(){
            return $this->belongsTo(Shift::class);
        }
}
