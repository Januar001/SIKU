<?php

namespace App\Livewire;

use App\Models\Report;
use Livewire\Component;
use Livewire\Attributes\Title;

class MapPage extends Component
{
    #[Title('Halaman Map')]
    public function render()
    {

        $data = Report::with('users')->get();

        return view('livewire.map-page', ['data' => $data]);
    }
}
