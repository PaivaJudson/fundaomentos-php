<?php
$file_lista_usuarios = 'lista_usuarios.json';

if (count($_POST)) {
    $usuario = $_POST;
    $lista_usuarios = [];

    if (file_exists($file_lista_usuarios)) {
        $lista_usuarios = json_decode(file_get_contents($file_lista_usuarios), true);
    }
    $lista_usuarios[] = $usuario;

    $jsonString = json_encode($lista_usuarios);

    $result = file_put_contents($file_lista_usuarios, $jsonString);
    if ($result === false) {
        $error = error_get_last();
        echo "Ocorreu um erro ao gravar o arquivo: " . $error['message'];
    }

    // file_put_contents($file_lista_usuarios, $jsonString);
    // echo "<pre>";
    // var_dump($error);
    // exit;

}

?>

<!DOCTYPE html>
<html>

<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css" media="screen,projection" />

    <link type="text/css" rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fotografias - Usuários</title>


</head>

<body>
    <nav class="cyan">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo" style="margin-left: 20px;">Fotolog</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="postagem.php">Nova Postagem</a></li>
                <li class="active"><a href="usuarios.php">Usuários</a></li>
                <li><a href="fotolog.php">Fotografias</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main  -->
    <main>
        <div class="container">
            <div class="margem-top row" style="margin-top: 50px;">
                <div class="col s8 offset-2">
                    <div class="card grey lighten-5">

                        <div class="card-content">
                            <span class="card-title">Cadastre um novo usuário</span>

                            <?php
                                if (count($lista_usuarios)) {
                                    echo '<ul class="collection">';
                                    foreach ($lista_usuarios as $u) {
                                        echo '<li class="collection-item avatar">'; 
                                        echo '  <i class="material-icons'; 
                                        echo 'circle">account_circle</i>';
                                        echo '  <span class="title">' . $u['nome'] . '</span>';
                                        echo '  <p> ' . $u['e_mail'] . '<br></p>';
                                        echo '<a href="#!" class="secondary-content"><i';
                                        echo 'class="material-icons">grade</i></a>';
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                }

                            ?>

                        </div>

                        <div class="card-action">

                            <form action="" method="post" class="container">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Informe o Nome" id="first_name" type="text" name="first_name" class="validate">
                                        <label for="first_name">Nome</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Informe o E-mail" id="e_mail" type="text" name="e_mail" class="validate">
                                        <label for="e_mail">E-mail</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="input-field col s6">
                                        <button class="btn waves-effect waves-light" type="submit">Cadastrar
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer  -->
    <footer class="page-footer cyan grey-text darken-2-text">
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2023 Todos os Direitos Reservados
                <a class="grey-text text-lighten-4 right" href="https://www.linkedin.com/in/judson-paiva/" target="_blank">Judson Paiva</a>
            </div>
        </div>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
</body>

</html>