<?php
namespace Src\Manager;
use Src\Entity\Moto;
use PDO;
use PDOException;

class MotoManager extends DatabaseManager {
    //FIND functions
    public function findAll()
    {
        $query = $this->getPdo()->prepare("SELECT * FROM moto");
        $query->execute([]);
        $results = $query->fetchAll();
        $motos = [];

        foreach ($results as $result) {
            $motos[] = Moto::fromArray($result);
        }
        return $motos;
    }
    public function findById(int $id)
    {
        try {
            $query = $this->getPdo()->prepare("SELECT * FROM moto WHERE id = :id");
            $query->execute([":id" => $id]);

            return Moto::fromArray($query->fetch());
        } catch (PDOException $e) {
            error_log("PDOException: " . $e->getMessage());
            return null;
        }
    }
    //ADD function
    public function add(Moto $moto): bool
    {
        if (empty($moto->getBrand()) || empty($moto->getModel()) || empty($moto->getType()) || empty($moto->getPrice()) || empty($moto->getImage())) {
            echo("Invalid data provided for adding moto.");
            return false;
        }
        try {
            $query = $this->getPdo()->prepare(
                "INSERT INTO moto (brand, model, type, price, image) 
VALUES (:brand, :model, :type, :price, :image)"
            );
            $result = $query->execute([
                ":brand" => $moto->getBrand(),
                ":model" => $moto->getModel(),
                ":type" => $moto->getType(),
                ":price" => $moto->getPrice(),
                ":image" => $moto->getImage()
            ]);
            if ($result) {
                return $result;
            } else {
                exit;
            }
        } catch (PDOException $e) {
            error_log("Error inserting city: " . $e->getMessage());
            exit;
            return false;
        }
    }
    //EDIT function
    public function edit(Moto $moto)
    {
        try {
            $query = $this->getPdo()->prepare(
                "UPDATE moto SET brand = :brand, model = :model, type = :type, price = :price, image = :image WHERE id = :id"
            );
            $result = $query->execute([
                ":id" => $moto->getId(),
                ":brand" => $moto->getBrand(),
                ":model" => $moto->getModel(),
                ":type" => $moto->getType(),
                ":price" => $moto->getPrice(),
                ":image" => $moto->getImage()
            ]);
            return $result;
        } catch (PDOException $e) {
            error_log("PDOException: " . $e->getMessage());
            return false;
        }
    }
    //DELETE function
    public function deleteById(int $id)
    {
        try {
            $query = $this->getPdo()->prepare("DELETE FROM moto WHERE id = :id");
            $result = $query->execute([
                ":id" => $id
            ]);
            if (!$result) {
                $errorInfo = $query->errorInfo();
                //error_log("SQL Error: " . $errorInfo[2]);
                echo("SQL Error: " . $errorInfo[2]);
            } else {
                //error_log("City with id $id successfully deleted.");
                echo("Moto with id $id successfully deleted.");
            }
        } catch (PDOException $e) {
            //error_log("PDOException: " . $e->getMessage());
            echo("PDOException: " . $e->getMessage());
        }
    }
}