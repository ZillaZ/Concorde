<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class Register extends Component
{
    public $name;
    public $password;
    public $email;
    public $encryptedPassw;
    public $created;

    protected $rules = [
        'name' => 'required|min:6|max:12',
        'password' => 'required|min:8|max:32',
        'email' => 'required|email'
    ];

    public function save()
    {
        $this->validate();
        $this->encryptedPassw = Crypt::encryptString($this->password);
        $new_user = User::where('email', '=', $this->email)->firstOr(function() {
            User::create([
                'name' => $this->name,
                'password' => $this->encryptedPassw,
                'email' => $this->email
            ]);
            $this->created = 'Account created!';
        });
    }

    public function render()
    {
        return view('livewire.register');
    }
}