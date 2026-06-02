<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App-Spotify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
</head>
<body class="bg-info">
    <main class="container">
    <?php include "inc-menu.php";?>
    <div class="container py-5 bg-light rounded">
        <h1 class="mb-4 text-center">Cadastro de Discografia</h1>

        <!-- Aqui nós fazemos o link com a página de php que usamos para salvar as discografias usando o método post, que é para enviar informações. -->
        <form action="discografia-salvar.php" method="post">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="artista" class="form-label">Artista</label>
                        <input type="text" id="artista" name="artista" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome do Álbum</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="ano" class="form-label">Ano de Lançamento</label>
                        <input type="number" id="ano" name="ano" class="form-control" min="1900" max="2100" required>
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select name="tipo" id="tipo" class="form-select">
                            <option value="Álbum">Álbum</option>
                            <option value="Single">Single</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="url" id="foto" name="foto" class="form-control" required>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="reset" class="btn btn-danger">Limpar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<?php include "inc-rodape.php";?>
</body>
</html>
