<?php

    include_once './conecta.php';

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

        <link rel="stylesheet" href="../styles/cardapio.css">
        
        <title>Document</title>
    </head>
    <body>
            <p>
                Cardápio
            </p>
            <div class="content">
                <table>
                    <thead>
                        <tr>
                            <th>
                                Sabor
                            </th>
                            <th>
                                preço
                            </th>
                            <th>
                                descrição
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $selectSQL = "SELECT * FROM sabores";
                            $cardapio = mysqli_query($connect, $selectSQL);
                            while($sabor = mysqli_fetch_array($cardapio)){
                        ?>

                        <tr>
                            <td>
                                <?php echo $sabor['sabor']; ?>
                            </td>
                            <td>
                                R$ <?php echo $sabor['preco']; ?>
                            </td>
                            <td>
                                <?php echo $sabor['descricao']; ?>
                            </td>
                            <td>
                                <button class="btn-editar" onclick="window.location.href='./edit.php?id=<?php echo $sabor['id']; ?>'">
                                    <img src="../assets/pen.svg" alt="Editar">
                                </button>
                            </td>  
                            <td>
                                <button class="btn-delete" onclick="window.location.href='./php_action/delete.php?<?php echo $sabor['id']; ?>'">
                                    <img src="../assets/trash.svg" alt="Deletar">
                                </button>
                            </td>
                        </tr>
                        <?php

                            }

                        ?>
                    </tbody>
                </table>
            </div>
            <a class="add-new-flavor" href="./adicionar.php" name="btn-add">
                Adicionar novo sabor
            </a>
    </body>
</html>
            
<?php
?>