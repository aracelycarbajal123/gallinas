<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    use HasFactory;
    protected $table='control';
    protected $fillable = [
        'idperson',
        'idComunidad',
        'idvacuna',
        'idaves',
        'cantidad',
    
    ];

    public function person(){
        return $this->belongsTo(person::class, 'idperson');
        
    }

    public function comunidad(){
        return $this->belongsTo(Comunidad::class, 'idComunidad');
    }

    public function vacuna(){
        return $this->belongsTo(vacuna::class, 'idvacuna');
    }

    public function aves(){
        return $this->belongsTo(aves::class,'idaves');
    }

 
}
