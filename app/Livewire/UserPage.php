<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class UserPage extends Component
{
    #[Title('Halaman User')]
    public function render()
    {
        return view('livewire.user-page');
    }
}
