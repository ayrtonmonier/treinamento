<!--CABEÇALHO-->
<?php 
	$titulo_pagina = "Início - MF";
	$estilo = '<link rel= "stylesheet" href="css/estilo.css"/> 
	<link href= http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script rel="stylesheet">';

	include("cabecalho.php");
?>

<!-- INÍCIO CORPO PAGINA TODO -->
<div class="conteiner">

	<!-- PAINEL DESTAQUE (menu e banner destaque) -->
	<div class="painel-menu-destaque topo-corpo">

		<!-- SESSÃO - BANNER DESTAQUE-->
		<section class="sessao-destaque">

			<img class="banner-destaque hvr-wobble-vertical" src=img/destaque-home.png alt="Promoção: Big City Night"/>
			<img class="pause hvr-buzz-out" src="img/player-pause.png" alt="Icone pause-play"/>

		</section>
			
		<!-- SESSÃO - MENU-->
		<section class="menu-departamentos">
			<h2>Departamentos</h2>
			<nav>
				<ul>
					<li><a href="#" class="hvr-bounce-to-right">Blusas e Camisas</a></li>
					<li><a href="#" class="hvr-bounce-to-right">Calças</a></li>
					<li><a href="#" class="hvr-bounce-to-right">Saias</a></li>
					<li><a href="#" class="hvr-bounce-to-right">Vestidos</a></li>
					<li><a href="#" class="hvr-bounce-to-right">Sapatos</a></li>
					<li><a href="#" class="hvr-bounce-to-right">Bolsas</a></li>
					<li><a href="#" class="hvr-bounce-to-right">Acessórios</a></li>
				</ul>
			</nav>			
		</section>

	<!-- fim painel de destaque (nenu e destaque) -->
	</div>
		
		
	<!-- CONTEINER DE PAINEIS (mais vendidos e novidades -->
	<div class="conteiner-paineis">
	
		<!-- PAINEL NOVIDADES -->
		<section class="painel-nmv novidades">
		
			<h2>Novidades</h2>
			
			<ol>

			  <?php
			    $conexao = mysqli_connect("127.0.0.1", "root", "developer", "teste");
			    $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC ");

			    mysqli_close();

			    while ($produto = mysqli_fetch_array($dados)):
			  ?>

			  <li>
			    <a href="produto.php?id=<?= $produto["id"] ?>" class="hvr-buzz-out">
			      <figure>
			        <img src="img/produtos/miniatura<?= $produto["id"] ?>.png" 
			             alt="<?= $produto["nome"] ?>">
			        <figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
			      </figure>
			    </a>
			  </li>

			  <?php endwhile; ?>

			</ol>

			<button class="bt-mostrar-mais" type="button">Mostra mais</button>
			
		<!-- fim novidades -->
		</section>
		
		<!-- PAINEL NOVIDADES --> 
		<section class="painel-nmv mais-vendidos">
		
			<h2>Mais vendidos</h2>
			
			<ol>

			  <?php
			    $conexao = mysqli_connect("127.0.0.1", "root", "developer", "teste");
			    $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC");

			    mysqli_close();

			    while ($produto = mysqli_fetch_array($dados)):
			  ?>

			  <li>
			    <a href="produto.php?id=<?= $produto["id"] ?>" class="hvr-buzz-out">
			      <figure>
			        <img src="img/produtos/miniatura<?= $produto["id"] ?>.png" 
			             alt="<?= $produto["nome"] ?>">
			        <figcaption><?= $produto["nome"] ?> por <?= $produto["preco"] ?></figcaption>
			      </figure>
			    </a>
			  </li>

			  <?php endwhile; ?>

			</ol>

			<button class="bt-mostrar-mais" type="button">Mostra mais</button>

		<!-- fim mais vendidos -->
		</section>
	
	<!-- fim conteiner paineis (nividades e mais vendidos) -->
	</div>		

<!-- FIM do CONTEINER GERAL-->
</div>

	<!-- SCRIPTS -->
	<script src="js/jquery.js"></script>
	<script src="js/funcoes.js"></script>
	<script src="js/bootstrap.js"></script>
	
	 <!-- RODAPÉ -->
<?php include("rodape.php"); ?>