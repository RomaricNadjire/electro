<?php

namespace App\Livewire;

use App\Mail\MailToUs;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class MailForm extends Component
{
    #[Validate(['required', 'min: 15'])]
    public $message = '';

    #[Validate(['required', 'min:3', 'email'])]
    public $email;

    public function mount()
    {
        $this->email = auth()->user() ? auth()->user()->email : '';
    }

    public function save()
    {
        $this->validate();
        if(Mail::to(env('ADMIN_EMAIL'))->send(new MailToUs($this->email, $this->message))){
            $this->clearForm();
        }
    }

    public function clearForm(){
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.mail-form');
    }
}
