<?php

namespace App\Http\Livewire;

use App\Models\Class_schedule;
use App\Models\Student_class;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Studentclass extends Component
{

    public $student_id;
    public $class_id;
    public $class;
    public $student;

    protected $rules = [
        'student_id' => 'required|max:12',
        'class_id' => 'required|max:12',
    ];


    public function assignclass()
    {
        $this->validate();

        Student_class::create([
            'student_id' => $this->student_id,
            'class_id'  => $this->class_id,
        ]);

        session()->flash('success', 'Student Assign To a Class');


    }

    public function mount(){
        $class = Class_schedule::with('subject')->get();
        $student = User::all();
        $this->class = $class;
        $this->student = $student;
    }

    public function updated()
    {
        $this->validate();
    }


    public function render()
    {
        return view('livewire.studentclass');
    }
}
