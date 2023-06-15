<?php
    session_start();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        unset($_SESSION['cadastro'][$id]);
    }

    header("Location: listar.php");
?>