<?php

include_once('../config/connection.php');
include "session.php";
include "header.php";

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,data,description,image FROM posts WHERE id = :id');

$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
    <div class="container-fluid">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($results as $post): ?>
            <div class="col gy-5">
                <div class="card">
                    <img src="../<?= $post["image"] ?>" class="card-img-top" alt="..." width="100">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $post["title"] ?>
                        </h5>
                        <p class="card-text">
                            <?= $post["data"] ?>
                        </p>
                        <p class="card-text">
                            <?= $post["description"] ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php

include "footer.php";

?>