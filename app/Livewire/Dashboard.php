<?php

namespace App\Livewire;

use App\Models\Pegawai;
use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{

    #[Title('Halaman Dashboard')]

    public function render()
    {
        return view('livewire.dashboard');
    }
}
