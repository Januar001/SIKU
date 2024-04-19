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
                    <form wire:submit='saveSubjabatan'>
                        <div class="form-group">
                            <label for="jabatan_id">Jabatan</label>
                            <select wire:model="jabatan_id"
                                class="form-control @error('jabatan_id') is-invalid @enderror" id="jabatan_id">
                                <option value="">-- Pilih salah satu --</option>
                                @foreach ($d_jabatan as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_jabatan }}</option>
                                @endforeach
                            </select>
                            @error('jabatan_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_sub_jabatan">Nama Sub Jabatan</label>
                            <input autofocus wire:model.lazy="nama_sub_jabatan" type="text"
                                class="form-control  @error('nama_sub_jabatan') is-invalid @enderror"
                                id="nama_sub_jabatan">
                            @error('nama_sub_jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="formControlRange">Value : <span
                                    class="btn-sm btn-primary btn-circle">{{ $value }}</span> </label>
                            <input wire:model.live="value" min="3" max="10" type="range"
                                class="form-control-range" id="formControlRange">
                        </div>

                        <!-- Let's move the footer buttons inside the form -->
                        <div class="modal-footer mt-5">
                            <!-- Close button -->
                            <button wire:click='close' type="button" class="btn btn-secondary"
                                data-dismiss="modal">Close</button>

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
        $('#modalAddpegawai').on('shown.bs.modal', function() {
            $('#nama').trigger('focus')
        })
    </script>
@endpush
