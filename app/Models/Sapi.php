<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jenis_sapi()  
    {
        return $this->belongsTo(JenisSapi::class);
    }
}
