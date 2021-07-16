@extends("admin.template.main")




@section('title')
   Editando al  Usuario {{ $grupo->nombre }} 
@endsection




@section('content')


        <h1>Esta editando al Grupo {{ $grupo->nombre }}  </h1>
        <p class="lead"> <svg class="bi" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"></use></svg>Se esta modificando un  elemento grupo existente</p>
        

        @if( count($errors) >0 )
          <div class="alert alert-danger" role="alert"  >
              <ul>
                @foreach( $errors->all() as $error  )
                        <li>  {{$error}}  </li>
                @endforeach
               </ul>
           </div>
        @endif

        {!!  Form::open(["route"=> ["grupos.update", $grupo ],"method"=>"PUT"  ])  !!}

        <div class="form-group">
                {!!  Form::label("nombre", "Nombre")  !!}
                {!!  Form::text("nombre",$grupo->nombre ,["class"=>"form-control","required","placeholder"=>"Nombre del grupo"] )  !!}
        </div>

        <div class="form-group">
                {!!  Form::label("turno", "Turno")  !!}
                {!!  Form::select("turno",[""=>"Seleccione uno...","matutino"=>"matutino","vespertino"=>"Vespertino"],$grupo->turno,["class"=>"form-control","required"] )  !!}
                
        </div>


        <div class="form-group">
                {!!  Form::label("semestre", "Semestre")  !!}
                {!!  Form::select("semestre",[""=>"Seleccione uno...","1"=>"1º","2"=>"2º","3"=>"3º","4"=>"4º","5"=>"5º","6"=>"6º","7"=>"7º","8"=>"8º","9"=>"9º"],$grupo->semestre,["class"=>"form-control","required"] )  !!}
                
        </div>

        <div class="form-group">
                {!!  Form::submit('Guardar',["class"=>"btn btn-primary"])  !!}
        </div>


        {!!  Form::close()  !!}

@endsection

