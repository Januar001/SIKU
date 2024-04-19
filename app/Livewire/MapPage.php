<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class MapPage extends Component
{
    #[Title('Halaman Map')]
    public function render()
    {
        return view('livewire.map-page');
    }
}
