<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalAddPendidikan">
        <i class="fa fa-plus"></i> Create
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalAddPendidikan" tabindex="-1"
        aria-labelledby="modalAddPendidikanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddPendidikanLabel">Tambah data Pendidikan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit='savePendidikan'>
                        <div class="form-group">
                            <label for="nama_pendidikan">Nama Pendidikan</label>
                            <input autofocus wire:model="nama_pendidikan" type="text"
                                class="form-control  @error('nama_pendidikan') is-invalid @enderror"
                                id="nama_pendidikan">
                            @error('nama_pendidikan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="formControlRange">Value : <span class="btn-sm btn-primary btn-circle">{{ $value
                                    }}</span> </label>
                            <input wire:model.live="value" min="3" max="10" type="range" class="form-control-range"
                                id="formControlRange">
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
    $('#modalAddPendidikan').on('shown.bs.modal', function() {
            $('#nama').trigger('focus')
        })
</script>
@endpush