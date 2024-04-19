<div class="card">
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <h3>
                Data Sub Jabatan
            </h3>
        </div>
        <div class="pb-2 row">
            <div class="col-md-8">
                <livewire:settings.component.AddSubjabatan>
            </div>
            <div class="col-md-4">
                <select class="form-control" wire:model.live="option">
                    <option value="all">All Data</option>
                    @foreach ($jabatan as $item)
                        <option value="{{ $item->Jabatan->id }}">{{ $item->Jabatan->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama sub Jabatan</th>
                        <th scope="col">Value</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $startNumber = ($data->currentPage() - 1) * $data->perPage() + 1;
                        // $startNumber = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $startNumber++ }}</th>
                            <td>{{ $item->nama_sub_jabatan }}<br><small
                                    class="font-weight-bold badge badge-primary text-uppercase">({{ $item->Jabatan->nama_jabatan }})</small>
                            </td>
                            <td>{{ $item->value }}</td>
                            <td>
                                <button class="btn btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button wire:click='delete({{ $item->id }})'
                                    wire:confirm="apakah kamu ingin menghapus Sub Jabatan {{ $item->nama_sub_jabatan }} pada ({{ $item->Jabatan->nama_jabatan }})?"
                                    class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>


@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('livewire:initialized', () => {

            @this.on('swal', (event) => {
                const data = event
                swal.fire({
                    icon: data[0]['icon'],
                    title: data[0]['title'],
                    text: data[0]['text'],
                })
            })
        })
    </script>
@endpush
