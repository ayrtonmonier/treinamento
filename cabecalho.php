<!DOCTYPE html>
<html>
<head>
	<title><?php print $titulo_pagina ?></title>
	<meta name="viewport" content="width=device-width">
	<meta charset="UTF-8">	

	<link rel= "stylesheet" href="css/reset.css"/>
	<?= isset($estilo) ? $estilo :""; ?>

</head>

<body>

<header class="conteiner-cabecalho">

	<div class="conteiner-cabecalho-center">

		<h1><a href="index.php"><img src="img/logo.png" alt="Mirror Fashion"></a></h1>

		<!-- BUSCA -->
		<h1 class="busca">
			<form action="http://www.google.com.br/search" id="form-busca">
				<input type="search" name="q" id="q" placeholder"Encontrar..."/>
				<input type="image" src="img/busca.png"/>
			</form>
		</h1>
		<!-- FIM DA BUSCA -->

		<!-- MENU PRINCIPAL -->
		<nav class="menu-opcoes">  
			<ul id="lista-menu-opcoes">
				<li><a href="#" class="hvr-underline-from-left">Sua conta</a></li>
				<li><a href="produtos.php" class="hvr-underline-from-left">Lista de desejos</a></li>
				<li><a href="#" class="hvr-underline-from-left">Cartão Fidelidade</a></li>
				<li><a href="sobre.php" class="hvr-underline-from-left">Sobre</a></li>
				<li><a href="#" class="hvr-underline-from-left">Ajuda</a></li>
			</ul>
		</nav>
	</div>
</header>


