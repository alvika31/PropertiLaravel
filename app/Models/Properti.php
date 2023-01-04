<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lokasi;

class Properti extends Model
{
    use HasFactory;
    protected $fillable = [
        'lokasi_id', 'tipe_properti_id', 'nama_properti', 'nama_developer', 'cicilan', 'featured_image', 'deskripsi_properti', 'fasilitas', 'deskripsi_lokasi'
    ];

    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class, 'lokasi_id');
    }
    public function tipeproperti()
    {
        return $this->belongsTo(TipeProperti::class, 'tipe_properti_id');
    }
    public function gallery()
    {
        return $this->hasMany(GalleryProperti::class, 'properti_id');
    }
}
