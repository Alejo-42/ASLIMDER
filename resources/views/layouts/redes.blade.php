<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/layouts/redes/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>IMAGENES</title>
</head>
<body>
    <header>
        <h1>IMAGENES</h1>
    </header>
    <main>
    <div class="tabla-a">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">URL</th>
                        <th scope="col">ID IMAGEN</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Redes_A as $Redes)
                    <tr>
                        <th>{{$Redes->id}}</th>
                        <td>{{$Redes->url}}</td>
                        <td>{{$Redes->imagenes_id}}</td>
                        <td class="acciones">
                            <a href="/redes/estado/{{$Redes->id}}"><button type="button" class="btn btn-secondary">Estado</button></a>
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
        <div class="tabla-d">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">URL</th>
                        <th scope="col">ID IMAGEN</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Redes_D as $Redes)
                    <tr>
                        <th>{{$Redes->id}}</th>
                        <td>{{$Redes->url}}</td>
                        <td>{{$Redes->imagenes_id}}</td>
                        <td class="acciones">
                            <a href="/redes/estado/{{$Redes->id}}"><button type="button" class="btn btn-secondary">Estado</button></a>
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
            <form action="/redes/guardar" method="post">
                @csrf
                <label for="url">URL:</label><br>
                <input type="text" name="url" id="url"><br>
                @error('url')
                <p style="color: red">{{$message}}</p>
                @enderror
                
                <label for="imagenes_id">ID Imagen:</label><br>
                <input type="text" name="imagenes_id" id="imagenes_id"><br>
                @error('imagenes_id')
                <p style="color: red">{{$message}}</p>
                @enderror
                <br>
                <button type="submit">Guardar Datos</button>
            </form>
            <a class="volver" href="/volver">Volver</a>
        </div>
    </main>
    <footer>
        <p class="derechos">Derechos de autor reservados. &copy 2024</p>    
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>