<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Llibre</title>
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
<header class="bg-gray-800 text-gray-100 py-6 shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <div class="text-center flex-1">
            <h1 class="text-4xl font-bold">Editar Llibre</h1>
            <p class="text-lg mt-2">Modifica les dades del llibre: <strong><?= htmlspecialchars($book->name) ?></strong></p>
        </div>
        <!-- Botón para ir a Home -->
        <div class="ml-4">
            <a href="/" class="bg-gray-700 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition">
                Tornar a la Home
            </a>
        </div>
    </div>
</header>
<main class="py-10">
    <div class="max-w-4xl mx-auto bg-gray-800 shadow-lg rounded-lg p-8">
        <form action="/books/update/<?= $book->id ?>" method="POST" class="space-y-6">
            <!-- Títol -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Títol</label>
                <input type="text" name="name" id="name" value="<?= htmlspecialchars($book->name) ?>"
                       class="w-full px-4 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:ring-gray-500 focus:border-gray-500"
                       required>
            </div>

            <!-- Autor -->
            <div>
                <label for="author" class="block text-sm font-medium text-gray-300 mb-2">Autor</label>
                <input type="text" name="author" id="author" value="<?= htmlspecialchars($book->author) ?>"
                       class="w-full px-4 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:ring-gray-500 focus:border-gray-500"
                       required>
            </div>

            <!-- Any de publicació -->
            <div>
                <label for="releaseYear" class="block text-sm font-medium text-gray-300 mb-2">Any de publicació</label>
                <input type="number" name="releaseYear" id="releaseYear" value="<?= htmlspecialchars($book->releaseYear) ?>"
                       class="w-full px-4 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:ring-gray-500 focus:border-gray-500"
                       required>
            </div>

            <!-- Botons -->
            <div class="flex justify-between items-center">
                <!-- Botón Cancelar -->
                <a href="/books" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-500 transition">
                    Cancel·lar
                </a>
                <!-- Botón Guardar -->
                <button type="submit"
                        class="bg-gray-700 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition">
                    Guardar Canvis
                </button>
            </div>
        </form>
    </div>
</main>
<footer class="bg-black text-gray-400 py-4 mt-auto">
    <div class="max-w-7xl mx-auto text-center">
        <p>© Projecte Llibres - ASIX</p>
    </div>
</footer>
</body>
</html>
