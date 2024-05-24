<?php

namespace Src\Controller;


use Src\Manager\MotoManager;
use Src\Entity\Moto;
use Exception;
class MotoController
{
    private MotoManager $motoManager;
    public function __construct()
    {
        $this->motoManager = new MotoManager();
    }
    // Route: /moto
    public function getAll()
    {
        //Appel de template
        $motos = $this->motoManager->findAll();
        include(__DIR__ . "/../../Templates/moto/index.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        echo "ROUTE: /moto/$id   (getById)";
        $moto = $this->motoManager->findById((int)$id);
        include(__DIR__ . "/../../Templates/moto/details.php");
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        echo "ROUTE: /moto/$type   (getByType)";
    }

    // Route: /moto/add/
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $image = $_POST['image'];

            try {
                $moto = new Moto($brand, $model, $type, (float)$price, $image, $id);
                $this->motoManager->add($moto);
                header('Location: http://localhost:8888/lapovTimotheePOO/index.php/moto');
                exit();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            include(__DIR__ . "/../../Templates/moto/add.php");
        }
    }

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        //Verif si form valider ( methode POST )
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = (int)$_POST['id'];
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $image = $_POST['image'];

            try {
                $moto = new Moto($brand, $model, $type, (float)$price, $image, $id);
                $this->motoManager->edit($moto);
                header('Location: http://localhost:8888/lapovTimotheePOO/index.php/moto');
                exit();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        } else {
            $moto = $this->motoManager->findById((int)$id);
            include(__DIR__ . "/../../Templates/moto/edit.php");
        }
    }

    public function delete($id)
    {
        echo "ROUTE: /moto/delete/$id   (delete)";
        $moto = $this->motoManager->findById($id);
        try {
            $this->motoManager->deleteById($id);
            include(__DIR__ . "/../../Templates/moto/delete.php");
        } catch(Exception $e) {
            echo(" ERROR");
    }
    }
}
