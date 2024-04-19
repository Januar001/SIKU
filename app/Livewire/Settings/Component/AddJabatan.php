<?php

namespace App\Livewire\Settings\Component;

use App\Models\Jabatan;
use Livewire\Component;

class AddJabatan extends Component
{

    public $nama_jabatan;
    public $value = 6;

    public function render()
    {
        return view('livewire.settings.component.add-jabatan');
    }

    public function saveJabatan()
    {
        $this->validate([
            'nama_jabatan' => 'required|unique:jabatan,nama_jabatan',
            'value' => 'required',
        ]);

        Jabatan::create([
            'nama_jabatan' => $this->nama_jabatan,
            'value' => $this->value,
        ]);

        $this->dispatch('addJabatan');
    }

    public function close()
    {
        $this->reset();
    }
}
