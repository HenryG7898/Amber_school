<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_nm'
    ];

    public function schedule(){
        return $this->hasMany(Class_schedule::class);
    }
}
