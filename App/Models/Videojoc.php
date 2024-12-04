<?php
namespace App\Models;

use Core\App;
use PDO;

class Videojoc {
    protected static $table = "videojoc";

    public $id;
    public $titol;
    public $plataforma;
    public $any_lançament;
    public $preu;
    public $valoracio;

    public function __construct($data = []) {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        $this->titol = $data['titol'] ?? null;
        $this->plataforma = $data['plataforma'] ?? null;
        $this->any_lançament = $data['any_lançament'] ?? null;
        $this->preu = $data['preu'] ?? null;
        $this->valoracio = $data['valoracio'] ?? null;
    }

    public function save() {
        $db = App::get('database')->getConnection();
        if ($this->id) {
            // Editem
            $statement = $db->prepare('
                UPDATE ' . static::$table . ' 
                SET titol = :titol, plataforma = :plataforma, any_lançament = :any_lançament, preu = :preu, valoracio = :valoracio 
                WHERE id = :id
            ');
            $statement->bindValue(':id', $this->id);
            $statement->bindValue(':titol', $this->titol);
            $statement->bindValue(':plataforma', $this->plataforma);
            $statement->bindValue(':any_lançament', $this->any_lançament);
            $statement->bindValue(':preu', $this->preu);
            $statement->bindValue(':valoracio', $this->valoracio);
            $statement->execute();
        } else {
            // Creem
            $statement = $db->prepare('
                INSERT INTO ' . static::$table . ' (titol, plataforma, any_lançament, preu, valoracio) 
                VALUES (:titol, :plataforma, :any_lançament, :preu, :valoracio)
            ');
            $statement->bindValue(':titol', $this->titol);
            $statement->bindValue(':plataforma', $this->plataforma);
            $statement->bindValue(':any_lançament', $this->any_lançament);
            $statement->bindValue(':preu', $this->preu);
            $statement->bindValue(':valoracio', $this->valoracio);
            $statement->execute();

            if (!$this->id) {
                $this->id = $db->lastInsertId();
            }
        }
    }

    public static function all() {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table);
        $statement->execute();
        $videojocs = [];
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($results as $result) {
            $videojocs[] = new self($result);
        }
        return $videojocs;
    }

    public static function find($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('SELECT * FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        return $data ? new self($data) : null;
    }

    public static function delete($id) {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('DELETE FROM ' . static::$table . ' WHERE id = :id');
        $statement->bindValue(':id', $id);
        $statement->execute();
    }
}
