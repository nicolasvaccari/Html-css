<?php
	$banco = new mysqli("127.0.0.1","root", "", "testando");
	if ($banco->connect_errno) {
		echo "<p> Encontrei um erro $banco->erro -->$banco->connect_error</p>";
		die();
	}