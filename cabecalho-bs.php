<!DOCTYPE html>
<html>
<head>
	<title><?php print $titulo_pagina ?></title>
	<meta name="viewport" content="width=device-width">
	<meta charset="UTF-8">	

	<?= isset($estilo) ? $estilo :""; ?>

</head>

<body>
	<header>
	    <nav class="navbar navbar-default">
		  <div class="navbar-header">
		    <a class="navbar-brand" href="index.php">Mirror Fashion</a>
		    <button class="navbar-toggle" type="button"
			    data-target=".navbar-collapse" data-toggle="collapse">
			  	menu
			</button>
		  </div>
		  <ul class="nav navbar-nav collapse navbar-collapse">
		    <li><a href="sobre.php">Sobre</a></li>
		    <li><a href="#">Ajuda</a></li>
		    <li><a href="#">Perguntas frequentes</a></li>
		    <li><a href="#">Entre em contato</a></li>
		  </ul>
		</nav>
	</header>