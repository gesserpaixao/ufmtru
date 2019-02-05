<?php  
session_start();
if((!isset ($_SESSION['usuario']) === true) and (!isset ($_SESSION['senha']) === true))
{
	unset($_SESSION['usuario']);
	unset($_SESSION['senha']);
	header('location:index.html');
}
	$logado = $_SESSION['usuario'];						
?>

<!DOCTYPE html>

<html class="ui-mobile">

<head>
  <title>RU - UFMT</title>
  
  
  			<meta http-equiv="Content-Security-Policy" content="script-src 'self'  'unsafe-inline' 'unsafe-eval'" >
			<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">

			<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>			
			<link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.4.5.min.css">		
			<link rel="stylesheet" type="text/css" href="css/confstylo.css">
			<script src="js/jquery-3.2.1.min.js"></script>			
			<script type="text/javascript" src="js/jquery.min.js"></script>
			<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
			<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>	
			<script src="js/cadassincrono.js"></script>	
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="/resources/demos/style.css">
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
<script>
	$( document ).on( "pagecreate", function() {
		$( "body > [data-role='panel']" ).panel();
		$( "body > [data-role='panel'] [data-role='listview']" ).listview();
	});
	$( document ).one( "pageshow", function() {
		$( "body > [data-role='header']" ).toolbar();
		$( "body > [data-role='header'] [data-role='navbar']" ).navbar();
	});
</script>
  
  <style>
  .grid-container {
	center
  display: grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: auto auto;
  grid-gap: auto;
 text-align: center;
  padding: 30%;
}
.grid-containerbox{
	center
  display: grid;
  grid-template-columns: auto auto auto;
  grid-template-rows: auto auto;
  grid-gap: auto;
  background-color: #00F3;
  padding: 0%;
  width: 100%;
}
.button1 { 
  background-color: #2cfaf0;
  border-radius: 50%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;padding: 10% 6%;} /* Green */

 .button2 {
  background-color: #008CBA;
  border-radius: 50%;text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  padding: 10% 6%;} /* Blue */
  
