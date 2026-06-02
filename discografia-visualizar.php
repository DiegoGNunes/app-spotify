<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include "inc-conexao.php"; 

$id = $_GET['id'];

$sql ="select * from tb_discografia where id = $id";
$resultado = mysqli_query($conexao, $sql);

$foto = $artista = $nome = $ano = $tipo = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $artista = $linha['artista'];
    $nome = $linha['nome'];
    $foto = $linha['foto'];
    $ano = $linha['ano'];
    $tipo = $linha['tipo'];
}
?>
<body>
    <?php include "inc-menu.php";?>
    <main class="container mt-5">
        <h1>Visualizar Discografia</h1>
        <!-- <?=$nome; ?> essa sintaxe é uma forma curta de exibir uma variável PHP dentro do HTML. -->
        <img src="<?=$foto; ?>" class="img-fluid" alt="<?=$nome; ?>"> <br>
        Artista:  <?=$artista; ?>  <br>
        Nome do álbum:  <?=$nome; ?> <br>
        Ano de lançamento: <?=$ano; ?> <br>
        Tipo:  <?=$tipo; ?> <br>
    </main>
    <?php include "inc-rodape.php";?>
</body>
</html>