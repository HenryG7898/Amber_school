<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_class extends Model
{
    use HasFactory;

    protected $fillable = [
      'student_id',
      'class_id'
    ];

    public function student(){
        return $this->belongsTo(User::class);
    }
    public function room(){
        return $this->belongsTo(Class_schedule::class,'class_id','id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class,'class_id','id');
    }
}
