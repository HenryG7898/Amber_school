<?php

namespace App\Http\Livewire;

use Auth;
use App\Models\Student_class;
use Livewire\Component;

class Studentshecdule extends Component
{

    public function mount(){
        $class = Student_class::with('room','student','subject')->get();
        $this->class = $class;
//        dd($class);
    }



    public function render()
    {
        return view('livewire.studentshecdule');
    }
}
