<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Grupo;
use App\Http\Requests\AlumnoRequest;
use App\Http\Requests\AlumnoEditRequest;
use Laracasts\Flash\Flash;

class AlumnosController extends Controller
{

    public function index(){
      //enviar un array de clave valor de  id=>nombre
       $grupos = array();
      $allGrupos= Grupo::all(); 
      foreach ($allGrupos as &$g) {
         $grupos[ $g->id ]  = $g->nombre;
          
      }

     


      $alumnos = Alumno::orderBy("id","ASC")->paginate(10);
      return view('admin.alumno.index')->with(["alumnos"=>$alumnos, "grupos"=> $grupos  ]);

    }
    //

    public function create(){
      $grupos= Grupo::all(); 
      //  dd('hola esto es un mensaje');
       return view('admin.alumno.create')->with("grupos",$grupos);;
    }


    public function store(AlumnoRequest $request){
        
      $alumno = new Alumno($request->all());

      $alumno->save();
      Flash::success("El alumno ". $alumno->nombre."ha sido creado con exito");
      return redirect()->route("alumnos.index");
      
    }

    public function edit($id){
      $grupos= Grupo::all(); 
      $alumno = Alumno::find($id);
      return view('admin.alumno.edit')->with(["alumno"=>$alumno ,  "grupos"=> $grupos  ]);

    }

    public function update( AlumnoEditRequest $request , $id ){
        
        $alumno = Alumno::find($id);
        $alumno->nombre =  $request->nombre;
        $alumno->apellidos =  $request->apellidos;
        $alumno->edad =  $request->edad;
        $alumno->email =  $request->email;
        $alumno->telefono =  $request->telefono;
        $alumno->grupo_id =  $request->grupo_id;

        $alumno->save();

       Flash::warning("El alumno ". $alumno->nombre."ha sido modificado con exito");
        return redirect()->route("alumnos.index");
        
    }

    public function  destroy($id){
      $alumno = Alumno::find($id);
      Flash::error("El alumno ". $alumno->nombre." ha sido eliminado  con exito");
      $alumno->delete();
       
      
      return redirect()->route("alumnos.index");

    }

}
