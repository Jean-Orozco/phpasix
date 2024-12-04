<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900">

<section>
    <div class="max-w-4xl mx-auto bg-gray-800 shadow-lg rounded-lg py-8 sm:px-6 lg:px-8 mt-10">
        <h1 class="text-3xl font-bold text-center text-white mb-8">Afegir nou videojoc</h1>
        <div>
            <form action="/videojoc/store" method="POST">
                <!-- Títol -->
                <div class="mb-6">
                    <label for="titol" class="block text-sm font-medium text-gray-300">Títol del videojoc</label>
                    <input type="text" name="titol" id="titol" class="mt-1 block w-full px-4 py-3 border border-gray-600 rounded-md focus:ring-2 focus:ring-white focus:border-white shadow-sm text-white bg-gray-900" required>
                </div>

                <!-- Plataforma -->
                <div class="mb-6">
                    <label for="plataforma" class="block text-sm font-medium text-gray-300">Plataforma</label>
                    <input type="text" name="plataforma" id="plataforma" class="mt-1 block w-full px-4 py-3 border border-gray-600 rounded-md focus:ring-2 focus:ring-white focus:border-white shadow-sm text-white bg-gray-900" required>
                </div>

                <!-- Any de llançament -->
                <div class="mb-6">
                    <label for="any_lançament" class="block text-sm font-medium text-gray-300">Any de llançament</label>
                    <input type="number" name="any_lançament" id="any_lançament" class="mt-1 block w-full px-4 py-3 border border-gray-600 rounded-md focus:ring-2 focus:ring-white focus:border-white shadow-sm text-white bg-gray-900" required>
                </div>

                <!-- Preu -->
                <div class="mb-6">
                    <label for="preu" class="block text-sm font-medium text-gray-300">Preu (€)</label>
                    <input type="text" name="preu" id="preu" class="mt-1 block w-full px-4 py-3 border border-gray-600 rounded-md focus:ring-2 focus:ring-white focus:border-white shadow-sm text-white bg-gray-900" required>
                </div>

                <!-- Valoració -->
                <div class="mb-6">
                    <label for="valoracio" class="block text-sm font-medium text-gray-300">Valoració (0-10)</label>
                    <input type="number" name="valoracio" id="valoracio" min="0" max="10" step="0.1" class="mt-1 block w-full px-4 py-3 border border-gray-600 rounded-md focus:ring-2 focus:ring-white focus:border-white shadow-sm text-white bg-gray-900" required>
                </div>

                <!-- Botón de Crear -->
                <div class="flex justify-between mt-6">
                    <button type="submit" class="bg-gray-700 text-white px-6 py-3 rounded-md hover:bg-gray-600 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-500 shadow-lg w-1/2 text-center">
                        Crear Videojoc
                    </button>
                    <!-- Botón para volver a la Home -->
                    <a href="/" class="bg-gray-600 text-white px-6 py-3 rounded-md hover:bg-gray-500 transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-gray-400 shadow-lg w-1/2 text-center">
                        Tornar a la Home
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
