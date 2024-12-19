<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <h1>EDITAR RED</h1>
    <form action="/redes/actualizar/{{$editarRedes->id}}" method="post">
        @csrf
        @method('put')
        <label for="url">URL:</label><br>
        <input value="{{$editarRedes->url}}" type="text" name="url" id="url"><br>

        <label for="imagenes_id">ID Imagen:</label><br>
        <input value="{{$editarRedes->imagenes_id}}" type="text" name="imagenes_id" id="imagenes_id"><br>
        <br>
        <button type="submit">Actualizar Datos</button>
    </form>
</body>
</html>