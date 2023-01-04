<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeProperti extends Model
{
    use HasFactory;
    public function properti()
    {
        return $this->hasMany(Properti::class, 'tipe_properti_id');
    }
}
