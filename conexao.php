<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "studie";
	
	//Criar a conexao
	$studie = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$studie){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>