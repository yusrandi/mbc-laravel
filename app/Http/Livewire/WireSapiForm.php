<?php

namespace App\Http\Livewire;

use App\Models\JenisSapi;
use App\Models\Sapi;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class WireSapiForm extends Component
{
    use WithFileUploads;
    public $selectedItemId, $jenis_sapi_id, $ertag_induk, $nama_sapi,  $tgl_lahir, $kelamin, $kondisi_lahir, $anak_ke, $ertag, $photo_depan, $photo_belakang, $photo_kiri, $photo_kanan;

    protected $rules = [
        'jenis_sapi_id' => 'required',
        'ertag_induk' => 'required',
        'nama_sapi' => 'required',
        'tgl_lahir' => 'required',
        'kelamin' => 'required',
        'kondisi_lahir' => 'required',
        'anak_ke' => 'required',
        'ertag' => 'required',
        'photo_depan' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'photo_belakang' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'photo_kiri' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'photo_kanan' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ];
    protected $messages = [
        'jenis_sapi_id.required' => 'this field is required',
        'ertag_induk.required' => 'this field is required',
        'nama_sapi.required' => 'this field is required',
        'tgl_lahir.required' => 'this field is required',
        'kelamin.required' => 'this field is required',
        'kondisi_lahir.required' => 'this field is required',
        'anak_ke.required' => 'this field is required',
        'ertag.required' => 'this field is required',
        'photo_depan.required' => 'this field is required',
        'photo_belakang.required' => 'this field is required',
        'photo_kiri.required' => 'this field is required',
        'photo_kanan.required' => 'this field is required',
    ];

    protected $listeners = [
        'cleanVars',
        'getModelId',
        'forceCloseModal',
    ];

    public function render()
    {
        return view('livewire.wire-sapi-form',[
            'jenis_sapis' => JenisSapi::orderBy('jenis','ASC')->get()
        ]);
    }

    public function save()
    {
        
        $this->selectedItemId ? $this->update() : $this->create(); 
        
        
    }

    public function update()
    {

        $validateData = [];
        
        $validateData = array_merge($validateData,[
            'jenis_sapi_id' => 'required',
            'ertag_induk' => 'required',
            'nama_sapi' => 'required',
            'kelamin' => 'required',
            'kondisi_lahir' => 'required',
            'anak_ke' => 'required',
            'ertag' => 'required',
            
        ]);
        $data = $this->validate($validateData);
        
        $res_photo_depan = $this->photo_depan;
        if (!empty($res_photo_depan)){
            $data['photo_depan'] = $this->handleImageIntervention($res_photo_depan);
        }
        $res_photo_belakang = $this->photo_belakang;
        if (!empty($res_photo_belakang)){
            $data['photo_belakang'] = $this->handleImageIntervention($res_photo_belakang);
        }

        $res_photo_kanan = $this->photo_kanan;
        if (!empty($res_photo_kanan)){
            $data['photo_kanan'] = $this->handleImageIntervention($res_photo_kanan);
        }
        $res_photo_kiri = $this->photo_kiri;
        if (!empty($res_photo_kiri)){
            $data['photo_kiri'] = $this->handleImageIntervention($res_photo_kiri);
        }

        if ($this->tgl_lahir != null) {
            $data['tgl_lahir'] = $this->tgl_lahir;
        }

        $save = Sapi::find($this->selectedItemId)->update($data);
        $save ? $this->emit('isSuccess',"Berhasil") : $this->emit('isError',"Terjadi kesalahan");
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closeModal');
        $this->cleanVars();
    }
    public function create()
    {
        $data  =  $this->validate();

        $res_photo_depan = $this->photo_depan;
        if (!empty($res_photo_depan)){
            $data['photo_depan'] = $this->handleImageIntervention($res_photo_depan);
        }
        $res_photo_belakang = $this->photo_belakang;
        if (!empty($res_photo_belakang)){
            $data['photo_belakang'] = $this->handleImageIntervention($res_photo_belakang);
        }

        $res_photo_kanan = $this->photo_kanan;
        if (!empty($res_photo_kanan)){
            $data['photo_kanan'] = $this->handleImageIntervention($res_photo_kanan);
        }
        $res_photo_kiri = $this->photo_kiri;
        if (!empty($res_photo_kiri)){
            $data['photo_kiri'] = $this->handleImageIntervention($res_photo_kiri);
        }

        $save = Sapi::create($data);
        $save ? $this->emit('isSuccess',"Berhasil") : $this->emit('isError',"Terjadi kesalahan");
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closeModal');
        $this->cleanVars();
    }

    public function getModelId($modelId)
     {
        $this->selectedItemId = $modelId;
        $model = Sapi::find($this->selectedItemId);
        $this->jenis_sapi_id = $model->jenis_sapi_id;
        $this->ertag = $model->ertag;
        $this->ertag_induk = $model->ertag_induk;
        $this->nama_sapi = $model->nama_sapi;
        $this->kelamin = $model->kelamin;
        $this->kondisi_lahir = $model->kondisi_lahir;
        $this->anak_ke = $model->anak_ke;
     }

    public function cleanVars()
     {
        $this->jenis_sapi_id = null;
        $this->selectedItemId = null;
        $this->jenis_sapi_id = null;
        $this->ertag = null;
        $this->ertag_induk = null;
        $this->nama_sapi = null;
        $this->kelamin = null;
        $this->kondisi_lahir = null;
        $this->anak_ke = null;
        $this->photo_depan = null;
        $this->photo_belakang = null;
        $this->photo_kanan = null;
        $this->photo_kiri = null;
     }

    
    public function forceCloseModal()
     {
         $this->cleanVars();
         $this->resetErrorBag();
         $this->resetValidation();
     }

     public function handleImageIntervention($res_photo)
    {
        $res_photo->store('public/photos');
        $imageName = $res_photo->hashName();
        $data['photo_kiri'] = $imageName;

        $manager = new ImageManager();
        $image = $manager->make('storage/photos/'.$imageName)->resize(100,100);
        $image->save('storage/photos_thumb/'.$imageName);

        return $imageName;
    }
}
