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
<body class="bg-gray-300">
        <h1 class="text-4xl font-black mb-8 flex justify-center items-center mt-20">HMI PIC18F4550</h1>
        <div class="flex flex-col border border-black rounded-lg w-1/3 bg-slate-800 ml-20">
        <form action="{{ route('encender') }}" method="POST" class="mb-4">
            @csrf
            <div class="flex flex-col justify-center items-center">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 mb-5 mt-5 rounded focus:outline-none focus:shadow-outline">
                Encender LED
            </button>
            </div>
        </form>
        <form action="{{ route('apagar') }}" method="POST">
            @csrf
            <div class="flex flex-col justify-center items-center">
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 mb-5 rounded focus:outline-none focus:shadow-outline">
                Apagar LED
            </button>
            </div>
        </form>
        </div>
</body>
</html>
