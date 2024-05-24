<?php
include_once(__DIR__ . "/block/header.php");
include_once(__DIR__ . "/block/navbar.php");

$typeFromUrl = basename($_SERVER['REQUEST_URI']);
$validTypes = ['Toutes', 'Enduro', 'Custom', 'Sportive', 'Roadster'];
$selectedType = in_array($typeFromUrl, $validTypes) ? $typeFromUrl : 'Toutes';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["type"])) {
    $type = $_POST["type"];
    if ($type == "Toutes") {
        header('Location: http://localhost:8888/lapovTimotheePOO/index.php/moto');
    } else {
        header('Location: http://localhost:8888/lapovTimotheePOO/index.php/moto/' . $type);
    }
    exit();
}
?>
    <div class="container mt-5">
    <form action="http://localhost:8888/lapovTimotheePOO/index.php/moto" method="POST" class="form-inline col-3">
        <div class="form-group mb-2">
            <label for="type" class="mr-2">Type</label>
            <select class="form-control mr-2" id="type" name="type" required>
                <option value="Toutes" <?= $selectedType == 'Toutes' ? 'selected' : '' ?>>Toutes</option>
                <option value="Enduro" <?= $selectedType == 'Enduro' ? 'selected' : '' ?>>Enduro</option>
                <option value="Custom" <?= $selectedType == 'Custom' ? 'selected' : '' ?>>Custom</option>
                <option value="Sportive" <?= $selectedType == 'Sportive' ? 'selected' : '' ?>>Sportive</option>
                <option value="Roadster" <?= $selectedType == 'Roadster' ? 'selected' : '' ?>>Roadster</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Filtrer</button>
    </form>

<div class="container mt-5">
        <div class="row">
            <?php foreach ($motos as $moto): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?= htmlspecialchars($moto->getImage()) ?>" class="card-img-top" alt="Moto Image">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($moto->getBrand()) ?> - <?= htmlspecialchars($moto->getModel()) ?></h5>
                            <p class="card-text"><strong>Type:</strong> <?= htmlspecialchars($moto->getType()) ?></p>
                            <p class="card-text"><strong>Prix:</strong> €<?= htmlspecialchars($moto->getPrice()) ?></p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="http://localhost:8888/lapovTimotheePOO/index.php/moto/<?= htmlspecialchars($moto->getId()) ?>" class="btn btn-primary m-1">En savoir plus</a>
                            <a href="http://localhost:8888/lapovTimotheePOO/index.php/moto/edit/<?= htmlspecialchars($moto->getId()) ?>" class="btn btn-secondary m-1">Modifier</a>
                            <a href="http://localhost:8888/lapovTimotheePOO/index.php/moto/delete/<?= htmlspecialchars($moto->getId()) ?>" class="btn btn-danger m-1">Supprimer</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


<?php
include_once(__DIR__ . "/block/footer.php");
?>