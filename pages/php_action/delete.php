<?php

    session_start();

    require_once '../conecta.php';

    if(isset($_POST('btn-delete'))):
        $id = mysqli_escape_string($connect, $_POST['id']);
        $deleteDB = "DELETE FROM sabores WHERE id = '$id'";

        if(mysqli_query($connect, $deleteDB)):
            $_SESSION['mensagem'] = "Deletado com sucesso!";
            header('location: ../cardapio.php');
        else: 
            $_SESSION['mensagem'] = "Erro ao deletar";
            header('location: ../cardapio.php');
?>