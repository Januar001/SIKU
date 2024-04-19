<div class="card">
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <h3>
                Data Pendidikan
            </h3>
        </div>
        <div class="pb-2">
            <livewire:settings.component.AddPendidikan>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Pendidikan</th>
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
                            <td>{{ $item->nama_pendidikan }}</td>
                            <td>{{ $item->value }}</td>
                            <td>
                                <button class="btn btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button wire:click='delete({{ $item->id }})'
                                    wire:confirm="apakah kamu ingin menghapus pendidikan {{ $item->nama_pendidikan }}?"
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
