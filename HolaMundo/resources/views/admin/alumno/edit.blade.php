@extends("admin.template.main")




@section('title')
   Editando Alumno  {{ $alumno->nombre }}
@endsection




@section('content')


        <h1>Esta editando al Alumno {{ $alumno->nombre }}</h1>
        <p class="lead"> <svg class="bi" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"></use></svg>  Se esta creando un nuevo elemento alumno </p>
        
        @if( count($errors) >0 )
          <div class="alert alert-danger" role="alert"  >
              <ul>
                @foreach( $errors->all() as $error  )
                        <li>  {{$error}}  </li>
                @endforeach
               </ul>
           </div>
        @endif

        {!!  Form::open(["route"=> ["alumnos.update",$alumno],"method"=>"PUT"  ])  !!}

        <div class="form-group">
                {!!  Form::label("nombre", "Nombre")  !!}
                {!!  Form::text("nombre",$alumno->nombre,["class"=>"form-control","required","placeholder"=>"Nombre"] )  !!}
        </div>

        <div class="form-group">
                {!!  Form::label("apellidos", "Apellidos")  !!}
                {!!  Form::text("apellidos",$alumno->apellidos,["class"=>"form-control","required","placeholder"=>"Apellidos"] )  !!}
        </div>

        <div class="form-group">
                {!!  Form::label("edad", "Edad")  !!}
                {!!  Form::number("edad",$alumno->edad,["class"=>"form-control","required","placeholder"=>"Edad"] )  !!}
        </div>


        <div class="form-group">
                {!!  Form::label("enail", "Email")  !!}
                {!!  Form::email("email",$alumno->email,["class"=>"form-control","required","placeholder"=>"axample@corre.com"] )  !!}
        </div>


        <div class="form-group">
                {!!  Form::label("telefono", "Telefono")  !!}
                {!!  Form::text("telefono",$alumno->telefono,["class"=>"form-control","required","placeholder"=>"(+52) 55 XXX XXXX"] )  !!}
        </div>


        <div class="form-group">
                {!!  Form::label("grupo_id", "Grupo")  !!}
                {!!  Form::number("grupo_id",$alumno->grupo_id,["class"=>"form-control","required","placeholder"=>"grupo_id"] )  !!}
        </div>



        <div class="form-group">
                {!!  Form::label("grupo_id", "Grupo")  !!}
        
                <select class="form-control" required="" id="grupo_id" name="grupo_id"><option value="" selected="selected">Seleccione uno...</option>
                        @foreach($grupos as $grupoItem)
                        
                                <option value="{{ $grupoItem->id }}"    
                                @if( $grupoItem->id == $alumno->grupo_id ) 
                                        selected
                                @endif
                                >{{ $grupoItem->nombre }}</option>
                        @endforeach
                </select>
        </div>
        


        <div class="form-group">
               {!!  Form::submit('Guardar',["class"=>"btn btn-primary"])  !!}
        </div>


        {!!  Form::close()  !!}

@endsection

