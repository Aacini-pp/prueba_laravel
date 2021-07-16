<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Grupo;
use App\Http\Requests\GrupoRequest;
use Laracasts\Flash\Flash;

class GruposController extends Controller
{

    public function index(){
       
        $grupos = Grupo::orderBy("id","ASC")->paginate(10);

        return view('admin.grupo.index')->with("grupos",$grupos);

    }

    public function create(){
        //  dd('hola esto es un mensaje');
         return view('admin.grupo.create');
      }


      public function store(GrupoRequest $request){
        
        $grupo = new Grupo($request->all());
        $grupo->save();
        Flash::success("El grupo ". $grupo->nombre."ha sido creado con exito");
         return redirect()->route("grupos.index");

      }

      public function edit($id){
        $grupo = Grupo::find($id);
        return view('admin.grupo.edit')->with("grupo",$grupo);;

      }

      public function update( GrupoRequest $request , $id ){
          $grupo = Grupo::find($id);
          $grupo->nombre =  $request->nombre;
          $grupo->turno =  $request->turno;
          $grupo->semestre =  $request->semestre;

          $grupo->save();

         Flash::warning("El grupo ". $grupo->nombre."ha sido modificado con exito");
          return redirect()->route("grupos.index");

      }



      public function  destroy($id){
        $grupo = Grupo::find($id);
        Flash::error("El grupo ". $grupo->nombre." ha sido eliminado  con exito");
        $grupo->delete();
         
        return redirect()->route("grupos.index");

      }
}
