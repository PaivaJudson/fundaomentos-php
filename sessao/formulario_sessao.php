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
</head>
<body>
    
   <form action="">
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
                <td><input type="submit" name="enviar" value="enviar"></td>
            </tr>

        </table>


   </form>

</body>
</html>