<?php
include_once(__DIR__ . "/block/header.php");
include_once(__DIR__ . "/block/navbar.php");
?>
    <div class="container mt-5">
        <div class="row g-0 justify-content-center text-center">
                <div class="col-md-6">
                    <div class="card h-100 text-bg-light">
                        <img src="<?= htmlspecialchars($moto->getImage()) ?>" class="card-img-top" alt="Moto Image">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($moto->getBrand()) ?> - <?= htmlspecialchars($moto->getModel()) ?></h5>
                            <p class="card-text"><strong>Type:</strong> <?= htmlspecialchars($moto->getType()) ?></p>
                            <p class="card-text"><strong>Prix:</strong> €<?= htmlspecialchars($moto->getPrice()) ?></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="http://localhost:8888/lapovTimotheePOO/index.php/moto/edit/<?= htmlspecialchars($moto->getId()) ?>" class="btn btn-secondary">Modifier</a>
                            <a href="http://localhost:8888/lapovTimotheePOO/index.php/moto/delete/<?= htmlspecialchars($moto->getId()) ?>" class="btn btn-danger">Supprimer</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
<?php
include_once(__DIR__ . "/block/footer.php");
?>