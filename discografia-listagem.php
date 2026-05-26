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
    <main class="container">
    <?php include "inc-menu.php";?>
    <h1>Listagem de Discografias</h1>
    <div class="row">
        <div class="col">
            <a href="discografia-formulario.php">Nova Discografia</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table>
                <tr>
                    <td>ID</td>
                    <td>Artista</td>
                    <td>Nome do álbum</td>
                    <td>Ano</td>
                    <td>Tipo</td>

                </tr>
                <?php include "inc-conexao.php";
                
                $sql = "select * from tb_discografia order by artista, ano";
                $resultado = mysqli_query($conexao, $sql);

                while($linha_resultado = mysqli_fetch_assoc($resultado)){
                    echo"<tr>";
                    echo"<td> {$linha_resultado['id']} </td>";
                    echo"<td> {$linha_resultado['artista']} </td>";
                    echo"<td> {$linha_resultado['nome']} </td>";
                    echo"<td> {$linha_resultado['ano']} </td>";
                    echo"<td> {$linha_resultado['tipo']} </td>";

                }
                mysqli_close($conexao);
                ?>
            </table>
        </div>
    </div>

</main>
    <?php include "inc-rodape.php";?>
</body>
</html>