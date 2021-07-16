<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table = "alumnos";
    protected $fillable = [
        'nombre', 'apellidos', 'edad',"email","telefono","grupo_id"
    ];

    function grupo(){
        return $this->BelongsTo("App\Grupo");
    }

}
