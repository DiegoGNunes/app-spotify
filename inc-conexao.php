<?php $conexao = mysqli_connect("localhost", "root", "", "db_spotify");
if(!$conexao){
    die("<h3>Erro</h3>" . mysqli_connect_error());
}
?>