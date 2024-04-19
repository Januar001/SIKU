<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAddpegawai">
        <i class="fa fa-plus"></i> Create
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalAddpegawai" tabindex="-1" aria-labelledby="modalAddpegawaiLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddpegawaiLabel">Tambah data pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit='save'>
                        <div class="form-group">
                            <label for="nama">Nama Pegawai</label>
                            <input autofocus wire:model="nama" type="text"
                                class="form-control  @error('nama') is-invalid @enderror" id="nama"
                                aria-describedby="emailHelp" >
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <select wire:model="pendidikan"
                                class="form-control @error('pendidikan') is-invalid @enderror" id="pendidikan">
                                <option value="">-- Pilih salah satu --</option>
                                @foreach ($d_pendidikan as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_pendidikan }}</option>
                                @endforeach
                            </select>
                            @error('pendidikan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jabatan">Jabatan</label>
                            <select wire:model.live="jabatan"
                                class="form-control @error('jabatan') is-invalid @enderror" id="jabatan">
                                <option value="">-- Pilih salah satu --</option>
                                @foreach ($d_jabatan as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                @endforeach
                            </select>
                            @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @if ($d_jabatan !== null)
                        <div class="form-group">
                            <label for="sub_jabatan">Sub Jabatan</label>
                            <select wire:model="sub_jabatan"
                                class="form-control @error('sub_jabatan') is-invalid @enderror" id="sub_jabatan">
                                <option value="">-- Pilih salah satu --</option>
                                @foreach ($d_subjabatan as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_sub_jabatan }}</option>
                                @endforeach
                            </select>
                            @error('sub_jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="status">Status Kepegawaian</label><br>
                            <div class="form-check form-check-inline">
                                <input wire:model="status" class="form-check-input" type="radio" name="status" id="1"
                                    value="1">
                                <label class="form-check-label" for="1">Tetap</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="2" value="2">
                                <label class="form-check-label" for="2">Training</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea wire:model="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Let's move the footer buttons inside the form -->
                        <div class="modal-footer mt-5">
                            <!-- Close button -->
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            <!-- Save button -->
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $('#modalAddpegawai').on('shown.bs.modal', function () {
  $('#nama').trigger('focus')
})
    </script>
@endpush