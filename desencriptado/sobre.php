<?php
	require_once("../nositesucker.php");
	$iniciar = new nositesucker;
	$iniciar->init($_SERVER['REMOTE_ADDR'], "blocker", array('.googlebot.com','.google.com','.yahoo.com','.yahoobot.com','.msn.com'));
	$iniciar->check();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>No site sucker</title>
		<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
		<link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">No site sucker</a>
				</div>
				<div id="navbar" class="collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>
						<li class="active"><a href="sobre.php">Sobre</a></li>
						<li><a href="https://github.com/victorscatolon/nositesucker" target="_blank">Repositório</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		<div class="container">
			<div class="starter-template">
				<h1>Sobre</h1>
				<p class="lead">
					<strong>Versão:</strong> 0.2<br />
					<strong>Data:</strong> 23/07/2016<br />
					<strong>Autor:</strong> Victor Hugo Scatolon de Souza<br /><br /><br />
					Faça uma doação e ajude os desenvolvedores
					<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
					<input type="hidden" name="currency" value="BRL" />
					<input type="hidden" name="receiverEmail" value="financeiro@compulabs.com.br" />
					<input type="hidden" name="iot" value="button" />
					<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/99x61-doar-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
					</form>
				</p>
			</div>
		</div>
	</body>
</html>
