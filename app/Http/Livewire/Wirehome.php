<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use SebastianBergmann\Environment\Console;

class Wirehome extends Component
{
    public function mount()
    {
        // $this->sendFCM();
    }
    public function render()
    {
        return view('livewire.wirehome');
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

    
}
