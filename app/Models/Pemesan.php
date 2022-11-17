<?php

namespace App\Models;

use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemesan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pemesan';
    protected $guarded = ['id'];

    public function reservasi(){
        $this->hasMany(Reservasi::class);
    }
}
