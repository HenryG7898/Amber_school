<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    public function onLogin(){

        $vaild = $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $this->email,
            'password' => $this->password

        ])){

            session()->flash('message','Logged in successfully');
            return redirect('dashboard');

        }else{

            session()->flash('error','Login failed');

        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
