<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content=
  "width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css.css">

  


  
</head>
<body >

<div class="header-container">
  <h1>Lógica Basica</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a class="nav-link " href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="1.php">1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="2.php">2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="3.php">3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="4.php">4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="5.php">5</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="6.php">6</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="7.php">7</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="8.php">8</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="9.php">9</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="10.php">10</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="11.php">11</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="12.php">12</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="13.php">13</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="14.php">14</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="15.php">15</a>
      </li> 
    </ul>

  </div>
</nav>
<div class="conteiner-form">
<form  method="get"> 

<fieldset>
        <legend><H3>SOME OS DOIS MAIORES NUMEROS</H3></legend>
     
      <input class="caixa" type = 'number' required name="num1" placeholder="numero 1">
      <br>
      
      <input class="caixa" type = 'number' required name="num2" placeholder="numero 2">
      <br>
      
      <input class="caixa" type = 'number' required name="num3" placeholder="numero 3">
      <br>
     
      <input class="caixa" type = 'number' required name="num4" placeholder="numero 4">
      <br>
      

    <center><input class="btn-submit" type = 'submit' value = 'Calcular' ><center>
 
<center><p class="icon icon-user-1"><?php
ini_set('default_charset','UTF-8');

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];
$num4 = $_GET["num4"];
$maior = 0;
$maior1 = 0;

if( $num1 > $maior ){
    $maior = $num1;
}


if( $num2 > $maior){
    $maior1 = $maior;
    $maior  = $num2;
}

elseif($num2 > $maior1){
  $maior1 = $num2;
  
}

if( $num3 > $maior){
    $maior1 = $maior;
    $maior  = $num3;
}

elseif($num3 > $maior1){
  $maior1 = $num3;
  
}

if( $num4 > $maior){
    $maior1 = $maior;
    $maior  = $num4;
}

elseif($num4 > $maior1){
  $maior1 = $num4;
  
}


$soma = $maior1 + $maior;


print "<br>Resultado :  $maior + $maior1  = $soma";
?></p></center>

</form>

</div>
</body>
</html>