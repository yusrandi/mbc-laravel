<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Wirehome extends Component
{
    public function mount()
    {
        $this->sendFCM();
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

    public function sendFCM()
    {
        $SERVER_API_KEY = "AAAAXIxpSbY:APA91bEQ__NawWw36uFJA5BakyFdXYAEoolgzrIPhsfFhF0PzH978EY-FDYGE6Qbqaoqcs3LRRuwjIHX2-LCRwQMKYloWMqPYxhtRxV9E4OH9cR-tjivKq9FdXTpjx9vYtlwwRtQ4suX";
        $token_1 = "dc545MmwScqi_1fJeUIuw5:APA91bE_zCaEgdwhSK6Iz0VBlmbuZ4cRi6Ovh3s19EWtyKqeJMmNF20We-lp-M_LOrROMJxZA2D2etiVhsBcZlPfYwFCdvfVGs1k4-FomJDG8Z3UdCFjaDmyfXmpBVhHHhiGrd3EchMg";
        
        $data = [

        "registration_ids" => [
            $token_1
        ],

        "notification" => [

            "title" => 'Hallo gaes',

            "body" => 'Halo bang, wattunami ini pemberian vitamin',

            "sound"=> "default" // required for sound on ios

        ],

    ];

    $dataString = json_encode($data);

    $headers = [

        'Authorization: key=' . $SERVER_API_KEY,

        'Content-Type: application/json',

    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

    $response = curl_exec($ch);

    // dd($response);

    }
}
