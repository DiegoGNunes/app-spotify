<?php
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

include "inc-conexao.php";

$sql = "INSERT INTO tb_discografia(artista, nome, ano, tipo, foto) values('$artista', '$nome', $ano, '$tipo', '$foto')";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "Cadastrado com sucesso";
}else{
    echo "Deu algo errado";
}

mysqli_close($conexao);

?>