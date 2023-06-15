<?php

session_start();

if(isset($_GET['id'])){
    $_SESSION['cadastro']['id'] = $_GET;
} else if (count($_GET)) {
    $_SESSION['cadastro'][] = $_GET;
}

header('location: listar.php');
