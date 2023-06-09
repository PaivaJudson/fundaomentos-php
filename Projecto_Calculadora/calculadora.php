<?php
    if(count($_POST) && isset($_POST['op'])){
        $resultado = 0;

        switch($_POST["op"]){
            case "som" :
                $resultado = $_POST['n1'] + $_POST['n2'];
                break;
            case "sub" :
                $resultado = $_POST['n1'] - $_POST['n2'];
                break;
            case "div" :
                $resultado = $_POST['n1'] / $_POST['n2'];
                break;
            case "mul" :
                $resultado = $_POST['n1'] * $_POST['n2'];
                break;
        }

    }

?>

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Calculadora</title>
    </head>

    <body>

    <div class="container">
        <div class="row">
        <div class="col s8">
 
            <h3 class="header">Minha Calculadora</h3>
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <div class="row">
                            <form action="calculadora.php" method="post">
                                <div class="input-field col s6">
                                    <input type="number" id="n1" name="n1">
                                    <label for="n1">Operando 1</label>
                                </div>

                                <div class="input-field col s6">
                                    <input type="number" id="n2" name="n2">
                                    <label for="n2">Operando 1</label>
                                </div>

                                <div class="input-field col s12">
                                    <button type="submit" name="op" value="som" class="btn col s2 amber lighten-1">Somar</button>

                                    <button type="submit" name="op" value="sub" class="btn col s2 offset-s1 light-blue darken-3">Subtrair</button>

                                    <button type="submit" name="op" value="mul" class="btn col s2 offset-s1 green darken-3">Multiplicar</button>

                                    <button type="submit" name="op" value="div" class="btn col s2 offset-s1 red darken">Dividir</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-action">
                        <a href="#">Resultado: <?php echo $resultado; ?> </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    </body>
  </html>
        
