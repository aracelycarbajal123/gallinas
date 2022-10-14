<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Comunidad extends Model
{
    use HasFactory;

    protected $table='comunidad';
    protected $fillable = [
        'nombre',
        'localizacion',
        'estado',
       
    ];

    public function person(){
        return $this->hasMany(Person::class);
        
    }

    public function plancalendarios(){
        return $this->hasMany(Plancalendarios::class);
    }

   

    
}
