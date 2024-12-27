@extends('layouts1.admin')

@section('content')
<div class="container">
    <br>
    <h2>Listado de Mision y Vision Desactivados</h2>
    <table class="table table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TEXTO</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($get_MV as $MV)
            <tr>
                <th scope="col">{{$MV->id}}</th>
                <td>{{$MV->name}}</td>
                <td><img width="150px" height="150px" src="{{asset('imagen/'.$MV->image)}}" alt=""></td>
                <td>
                    <a href="/misvis/edit/{{$MV->id}}"><button class="btn btn-secondary" type="button">Actualizar</button></a>
                    <a href="/misvis/status/{{$MV->id}}"><button class="btn btn-success" type="button">Activar</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection