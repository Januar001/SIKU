<?php

namespace App\Livewire\Settings;

use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\SubJabatan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class JabatanPage extends Component
{


    use WithPagination;
    #[Title('Jabatan')]

    protected $listeners = ['swal', 'addJabatan'];

    public function render()
    {

        $data = Jabatan::paginate(5);
        return view('livewire.settings.jabatan-page', ['data' => $data]);
    }

    public function delete($id)
    {
        $jabatan = SubJabatan::where('jabatan_id', $id)->first();

        // dd($jabatan);

        if ($jabatan === null) {
            // dd('Berhasil');
            Jabatan::where('id', $id)->first()->delete();
            $this->dispatch('swal', [
                'title' => 'Sukses!',
                'text' => 'Jabatan Berhasil di Hapus!',
                'icon' => 'success',
            ]);
            $this->resetPage();
        } else {
            // dd('Gagal Cak');
            $this->dispatch('swal', [
                'title' => 'Gagal!',
                'text' => 'Masih ada Sub Jabatan yang terhubung!',
                'icon' => 'error',
            ]);
            $this->resetPage(); 
        }
    }

    public function addJabatan()
    {
        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Berhasil Menambahkan Jabatan',
            'icon' => 'success',
        ]);

        return $this->redirect('/settings/jabatan');
    }
}
