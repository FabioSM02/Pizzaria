<?php
    require_once '../conecta.php';

    if(isset($_POST['btn-editar'])):
        $id = mysqli_escape_string($connect, $_POST['id']);

        $sabor = mysqli_escape_string($connect, $_POST['sabor']);
        $preco = mysqli_escape_string($connect, $_POST['preco']);
        $descricao = mysqli_escape_string($connect, $_POST['descricao']);

        $insertDB = "UPDATE sabores SET sabor = '$sabor', preco = '$preco', descricao = '$descricao' WHERE id = '$id'";

        if(mysqli_query($connect, $insertDB)):
            header('Location: ../cardapio.php?sucesso');
        else: 
            header('Location: ../cardapio.php?erro');
        endif;

    endif;
?>