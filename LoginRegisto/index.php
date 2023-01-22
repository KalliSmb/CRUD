<!DOCTYPE html>
<html lang="pt-PT">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Registo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">LOGIN/REGISTO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="index.php">INÍCIO</a>
            <a class="nav-link" href="?page=novo">NOVO UTILIZADOR</a>
            <a class="nav-link" href="?page=listar">LISTAR UTILIZADORES</a>
        </div>
        </div>
        </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
        <?php
          include("config.php");
          switch(@$_REQUEST["page"]){
            case "novo":
              include("novo-utilizador.php");
            break;
            case "listar":
              include("listar-utilizadores.php");
            break;
            case "guardar":
              include("guardar-utilizador.php");
            break;
            case "editar":
              include("editar-utilizador.php");
            break;
            default:
              print "<h1>Bem vindo(a)!</h1>";
          }
        ?>
        </div>
      </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>