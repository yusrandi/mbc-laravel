<?php

namespace App\Http\Livewire;

use App\Models\InsiminasiBuatan;
use App\Models\Sapi;
use App\Models\Strow;
use Livewire\Component;

class WireMonInsiminasiBuatan extends Component
{
    public $selectedItemId, $waktu_ib, $dosis_ib, $strow_id, $sapi_id;

     protected $rules = [
        'waktu_ib' => 'required',
        'dosis_ib' => 'required',
        'strow_id' => 'required',
        'sapi_id' => 'required',
    ];
    protected $messages = [
        'waktu_ib.required' => 'this field is required.',
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
        return view('livewire.wire-mon-insiminasi-buatan',[
            'sapis' => Sapi::orderBy('nama_sapi','ASC')->get(),
            'strows' => Strow::orderBy('kode_batch','ASC')->get(),
            'insiminasi_buatans' => InsiminasiBuatan::latest()->get()
        ]);
    }
    public function selectedItem($itemId, $action){
        $this->selectedItemId = $itemId;
        $action == 'delete' ? $this->triggerConfirm() : $this->edit(); 
    }
    public function edit(){
        $data = InsiminasiBuatan::find($this->selectedItemId);
        $this->sapi_id = $data->sapi_id;
        $this->strow_id = $data->strow_id;
        $this->waktu_ib = $data->waktu_ib;
        $this->dosis_ib = $data->dosis_ib;
    }

    public function save(){
        $this->selectedItemId ?   $this->update() : $this->store();    
    }
    public function store()
    {
        $data = $this->validate();
        $save = InsiminasiBuatan::create($data);
        $save ? $this->isSuccess("Data Berhasil Tersimpan") : $this->isError("Data Gagal Tersimpan");

        $this->cleanVars();   
        
    }
    public function update()
    {
         $validateData = [];
        
        $validateData = array_merge($validateData,[
            'dosis_ib' => 'required',
            'strow_id' => 'required',
            'sapi_id' => 'required',
        ]);

        $data = $this->validate($validateData);

        if($this->waktu_ib){
            $data['waktu_ib'] = $this->waktu_ib;
        }

        $save = InsiminasiBuatan::find($this->selectedItemId)->update($data);
        $save ? $this->isSuccess("Data Berhasil Tersimpan") : $this->isError("Data Gagal Tersimpan");

        $this->cleanVars();   
    }

    public function delete()
    {
        $delete = InsiminasiBuatan::destroy($this->selectedItemId);
        $delete ? $this->isSuccess("Berhasil Mengahapus") : $this->isError("Terjai kesalahan, Gagal Mengahapus");
        $this->cleanVars();
    }
    public function cleanVars(){
        $this->dispatchBrowserEvent('cleanTgl');

        $this->resetErrorBag();
        $this->resetValidation();

        $this->selectedItemId = null;
        $this->sapi_id = null;
        $this->strow_id = null;
        $this->waktu_ib = null;
        $this->dosis_ib = null;

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
