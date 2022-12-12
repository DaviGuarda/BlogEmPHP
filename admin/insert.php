<?php
include "session.php";
include "header.php";

$stmt = $conectar->prepare("SELECT * FROM category");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<h1>Inserir</h1>
<form action="envia.php" method="post" enctype="multipart/form-data" class="was-validated">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Título</label>
        <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Digite o título"
            required>
        <div class="invalid-feedback">
            Digite um título, por gentileza.
        </div>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Data</label>
        <input type="date" name="data" class="form-control" id="formGroupExampleInput2" required>
        <div class="invalid-feedback">
            Preencha a data, por gentileza.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Texto descritivo</label>
        <textarea class="form-control" type="text" name="description" placeholder="Descrição" id="floatingTextarea2"
            rows="2" required></textarea>
        <div class="invalid-feedback">
            Digite alguma descrição, por gentileza.
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
        <select class="form-control" name="category" id="category" aria-label="Default select example">
            <option selected>Abra para selecionar a categoria...</option>
            <?php foreach ($results as $category): ?>
            <option value="<?= $category['id_cat'] ?>">
                <?= $category['name_cat'] ?>
            </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="formFileSm" class="form-label">Envie a imagem</label>
        <input class="form-control form-control-sm" id="formFileSm" type="file" name="image" required>
        <div class="invalid-feedback">
            Incluir uma imagem, por gentileza.
        </div>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Publicar</button>
    </div>
</form>
<?php include "footer.php"; ?>