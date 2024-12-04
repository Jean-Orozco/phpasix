<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
</head>
<body>
<h1>
    <?php
    echo $greeting . " World!<br>";
    echo "Resultat: " . ($a + $b) . "<br>"; // Ajusta la suma perquè funcioni correctament
    ?>
</h1>
<p>Llista de videojocs:</p>
<div>
    <table>
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Títol</th>
            <th scope="col">Plataforma</th>
            <th scope="col">Any de Llançament</th>
            <th scope="col">Preu</th>
            <th scope="col">Valoració</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($videojocs as $videojoc): ?>
        <tr>
            <td><?=$videojoc->id;?></td>
            <td><?=$videojoc->titol;?></td>
            <td><?=$videojoc->plataforma;?></td>
            <td><?=$videojoc->any_lançament;?></td>
            <td><?=$videojoc->preu;?></td>
            <td><?=$videojoc->valoracio;?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
