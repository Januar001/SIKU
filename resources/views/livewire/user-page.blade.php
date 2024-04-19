<div class="card">
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            <h3>
                Data User
            </h3>
        </div>
        <div class="pb-2">
            {{-- <livewire:component.AddPegawai> --}}
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Role</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    {{-- @php
                        $startNumber = ($data->currentPage() - 1) * $data->perPage() + 1;
                        // $startNumber = 1;
                    @endphp
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $startNumber++ }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->SubJabatan->nama_sub_jabatan }}<br>
                                <small
                                    class="text-uppercase font-weight-bold">({{ $item->SubJabatan->Jabatan->nama_jabatan }})</small>
                            </td>
                            <td>{{ $item->Pendidikan->nama_pendidikan }}</td>
                            <td>
                                @if ($item->Statuspegawai->id === 1)
                                    <span class="badge text-white rounded-pill bg-success  p-2">Pegawai Tetap</span>
                                @else
                                    <span class="badge text-white rounded-pill bg-warning text-dark p-2">Training</span>
                                @endif



                            </td>
                            <td>
                                <button class="btn btn-warning btn-circle">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button wire:click='delete({{ $item->id }})'
                                    wire:confirm="apakah kamu ingin menghapus {{ $item->nama }}"
                                    class="btn btn-danger btn-circle">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
            {{-- {{ $data->links() }} --}}
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
