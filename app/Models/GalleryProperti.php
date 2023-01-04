<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryProperti extends Model
{
    use HasFactory;

    public function propertis()
    {
        return $this->belongsTo(Properti::class, 'properti_id');
    }
}
