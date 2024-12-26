<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MISION Y VISION</title>
</head>
<body>
    <h2>Ingresar Mision y Vision:</h2>
    <form action="/misvis/store" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <label for="name">  Nombre:</label>
        <input type="text" name="name" id="name">

        <label for="image">Imagen:</label>
        <input type="file" name="image" id="image">

        <button type="submit">Guardar</button>
    </form>
</body>
</html>