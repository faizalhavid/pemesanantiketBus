<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='terminals';
    protected $guarded=['id'];

    // public function reservasi(){
    //     return $this->hasOne(Reservasi::class);
    // }
}
