<?php

namespace App\Models;

use App\Models\Pemesan;
use App\Models\Terminal;
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
    public function terminal(){
        return $this->belongsTo(Terminal::class);
    }
    public function bus(){
        return $this->belongsTo(Bus::class);
    }
}
