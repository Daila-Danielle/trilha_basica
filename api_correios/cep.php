<!DOCTYPE html>
<html lang="en">
<head>
  <title>buscar cep</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  
</head>
  <body>
    <div class="header-container">
      <h1>BUSCAR CEP</h1>
    </div>
    <div class="conteiner-grande">
      <form class="tabela" method="post">

        <div class="linha">
        <div class="div1"><label class="letra-pequena"> CEP: </label></div>
        <div class="div2"><input type="text" name="cep" required /></div>

        <div class="div1"><input class="btn-submit" type="submit" name="acao" value="Buscar" id="bt_enviar"  ></div></div>
        <br>

        <?php
          function endereco($cep){
            // formata o cep removendo caracteres nao numericos
            $cep = preg_replace("/[^0-9]/", "", $cep);
            $url = "http://viacep.com.br/ws/$cep/xml/";
            $xml = simplexml_load_file($url);
            return $xml;
          }
        ?>
        <center><h2>Resultado da Pesquisa</h2></center><br>
        <p>
          <?php $endereco = endereco($_POST['cep']); ?>
            <b>CEP: </b> <?php echo $endereco->cep; ?><br>
            <b>Logradouro: </b> <?php echo $endereco->logradouro; ?><br>
            <b>Bairro: </b> <?php echo $endereco->bairro; ?><br>
            <b>Localidade: </b> <?php echo $endereco->localidade; ?><br>
            <b>UF: </b> <?php echo $endereco->uf; ?><br>
        </p>

      
      </form>
    </div>
    </div>
  </body>
</html>