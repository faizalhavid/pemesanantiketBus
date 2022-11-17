<?php

namespace App\Models;

use App\Models\Pemesan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'reservasis';
    protected $guarded = ['id'];

    public function pemesan(){
        return $this->belongsTo(Pemesan::class);
    }
}
