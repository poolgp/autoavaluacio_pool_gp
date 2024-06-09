<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteri_avaluacio extends Model
{
    use HasFactory;

    protected $table = 'cicles';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    public function resultats_aprenentatge()
    {
        return $this->belongsTo(Resultat_aprenentatge::class, 'resultats_aprenentatge_id');
    }

    public function rubriques()
    {
        return $this->hasMany(Criteri_avaluacio::class, 'criteris_avaluacio_id');
    }

    public function usuaris()
    {
        return $this->belongsToMany(Usuari::class, 'alumnes_has_criteris_avaluacio', 'criteris_id', 'usuaris_id');
    }
}
