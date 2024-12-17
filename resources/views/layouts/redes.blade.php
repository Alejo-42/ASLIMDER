<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/layouts/redes/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>REDES</title>
</head>
<body>
    <header>
        <h1>REDES</h1>
    </header>
    <main>
        <div class="tabla">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Icono</th>
                        <th scope="col">Link</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($getRedes as $Redes)
                <tr>
                    <th>{{$Redes->id}}</th>
                    <td>{{$Redes->icono}}</td>
                    <td>{{$Redes->link}}</td>
                    <td>
                        <a href="/redes/editar/{{$Redes->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                        <form action="/redes/eliminar/{{$Redes->id}}" method="post">
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
            <h4>Crear una nueva red:</h4>
            <form action="/redes/guardar" method="post">
                @csrf
                <label for="icono">Icono:</label><br>
                <input type="text" name="icono" id="icono"><br>

                <label for="link">Link:</label><br>
                <input type="text" name="link" id="link"><br>
                <hr>
                <button type="submit">Guardar Datos</button>
            </form>
        </div>
    </main>
    <a href="/volver">Volver</a>
    <footer>
        <p class="derechos">Derechos de autor reservados. &copy 2024</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>