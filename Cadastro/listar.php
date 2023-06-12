<?php
session_start();
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5">
  <title>Cadastro de Pessoas</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-static/">

  <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/5.3/examples/navbar-static/navbar-static.css" rel="stylesheet">
</head>

<body>


  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cadastro de Pessoas</a>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastrar.php">Cadastrar</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <main class="container">
    <div class="bg-body-tertiary p-5 rounded">
      <?php
        var_dump($_SESSION['cadastro']);
      exit;
      ?>
    </div>
  </main>

  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>