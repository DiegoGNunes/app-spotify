<?php
$id = $_GET['id'];
include "inc-conexao.php";
$sql = "select * from tb_discografia where id = {$id}";
$resultado = mysqli_query($conexao, $sql);
$nome = $artista = $foto = $tipo = $ano = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $artista = $linha['artista'];
    $foto = $linha['foto'];
    $tipo = $linha['tipo'];
    $ano = $linha['ano'];
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Discografia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
</head>
<body>
    <?php include "inc-menu.php";?>
    <div class="container py-5 bg-light rounded">
    <main class="container">
        <h1 class="mb-4 text-center">Editar disco <br><?=$nome?></h1>
        <form method="post" action="discografia-atualizar.php?id=<?=$id?>">

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="mb-3">
            <label class="form-label">Artista</label>
            <input class="form-control" name="artista" value="<?=$artista?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Nome do álbum</label>
            <input class="form-control" name="nome" value="<?=$nome?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Ano</label>
            <input class="form-control" type="number" name="ano" value="<?=$ano?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input class="form-control" name="foto" value="<?=$foto?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo</label>
            <select class="form-select" name="tipo">
                <option value=""></option>
                <option value="Álbum" <?=($tipo == 'Álbum') ? 'selected' : ''?>>
                    Álbum
                </option>
                <option value="Single" <?=($tipo == 'Single') ? 'selected' : ''?>>
                    Single
                </option>
            </select>
        </div>

        <button class="btn btn-primary mb-2" type="submit">
            Atualizar disco
        </button>

    </div>
</div>
</main>
<?php mysqli_close($conexao);?>
<?php include "inc-rodape.php" ?>
</body>