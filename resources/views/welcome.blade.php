<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de LED</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="container">
        <h1 class="text-3xl mb-8">Control de LED</h1>
        <form action="{{ route('encender') }}" method="POST" class="mb-4">
            @csrf
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Encender LED
            </button>
        </form>
        <form action="{{ route('apagar') }}" method="POST">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Apagar LED
            </button>
        </form>
    </div>
</body>
</html>
