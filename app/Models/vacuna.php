<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacuna extends Model
{
    use HasFactory;
    protected $table='vacuna';
    protected $fillable = [
        'Nombre_vacuna',
        'Fecha_ingresovacuna',
        'Stockvacuna',
        'Lote',
        'FechaVencimiento',
       
    ];


    public function plancalendarios(){
        return $this->hasMany(Plancalendarios::class);
    }

    public function control(){
        return $this->hasMany(Control::class);
    }
}
