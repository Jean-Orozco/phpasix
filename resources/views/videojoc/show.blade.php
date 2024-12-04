<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalls del videojoc</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-100 flex flex-col min-h-screen">

<section class="py-8 flex-grow">
    <div class="max-w-7xl mx-auto bg-gray-800 shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-bold text-center text-gray-50 mb-6">Detalls del videojoc</h1>

        <!-- Mostrar el nombre del videojuego -->
        <h2 class="text-2xl font-bold text-white mb-4">
            <?php echo htmlspecialchars($videojoc->titol); ?>
        </h2>

        <!-- Mostrar plataforma y año de lanzamiento -->
        <p class="text-gray-200"><strong>Plataforma:</strong> <?php echo htmlspecialchars($videojoc->plataforma); ?></p>
        <p class="text-gray-200"><strong>Any de llançament:</strong> <?php echo htmlspecialchars($videojoc->any_lançament); ?></p>

        <!-- Mostrar el precio -->
        <p class="text-gray-200"><strong>Preu:</strong> <?php echo htmlspecialchars($videojoc->preu); ?> €</p>

        <!-- Mostrar valoración -->
        <p class="text-gray-200"><strong>Valoració:</strong> <?php echo htmlspecialchars($videojoc->valoracio); ?>/10</p>

        <!-- Botones para volver a la lista y la home -->
        <div class="mt-6 flex justify-between">
            <!-- Botón para volver a la lista de videojuegos -->
            <a href="/videojoc" class="bg-gray-700 text-gray-200 px-6 py-3 rounded-lg hover:bg-gray-600 transition duration-300 w-1/2 text-center">
                Tornar a la llista
            </a>

            <!-- Botón para volver a la Home -->
            <a href="/" class="bg-gray-700 text-gray-200 px-6 py-3 rounded-lg hover:bg-gray-600 transition duration-300 w-1/2 text-center">
                Tornar a la Home
            </a>
        </div>
    </div>
</section>

<!-- Footer, al final de la página -->
<footer class="bg-black text-gray-400 py-4">
    <div class="max-w-7xl mx-auto text-center">
        <p>© Projecte Videojocs - ASIX</p>
    </div>
</footer>

</body>
</html>
