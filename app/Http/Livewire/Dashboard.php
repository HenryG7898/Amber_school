<?php

namespace App\Http\Livewire;

use App\Models\Subject;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = User::all();
        $subject = Subject::all();
        return view('livewire.dashboard',['user' => $user,'subject'=>$subject]);
    }
}
