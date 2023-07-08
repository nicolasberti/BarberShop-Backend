<!-- resources/views/turnos/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Crear nuevo tipo de turno</title>
</head>
<body>
    <h1>Crear nuevo tipo de turno</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('tipoturnos.store') }}">
        @csrf

        <div>
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo" id="tipo" required>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="text" name="precio" id="precio" required>
        </div>

        <button type="submit">Crear tipo de turno</button>
    </form>
</body>
</html>
