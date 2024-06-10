<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubrica extends Model
{
    use HasFactory;

    protected $table = 'rubriques';
    protected $primaryKey = 'id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    public $timestamps = false;

    public function criteris_avaluacio()
    {
        return $this->belongsTo(Rubrica::class, 'criteris_avaluacio_id');
    }
}