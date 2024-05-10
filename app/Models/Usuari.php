<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;

    protected $table = 'cicles';
    // protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    public function tipus_usuaris()
    {
        return $this->belongsTo(Tipu_usuari::class, 'tipus_usuaris_id');
    }

    public function moduls()
    {
        return $this->belongsToMany(Modul::class, 'usuaris_has_moduls', 'usuaris_id', 'moduls_id');
    }

    public function criteris_avaluacio()
    {
        return $this->belongsToMany(Criteri_avaluacio::class, 'alumnes_has_criteris_avaluacio', 'usuaris_id', 'criteris_id');
    }
}
