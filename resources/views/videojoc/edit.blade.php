<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900">

<section>
    <div class="max-w-4xl mx-auto bg-gray-800 shadow-lg py-6 px-8 mt-10 rounded-lg">
        <h1 class="text-3xl font-semibold mb-6 text-center text-white">Editar videojoc: <?= $videojoc->titol ?></h1>
        <div>
            <form action="/videojoc/update/<?= $videojoc->id ?>" method="POST">
                <div class="mb-4">
                    <label for="titol" class="block text-sm font-medium text-gray-300">Títol</label>
                    <input type="text" name="titol" id="titol" value="<?= $videojoc->titol ?>" class="mt-1 block w-full px-4 py-2 border border-gray-600 rounded-md focus:ring-2 focus:ring-white text-white bg-gray-900">
                </div>
                <div class="mb-4">
                    <label for="plataforma" class="block text-sm font-medium text-gray-300">Plataforma</label>
                    <input type="text" name="plataforma" id="plataforma" value="<?= $videojoc->plataforma ?>" class="mt-1 block w-full px-4 py-2 border border-gray-600 rounded-md focus:ring-2 focus:ring-white text-white bg-gray-900">
                </div>
                <div class="mb-4">
                    <label for="any_lançament" class="block text-sm font-medium text-gray-300">Any de Llançament</label>
                    <input type="number" name="any_lançament" id="any_lançament" value="<?= $videojoc->any_lançament ?>" class="mt-1 block w-full px-4 py-2 border border-gray-600 rounded-md focus:ring-2 focus:ring-white text-white bg-gray-900">
                </div>
                <div class="mb-4">
                    <label for="preu" class="block text-sm font-medium text-gray-300">Preu</label>
                    <input type="text" name="preu" id="preu" value="<?= $videojoc->preu ?>" class="mt-1 block w-full px-4 py-2 border border-gray-600 rounded-md focus:ring-2 focus:ring-white text-white bg-gray-900">
                </div>
                <div class="mb-4">
                    <label for="valoracio" class="block text-sm font-medium text-gray-300">Valoració</label>
                    <input type="number" step="0.1" name="valoracio" id="valoracio" value="<?= $videojoc->valoracio ?>" min="0" max="10" class="mt-1 block w-full px-4 py-2 border border-gray-600 rounded-md focus:ring-2 focus:ring-white text-white bg-gray-900">
                </div>
                <!-- Botón para editar -->
                <div class="flex justify-between mt-6">
                    <button type="submit" class="bg-gray-700 text-white px-6 py-3 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 w-1/2 text-center">
                        Editar
                    </button>
                    <!-- Botón para volver a la Home -->
                    <a href="/" class="bg-gray-600 text-white px-6 py-3 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-400 w-1/2 text-center">
                        Tornar a la Home
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

</body>
</html>
