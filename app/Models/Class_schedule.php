<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_schedule extends Model
{
    use HasFactory;
    protected $table = 'class-schedules';

    protected $fillable =[
        'teacher_id',
        'subject_id',
        'class_nm',
        'start_time',
        'end_time'
    ];

    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id','id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
