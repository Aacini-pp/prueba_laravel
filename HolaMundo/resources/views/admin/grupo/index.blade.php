@extends("admin.template.main")




@section('title')
   Lista de grupos
@endsection




@section('content')
    <h1> Lista de grupos</h1>
    <p class="lead"> <svg class="bi" width="24" height="24" role="img" aria-label="Orders"><use xlink:href="#table"></use></svg>  Lista de todos los elementors de grupos existentes </p>
   
    @include('flash::message')
    <hr>

    <div> 
            <a href="{{ route('grupos.create') }}" class="btn btn-lg btn-primary" > + Crear nuevo grupo</a>
    </div>

<hr>
    
     

    <table class="table table-dark table-striped"">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre del grupo</th>
        <th scope="col">Turno</th>
        <th scope="col">Semestre</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    
        @foreach($grupos as $grupo )
                <tr>
                <th scope="row">{{ $grupo->id }}</th>
                <td>{{ $grupo->nombre }}</td>
                <td>{{ $grupo->turno }}</td>
                <td>{{ $grupo->semestre }}</td>

                <td> <a href="{{route('grupos.edit',$grupo->id) }}" class="btn btn-primary" ><span class="glyphicon">&#xe065;</span></a>      <a href="{{route('grupos.destroy',$grupo->id) }}" class="btn btn-danger" title="Eliminar" >-</a>      </td>
                </tr>

        @endforeach



    
    </tbody>
    </table>
    {!! $grupos->render() !!}


@endsection
