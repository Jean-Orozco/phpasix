<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalls del llibre</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100">
<header class="bg-gray-800 py-6">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-4xl font-bold text-gray-200">Detalls del llibre</h1>
    </div>
</header>
<main class="py-8">
    <div class="max-w-4xl mx-auto bg-gray-800 shadow-lg rounded-lg p-8">
        <!-- Mostrar el nombre del libro -->
        <h2 class="text-3xl font-bold text-gray-50 mb-6">
            <?php echo htmlspecialchars($book->name); ?>
        </h2>

        <!-- Mostrar autor y año de publicación -->
        <p class="text-gray-300 text-lg mb-4"><strong>Autor:</strong> <?php echo htmlspecialchars($book->author); ?></p>
        <p class="text-gray-300 text-lg mb-6"><strong>Any de publicació:</strong> <?php echo htmlspecialchars($book->releaseYear); ?></p>

        <!-- Botones para volver a la lista y la home -->
        <div class="mt-6 flex space-x-4">
            <!-- Botón para volver a la lista de libros -->
            <a href="/books" class="bg-gray-700 text-gray-100 px-4 py-2 rounded hover:bg-gray-600 transition">
                Tornar a la llista
            </a>
            <!-- Botón para volver a la Home -->
            <a href="/" class="bg-gray-600 text-gray-100 px-4 py-2 rounded hover:bg-gray-500 transition">
                Tornar a la Home
            </a>
        </div>
    </div>
</main>
<footer class="bg-black text-gray-400 py-4">
    <div class="max-w-7xl mx-auto text-center">
        <p>© Projecte Llibres - ASIX</p>
    </div>
</footer>
</body>
</html>
