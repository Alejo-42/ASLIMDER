<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contactos</title>
</head>
<body>
    <h1>EDITAR CONTACTOS</h1>
    <form action="/contactos/actualizar/{{$editarContactos->id}}" method="post">
        @csrf
        @method('put')
        <label for="numero">Número:</label><br>
        <input value="{{$editarContactos->numero}}" type="text" name="numero" id="numero"><br>

        <label for="numero_c">Número Convencional:</label><br>
        <input value="{{$editarContactos->numero_c}}" type="text" name="numero_c" id="numero_c"><br>

        <label for="correo">Correo:</label><br>
        <input value="{{$editarContactos->correo}}" type="text" name="correo" id="correo"><br>
        <hr>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>