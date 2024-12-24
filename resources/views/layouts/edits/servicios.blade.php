<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/layouts/servicios/edit/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>EDITAR</title>
</head>
<body>
    <header>
        <h1>EDITAR SERVICIOS</h1>
    </header>
    <main>
        <form action="/servicios/actualizar/{{$editarServicios->id}}" method="post">
            @csrf
            @method('put')
            <label for="titulo">Titulo:</label><br>
            <input value="{{$editarServicios->titulo}}" type="text" name="titulo" id="titulo"><br>
            @error('titulo')
            <p style="color: red">{{$message}}</p>
            @enderror
            
            <label for="descripcion">Descripcion:</label><br>
            <input value="{{$editarServicios->descripcion}}" type="text" name="descripcion" id="descripcion"><br>
            @error('descripcion')
            <p style="color: red">{{$message}}</p>
            @enderror
            
            <label for="servicioURL">Servicio:</label><br>
            <input value="{{$editarServicios->servicioURL}}" type="text" name="servicioURL" id="servicioURL"><br>
            @error('servicioURL')
            <p style="color: red">{{$message}}</p>
            @enderror
            
            <label for="imagenes_id">ID de la imagen:</label><br>
            <input value="{{$editarServicios->imagenes_id}}" type="text" name="imagenes_id" id="imagenes_id"><br>
            @error('imagenes_id')
            <p style="color: red">{{$message}}</p>
            @enderror
            
            <label for="categoria_id">ID de la Categoria:</label><br>
            <input value="{{$editarServicios->categoria_id}}" type="text" name="categoria_id" id="categoria_id"><br>
            @error('categoria_id')
            <p style="color: red">{{$message}}</p>
            @enderror
            
            <button type="submit">Actualizar Datos</button>
        </form>
    </main>
    <footer>
        <p class="derechos">Derechos de autor reservados. &copy 2024</p>    
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>