<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;
use App\Mail\SubSucc;

class SubscribeFooteer extends Component
{
    public $email;

    protected $rules = [
        'email' => 'required|email'
    ];

    public function submit(){
        $this->validate();
        
        $subMess = new SubSucc();
        Mail::to($this->email)->send($subMess);

        $this->addError('success', '200');
    }

    public function render()
    {
        return view('livewire.subscribe-footeer');
    }
}
