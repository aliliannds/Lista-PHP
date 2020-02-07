<?php

$nome = $_GET["nome"];

$idade = $_GET["idade"];

$feminino = $_GET["feminino"];


if ($idade < 18 && $_GET[$feminino]){

	echo "*".$nome." --- acesso negado";
}

else {
	echo "*".$nome." --- acesso permitido";
}

?>
