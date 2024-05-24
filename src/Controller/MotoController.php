<?php

namespace Src\Controller;


class MotoController
{
    // Route: /moto
    public function getAll()
    {
        //Appel de template
        include(__DIR__ . "/../../Templates/moto/index.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        echo "ROUTE: /moto/$id   (getById)";
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        echo "ROUTE: /moto/$type   (getByType)";
    }

    // Route: /moto/add/
    public function add()
    {
        //Verif SI form valider ( methode POST )
        //SI tous les champs sont fournies
        //add en BDD
        //redirection index

        //Afficher formulaire
        echo "ROUTE: /moto/add   (add)";
    }

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        //Verif si form valider ( methode POST )
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index

        echo "ROUTE: /moto/edit/$id   (edit)";
    }

    // Route: /pizza/delete/$id
    public function delete($id)
    {
        echo "ROUTE: /moto/delete/$id   (delete)";
    }
}
