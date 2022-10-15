<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aves extends Model
{
    use HasFactory;
    protected $table='aves';
    protected $fillable = [
        'NombreAve',
        'Activo',
 
    ];
    
    public function control(){
        return $this->hasMany(Control::class);
    }
}
