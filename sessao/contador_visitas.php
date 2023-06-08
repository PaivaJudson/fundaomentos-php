<?php
    session_start();
    
    if (!isset($_SESSION['contador'])) {
        $_SESSION['contador'] = 1;
    }else{
        $_SESSION['contador']++;
    }

    $msg = "Visitou esse site " . $_SESSION['contador'] . " vezes";

    if($_SESSION['contador'] == 20){
        session_destroy();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Sessão</title>
</head>
<body>
    <h1>
        <?php echo $msg; ?>
    </h1>
</body>
</html>