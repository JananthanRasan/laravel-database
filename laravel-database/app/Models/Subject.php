<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';

    public function class_names(){
        return $this->belongsToMany(Class_Name::class,'subject_class', 'subject_id', 'class_id');
    }
    public function teachers(){
        return $this->belongsToMany(Staff::class,'subject_teacher_class','subject_id','staff_id');
    }
}
