<?php

namespace App\Http\Livewire;

use App\Models\Subject;
use App\Models\User;
use Livewire\Component;

class TeacherClass extends Component
{
    public $teacher;

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
