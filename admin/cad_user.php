<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuários</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container">
        <form action="cad_userOK.php" method="POST" class="pt-5 pb-5">
            <h1>Cadastro de usuários</h1>
            <div class="mb-3">
                <label class="form-label">Digite o nome do usuário</label>
                <input type="text" class="form-control" name="nome" style="width: 200px;">
            </div>
            <div class="mb-3">
                <label class="form-label">Digite o login do usuário</label>
                <input type="text" class="form-control" name="login" style="width: 200px;">
            </div>
            <div class="mb-3">
                <label class="form-label">Digite a senha do usuário</label>
                <input type="password" class="form-control" name="senha" style="width: 200px;">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Cadastrar Usuário</button>
            </div>
        </form>
        <a href="index.php"><button type="submit" class="btn btn-dark">Voltar</button></a>
    </div>
</body>

</html>