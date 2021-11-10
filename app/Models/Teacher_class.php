<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_class extends Model
{
    use HasFactory;

    protected $table = 'teacher-classes';

    protected $fillable =[
        'teacher_id',
        'subject_id',
        'class_nm',
        'start_time',
        'end_time'
    ];

}
