<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papelería</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-bold">Bienvenido a la Papelería</h1>
            <nav class="mt-2">
                <a href="/" class="mr-4 hover:underline transition duration-300 ease-in-out">Inicio</a>
                <a href="{{ route('products.index') }}" class="mr-4 hover:underline transition duration-300 ease-in-out">Productos</a>
                <a href="/contact" class="hover:underline transition duration-300 ease-in-out">Contacto</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto my-10 p-6 bg-white rounded-lg shadow-md">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Papelería. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
