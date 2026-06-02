<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php include "inc-menu.php";?>

<body>
    <?php    
        $id = $_GET['id'];

    include "inc-conexao.php";

    $sql = "delete from tb_discografia where id = {$id}";

    $resultado = mysqli_query($conexao, $sql);

    mysqli_close($conexao);

    ?>


    
</body>
</html>