<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';


    public function class_name(){
        return $this->belongsTo(Class_Name::class,'class_id');
    }
}
