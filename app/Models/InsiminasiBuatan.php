<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsiminasiBuatan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function sapi()  
    {
        return $this->belongsTo(Sapi::class)->with(['peternak','jenis_sapi']);
    }
    public function strow()  
    {
        return $this->belongsTo(Strow::class);
    }
}
