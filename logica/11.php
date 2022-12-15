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
        <a class="nav-link active" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="1.php">1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="2.php">2</a>
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
            <a class="nav-link active" href="11.php">11</a>
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
<form > 

    <fieldset>
        <legend><H3>INSIRA UMA LETRA</H3></legend>
        <p>
            <b>letra:</b> <input type="text" name="letra" required>
        </p>

        <center><input class="btn-submit" type = 'submit' value = 'Calcular' ><center>

        <?php
        ini_set('default_charset','UTF-8');

            $letra = $_GET["letra"];

            $vogal = array("a",'e','i','o','u');

            if (in_array("$letra",$vogal)) { 
              echo "vogal - ",$letra;
          }  
            else{
            echo " consoante - ",$letra;
          }   
            
        ?>
    </fieldset>
</form></div>

</body>
</html>