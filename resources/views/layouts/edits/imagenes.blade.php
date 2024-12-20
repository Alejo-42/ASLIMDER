<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <h1>EDITAR IMAGEN</h1>
    <form action="/imagenes/actualizar/{{$editarImagenes->id}}" method="post">
        @csrf
        @method('put')
        <label for="imgURL">URL de la imagen:</label><br>
        <input value="{{$editarImagenes->imgURL}}" type="text" name="imgURL" id="imgURL"><br>
        @error('imgURL')
        <p style="color: red">{{$message}}</p>
        @enderror

        <button type="submit">Actualizar Datos</button>
    </form>
</body>
</html>