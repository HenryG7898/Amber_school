<?php

namespace App\Http\Livewire;

use App\Models\Class_schedule;
use App\Models\Subject;
use App\Models\Teacher_class;
use App\Models\User;
use Livewire\Component;

class TeacherClass extends Component
{
    public $teacher;
    public $class_nm;
    public $teacher_id;
    public $subject_id;
    public $start_time;
    public $end_time;

    protected $rules = [
        'class_nm' => 'required',
        'teacher_id' => 'required',
        'subject_id' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
    ];


    public function classschedule()
    {
        $this->validate();

        Class_schedule::create([
            'class_nm' => $this->class_nm,
            'teacher_id'=> $this->teacher_id,
            'subject_id' => $this->subject_id,
            'start_time'=> $this->start_time,
            'end_time' => $this->end_time,
         ]);

        session()->flash('success', 'Student Added Successfully');


    }

    public function updated()
    {
        $this->validate();
    }



    public function mount(){
        $teacher = User::all();
        $subject = Subject::all();
        $this->teacher = $teacher;
        $this->subject = $subject;
    }

    public function render()
    {
        return view('livewire.teacher-class');
    }
}
