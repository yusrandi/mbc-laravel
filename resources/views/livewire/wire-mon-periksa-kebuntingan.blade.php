 <div class="row">
     <div class="col-xl-3 col-lg-4">
         <div class="card">
             <div class="card-header">
                 <div class="card-title">Periksa Kebuntingan</div>
             </div>
             <div class="card-body">
                 <div class="text-center mb-5">
                     <div class="widget-user-image">
                         <img alt="User Avatar" class="rounded-circle  mr-3"
                             src="{{ URL::asset('assets/images/users/2.jpg') }}">
                     </div>
                 </div>
                 <div class="form-group">
                     <label>Waktu PK<span class="text-danger">*</span></label>
                     <div wire:ignore class="date" id="appointmentDate" data-target-input="nearest"
                         data-appointmentdate="@this">
                         <input type="text" class="form-control datetimepicker-input" data-target="#appointmentDate"
                             id="appointmentDateInput" data-toggle="datetimepicker" placeholder="Waktu PK">
                     </div>
                     @error('waktu_pk')
                         <small class="mt-2 text-danger">{{ $message }}</small>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label class="form-label">Metode<span class="text-danger">*</span></label>
                     <input wire:model="metode" type="text" class="form-control" placeholder="e.g: Metode Asep">
                     @error('status')
                         <small class="mt-2 text-danger">{{ $message }}</small>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label class="form-label">Hasil<span class="text-danger">*</span></label>
                     <input wire:model="hasil" type="text" class="form-control" placeholder="e.g: Hasilnya  . . .">
                     @error('hasil')
                         <small class="mt-2 text-danger">{{ $message }}</small>
                     @enderror
                 </div>
                 <div class="form-group">
                     <label class="form-label">Pilih Sapi<span class="text-danger">*</span></label>
                     <select class="custom-select" wire:model="sapi_id">
                         <option value="">Please Choose</option>
                         @foreach ($sapis as $item)
                             <option value="{{ $item->id }}"> {{ $item->nama_sapi }} </option>
                         @endforeach
                     </select>
                     @error('sapi_id')
                         <small class="mt-2 text-danger">{{ $message }}</small>
                     @enderror
                 </div>
             </div>
             <div class="card-footer text-right">
                 <button wire:click="save" class="btn btn-primary">Submit</button>
             </div>
         </div>
     </div>
     <div class="col-xl-9 col-lg-8">
         <div class="card">
             <div class="card-header">
                 <div class="card-title">Tabel Ternak</div>
             </div>
             <div class="card-body">
                 <div class="table-responsive">
                     <table class="table table-hover card-table table-vcenter text-nowrap">

                         @if (count($periksa_kebuntingans) != 0)
                             <thead>
                                 <tr>
                                     <th>#</th>
                                     <th>Waktu PK</th>
                                     <th>Metode</th>
                                     <th>Hasil</th>
                                     <th>Sapi</th>
                                     <th class="text-right">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 @foreach ($periksa_kebuntingans as $item)
                                     <tr>
                                         <td>{{ $loop->iteration }}</td>
                                         <td>{{ $item->waktu_pk }}</td>
                                         <td>{{ $item->metode }}</td>
                                         <td>{{ $item->hasil }}</td>
                                         <td>{{ $item->sapi->nama_sapi }}</td>
                                         <td class="text-right">
                                             <i wire:click="selectedItem({{ $item->id }},'update')"
                                                 class="fe fe-edit f-16 btn btn-success" style="cursor:pointer"></i>
                                             <i wire:click="selectedItem({{ $item->id }},'delete')"
                                                 class="fe fe-trash-2 f-16 btn btn-danger" style="cursor:pointer"></i>
                                         </td>
                                     </tr>
                                 @endforeach
                             </tbody>
                         @else
                             There no Data Yet
                         @endif



                     </table>
                 </div>
             </div>

         </div>
     </div>
 </div>
