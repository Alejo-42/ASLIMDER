<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <h1>EDITAR INFORMACIONES</h1>
    <form action="/informaciones/actualizar/{{$editarInfo->id}}" method="post">
        @csrf
        @method('put')
        <label for="logo">Logo:</label><br>
            <input value="{{$editarInfo->logo}}" type="text" name="logo" id="logo"><br>

            <label for="correo">Correo:</label><br>
            <input value="{{$editarInfo->correo}}" type="text" name="correo" id="correo"><br>

            <label for="telefono">Telefono:</label><br>
            <input value="{{$editarInfo->telefono}}" type="text" name="telefono" id="telefono"><br>

            <label for="direccion">Dirección:</label><br>
            <input value="{{$editarInfo->direccion}}" type="text" name="direccion" id="direccion"><br>
        <button type="submit">Actualizar Datos</button>
    </form>
</body>
</html>