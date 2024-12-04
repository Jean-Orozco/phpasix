<?php
namespace App\Controllers;

use App\Models\Videojoc; // Asegúrate de que Videojoc esté correctamente importado

class VideojocController {

    public function index() {
        // Obtener todos los videojuegos
        $videojocs = Videojoc::all();
        require '../resources/views/videojoc/index.blade.php'; // Actualizamos la ruta a videojocs
    }

    public function create() {
        // Mostrar formulario para crear un nuevo videojuego
        require '../resources/views/videojoc/create.blade.php'; // Actualizamos la ruta a videojocs
    }
    public function store()
    {
        // Validar entrada
        if (!isset($_POST['titol'], $_POST['plataforma'], $_POST['any_lançament'], $_POST['preu'], $_POST['valoracio'])) {
            die('Falten dades.');
        }

        // Crear un nou videojoc
        $videojoc = new Videojoc();
        $videojoc->titol = $_POST['titol'];
        $videojoc->plataforma = $_POST['plataforma'];
        $videojoc->any_lançament = $_POST['any_lançament'];
        $videojoc->preu = $_POST['preu'];
        $videojoc->valoracio = $_POST['valoracio'];

        if ($videojoc->save()) {
            header('Location: /videojoc');
            exit;
        } else {
            die('No s\'ha pogut guardar el videojoc.');
        }
    }

    public function edit($id) {
        // Obtener el videojuego por su ID
        $videojoc = (new \App\Models\Videojoc)->find($id);
        if (!$videojoc) {
            header('Location: /videojoc');
            exit();
        }
        // Mostrar formulario de edición
        require '../resources/views/videojoc/edit.blade.php'; // Actualizamos la ruta a videojocs
    }

    public function update($id) {
        // Obtener el videojuego por su ID
        $videojoc = (new \App\Models\Videojoc)->find($id);
        if (!$videojoc) {
            header('Location: /videojoc');
            exit();
        }
        // Actualizar los datos del videojuego
        $videojoc->titol = $_POST['titol'];
        $videojoc->plataforma = $_POST['plataforma'];
        $videojoc->any_lançament = $_POST['any_lançament'];
        $videojoc->preu = $_POST['preu'];
        $videojoc->valoracio = $_POST['valoracio'];
        $videojoc->save(); // Guardar cambios
        header('Location: /videojoc'); // Redirigir a la lista de videojuegos
    }

    public function delete($id) {
        // Confirmación de eliminación
        if ($id === null) {
            header('Location: /videojoc');
            exit();
        }
        $videojoc = (new \App\Models\Videojoc)->find($id);
        return require '../resources/views/videojoc/delete.blade.php'; // Confirmar eliminación
    }

    public function destroy($id) {
        // Eliminar el videojuego
        (new \App\Models\Videojoc)->delete($id);
        header('Location: /videojoc'); // Redirigir a la lista de videojuegos
    }

    public function show($id) {
        // Obtener el videojuego por su ID
        $videojoc = (new \App\Models\Videojoc)->find($id);
        if (!$videojoc) {
            header('Location: /videojoc');
            exit();
        }
        // Mostrar formulario de edición
        require '../resources/views/videojoc/show.blade.php'; // Actualizamos la ruta a videojocs
    }

}
