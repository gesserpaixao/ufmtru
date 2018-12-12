<html>
 <head>
 
 </head>
 <body>
 
 <?php
	include 'conexao.inc';
	session_start();
	header("location: index.php");	
	session_unset(); 
	session_destroy();
	mysqli_close($connru);	
	echo "<br><br><center>Saindo!</center><script>alert('Tenha um Bom descanço ');window.location='index.php';</script>";
		
	
?>

 </body></html>