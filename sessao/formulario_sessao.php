<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Sessão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" id=""></td>
                </tr>

                <tr>
                    <td>Idade:</td>
                    <td><input type="text" name="idade" id=""></td>
                </tr>

                <tr>
                    <td>Telefone:</td>
                    <td><input type="text" name="telefone" id=""></td>
                </tr>

                <tr>
                    <td><input type="submit" name="enviar" value="enviar" class="btn btn-primary"></td>
                </tr>

            </table>
            <br>
            <br>
        </form>

        <?php
            if(count($_POST)){
                $_SESSION['cadastro'][] = $_POST;
            }

            if($_SESSION['cadastro']){
                echo '<table class="table">';
                    foreach($_SESSION['cadastro'] as $pessoa){
                        echo "<tr>";
                        echo "<td>". $pessoa['nome']. "</td>";
                        echo "<td>". $pessoa['idade']. "</td>";
                        echo "<td>". $pessoa['telefone']. "</td>";
                        echo "</tr>";
                    }
                echo '</table>';
            }
        ?>
   </div>
</body>
</html>