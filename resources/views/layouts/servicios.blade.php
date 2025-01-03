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
        <div class="tabla-a">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">URL DEL SERVICIOS</th>
                        <th scope="col">ID DE LA IMAGEN</th>
                        <th scope="col">ID DE LA CATEGORIA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Servicios_A as $Servicios)
                    <tr>
                        <th>{{$Servicios->id}}</th>
                        <td>{{$Servicios->titulo}}</td>
                        <td>{{$Servicios->descripcion}}</td>
                        <td>{{$Servicios->servicioURL}}</td>
                        <td>{{$Servicios->imagenes_id}}</td>
                        <td>{{$Servicios->categoria_id}}</td>
                        <td class="acciones">
                            <a href="/servicios/estado/{{$Servicios->id}}"><button type="button" class="btn btn-secondary">Editar</button></a>
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
        <div class="tabla-d">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">URL DEL SERVICIOS</th>
                        <th scope="col">ID DE LA IMAGEN</th>
                        <th scope="col">ID DE LA CATEGORIA</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Servicios_D as $Servicios)
                    <tr>
                        <th>{{$Servicios->id}}</th>
                        <td>{{$Servicios->titulo}}</td>
                        <td>{{$Servicios->descripcion}}</td>
                        <td>{{$Servicios->servicioURL}}</td>
                        <td>{{$Servicios->imagenes_id}}</td>
                        <td>{{$Servicios->categoria_id}}</td>
                        <td class="acciones">
                            <a href="/servicios/estado/{{$Servicios->id}}"><button type="button" class="btn btn-secondary">Editar</button></a>
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
        <div class="formulario">
            <form action="/servicios/guardar" method="post">
                @csrf
                <label for="titulo">Titulo:</label><br>
                <input type="text" name="titulo" id="titulo"><br>
                @error('titulo')
                <p style="color: red">{{$message}}</p>
                @enderror
                
                <label for="descripcion">Descripcion:</label><br>
                <input type="text" name="descripcion" id="descripcion"><br>
                @error('descripcion')
                <p style="color: red">{{$message}}</p>
                @enderror
                
                <label for="servicioURL">Servicio:</label><br>
                <input type="text" name="servicioURL" id="servicioURL"><br>
                @error('servicioURL')
                <p style="color: red">{{$message}}</p>
                @enderror

                <label for="imagenes_id">ID de la imagen:</label><br>
                <input type="text" name="imagenes_id" id="imagenes_id"><br>
                @error('imagenes_id')
                <p style="color: red">{{$message}}</p>
                @enderror
                
                <label for="categoria_id">ID de la Categoria:</label><br>
                <input type="text" name="categoria_id" id="categoria_id"><br>
                @error('categoria_id')
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