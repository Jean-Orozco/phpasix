<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<section>
    <div class="max-w-7xl mx-auto bg-white shadow-lg py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-6 text-center">Eliminar videojoc</h1>
        <div class="bg-red-100 p-6 rounded-md border border-red-300">
            <p class="text-lg">Estàs segur que vols eliminar el videojoc <strong class="text-red-500"><?= $videojoc->titol ?></strong>?</p>
            <form action="/videojoc/destroy/<?= $videojoc->id ?>" method="POST" class="mt-4">
                <!-- Botón de eliminar -->
                <div class="flex justify-center gap-4">
                    <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Eliminar
                    </button>
                    <!-- Enlace para cancelar -->
                    <a href="/videojoc" class="text-blue-500 hover:text-blue-700">Cancel·lar</a>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
