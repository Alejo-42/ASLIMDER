<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/layouts/categorias/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>CATEGORIAS</title>
</head>
<body>
    <header>
        <h1>CATEGORIAS</h1>
    </header>
    <main>
        <div class="tabla-a">
            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE DE CATEGORIA</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($CT_A as $Categoria)
                <tr>
                    <th>{{$Categoria->id}}</th>
                    <td>{{$Categoria->nombreCT}}</td>
                    <td class="acciones">
                        <a href="/categorias/estado/{{$Categoria->id}}"><button type="button" class="btn btn-secondary">Estado</button></a>
                        <a href="/categorias/editar/{{$Categoria->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                        <form action="/categorias/eliminar/{{$Categoria->id}}" method="post">
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
                    <th scope="col">NOMBRE DE CATEGORIA</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($CT_D as $Categoria)
                <tr>
                    <th>{{$Categoria->id}}</th>
                    <td>{{$Categoria->nombreCT}}</td>
                    <td class="acciones">
                        <a href="/categorias/estado/{{$Categoria->id}}"><button type="button" class="btn btn-secondary">Estado</button></a>
                        <a href="/categorias/editar/{{$Categoria->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                        <form action="/categorias/eliminar/{{$Categoria->id}}" method="post">
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
            <form action="/categorias/guardar" method="post">
                @csrf
                <label for="nombreCT">NOMBRE:</label><br>
                <input type="text" name="nombreCT" id="nombreCT"><br>
                @error('nombreCT')
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