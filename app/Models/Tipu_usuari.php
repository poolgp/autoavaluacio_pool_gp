<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipu_usuari extends Model
{
    use HasFactory;

    protected $table = 'tipus_usuaris';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    public function usuaris(): HasMany
    {
        return $this->hasMany(Usuari::class, 'tipus_usuaris_id');
    }
}
