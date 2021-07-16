




@extends("admin.template.main")




@section('title')
   Crear Usuario
@endsection




@section('content')
              

        <h1>Crear usuario</h1>
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

        {!!  Form::open(["route"=> "alumnos.store","method"=>"POST"  ])  !!}

        <div class="form-group">
                {!!  Form::label("nombre", "Nombre")  !!}
                {!!  Form::text("nombre",null,["class"=>"form-control","required","placeholder"=>"Nombre"] )  !!}
        </div>

        <div class="form-group">
                {!!  Form::label("apellidos", "Apellidos")  !!}
                {!!  Form::text("apellidos",null,["class"=>"form-control","required","placeholder"=>"Apellidos"] )  !!}
        </div>

        <div class="form-group">
                {!!  Form::label("edad", "Edad")  !!}
                {!!  Form::number("edad",null,["class"=>"form-control","required","placeholder"=>"Edad"] )  !!}
        </div>


        <div class="form-group">
                {!!  Form::label("enail", "Email")  !!}
                {!!  Form::email("email",null,["class"=>"form-control","required","placeholder"=>"axample@corre.com"] )  !!}
        </div>


        <div class="form-group">
                {!!  Form::label("telefono", "Telefono")  !!}
                {!!  Form::text("telefono",null,["class"=>"form-control","required","placeholder"=>"(+52) 55 XXX XXXX"] )  !!}
        </div>

        


        <div class="form-group">
                {!!  Form::label("grupo_id", "Grupo")  !!}
        
                <select class="form-control" required="" id="grupo_id" name="grupo_id"><option value="" selected="selected">Seleccione uno...</option>
                        @foreach($grupos as $grupo)
                        
                                <option value="{{ $grupo->id }}">{{ $grupo->nombre }}</option>
                        @endforeach
                </select>
        </div>
        

        <div class="form-group">
               {!!  Form::submit('Guardar',["class"=>"btn btn-primary"])  !!}
        </div>


        {!!  Form::close()  !!}

@endsection

