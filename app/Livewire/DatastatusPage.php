<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class DatastatusPage extends Component
{
    #[Title('Data Status')]

    public function render()
    {
        return view('livewire.datastatus-page');
    }
}
