<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Redes</title>
</head>
<body>
    <h1>EDITAR REDES</h1>
    <form action="/actualizarRedes/{{$editarRedes->id}}" method="post">
        @csrf
        @method('put')
        <label for="icono">Icono:</label><br>
        <input value="{{$editarRedes->icono}}" type="text" name="icono" id="icono"><br>

        <label for="link">Link:</label><br>
        <input value="{{$editarRedes->link}}" type="text" name="link" id="link"><br>
        <hr>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>