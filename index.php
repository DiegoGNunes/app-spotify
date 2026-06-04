<?php
$titulo_da_pagina = "Discos";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <main class="container">
        <h1 class="text-center fs-2 mt-2 mb-4">Discografia</h1>
        <div class="row mb-4">
            <?php
            include "inc-conexao.php";
            $sql = "select * from tb_discografia order by artista, ano";
            $resultado = mysqli_query($conexao, $sql);
            while($linha = mysqli_fetch_assoc($resultado)){
                ?>
            <div class="col-3">
                <div class="cartao" style="background-image: url('<?=$linha['foto'];?>">
                    <div class="cor-cartao">
                        <div class="texto-cartao p-3">
                            <h1 class="fs-4"><?=$linha['nome'];?></h1>
                            <h2 class="fs-5"><?=$linha['artista'];?></h2>
                            <h3 class="6"><?=$linha['tipo'];?> - <?=$linha['ano'];?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            mysqli_close($conexao);
            ?>
            </div>
</main>

</body>
<?php include "inc-rodape.php";
?>
</html>