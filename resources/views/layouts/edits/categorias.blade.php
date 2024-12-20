<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <h1>EDITAR CATEGORIA</h1>
    <form action="/categorias/actualizar/{{$editarCT->id}}" method="post">
        @csrf
        @method('put')
        <label for="nombreCT">Nombre de la categoria:</label><br>
        <input value="{{$editarCT->nombreCT}}" type="text" name="nombreCT" id="nombreCT"><br>
        @error('nombreCT')
        <p style="color: red">{{$message}}</p>
        @enderror
        <button type="submit">Actualizar Datos</button>
    </form>
</body>
</html>