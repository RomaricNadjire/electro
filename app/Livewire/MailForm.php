<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class MailForm extends Component
{
    #[Validate(['required', 'min:3', 'alpha'])]
    public $message = '';
    
    #[Validate(['required', 'min:3', 'email'])]
    public $email;

    public function mount(){
        $this->email = auth()->user()->email;
    }

    public function save(){
        $this->validate();

    }

    public function render()
    {
        return view('livewire.mail-form');
    }
}
