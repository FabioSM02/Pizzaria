<?php

    session_start();

    require_once '../conecta.php';

    if(isset($_POST['btn-delete'])){
        $id = mysqli_real_escape_string($connect, $_POST['id']);
        $deleteDB = "DELETE FROM sabores WHERE id = '$id'";

        if(mysqli_query($connect, $deleteDB)){
            header('Location: ../cardapio.php');
        } else {
            header('Location: ../cardapio.php');
        }
    }
?>