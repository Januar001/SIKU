<?php

namespace App\Livewire;

use App\Models\Report;
use Livewire\Component;
use Livewire\Attributes\Title;

class ReportPage extends Component
{
    #[Title('Halaman Report')]
    public function render()
    {
        $data = Report::with('users')->get();

        // dd($data);

        return view('livewire.report-page', ['data' => $data]);
    }
}
