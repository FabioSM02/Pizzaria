<?php
    include_once './conecta.php';

    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM sabores WHERE id = '$id'";
        $sabor_final = mysqli_query($connect, $sql);
        $result = mysqli_fetch_array($sabor_final);
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../styles/add.css">

    <title>Pizzaria - Editar Sabor</title>
</head>
<body>
    <main>
        <p>
            Editar Sabor
        </p>
        <form action="./php_action/update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <input type="text" name="sabor" placeholder="Sabor" value="<?php echo $result['sabor']; ?>">
            <input type="text" name="preco" placeholder="Preço" value="<?php echo $result['preco']; ?>">
            <input type="text" name="descricao" placeholder="Descrição" value="<?php echo $result['descricao']; ?>">

            <button type="submit" name="btn-editar" class="cadastrar">
                Salvar
            </button>
        </form>
    </main>
</body>
</html>