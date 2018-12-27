<?php
	echo " Bem vindo:<br />";														
	include 'conexao.inc.php';
	$avatarimg = ("SELECT * FROM `tb_usuario` WHERE `usuario` = '$logado'");
	$resultado = mysqli_query($connru,$avatarimg) or die("Impossível executar a query ");
	
		if ($resultado !== false) {	
			$tipo = ".png";
			$caminho = ".\imagensP/";									
			while ($connr = mysqli_fetch_assoc($resultado))
			{							
				echo "<div class='container'>										
						<img  src='$caminho$logado$tipo' class='imageavatar'/> <br/>										
						<div class='overlay'>
							<div class='text'>$logado</div>
						</div>
					</div>																			
				";		
			}										
		}
		else {
			echo "Erro retornando dados: ".mysqli_error($CadConn);
		}
?>