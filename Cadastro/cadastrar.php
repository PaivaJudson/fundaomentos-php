<?php
require_once('provincias.php');

?>


<!doctype html>
<html lang="pt-br">

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
            <a class="nav-link" aria-current="page" href="listar.php">Listar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Cadastrar</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <main class="container">
    <div class="bg-body-tertiary p-5 rounded">

        <form method="$_GET" action="salvar.php">

          <div class="form-group">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome da Pessoa" value="">
          </div>

          <div class="row">
            <div class="col-md-4">
              <label for="idade" class="form-label">Idade: </label>
              <input type="number" class="form-control" id="idade" name="idade" placeholder="Informe a idade da Pessoa">
            </div>

            <div class="col-md-8">
              <label for="idade" class="form-label">Telemovel: </label>
              <input type="text" class="form-control" id="telemovel" name="telemovel" placeholder="Informe o Telemovel da Pessoa">
            </div>

          </div>

          <div class="form-group">
            <label for="endereco" class="form-label">Endereco: </label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereco da Pessoa">
          </div>

          <div class="row">
            <div class="col-md-4">
              <label for="idade" class="form-label">Cidade: </label>
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a Cidade">
            </div>

            <div class="col-md-4">
              <label for="provincia" class="form-label">Provincia </label>
              <select class="form-select" id="estado" name="estado">
                <?php
                $provincias = getLista();
                foreach ($provincias as $i => $uf) {
                  echo "<option value='$i'>$uf</option>";
                }
                ?>
              </select>
            </div>


          </div>

          <br>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <button type="reset" class="btn btn-warning">Limpar</button>
        </form>

    </div>
  </main>

  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>