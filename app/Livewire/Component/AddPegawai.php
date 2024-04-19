<?php

namespace App\Livewire\Component;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Livewire\Component;
use App\Models\Pendidikan;
use App\Models\SubJabatan;

class AddPegawai extends Component
{
    public
        $nama,
        $alamat,
        $status = 1,
        $jabatan = null,
        $sub_jabatan,
        $pendidikan = null;

    public function render()
    {
        $datapendidikan = Pendidikan::all();
        $datajabatan = Jabatan::all();
        $datasubjabatan = SubJabatan::where('jabatan_id', $this->jabatan)->get();

        return view('livewire.component.add-pegawai', [
            'd_pendidikan' => $datapendidikan,
            'd_jabatan' => $datajabatan,
            'd_subjabatan' => $datasubjabatan
        ]);
    }

    public function save()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'sub_jabatan' => 'required',
            'pendidikan' => 'required',
            'status' => 'required',

        ]);

        $save = Pegawai::create(
            [
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'status_pegawai_id' => $this->status,
                'sub_jabatan_id' => $this->sub_jabatan,
                'pendidikan_id' => $this->pendidikan,
            ]
        );

        // session()->flash('success', 'Pegawai Berhasil ditambahkan');

        $this->dispatch('addPegawai');
        
    }
}
