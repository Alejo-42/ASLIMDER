@extends('layouts1.admin')

@section('content')
<div class="container">
    <br>
    <h2>Ingresar Mision y Vision:</h2>
    <form action="/misvis/store" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <label for="name">Nombre:</label><br>
        <input type="text" name="name" id="name"><br>
        @error('name')
        <p style="color: red">{{$message}}</p>
        @enderror
        
        <label for="image">Imagen:</label><br>
        <input type="file" name="image" id="image"><br>
        @error('image')
        <p style="color: red">{{$message}}</p>
        @enderror
        <br>
        
        <button class="btn btn-outline-success" type="submit">Guardar</button>
    </form>
</div>
@endsection