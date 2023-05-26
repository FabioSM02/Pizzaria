<?php
    require_once '../conecta.php';

    if(isset($_POST['cadastrar'])):
        $sabor = mysqli_escape_string($connect, $_POST['sabor']);
        $preco = mysqli_escape_string($connect, $_POST['preco']);
        $descricao = mysqli_escape_string($connect, $_POST['descricao']);

        $insertDB = "INSERT INTO sabores (sabor, preco, descricao) VALUES ('$sabor', '$preco', '$descricao')";

        if(mysqli_query($connect, $insertDB)):
            header('Location: ../index.php?sucesso');
        else: 
            header('Location: ../index.php?erro');
        endif;

    endif;
?>