<?php

require 'banco.php';

$banco = new Banco("localhost", "blog", "root", "root");

$banco->query("SELECT * FROM usuarios");
echo "NUMERO: " .$banco->numRows();

/*
$banco->insert("usuarios", array(
	"nome" => 'Nome',
	"email" => 'Email'
));

echo "Inserido com sucesso.";*/


?>