<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>MISION Y VISION</title>
</head>
<body>
    <div class="tabla">
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TEXTO</th>
                    <th scope="col">URL</th>
                    <th scope="col">IMAGEN</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($getMV as $MV)
                <tr>
                    <th>{{$MV->id}}</th>
                    <td>{{$MV->texto}}</td>
                    <td>{{$MV->url}}</td>
                    <td>{{$MV->imagenes_id}}</td>
                    <td>
                        <a href="/misionVision/editar/{{$MV->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                        <form action="/misionVision/eliminar/{{$MV->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="formulario">
        <form action="/misionVision/guardar" method="post">
            @csrf
            <label for="texto">Texto:</label><br>
            <input type="text" name="texto" id="texto"><br>

            <label for="url">URL:</label><br>
            <input type="text" name="url" id="url"><br>

            <label for="imagenes_id">ID Imagen</label><br>
            <input type="text" name="imagenes_id" id="imagenes_id"><br>
            <br>
            <button type="submit">Guardar Datos</button>
        </form>
    </div>
    <a href="/volver">VOLVER</a>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>