<?php

namespace App\Http\Livewire;

use App\Models\Performa;
use App\Models\Sapi;
use Livewire\Component;

class WireMonPerforma extends Component
{
    public $selectedItemId, $tanggal_performa, $tinggi_badan, $berat_badan, $panjang_badan, $lingkar_dada, $bsc, $sapi_id;

     protected $rules = [
        'tanggal_performa' => 'required',
        'tinggi_badan' => 'required',
        'berat_badan' => 'required',
        'panjang_badan' => 'required',
        'lingkar_dada' => 'required',
        'bsc' => 'required',
        'sapi_id' => 'required',
    ];
    protected $messages = [
        'tanggal_performa.required' => 'this field is required.',
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
        return view('livewire.wire-mon-performa',[
            'sapis' => Sapi::orderBy('nama_sapi','ASC')->get(),
            'perfromas' => Performa::with('sapi')->latest()->get()
        ]);
    }
    public function selectedItem($itemId, $action){
        $this->selectedItemId = $itemId;
        $action == 'delete' ? $this->triggerConfirm() : $this->edit(); 
    }
    public function edit(){
        $data = Performa::find($this->selectedItemId);
        $this->sapi_id = $data->sapi_id;
        $this->tanggal_performa = $data->tanggal_performa;
        $this->tinggi_badan = $data->tinggi_badan;
        $this->berat_badan = $data->berat_badan;
        $this->panjang_badan = $data->panjang_badan;
        $this->lingkar_dada = $data->lingkar_dada;
        $this->bsc = $data->bsc;
    }

    public function save(){
        $this->selectedItemId ?   $this->update() : $this->store();    
    }
    public function store()
    {
        $data = $this->validate();
        $save = Performa::create($data);
        $save ? $this->isSuccess("Data Berhasil Tersimpan") : $this->isError("Data Gagal Tersimpan");

        $this->cleanVars();   
        
    }
    public function update()
    {
         $validateData = [];
        
        $validateData = array_merge($validateData,[
            'tinggi_badan' => 'required',
            'berat_badan' => 'required',
            'panjang_badan' => 'required',
            'lingkar_dada' => 'required',
            'bsc' => 'required',
            'sapi_id' => 'required',
        ]);

        $data = $this->validate($validateData);

        if($this->tanggal_performa){
            $data['tanggal_performa'] = $this->tanggal_performa;
        }

        $save = Performa::find($this->selectedItemId)->update($data);
        $save ? $this->isSuccess("Data Berhasil Tersimpan") : $this->isError("Data Gagal Tersimpan");

        $this->cleanVars();   
    }

    public function delete()
    {
        $delete = Performa::destroy($this->selectedItemId);
        $delete ? $this->isSuccess("Berhasil Mengahapus") : $this->isError("Terjai kesalahan, Gagal Mengahapus");
        $this->cleanVars();
    }
    public function cleanVars(){
        $this->dispatchBrowserEvent('cleanTgl');

        $this->resetErrorBag();
        $this->resetValidation();

        $this->selectedItemId = null;
        $this->sapi_id = null;
        $this->tanggal_performa = null;
        $this->tinggi_badan = null;
        $this->berat_badan = null;
        $this->panjang_badan = null;
        $this->lingkar_dada = null;
        $this->bsc = null;

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
