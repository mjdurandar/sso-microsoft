<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{   
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function render()
    {
        return view('livewire.register');
    }

    public function storeUser() 
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:8|max:255',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user);

        return $this->redirect('/customers', navigate:true);
    }
}
