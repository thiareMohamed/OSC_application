<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }
}
