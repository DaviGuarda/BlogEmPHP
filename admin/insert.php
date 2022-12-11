<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERIR</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
</head>

<body>
    <main>
        <div class="container">
            <h1>Inserir</h1>
            <form action="envia.php" method="post" enctype="multipart/form-data" class="was-validated">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Título</label>
                    <input type="text" name="title" class="form-control" id="formGroupExampleInput"
                        placeholder="Digite o título" required>
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
                    <textarea class="form-control" type="text" name="description" placeholder="Descrição"
                        id="floatingTextarea2" rows="2" required></textarea>
                    <div class="invalid-feedback">
                        Digite alguma descrição, por gentileza.
                    </div>
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
        </div>
    </main>
</body>

</html>