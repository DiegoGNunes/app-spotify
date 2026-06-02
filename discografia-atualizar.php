<?php
$id = $_GET['id'];
$nome = $_POST['nome'];
$artista = $_POST['artista'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

include "inc-conexao.php";
$sql = "update tb_discografia set artista='{$artista}', 
nome='{$nome}', ano={$ano}, tipo='{$tipo}',
foto='{$foto}' where id={$id}";
$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);

include "inc-rodape.php"
?>