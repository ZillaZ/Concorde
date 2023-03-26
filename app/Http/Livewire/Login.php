<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class Login extends Component {
    public $password;
    public $email;
    public $status;

    protected $rules = [
        'password' => 'required',
        'email' => 'required|email'
    ];

    public function login()
    {
        $this->validate();

        $user = User::where('email', '=', $this->email)
        ->firstOr(function() {
            $this->status = 'Login Failed. Check your credentials.';
        });
        $dPass = Crypt::decryptString($user->password);
        if($dPass == $this->password) {
            $this->status = 'OK';
        }else{
            $this->status = 'Login Failed. Check your credentials.';
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}