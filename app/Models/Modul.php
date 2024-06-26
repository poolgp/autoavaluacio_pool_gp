<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
    use HasFactory;

    protected $table = 'moduls';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    public function cicles()
    {
        return $this->belongsTo(Cicle::class, 'cicles_id');
    }

    public function resultats_aprenentatge()
    {
        return $this->hasMany(Resultat_aprenentatge::class, 'moduls_id');
    }

    public function usuaris()
    {
        return $this->belongsToMany(Usuari::class, 'usuaris_has_moduls', 'moduls_id', 'usuaris_id');
    }
}