.button3 {background-color: #f44336;border-radius: 50%;text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;padding: 10% 6%;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;border-radius: 50%;text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;padding: 10% 6%;}
/* Gray */ 
.button1:hover {
  background-color: #4CAF50; /* Green */
  color: white;padding: 10% 6%;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button2:hover {
  background-color: #4CAF50; /* Green */
  color: white;padding: 10% 6%;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button3:hover {
  background-color: #4CAF50; /* Green */
  color: white;padding: 10% 6%;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.button4:hover {
  background-color: #4CAF50; /* Green */
  color: white;padding: 10% 6%;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
  </style>
</head>

<body class="ui-mobile-viewport ui-overlay-a">
<div data-role="header" data-position="fixed" data-theme="a" role="banner" class="ui-header ui-bar-a ui-header-fixed slidedown">
					
					<h1 class="ui-title" role="heading" aria-level="1">App RU
					<a href="logout.php" target="_self" data-icon="bars" data-iconpos="notext" 
	class="ui-btn-center ui-link ui-btn ui-icon-power ui-btn-icon-notext ui-shadow ui-corner-all" 
	 data-role="button" role="button">Sair</a>
					</h1>
					


					<div class="fotoavatar">
							<?php include 'avatar.php';?>
						</div>					
		
		
		
		<a href="#pg-outside" 
		data-icon="bars" data-iconpos="notext" class="ui-btn-left ui-link ui-btn ui-icon-bars ui-btn-icon-notext ui-shadow ui-corner-all" 
		data-role="button" role="button">Configurar</a>		
		<p><p>
			<div data-role="navbar">
                <ul>
					<li><a href="#pg-principal" data-transition="pop" data-icon="home" class="ui-btn-active ui-state-persist">Principal</a></li>
					<!--<li><a href="#pg-criarvenda" data-transition="fade" data-icon="tag">Comprar</a></li>-->					
                </ul>
            </div> 
</div>

	<!-- painel  principal-->
	<div data-role="page" id="pg-principal">		
	<div data-role="footer" >
            <h4>AppRU-UFMT</h4>										
		</div>
			<div data-role="footer" class="grid-containerbox">
					<span class="grid-container">
					<button type="button" style="background-color: #2cfaf0;border-radius: 50%;text-align: center;text-decoration: none;
					  display: inline-block; font-size: 16px;padding: 8% 6%;"
					  class="button1" onclick="window.location.href = '#pg-cardapio';">Cardapio</button>
					<button type="button" style="background-color: #008CBA;border-radius: 50%;text-align: center;
						  text-decoration: none; display: inline-block;font-size: 16px; padding: 8% 6%;"
						  class="button2" onclick="window.location.href = '#pg-criarvenda';">Comprar</button></span><br/>
					<span class="grid-container">
					<button type="button" style="background-color: #f44336;border-radius: 50%;text-align: center;
					  text-decoration: none;display: inline-block;font-size: 16px;padding: 8% 6%;" class="button3" 
					  onclick="window.location.href = '#pg-consultarsaldo';">Consultar</button>
					
					<button type="button" style="background-color: #e7e7e7; color: black;border-radius: 50%;text-align: center;
					  text-decoration: none;
					  display: inline-block;
					  font-size: 16px;padding: 8% 6%;"  class="button4" onclick="alert('Hello world!')">Qualidade</button></span>								
				
			</div>
		<div data-role="footer">       
            <h4>@APSII Empreendimentos</h4>
        </div> 


	</div>	
	
<div data-role="page" id="pg-criarvenda">			
	<div data-role="footer" >
            <h4>AppRU-UFMT</h4>										
	</div>
	<div data-role="content" >
		<form method="POST" id="criarvenda" action="vender.php"  enctype="multipart/form-data" target="_self">	
			<label for="valordavenda">Valor R$</label>
			<input type="number" name="palorvenda" id="valorvenda" placeholder="0.000,00" size="20" />
			<br class="block" />
			<fieldset name="criarvendatipopag">
			<legend>Tipo Pagamento:</legend>												
				<select form="criarvenda" class="form-control" name="tipopag">
					<label for="tipopag">Selecione a Forma de pagamento:</label>
					<option name="opt0" id="opt0" selected value="1">Debito Automatico</option>
					<option name="opt1" id="opt1" value="2">Cartão Credito</option>							
				</select>
			</fieldset>	<br/><p/>
			<button type="btn" data-icon="plus" data-rel="dialog">Comprar</button><p>
			<img id="loading" src="img/loading.gif" style="display: none" />
		</form>
	</div>
	<div data-role="footer">       
            <h4>@APSII Empreendimentos</h4>
        </div> 
	</div>	
	
	<!-- Consultar-->
<div data-role="page" id="pg-consultarsaldo">			
	<div data-role="footer" >
            <h4>AppRU-UFMT</h4>										
	</div>
	<div data-role="content" >
			<label for="consultarsaldo">Data: 
				<?php
					date_default_timezone_set("Brazil/East");
					$new_date = date("Y/m/d H:i:s");
					echo $new_date;
				?>
				</label>
			<label for="consultarsaldo">Saldo R$</label>
			<input type="number" name="valorvenda" id="valorvenda" placeholder="0.000,00" size="20" disabled="disabled" 
			style="font-size:30px;color:red;"/>
			<br class="block" />			
	</div>
	<div data-role="footer">       
            <h4>@APSII Empreendimentos</h4>
        </div> 
	</div>		
	
	
<!-- Consultar-->
<div data-role="page" id="pg-cardapio">			
	<div data-role="footer" >
            <h4>AppRU-UFMT</h4>										
	</div>
	<div data-role="content" >
			<label for="consultarsaldo">Data: 
				<?php
					date_default_timezone_set("Brazil/East");
					$new_date = date("Y/m/d H:i:s");
					echo $new_date;
				?>
				</label>
			<label for="cardapio">Salada</label>
			<br class="block" />			
	</div>
	<div data-role="footer">       
            <h4>@APSII Empreendimentos</h4>
        </div> 
	</div>		
		
	
<!-- painel da esquerda-->
<div name="esq" data-role="panel" id="pg-outside" class="ui-panel ui-page-theme-a ui-panel-position-left 
	ui-panel-display-reveal ui-panel-closed ui-body-a ui-panel-animate">
		<div class="ui-controlgroup-label">
			<ul data-role="listview" class="ui-listview ui-page-theme-a">
				<li data-icon="back" class="ui-first-child ui-page-theme-a">
					<a href="#pg-principal" data-rel="close" class="ui-btn ui-btn-icon-right ui-icon-back">Fechar</a></li>
						<div style="pading: 5px;" class="ui-controlgroup-label">
							<ul data-role="listview" class="ui-listview ui-page-theme-a">
								<li class="ui-li-static ui-body-inherit">
								<a href="#pg-relatorios"><span class="ui-icon ui-icon-arrowthick-1-n" style="margin: 3px 0 0 4px;"></span>Indicadores de Qualidade</a></li>								
								<li class="ui-li-static ui-body-inherit">
								<a href="#pg-Consultas"><span class="ui-icon ui-icon-arrowthick-1-n" style="margin: 3px 0 0 4px;"></span>Consulta Cardapio</a></li>
							</ul>
						</div>									
				
			</ul>
		</div>		
</div name="esq" >
<div class="ui-loader ui-corner-all ui-body-a ui-loader-default"></div>
<div class="ui-panel-dismiss"></div><div class="ui-panel-dismiss"></div>	

<!--teste do git-->
</body>
</html