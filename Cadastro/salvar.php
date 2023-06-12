<?php

session_start();

if (count($_GET)) {

    $_SESSION['cadastro'][] = $_GET;

}

header('location: listar.php');
