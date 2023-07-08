<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3 d-flex justify-content-center">
            <div class="form-group">
                @if (session('error'))
                    <h6 class="alert alert-danger">{{ session('error') }}</h6>
                @endif
                <a href="/turnos/create" class="btn btn-success">Crear nuevo turno</a>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
    <h6 class="alert alert-success">{{ session('success') }}</h6>
@endif


<table class="table">
    <thead>
      <tr>
        <th scope="col">Fecha</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Estado</th>
        <th scope="col">Telefono</th>
        <th scope="col">Tipo</th>
        <th scope="col">Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($turnos as $turno)
            <tr>
                <th scope="row">{{$turno->fecha}}</th>
                <th scope="row">{{$turno->nombre}}</th>
                <th scope="row">{{$turno->apellido}}</th>
                <th scope="row">{{$turno->estado}}</th>
                <th scope="row">{{$turno->telefono}}</th>
                <th scope="row">{{$turno->tipoturno->tipo}}</th>
                <th scope="row">{{$turno->tipoturno->precio}}</th>
            </tr>
        @endforeach
    </tbody>
  </table>