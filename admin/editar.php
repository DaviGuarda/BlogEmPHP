<?php

include_once('../config/connection.php');

include_once('session.php');

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description FROM posts WHERE id = :id');

$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


include_once('header.php');

?>

<main class="col-md-9 col-lg-10">
    <div class="container">
        <h1 id="main-title">Editar Post</h1>
        <form action="editar-fim.php" method="post" enctype="multipart/form-data">
            <?php foreach ($results as $post): ?>
            <p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
            <label for="exampleFormControlTextarea1" class="form-label">Título</label>
            <input type="text" value="<?= $post["title"] ?>" name="title" class="form-control"
                id="formGroupExampleInput" placeholder="Digite o título" required>
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" type="text" value="<?= $post["description"] ?>" name="description"
                placeholder="Descrição" id="floatingTextarea2" rows="2" required></textarea>
            <?php endforeach; ?>
            <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3" style="margin-top: 20px;">EDITAR</button>
                </div>
        </form>
    </div>
</main>


<?php

include "footer.php";

?>