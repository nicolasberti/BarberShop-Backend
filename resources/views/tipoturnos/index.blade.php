<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3 d-flex justify-content-center">
            <div class="form-group">
                @if (session('error'))
                    <h6 class="alert alert-danger">{{ session('error') }}</h6>
                @endif
                <a href="/tipoturnos/create" class="btn btn-success">Crear nuevo tipo de turno</a>
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
        <th scope="col">Tipo</th>
        <th scope="col">Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipoturnos as $tipoturno)
            <tr>
                <th scope="row">{{$tipoturno->tipo}}</th>
                <th scope="row">{{$tipoturno->precio}}</th>
            </tr>
        @endforeach
    </tbody>
  </table>