<?php

namespace App\Livewire;

use App\Models\Avis;
use Livewire\Component;

class AvisForm extends Component
{
    public $contenu = '';
    public $auth_error = '';
    public $success = '';

    protected $rules = [
        'contenu' => ['required', 'string', 'between:6,255',],
    ];


    public function save(){
        if (auth()->check()) {
            $this->validate();

            Avis::create([
                'user_id'=>auth()->id(),
                'contenu'=>$this->contenu,
            ]);

            $this->success = 'Merci d\'voir pris le temps de nous donner votre resenti sur nos services';
            $this->contenu = '';
        }else{
            $this->auth_error = 'Veillez vous connecter d\'abord';
            return redirect()->back();
        }
    }

    public function render()
    {
        return view('livewire.avis-form');
    }
}
