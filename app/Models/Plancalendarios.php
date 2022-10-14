<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plancalendarios extends Model
{
    use HasFactory;
    protected $table='plancalendarios';
    protected $fillable = [
        'FechaVacunacion',
        'Estado',
        'idComunidad',
        'idvacuna',
    
    ];

    public function comunidad(){
        return $this->belongsTo(Comunidad::class, 'idComunidad');
    }

    public function vacuna(){
        return $this->belongsTo(vacuna::class, 'idvacuna');
    }
}
