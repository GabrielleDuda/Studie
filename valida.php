<?php

	//$_SESSION é uma variavel global para ser melhor acessada em outras páginas
	session_start();	
	//Incluindo a conexão com banco de dados
	include ("conexao.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['username'])) && (isset($_POST['senha']))){
		$username =  $_POST['username']; 
		$senha = $_POST['senha'];
					
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM alunos WHERE nome = '$username' and senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($studie, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['codAluno'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioSenha'] = $resultado['senha'];
			header("Location: diario.php");
			
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: loginUser.php");
		}
	
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha não preenchidos";
		header("Location: loginUser.php");
	}
?>