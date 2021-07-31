<?php

namespace App\Http\Livewire;

use App\Models\Sapi;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class WireSapi extends Component
{
    public $selectedItemId;
    protected $listeners = [
        'confirmed',
        'cancelled',
        'delete',
        'isSuccess',
        'isError',
        'refreshParent'=>'$refresh',
        'isUpdate'
    ];


    public function render()
    {
        return view('livewire.wire-sapi',[
            'datas' => Sapi::with('jenis_sapi')->latest()->get()
        ]);
    }

    public function selectedItem($item, $action)
    {
        $this->selectedItemId = $item;

        if($action == 'delete'){
            $this->triggerConfirm();
        }else{
            $this->emit('getModelId',$this->selectedItemId);
            $this->dispatchBrowserEvent('openModal');
        }
    }
    public function delete()
    {
        $path = "public/photos/";
        $path_thumb = "public/photos_thumb/";
        $data = Sapi::find($this->selectedItemId);
        $delete = Sapi::destroy($this->selectedItemId);
        
        if(Storage::exists($path.$data->photo_depan)){
            Storage::delete([
                $path.$data->photo_depan,
                $path.$data->photo_belakang,
                $path.$data->photo_kanan,
                $path.$data->photo_kiri,
                $path_thumb.$data->photo_depan,
                $path_thumb.$data->photo_belakang,
                $path_thumb.$data->photo_kanan,
                $path_thumb.$data->photo_kiri,
            ]);
            
        }

        $delete ? $this->isSuccess("Berhasil Mengahapus") : $this->isError("Terjai kesalahan, Gagal Mengahapus");
    }
    public function create()
    {
        $this->emit('cleanVars');
        $this->dispatchBrowserEvent('openModal');
    }

     public function cleanVars()
    {
        $this->resetErrorBag();
        $this->resetValidation();

        
    }

    public function triggerConfirm()
    {
        $this->confirm('Do you wish to continue ?', [
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
