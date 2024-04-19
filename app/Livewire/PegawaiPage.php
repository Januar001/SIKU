<?php

namespace App\Livewire;

use App\Models\Pegawai;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Title;



class PegawaiPage extends Component
{

    #[Title('Halaman Pegawai')]

    protected $listeners = ['addPegawai'];

    use WithPagination;

    public function render()
    {
        $data = Pegawai::with('Statuspegawai', 'SubJabatan', 'SubJabatan.Jabatan', 'Pendidikan')->paginate(5);

        // dd($data);

        return view('livewire.pegawai-page', ['data' => $data]);
    }

    public function addPegawai()
    {
        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Berhasil Menambahkan Pegawai',
            'icon' => 'success',
        ]);

        return $this->redirect('/pegawai');
    }

    public function delete($id)
    {
        Pegawai::where('id', $id)->first()->delete();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Berhasil menghapus Pegawai',
            'icon' => 'success',
        ]);
    }
}
