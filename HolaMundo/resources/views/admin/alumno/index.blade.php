@extends("admin.template.main")




@section('title')
   Lista de grupos
@endsection




@section('content')
    <h1> Lista de alumnos</h1>
    <p class="lead"> <svg class="bi" width="24" height="24" role="img" aria-label="Customers"><use xlink:href="#people-circle"></use></svg>  Lista de todos los alumnos existentes </p>
   
    @include('flash::message')
    <hr>
    <div> 
            <a href="{{ route('alumnos.create') }}" class="btn btn-lg btn-primary" > + Crear nuevo alumno</a>
    </div>

<hr>
    
     

    <table class="table table-dark table-striped"">
    <thead class="thead-dark">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre </th>
        <th scope="col">Apellidos</th>
        <th scope="col">Email</th>
        <th scope="col">Telefono</th>
        <th scope="col">Grupo</th>
        <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    
        @foreach($alumnos as $alumno )
                <tr>
                <th scope="row">{{ $alumno->id }}</th>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->apellidos }}</td>
                <td>{{ $alumno->email }}</td>
                <td>{{ $alumno->telefono }}</td>
                <td>{{ $grupos[   $alumno->grupo_id  ] }}</td>
                <td> <a href="{{route('alumnos.edit',$alumno->id) }}" class="btn btn-primary" ><span class="glyphicon">&#xe065;</span></a>      <a href="{{route('alumnos.destroy',$alumno->id) }}" class="btn btn-danger" title="Eliminar" >-</a>      </td>
                </tr>

        @endforeach    
    </tbody>
    </table>
    {!! $alumnos->render() !!}


@endsection
