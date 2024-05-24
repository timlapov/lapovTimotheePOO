<?php
include_once(__DIR__ . "/block/header.php");
include_once(__DIR__ . "/block/navbar.php");
?>

    <div class="container mt-5">
        <h2 class="mb-4">Ajouter une nouvelle moto</h2>
        <form action="http://localhost:8888/lapovTimotheePOO/index.php/moto/edit/<?= htmlspecialchars($moto->getId()) ?>" method="POST">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= htmlspecialchars($moto->getId()) ?>">
            </div>
            <div class="form-group">
                <label for="brand">Marque</label>
                <input type="text" class="form-control m-3" id="brand" name="brand" value="<?= htmlspecialchars($moto->getBrand()) ?>" required>
            </div>
            <div class="form-group">
                <label for="model">Modèle</label>
                <input type="text" class="form-control m-3" id="model" name="model" value="<?= htmlspecialchars($moto->getModel()) ?>" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control m-3" id="type" name="type" required>
                    <option value="Enduro" <?= $moto->getType() == 'Enduro' ? 'selected' : '' ?>>Enduro</option>
                    <option value="Custom" <?= $moto->getType() == 'Custom' ? 'selected' : '' ?>>Custom</option>
                    <option value="Sportive" <?= $moto->getType() == 'Sportive' ? 'selected' : '' ?>>Sportive</option>
                    <option value="Roadster" <?= $moto->getType() == 'Roadster' ? 'selected' : '' ?>>Roadster</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" class="form-control m-3" id="price" name="price" value="<?= htmlspecialchars($moto->getPrice()) ?>" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="image">Image (URL)</label>
                <input type="url" class="form-control m-3" id="image" name="image" value="<?= htmlspecialchars($moto->getImage()) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary m-3">Modifier</button>
        </form>
    </div>

<?php
include_once(__DIR__ . "/block/footer.php");
?>