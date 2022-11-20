<?php

namespace App\Models;

use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Terminal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='terminals';
    protected $guarded=['id'];

    public function reservasi(){
        $this->hasMany(Reservasi::class);
    }

}
