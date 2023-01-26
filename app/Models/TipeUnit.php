<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeUnit extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_id', 'nama_tipe', 'harga', 'kamar_tidur', 'luas_tanah', 'luas_bangunan', 'deskripsi_properti', 'fasilitas', 'deskripsi_lokasi'
    ];
    public function propertis()
    {
        return $this->belongsTo(Properti::class, 'property_id');
    }
}
