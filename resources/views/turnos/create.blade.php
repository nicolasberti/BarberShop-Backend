<!DOCTYPE html>
<html>
<head>
    <title>Crear nuevo turno</title>
</head>
<body>
    <h1>Crear nuevo turno</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('turnos.store') }}">
        @csrf

        <div>
            <label for="fecha">Fecha:</label>
            <input type="datetime-local" name="fecha" id="fecha" required>
        </div>

        <button type="submit">Crear turno</button>
    </form>
</body>
</html>
