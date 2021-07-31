<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Tambah Sapi</h5>
        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="py-1">
            <form class="form" novalidate="">
                <div class="form-group">
                    <label class="form-label">Jenis Sapi<span class="text-danger">*</span></label>
                    <select class="custom-select" wire:model="jenis_sapi_id">
                        <option value="">Please Choose</option>
                        @foreach ($jenis_sapis as $item)
                            <option value="{{ $item->id }}"> {{ $item->jenis }} </option>
                        @endforeach
                    </select>
                    @error('jenis_sapi_id')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Ertag<span class="text-danger">*</span></label>
                    <input wire:model="ertag" type="text" class="form-control" placeholder="e.g: T001/QAZ/007">
                    @error('ertag')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Ertag Induk<span class="text-danger">*</span></label>
                    <input wire:model="ertag_induk" type="text" class="form-control" placeholder="e.g: T001/QAZ/007">
                    @error('ertag_induk')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Nama Sapi<span class="text-danger">*</span></label>
                    <input wire:model="nama_sapi" type="text" class="form-control" placeholder="e.g: Sapi Asep">
                    @error('nama_sapi')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir<span class="text-danger">*</span></label>
                    <div wire:ignore class="date" id="appointmentDate" data-target-input="nearest"
                        data-appointmentdate="@this">
                        <input type="text" class="form-control datetimepicker-input" data-target="#appointmentDate"
                            id="appointmentDateInput" data-toggle="datetimepicker" placeholder="Tanggal Lahir">
                    </div>
                    @error('tgl_lahir')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                    <input wire:model="kelamin" type="text" class="form-control" placeholder="e.g: Jantan/Betina">
                    @error('kelamin')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Kondisi Lahir<span class="text-danger">*</span></label>
                    <input wire:model="kondisi_lahir" type="text" class="form-control" placeholder="e.g: Aman">
                    @error('kondisi_lahir')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label">Anak Ke -<span class="text-danger">*</span></label>
                    <input wire:model="anak_ke" type="number" class="form-control" placeholder="e.g: 10">
                    @error('anak_ke')
                        <small class="mt-2 text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Foto Depan<span class="text-danger">*</span></label>
                            <input class="form-control" type="file" id="formFile" wire:model="photo_depan">
                            @error('photo_depan')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror

                            @if ($photo_depan)
                                <img src="{{ $photo_depan->temporaryUrl() }}" width="100%" class="mt-2">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Foto Belakang<span class="text-danger">*</span></label>
                            <input class="form-control" type="file" id="formFile" wire:model="photo_belakang">
                            @error('photo_belakang')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror

                            @if ($photo_belakang)
                                <img src="{{ $photo_belakang->temporaryUrl() }}" width="100%" class="mt-2">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Foto Samping Kiri<span class="text-danger">*</span></label>
                            <input class="form-control" type="file" id="formFile" wire:model="photo_kiri">
                            @error('photo_kiri')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror

                            @if ($photo_kiri)
                                <img src="{{ $photo_kiri->temporaryUrl() }}" width="100%" class="mt-2">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Foto Samping Kanan<span class="text-danger">*</span></label>
                            <input class="form-control" type="file" id="formFile" wire:model="photo_kanan">
                            @error('photo_kanan')
                                <small class="mt-2 text-danger">{{ $message }}</small>
                            @enderror

                            @if ($photo_kanan)
                                <img src="{{ $photo_kanan->temporaryUrl() }}" width="100%" class="mt-2">
                            @endif
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
    <div class="modal-footer">
        <div class="row">
            <div class="col d-flex justify-content-end">
                <button wire:click="save" class="btn btn-primary" type="submit">Save Changes</button>
            </div>
        </div>
    </div>
</div>
