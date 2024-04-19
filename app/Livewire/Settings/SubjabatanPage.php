<?php

namespace App\Livewire\Settings;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Livewire\Component;
use App\Models\SubJabatan;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class SubjabatanPage extends Component
{



    use WithPagination;
    #[Title('Sub Jabatan')]

    protected $listeners = ['swal', 'addSubjabatan'];

    public $option = 'all';

    public function render()
    {
        $jabatan = SubJabatan::selectRaw('jabatan_id, count(*) as total')
            ->with('Jabatan:id,nama_jabatan')
            ->groupBy('jabatan_id')
            ->get();



        // Jika $option tidak kosong, kita hanya ingin menampilkan data sub-jabatan yang memiliki jabatan_id sesuai dengan $option
        if ($this->option !== 'all') {
            $this->resetPage();
            $data = SubJabatan::with('Jabatan')
                ->where('jabatan_id', $this->option)
                ->orderBy('jabatan_id', 'asc')
                ->paginate(5);
        } else {
            // Jika $option kosong, kita ingin menampilkan semua data sub-jabatan
            $data = SubJabatan::with('Jabatan')
                ->orderBy('jabatan_id', 'asc')
                ->paginate(5);
        }

        return view('livewire.settings.subjabatan-page', ['data' => $data, 'jabatan' => $jabatan]);
    }

    public function delete($id)
    {
        $pegawai = Pegawai::where('sub_jabatan_id', $id)->first();

        $subjabatan = SubJabatan::where('id', $id)->first();

        if ($pegawai === null) {
            $subjabatan->delete();
            $this->dispatch('swal', [
                'title' => 'Sukses!',
                'text' => 'Sub Jabatan Berhasil di Hapus!',
                'icon' => 'success',
            ]);
            $this->resetPage();
        } else {
            $this->dispatch('swal', [
                'title' => 'Gagal!',
                'text' => 'Masih ada Pegawai yang menggunakan Subjabatan ini',
                'icon' => 'error',
            ]);
            $this->resetPage();
            $this->reset();
        }
    }

    public function addSubjabatan()
    {
        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Berhasil Menambahkan Sub Jabatan',
            'icon' => 'success',
        ]);

        return $this->redirect('/settings/sub-jabatan');
    }
}
