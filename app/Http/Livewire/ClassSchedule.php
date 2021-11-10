<?php

namespace App\Http\Livewire;

use App\Models\Class_schedule;
use Livewire\Component;

class ClassSchedule extends Component
{
    public $class;

    public function mount(){
        $class = Class_schedule::with('teacher','subject')->get();
        $this->class = $class;
//        dd($class);
    }


    public function render()
    {
        return view('livewire.class-schedule');
    }
}
