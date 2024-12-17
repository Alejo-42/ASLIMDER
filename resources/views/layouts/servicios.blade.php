<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/layouts/servicios/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>SERVICIOS</title>
</head>
<body>
    <header>
        <h1>SERVICIOS</h1>
    </header>
    <main>
        <div class="tableRedes">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($getServicios as $Servicios)
                <tr>
                    <th>{{$Servicios->id}}</th>
                    <td>{{$Servicios->servicio}}</td>
                    <td>{{$Servicios->descripcion}}</td>
                    <td>
                        <a href="/servicios/editar/{{$Servicios->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                        <form action="/servicios/eliminar/{{$Servicios->id}}" method="post">
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
        <div class="guardarServicios">
            <form action="/servicios/guardar" method="post">
                @csrf
                <label for="servicio">Servicio:</label><br>
                <input type="text" name="servicio" id="servicio"><br>

                <label for="descripcion">Descripción:</label><br>
                <input type="text" name="descripcion" id="descripcion"><br>
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