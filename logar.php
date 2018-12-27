<?php 
// executa consulta no mysql para efetuar login no sistema
session_start();
// receber os campos digitados
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$caracteresEspeciais = "/([~`!@#$%\^&*+=\-\[\]\\;,/{}|\:<>\?])";
$VerficarErro = 0;
		
		if (empty($usuario) OR strstr($usuario,'')){
			echo "Verificar os dados imputados em Login.<br />";
			$VerficarErro = 1;
			echo "<p><a href='index.html'>  Voltar --></a>";
		}
	
		if (empty($senha) OR strstr($senha,'')){
			echo "<script> alelert('Verificar os dados imputados em Senha');</script>";
			$VerficarErro = 1;
			echo "<p><a href='index.html'>  Voltar Erro--></a>";
		}	
if($VerficarErro == 0) {

include 'conexao.inc.php';
//   $connru = mysqli_connect
//("localhost","ufmtru","bLHpejBv");
//mysqli_select_db($connru,"ufmtru");

		
		$Verifica = ("SELECT * FROM `tb_usuario` WHERE `usuario` = '$usuario' AND `senha` = '$senha'");
		$result = mysqli_query($connru,$Verifica);
				
		if(mysqli_num_rows ($result) > 0 )
		{
				$_SESSION['usuario'] = $usuario;
				$_SESSION['senha'] = $senha;
				header('location:index.php');
				
				
				
		}else{
			unset ($_SESSION['usuario']);
			unset ($_SESSION['senha']);
			header('location:index.html');

			}

}

?>