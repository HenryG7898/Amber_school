<?php

namespace App\Http\Livewire;

use App\Models\Subject;
use Livewire\Component;

class Addsubject extends Component
{
    public $subject_nm;


    protected $rules = [
        'subject_nm' => 'required',

    ];


    public function newsubject()
    {
        $this->validate();

        Subject::create([
            'subject_nm' => $this->subject_nm,
        ]);

        session()->flash('success', 'Subject Added Successfully');


    }

    public function updated()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.addsubject');
    }
}
