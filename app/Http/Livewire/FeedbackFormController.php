<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\FeedbackMail;
use Mail;

class FeedbackFormController extends Component
{
    public $name, $phone, $email, $mess;

    protected $rules = [
        'name' => 'required|min:2|max:16',
        'phone' => 'required|numeric',
        'email' => 'required|email',
    ];

    public function submit(){
        $this->validate();
        
        $feedbackMail = new FeedbackMail($this->name, $this->phone, $this->email, $this->mess);
        Mail::to($this->email)->send($feedbackMail);

        $this->addError('success', 'В ближайшие время в вами свяжутся');
    }

    public function render()
    {
        return view('livewire.feedback-form-controller');
    }
}
