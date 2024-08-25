<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\title;


class Register extends Component
{

    #[Title('Register')]
    #[Layout('components.layouts.auth')]
    public $name, $email, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function register(){

        $validate = $this->validate([
            "name" => "required|min:2|max:30",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:8|confirmed",
        ]);

        $validate["password"] = Hash::make($validate["password"]);
        User::create($validate);
        session()->flash("success","Registration successful done! please login now.");
        $this->redirectRoute('login', navigate: true);
        
       // dd($validate);
    }


}
