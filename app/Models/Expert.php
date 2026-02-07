<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = [
        'nomexp',
        'prenomexp',
        'telexp',
        'specialitexp',
        'emailexp'
    ];
    public function evenements(){
        return $this->hasMany(Evenement::class);
    }
    public function atelier(){
        return $this->hasMany(Atelier::class);
    }
}
