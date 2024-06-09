<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultat_aprenentatge extends Model
{
    use HasFactory;

    protected $table = 'cicles';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    public function moduls()
    {
        return $this->belongsTo(Modul::class, 'moduls_id');
    }

    public function criteris_avaluacio()
    {
        return $this->hasMany(Criteri_avaluacio::class, 'resultats_aprenentatge_id');
    }
}