<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Messages;
use App\Models\User;

class Chat extends Component
{
    public $messages;
    public $message;
    public $user;
    public $user_id;

    public function send() {
        $penis = Messages::create([
            'chat_id' => 1,
            'user_id' => $this->user_id,
            'message' => $this->message
        ]);
    }
    public function update() {
        $this->messages = Messages::all();
    }

    public function mount($user) {
        $this->user = $user;
        $usr = User::where('name', $this->user)->first();
        $this->user_id = $usr->id;
        $this->messages = Messages::all();
    }

    public function render()
    {
        return view('livewire.chat');
    }
}
