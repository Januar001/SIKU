<?php

namespace App\Livewire\Settings\Component;

use App\Models\Jabatan;
use Livewire\Component;
use App\Models\SubJabatan;

class AddSubjabatan extends Component
{
    public $jabatan_id;
    public $nama_sub_jabatan;
    public $value = 6;

    public function render()
    {
        $d_jabatan = Jabatan::all();
        return view('livewire.settings.component.add-subjabatan', ['d_jabatan' => $d_jabatan]);
    }

    public function saveSubjabatan()
    {
        $this->validate([
            'jabatan_id' => 'required',
            'nama_sub_jabatan' => 'required',
            'value' => 'required',
        ]);

        SubJabatan::create([
            'jabatan_id' => $this->jabatan_id,
            'nama_sub_jabatan' => $this->nama_sub_jabatan,
            'value' => $this->value,
        ]);
        $this->resetPage();
        $this->dispatch('addSubjabatan');
    }

    public function close()
    {
        $this->reset();
    }
}
