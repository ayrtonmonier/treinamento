<?php 

  $titulo_pagina = $produto["nome"];
  $estilo = '<link rel= "stylesheet" href="css/estilo.css"/> 
             <link href=http://fonts.googleapis.com/css?family=Simonetta:400,900italic rel="stylesheet" type="text/css">
             <link href=http://fonts.googleapis.com/css?family=Lora:400,400italic rel="stylesheet" type="text/css">';

  include("cabecalho.php"); 


  $conexao = mysqli_connect("127.0.0.1", "root", "developer", "teste");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 

  else
  {

    $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id= $_GET[id]");
  
    $produto = mysqli_fetch_array($dados);
  }

  mysqli_close();

?>

<!-- INÍCIO CORPO PAGINA TODO -->
<div class="conteiner">

    <!--CABEÇALHO-->
    <section class="topo-corpo">

      <div class="produto-back">

        <div class="produto">

          <div class="titulo-produto">
            <h1><?= $produto["nome"] ?></h1>
            <p>Por apenas <?= $produto["preco"] ?></p>
          </div>

            <form action="checkout.php" method="POST">
              <fieldset class="cores">
                <legend>Escolha a cor:</legend>
                <input type="radio" name="cor" id="1" value="verde" checked>
                <label for="1">
                  <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png" alt="Produto na cor verde">
                </label>

                <input type="radio" name="cor" id="2" value="rosa">
                <label for="2">
                  <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="Produto na cor rosa">
                </label>

                <input type="radio" name="cor" id="3" value="azul">
                <label for="3">
                  <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png" alt="Produto na cor azul">
                </label>

              </fieldset>

              <fieldset class="tamanhos">

                <legend>Escolha o tamanho:</legend>

                <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho" onchange="mostraTamanho(this.value);"/>
                <output for="tamanho" name="valortamanho" id="tamanho-roupa">42</output>

              </fieldset>

              <input type="submit" class="comprar hvr-buzz-out" value="Comprar" >
              
              <input type="hidden" name="id" value="<?= $produto["id"] ?>">

            </form>

        </div>
        
        <div class="detalhes">

          <h2>Detalhes do produto</h2>

          <p><?= $produto["descricao"] ?></p>
          <br>
          <table>
            <thead>
              <tr>
                <th>Característica</th>
                <th>Detalhe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Modelo</td>
                <td>Cardigã 7845</td>
              </tr>
              <tr>
                <td>Material</td>
                <td>Algodão e poliester</td>
              </tr>
              <tr>
                <td>Cores</td>
                <td>Azul, Rosa e Verde</td>
              </tr>
              <tr>
                <td>Lavagem</td>
                <td>Lavar a mão</td>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    
    </section>

    <script type="text/javascript">

      function mostraTamanho(novoValor) {
        document.getElementById("tamanho-roupa").innerHTML = novoValor;
      }
      
    </script>

</div>

<div id="fb-root"></div>

  <!-- SCRIPTS -->
  <script src="js/jquery.js"></script>
  <script src="js/funcoes.js"></script>
  <script src="js/bootstrap.js"></script>

        <!--RODAPÉ-->
<?php
include("rodape.php");
?>