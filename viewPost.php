<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <?php
    include "config/connection.php";
    include "nav.php";

    $id = $_GET['id'];

    $stmt = $conectar->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->execute(array('id' => $id));

    $results = $stmt->fetchALL(PDO::FETCH_ASSOC);
    ?>

    <div class="container pt-5">
        <?php foreach ($results as $post): ?>
        <h1 style="color: whitesmoke;"><?= $post['title'] ?></h1>
        <p style="color: whitesmoke;"><?= date('d/m/y', strtotime($post['data'])); ?></p>
        <p>
            <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>" style="max-width: 40%;">
        </p>
        <p style="color: whitesmoke;">
            <?= $post['description'] ?>
        </p>
        <?php endforeach; ?>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>