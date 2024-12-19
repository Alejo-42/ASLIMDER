<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <h1>EDITAR IMAGEN</h1>
    <form action="/servicios/actualizar/{{$editarServicios->id}}" method="post">
        @csrf
        @method('put')
        <label for="titulo">Titulo:</label><br>
        <input value="{{$editarServicios->titulo}}" type="text" name="titulo" id="titulo"><br>
        
        <label for="descripcion">Descripcion:</label><br>
        <input value="{{$editarServicios->descripcion}}" type="text" name="descripcion" id="descripcion"><br>

        <label for="servicioURL">Servicio:</label><br>
        <input value="{{$editarServicios->servicioURL}}" type="text" name="servicioURL" id="servicioURL"><br>

        <label for="imagenes_id">ID de la imagen:</label><br>
        <input value="{{$editarServicios->imagenes_id}}" type="text" name="imagenes_id" id="imagenes_id"><br>

        <label for="categoria_id">ID de la Categoria:</label><br>
        <input value="{{$editarServicios->categoria_id}}" type="text" name="categoria_id" id="categoria_id"><br>

        <button type="submit">Actualizar Datos</button>
    </form>
</body>
</html>