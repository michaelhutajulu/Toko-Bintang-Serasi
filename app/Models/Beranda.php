<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    use HasFactory;

    protected $table = 'beranda';
    protected $primaryKey = 'beranda_id';
    protected $fillable = [
        'namaketua',
        'ketua',
        'ketua_image',
        'namakepala',
        'kepala',
        'kepala_image',
    ];

    public $timestamps = true;
}
