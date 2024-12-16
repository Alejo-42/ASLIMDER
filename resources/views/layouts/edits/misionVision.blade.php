<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mision Vision</title>
</head>
<body>
    <h1>EDITAR MISION VISION</h1>
    <form action="/actualizar/{{$editarMV->id}}" method="post">
        @csrf
        @method('put')
        <label for="mision">Mision:</label><br>
        <input value="{{$editarMV->mision}}" type="text" name="mision" id="mision"><br>

        <label for="vision">Vision:</label><br>
        <input value="{{$editarMV->vision}}" type="text" name="vision" id="vision"><br>
        <hr>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>