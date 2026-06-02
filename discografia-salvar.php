<!-- iniciamos o php -->
<?php
//Como utilizamos o método post formulário, precisamos enviar as informações da mesma forma.//
$artista = $_POST['artista'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];

//Aqui incluimos as configurações de conexao.//
include "inc-conexao.php";

//Aqui colocamos o comando sql para salvar/criar as infor ações no banco de dados via formulário.
//A tabela tem que ser com o memso nome e as colunas também.
$sql = "INSERT INTO tb_discografia(artista, nome, ano, tipo, foto) values('$artista', '$nome', $ano, '$tipo', '$foto')";

// mysqli_query é a função do PHP que realiza a operação.
// $sql: É a variável que contém a instrução ou comando em formato de texto (ex: "SELECT * FROM usuarios" ou "INSERT INTO...").
$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "Cadastrado com sucesso";
}else{
    echo "Deu algo errado";
}

//Aqui fechamos a conexao.

mysqli_close($conexao);

?>