<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class ReportPage extends Component
{
    #[Title('Halaman Report')]
    public function render()
    {
        return view('livewire.report-page');
    }
}
