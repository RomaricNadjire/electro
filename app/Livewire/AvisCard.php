<?php

namespace App\Livewire;

use App\Models\Avis;
use Livewire\Component;

class AvisCard extends Component
{
    public $item;

    public function mount($item){
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.avis-card');
    }
}
