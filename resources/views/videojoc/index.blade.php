<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-100">

<section class="py-8">
    <div class="max-w-7xl mx-auto bg-gray-800 shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center text-gray-50 mb-6">Llista de Videojocs</h1>

        <!-- Contenedor para los botones -->
        <div class="flex justify-between mb-6">
            <!-- Botón para volver a la Home -->
            <a href="/" class="bg-gray-700 text-gray-200 px-6 py-3 rounded-lg hover:bg-gray-600 transition duration-300 w-1/2 text-center">
                Tornar a la Home
            </a>

            <!-- Botón para crear videojoc -->
            <a href="/videojoc/create" class="bg-gray-700 text-gray-200 px-6 py-3 rounded-lg hover:bg-gray-600 transition duration-300 w-1/2 text-center">
                Crear Videojoc
            </a>
        </div>

        <!-- Tabla con estilo mejorado -->
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-600 rounded-lg">
                <thead class="bg-gray-700 text-gray-200">
                <tr class="text-left">
                    <th class="px-6 py-3 border-b border-gray-600">Id</th>
                    <th class="px-6 py-3 border-b border-gray-600">Títol</th>
                    <th class="px-6 py-3 border-b border-gray-600">Plataforma</th>
                    <th class="px-6 py-3 border-b border-gray-600">Any de Llançament</th>
                    <th class="px-6 py-3 border-b border-gray-600">Preu</th>
                    <th class="px-6 py-3 border-b border-gray-600">Valoració</th>
                    <th class="px-6 py-3 border-b border-gray-600">Accions</th>
                </tr>
                </thead>
                <tbody class="text-gray-200">
                <?php foreach ($videojocs as $videojoc): ?>
                <tr class="hover:bg-gray-700 transition-all">
                    <td class="px-6 py-3 border-b border-gray-600"><?= $videojoc->id; ?></td>
                    <td class="px-6 py-3 border-b border-gray-600"><?= $videojoc->titol; ?></td>
                    <td class="px-6 py-3 border-b border-gray-600"><?= $videojoc->plataforma; ?></td>
                    <td class="px-6 py-3 border-b border-gray-600"><?= $videojoc->any_lançament; ?></td>
                    <td class="px-6 py-3 border-b border-gray-600"><?= $videojoc->preu; ?> €</td>
                    <td class="px-6 py-3 border-b border-gray-600"><?= $videojoc->valoracio; ?>/10</td>
                    <td class="px-6 py-3 border-b border-gray-600 space-x-4">
                        <a href="/videojoc/show/<?= $videojoc->id ?>" class="text-blue-500 hover:text-blue-300 transition-all">Mostrar</a>
                        <a href="/videojoc/edit/<?= $videojoc->id ?>" class="text-blue-500 hover:text-blue-300 transition-all">Editar</a>
                        <a href="/videojoc/confirm-delete/<?= $videojoc->id ?>" class="text-red-500 hover:text-red-300 transition-all">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

</body>
</html>
