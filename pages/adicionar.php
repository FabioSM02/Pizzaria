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

    <title>Pizzaria - Novo Sabor</title>
</head>
<body>
    <main>
        <p>
            Novo sabor
        </p>
        <form action="./php_action/create.php" method="POST">
            <input type="text" name="sabor" class="" placeholder="Sabor">
            <input type="text" name="preco" class="" placeholder="Preço">
            <input type="text" name="descricao" class="" placeholder="Descrição">

            <button type="submit" class="cadastrar">
                Cadastrar novo sabor
            </button>
        </form>
    </main>
</body>
</html>