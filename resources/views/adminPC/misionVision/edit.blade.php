@extends('layouts1.admin')

@section('content')
<div class="container">
    <br>
    <h2>Actualizar Mision y Vision</h2>
    <form action="/misvis/update/{{$MV->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <input type="hidden" name="id" value ="{{$MV->id}}">
        <label for="name">Texto:</label><br>
        <textarea name="name" id="name">{{$MV->name}}</textarea><br>
        
        <label for="image">Imagen:</label><br>
        <input type="file" class="form-control" id="image" name="image">
        <div>
            <img width="100%" src="{{asset('imagen/'.$MV->image)}}" alt="MV">
        </div>
        
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection