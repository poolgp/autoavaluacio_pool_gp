<?php

namespace App\Models;

use App\Models\Usuari;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuari extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table = 'usuaris';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    public function tipus_usuaris(): BelongsTo
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
