<?php

namespace App\Livewire\Settings;

use Livewire\Component;
use App\Models\Pendidikan;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class PendidikanPage extends Component
{


    use WithPagination;
    #[Title('Pendidikan')]

    protected $listeners = ['addPendidikan'];
    public function render()
    {
        $data = Pendidikan::paginate(5);

        return view('livewire.settings.pendidikan-page', ['data' => $data]);
    }

    public function delete($id)
    {

        Pendidikan::where('id', $id)->first()->delete();

        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Berhasil menghapus Pendidikan!',
            'icon' => 'success',
        ]);
        $this->resetPage();

    }

    public function addPendidikan()
    {
        $this->dispatch('swal', [
            'title' => 'Success!',
            'text' => 'Berhasil Menambahkan Pendidikan',
            'icon' => 'success',
        ]);
        return $this->redirect('/settings/pendidikan');
    }
}
