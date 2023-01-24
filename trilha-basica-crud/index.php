<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>CRUD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./static/style.css">


</head>
<body >
    
<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
    <a class="navbar-brand est" href="?pagina=home">Home</a>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown" id="myDropdown">
          <a class="nav-link est dropdown-toggle" href="#" data-bs-toggle="dropdown">  Beneficiarios </a>
          <ul class="dropdown-menu">
            <li> <a class="dropdown-item" href="? pagina=cadastro_beneficiario"> Cadastrar </a></li>
            <li> <a class="dropdown-item" href="? pagina=consulta_beneficiario"> Consultar  </a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown" id="myDropdown">
          <a class="nav-link est dropdown-toggle" href="#" data-bs-toggle="dropdown">  Veiculos </a>
          <ul class="dropdown-menu">
            <li> <a class="dropdown-item " href="? pagina=cadastro_veiculo"> Cadastrar </a></li>
            <li> <a class="dropdown-item" href="? pagina=consulta_veiculo"> Consultar  </a></li>
          </ul>
        </li>
      </ul>
    </div>
    </div>
  </nav>
<div class="container"> <!-- container onde irá aparecer as paginas chamadas -->
    <?php 
     
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        error_reporting(E_ALL);
        ini_set ( 'display_errors' , 0);
        ini_set('default_charset','UTF-8');
        include("./conexao.php");
        include("./consultas_bd.php");

        #caso escolha uma das opções manda pra pagina especifica.
        switch(@$_REQUEST["pagina"]){ 
            case "cadastro_veiculo":
                include ("./veiculos/cadastro-veiculo.php");
            break;
            case "consulta_veiculo":
                include ("./veiculos/mostrar-veiculo.php");
            break;
            case "salvar_veiculo":
                include ("./veiculos/acoes-veiculo.php");
            break;
            case "editar_veiculo":
                include ("./veiculos/editar-veiculo.php");
            break;
            case "cadastro_beneficiario":
                include ("./beneficiarios/cadastro-beneficiario.php");
            break;
            case "consulta_beneficiario":
                include ("./beneficiarios/mostrar-beneficiario.php");
            break;
            case "salvar_beneficiario":
                include ("./beneficiarios/acoes-beneficiario.php");
            break;
            case "ver_beneficiario":
              include ("./beneficiarios/ver-beneficiario.php");
            break;
            default:
            print "Bem vindos!";
        }
    ?>
</div>
