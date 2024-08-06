<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wbtb extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'kategori_wbtb_id',
        'kategori_budaya',
        'deskripsi',
        'alamat',
        'sk_gambar',
        'document',
        'koordinat',

    ];

    public function kategoriwbtb()
    {
        return $this->hasMany(KategoriWbtb::class, 'kategori_wbtb_id');
    }   
}
