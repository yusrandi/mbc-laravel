<?php

namespace App\Http\Livewire;

use App\Models\PeriksaKebuntingan;
use App\Models\Sapi;
use Livewire\Component;

class WireMonPeriksaKebuntingan extends Component
{
    public $selectedItemId, $waktu_pk, $metode, $hasil, $sapi_id;

     protected $rules = [
        'waktu_pk' => 'required',
        'metode' => 'required',
        'hasil' => 'required',
        'sapi_id' => 'required',
    ];
    protected $messages = [
        'waktu_pk.required' => 'this field is required.',
        'metode.required' => 'this field is required.',  
        'hasil.required' => 'this field is required.',  
        'sapi_id.required' => 'this field is required.',  
    ];

    protected $listeners = [
        'confirmed',
        'cancelled',
        'delete',
        'isSuccess',
        'isError',
        'refreshParent'=>'$refresh',
    ];
    public function render()
    {
        return view('livewire.wire-mon-periksa-kebuntingan',[
            'periksa_kebuntingans' => PeriksaKebuntingan::latest()->get(),
            'sapis' => Sapi::orderBy('nama_sapi','ASC')->get()
        ]);
    }

    public function selectedItem($itemId, $action){
        $this->selectedItemId = $itemId;
        $action == 'delete' ? $this->triggerConfirm() : $this->edit(); 
    }
    public function edit(){
        $data = PeriksaKebuntingan::find($this->selectedItemId);
        $this->sapi_id = $data->sapi_id;
        $this->waktu_pk = $data->waktu_pk;
        $this->metode = $data->metode;
        $this->hasil = $data->hasil;
    }

    public function save(){
        $this->selectedItemId ?   $this->update() : $this->store();    
    }
    public function store()
    {
        $data = $this->validate();
        $save = PeriksaKebuntingan::create($data);
        $save ? $this->isSuccess("Data Berhasil Tersimpan") : $this->isError("Data Gagal Tersimpan");

        $this->cleanVars();   
        
    }
    public function update()
    {
         $validateData = [];
        
        $validateData = array_merge($validateData,[
            'metode' => 'required',
            'hasil' => 'required',
            'sapi_id' => 'required',
        ]);

        $data = $this->validate($validateData);

        if($this->waktu_pk){
            $data['waktu_pk'] = $this->waktu_pk;
        }

        $save = PeriksaKebuntingan::find($this->selectedItemId)->update($data);
        $save ? $this->isSuccess("Data Berhasil Tersimpan") : $this->isError("Data Gagal Tersimpan");

        $this->cleanVars();   
    }

    public function delete()
    {
        $delete = PeriksaKebuntingan::destroy($this->selectedItemId);
        $delete ? $this->isSuccess("Berhasil Mengahapus") : $this->isError("Terjai kesalahan, Gagal Mengahapus");
        $this->cleanVars();
    }
    public function cleanVars(){
        $this->dispatchBrowserEvent('cleanTgl');

        $this->resetErrorBag();
        $this->resetValidation();

        $this->selectedItemId = null;
        $this->waktu_pk = null;
        $this->metode = null;
        $this->hasil = null;
        $this->sapi_id = null;
    }

    public function triggerConfirm()
    {
        $this->confirm('yakin akan menghapus data ?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'showCancelButton' =>  true, 
            'onConfirmed' => 'delete',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function isSuccess($msg)
    {
        $this->alert('success', $msg, [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
      ]);
    }
    public function isError($msg)
    {
        $this->alert('error', $msg, [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
      ]);
    }
    public function confirmed()
    {
        // Example code inside confirmed callback
    
        $this->alert('success', 'Hello World!', [
            'position' =>  'top-end', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  true, 
            'showConfirmButton' =>  true, 
      ]);
    }
    
    public function cancelled()
    {
        // Example code inside cancelled callback
    
        $this->alert('info', 'Understood');
    }
}
