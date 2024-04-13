<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de LED</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Control de LED</h1>
        <form action="{{ route('encender') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Encender LED</button>
        </form>
        <form action="{{ route('apagar') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Apagar LED</button>
        </form>
    </div>
</body>
</html>
