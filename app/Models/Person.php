<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Person extends Model
{
    use HasFactory;

    protected $table='person';
    protected $fillable = [
        'Nombres',
        'Apellidos',
        'Dpi',
        'Telefono',
        'Email',
        'FechaNacimiento',
        'Activo',
        'idComunidad',
        'Tipopersona',    
    ];


    public function comunidad(){
      return  $this->belongsTo(Comunidad::class, 'idComunidad');
    }

}
