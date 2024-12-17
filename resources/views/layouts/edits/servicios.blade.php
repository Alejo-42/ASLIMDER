<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicios</title>
</head>
<body>
    <h1>EDITAR Servicios</h1>
    <form action="/servicios/actualizar/{{$editarServicios->id}}" method="post">
        @csrf
        @method('put')
        <label for="servicio">Servicio:</label><br>
        <input value="{{$editarServicios->servicio}}" type="text" name="servicio" id="servicio"><br>

        <label for="descripcion">Descripción:</label><br>
        <input value="{{$editarServicios->descripcion}}" type="text" name="descripcion" id="descripcion"><br>
        <hr>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>