<?php

    session_start();
    require_once '../conecta.php';

    function clear($input) {
        global $connect;
        // sql
        $var = mysqli_escape_string($connect, $input);
        // xss
        $var = htmlspecialchars($var);
        return $var;
    }

    if(isset($_POST['btn-cadastrar'])):
        $sabor = mysqli_escape_string($connect, $_POST['sabor']);
        $preco = mysqli_escape_string($connect, $_POST['preco']);
        $descricao = mysqli_escape_string($connect, $_POST['descricao']);

        $insertDB = "INSERT INTO sabores (sabor, preco, descricao) VALUES ('$sabor', '$preco', '$descricao')";

        if(mysqli_query($connect, $insertDB)):
            header('Location: ../cardapio.php?sucesso');
        else: 
            header('Location: ../cardapio.php?erro');
        endif;

    endif;
?>