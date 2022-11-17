<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'bus';

    // protected $fillable = [];

    protected $guarded =['id'];
}