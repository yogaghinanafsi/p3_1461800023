<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;

    protected $table = 'perpustakaan';
    
    protected $fillable = [
        'id',
        'nbi',
        'nama_mhs',
    ];
}
