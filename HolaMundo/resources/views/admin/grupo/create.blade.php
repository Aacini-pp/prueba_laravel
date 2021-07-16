@extends("admin.template.main")




@section('title')
   Crear nuevo grupo
@endsection




@section('content')


        <h1>Crear Grupo</h1>
        <p class="lead"> <svg class="bi" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"></use></svg>  Se esta creando un nuevo elemento grupo </p>
 

        @if( count($errors) >0 )
          <div class="alert alert-danger" role="alert"  >
              <ul>
                @foreach( $errors->all() as $error  )
                        <li>  {{$error}}  </li>
                @endforeach
               </ul>
           </div>
        @endif


        {!!  Form::open(["route"=> "grupos.store","method"=>"POST"  ])  !!}

        <div class="form-group">
                {!!  Form::label("nombre", "Nombre")  !!}
                {!!  Form::text("nombre",null,["class"=>"form-control","required","placeholder"=>"Nombre del grupo"] )  !!}
        </div>

        <div class="form-group">
                {!!  Form::label("turno", "Turno")  !!}
                {!!  Form::select("turno",[""=>"Seleccione uno...","matutino"=>"matutino","vespertino"=>"Vespertino"],null,["class"=>"form-control","required"] )  !!}
                
        </div>


        <div class="form-group">
                {!!  Form::label("semestre", "Semestre")  !!}
                {!!  Form::select("semestre",[""=>"Seleccione uno...","1"=>"1º","2"=>"2º","3"=>"3º","4"=>"4º","5"=>"5º","6"=>"6º","7"=>"7º","8"=>"8º","9"=>"9º"],null,["class"=>"form-control","required"] )  !!}
                
        </div>

        <div class="form-group">
                {!!  Form::submit('Guardar',["class"=>"btn btn-primary"])  !!}
        </div>


        {!!  Form::close()  !!}

@endsection

