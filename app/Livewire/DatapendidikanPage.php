<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class DatapendidikanPage extends Component
{
    #[Title('Data Pendidikan')]

    public function render()
    {
        return view('livewire.datapendidikan-page');
    }

    
}
