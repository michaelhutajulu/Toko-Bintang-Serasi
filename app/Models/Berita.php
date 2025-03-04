<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $primaryKey = 'berita_id';

    protected $fillable = [
        'image',
        'informasi_berita',
        'informasi_alumni',
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getThumbnail()
    {
        return Storage::url('public/images/berita/' . $this->foto);
    }
}
