<?php 

  $conexao = mysqli_connect("127.0.0.1", "root", "developer", "teste");

  // Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 

  else
  {

    $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id= $_POST[id]");
  
    $produto = mysqli_fetch_array($dados);
  }

  mysqli_close();

  $titulo_pagina = "Checkout - MF";
  $estilo = '<link rel="stylesheet" href="css/bootstrap.css"> <link rel= "stylesheet" href="css/estilo.css"/>';
  include("cabecalho-bs.php"); 

?>

	<div class="conteiner">	   

			<div class="jumbotron">
				  <h1>Ótima escolha!</h1>
				  <p>Obrigado por comprar na Mirror Fashion! 
				  Preencha seus dados para efetivar a compra.</p>
			</div>

			
			<div class="col-xs-12 col-sm-12 col col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2 class="panel-title">Sua compra</h2>
					</div>

					<div class="panel-body">

						<div class="row">
							<form action="index.php" class="col-xs-12 col-sm-12 col-md-12" id="form-conf-compra">

								<div class="row">
								    <fieldset class="col-xs-12 col-sm-6 col col-md-6">

									  <legend>Dados pessoais</legend>

									  <div class="form-group">
									    <label for="nome">Nome completo</label>
									    <div class="input-group">
									    	<span class="input-group-addon glyphicon glyphicon-user"></span>
									    	<input type="text" class="form-control" id="nome" name="nome" autofocus required>
									    </div>
									  </div>

									  <div class="form-group">
									    <label for="email">Email</label>
									    <div class="input-group">
									    	<span class="input-group-addon">@</span>
									    	<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" required>  
									  	</div>
									  </div>

									  <div class="form-group">
									    <label for="cpf">CPF</label>
									    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
									  </div>

									  <div class="checkbox">
									    <label>
									      <input type="checkbox" value="sim" name="spam" checked required>
									      Quero receber spam da Mirror Fashion
									    </label>
									  </div>
									</fieldset>
						
									<fieldset class="col-xs-12 col-sm-6 col col-md-6">
									  <legend>Cartão de crédito</legend>

									  <div class="form-group">
									    <label for="numero-cartao">Número - CVV</label>
									    <input type="text" class="form-control" 
									           id="numero-cartao" name="numero-cartao" placeholder="0000 0000 0000 0000 - 0000" 
									           data-mask="9999 9999 9999 9999 - 999" required>
									  </div>

									  <div class="form-group">
									    <label for="bandeira-cartao">Bandeira</label>
									    <select name="bandeira-cartao" id="bandeira-cartao"
									        class="form-control" required>
									      <option value="master">MasterCard</option>
									      <option value="visa">VISA</option>
									      <option value="amex">American Express</option>
									    </select>
									  </div>

									  <div class="form-group">
									    <label for="validade-cartao">Validade</label>
									    <input type="month" class="form-control" 
									           id="validade-cartao" name="validade-cartao" required>
									  </div>
									</fieldset>
								</div>

							  <button type="submit" class="btn btn-primary btn-lg pull-left">
							  <span class="glyphicon glyphicon-ok"></span>

							    Confirmar Pedido
							  </button>
							</form>
						</div>
						<br><br>
						<div class="row">
							<img src="img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png" alt="<?= $produto["nome"]?>" class="col-xs-6 col-sm-6 col col-md-6 img-thumbnail img-responsive"/>
							
							<dl class="col-xs-6 col-sm-6 col col-md-6">

								<dt>Produto</dt>
								<dd><?= $produto["nome"] ?></dd>

								<dt>Tamanho</dt>
								<dd><?= $_POST["tamanho"] ?></dd>

								<dt>Cor</dt>
								<dd><?= $_POST["cor"] ?></dd>

								<dt>Preço</dt>
								<dd><?= $produto["preco"] ?></dd>
							</dl>
						</div>

					</div><!--painel-body-->
				</div><!--painel success-->
			</div><!-- coluna (painel success)-->

	</div><!--conteiner-->

		<!-- SCRIPTS -->

	<script src="js/jquery.js"></script>
	<script src="js/funcoes.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>

<?php include("rodape.php") ?>
