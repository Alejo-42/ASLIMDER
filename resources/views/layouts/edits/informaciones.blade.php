<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('sitioWeb/css/layouts/informaciones/edit/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>EDITAR</title>
</head>
<body>
    <header>
        <h1>EDITAR INFORMACION</h1>
    </header>
    <main>

        <form action="/informaciones/actualizar/{{$editarInfo->id}}" method="post">
            @csrf
            @method('put')
            <label for="logo">Logo:</label><br>
            <input value="{{$editarInfo->logo}}" type="text" name="logo" id="logo"><br>
            @error('logo')
            <p style="color: red">{{$message}}</p>
            @enderror
            
            <label for="correo">Correo:</label><br>
            <input value="{{$editarInfo->correo}}" type="text" name="correo" id="correo"><br>
            @error('correo')
            <p style="color: red">{{$message}}</p>
            @enderror
            
            <label for="telefono">Telefono:</label><br>
            <input value="{{$editarInfo->telefono}}" type="text" name="telefono" id="telefono"><br>
            @error('telefono')
            <p style="color: red">{{$message}}</p>
            @enderror
            
            <label for="direccion">Dirección:</label><br>
            <input value="{{$editarInfo->direccion}}" type="text" name="direccion" id="direccion"><br>
            @error('direccion')
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