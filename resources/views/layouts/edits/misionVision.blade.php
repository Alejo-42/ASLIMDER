<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <h1>EDITAR MISION Y VISION</h1>
    <form action="/misionVision/actualizar/{{$editarMV->id}}" method="post">
            @csrf
            @method('put')
            <label for="texto">Texto:</label><br>
            <input value="{{$editarMV->texto}}" type="text" name="texto" id="texto"><br>
            @error('texto')
            <p style="color: red">{{$message}}</p>
            @enderror

            <label for="url">URL:</label><br>
            <input value="{{$editarMV->url}}" type="text" name="url" id="url"><br>
            @error('url')
            <p style="color: red">{{$message}}</p>
            @enderror

            <label for="imagenes_id">ID Imagen</label><br>
            <input value="{{$editarMV->imagenes_id}}" type="text" name="imagenes_id" id="imagenes_id"><br>
            @error('imagenes_id')
            <p style="color: red">{{$message}}</p>
            @enderror
            <br>
            <button type="submit">Actualizar Datos</button>
        </form>
</body>
</html>