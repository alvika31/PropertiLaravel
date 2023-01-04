<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Properti;

class Lokasi extends Model
{
    use HasFactory;

    public function properti()
    {
        return $this->hasMany(Properti::class, 'lokasi_id');
    }
}
