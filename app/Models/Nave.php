<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nave extends Model
{
    use HasFactory;
    protected $fillable=[
        "type_id","name","country","uptime","fuel","featured"
    ];
    public function type(){
        return $this->belongsTo(type::class,'type_id');
    }
}
