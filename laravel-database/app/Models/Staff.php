<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';

    public function subjects(){
        return $this->belongsToMany(Subject::class,'subject_teacher_class','staff_id','subject_id');
    }
    public function classes(){
        return $this->belongsToMany(Class_Name::class,'subject_teacher_class','staff_id','class_id');
    }
}
