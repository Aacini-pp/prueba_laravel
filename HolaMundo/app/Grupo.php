<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    //
    protected $table = "grupos";
    protected $fillable = [
        'nombre', 'turno', 'semestre',
    ];


    public function alumnos()
    {
        return $this->hasMany("App\Alumno");
    }
}
