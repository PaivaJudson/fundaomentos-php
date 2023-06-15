<?php
session_start();

$pessoas = [];
if (isset($_SESSION['cadastro'])) {
  $pessoas = $_SESSION['cadastro'];
}
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

  <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">

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
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Telefone</th>
            <th scope="col">Endereço</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php
          foreach ($pessoas as $i => $p) {

            echo "<tr>";
            echo "<th scope='row'> $i </th>";
            echo '<td>' . $p['nome'] . '</td>';
            echo '<td>' . $p['idade'] . '</td>';
            echo '<td>' . $p['telefone'] . '</td>';
            echo '<td>' . $p['endereco'] . '</td>';
            echo '<td>' . $p['cidade'] . '</td>';
            echo '<td>' . $p['estado'] . '</td>';
            echo '<td>';
            echo '<a class="btn btn-danger" href="apagar.php?id='.$i.'"><i class="fa fa-trash fa-lg"></i></a> ';
            echo '<a class="btn btn-warning" href="cadastrar.php?id='.$i.'"><i class="fa fa-pencil fa-lg"></i></a> ';
            echo '</td>';
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>

    </div>
  </main>

  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>