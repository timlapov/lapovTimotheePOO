<?php
include_once(__DIR__ . "/block/header.php");
include_once(__DIR__ . "/block/navbar.php");
?>

    <div class="container mt-5">
        <h2 class="mb-4">Ajouter une nouvelle moto</h2>
        <form action="http://localhost:8888/lapovTimotheePOO/index.php/moto/add" method="POST">
            <div class="form-group">
                <label for="brand">Marque</label>
                <input type="text" class="form-control m-3" id="brand" name="brand" placeholder="Entrez la marque" required>
            </div>
            <div class="form-group">
                <label for="model">Modèle</label>
                <input type="text" class="form-control m-3" id="model" name="model" placeholder="Entrez le modèle" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control m-3" id="type" name="type" required>
                    <option value="Enduro">Enduro</option>
                    <option value="Custom">Custom</option>
                    <option value="Sportive">Sportive</option>
                    <option value="Roadster">Roadster</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" class="form-control m-3" id="price" name="price" placeholder="Entrez le prix" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="image">Image (URL)</label>
                <input type="url" class="form-control m-3" id="image" name="image" placeholder="Entrez l'URL de l'image" required>
            </div>
            <button type="submit" class="btn btn-primary m-3">Ajouter</button>
        </form>
    </div>

<?php
include_once(__DIR__ . "/block/footer.php");
?>