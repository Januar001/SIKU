<?php

namespace App\Livewire\Settings\Component;

use App\Models\Pendidikan;
use Livewire\Component;

class AddPendidikan extends Component
{
    public $nama_pendidikan ;
    public $value= 6 ;

    public function render()
    {
        return view('livewire.settings.component.add-pendidikan');
    }

    public function savePendidikan()
    {
        $this->validate([
            'nama_pendidikan' => 'required',
            'value' => 'required',
        ]);

        Pendidikan::create([
            'nama_pendidikan' => $this->nama_pendidikan,
            'value' => $this->value,
        ]);

        $this->dispatch('addPendidikan');
    }

    public function close()
    {
        $this->reset();
    }
}
