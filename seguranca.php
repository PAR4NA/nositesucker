<?php
	require_once("nositesucker.php");
	$iniciar = new nositesucker;
	$iniciar->init($_SERVER['REMOTE_ADDR'], "blocker", array('.googlebot.com','.google.com','.yahoo.com','.yahoobot.com','.msn.com'));
	$iniciar->start();
?>