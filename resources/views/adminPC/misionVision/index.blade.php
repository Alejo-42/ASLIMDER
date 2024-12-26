@extends('layouts1.admin')

@section('content')

<div class="container">
    <h2>MISION Y VISION</h2>
    <hr class="featurette-divider">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de Mision y Vision</h1>
      </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Imagen</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa quisquam recusandae temporibus fugiat quibusdam nobis harum facilis. Iusto laborum odio dolores optio dolore dicta, itaque culpa maxime animi rerum minus!</td>
              <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur tempore vero natus aperiam at quasi veniam excepturi dicta? Quod eaque amet suscipit numquam, voluptatibus fugit cum omnis rerum deleniti earum?</td>
              <td><a class="btn btn-outline-success" href="/EditMisVis">Actualizar</a></td>
            </tr>
          </tbody>
        </table>
        <a href="/misvis/create">CREATE</a>
      </div>
</div>
@endsection