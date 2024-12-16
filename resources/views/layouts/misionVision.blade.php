<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/layouts/misionVision/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Mision Vision</title>
</head>
<body>
    <header>
        <h1>MISION VISION</h1>
    </header>
    <main>
        <div class="tableMV">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Mision</th>
                        <th scope="col">Vision</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getMV as $MV)
                <tr>
                    <th>{{$MV->id}}</th>
                    <td>{{$MV->mision}}</td>
                    <td>{{$MV->vision}}</td>
                    <td>
                        <a href="/editar/{{$MV->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                        <form action="/eliminar/{{$MV->id}}" method="post">
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
        <div class="guardarMV">
            <form action="/guardarMV" method="post">
                @csrf
                <label for="mision">Mision:</label><br>
                <input type="text" name="mision" id="mision"><br>

                <label for="vision">Vision:</label><br>
                <input type="text" name="vision" id="vision"><br>
                <hr>
                <button type="submit">Guardar Datos</button>
            </form>
        </div>
    </main>
    <a href="/">Volver</a>
    <footer>
        <p class="derechos">Derechos de autor reservados. &copy 2024</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>