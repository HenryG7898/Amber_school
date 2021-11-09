<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class Addstudent extends Component
{

    public $first_nm;
    public $last_nm;
    public $gender;
    public $DOB;
    public $email;
    public $password = '';
    public $user_type;

    protected $rules = [
        'first_nm' => 'required|max:12',
        'last_nm' => 'required|max:12',
        'gender' => 'required',
        'DOB' => 'required',
        'email' => 'required|email|unique:users',
//        'user_type' => 'required',
        'password' => 'required '
    ];


    public function newstudent()
    {
        $this->validate();

        User::create([
            'first_nm' => $this->first_nm,
            'last_nm'  => $this->last_nm,
            'DOB'  => $this->DOB,
            'gender'  => $this->gender,
            'email' => $this->email,
            'user_type' => 'student',
            'password' => hash::make('Student1234'),
        ]);

        session()->flash('success', 'Student Added Successfully');


    }

    public function updated()
    {
        $this->validate();
    }

    public function mount()
    {
        $this->password = Str::random(10);
    }



    public function render()
    {
        return view('livewire.addstudent');
    }
}
