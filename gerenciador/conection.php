<?php 
    $conexao = null;
	function Conectar(){
		$servidor="localhost";
		//$servidor="10.107.134.30";
		$usuario="root";
		$senha="root";

		if($conexao=mysqli_connect($servidor, $usuario, $senha)){
			mysqli_select_db($conexao, "qualifica");
			mysqli_set_charset($conexao, 'utf8');

		}else {
			echo("ERRO na conexão com o banco de dados".mysqli_error($conexao));
			die();
		}

		return $conexao;
	}

	function Desconectar(){
		mysqli_close($conexao);
	}
?>