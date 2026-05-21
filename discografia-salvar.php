<?php
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

$conexao = mysqli_connect("localhost", "root", "", "db_spotify");
if(!$conexao){
    die("<h3>Erro</h3>" . mysqli_connect_error());
}

$sql = "INSERT INTO tb_discografia(artista, nome, ano, tipo, foto) values('$artista', '$nome', $ano, '$tipo', '$foto')";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "Cadastrado com sucesso";
}else{
    echo "Deu algo errado";
}

mysqli_close($conexao);



?>