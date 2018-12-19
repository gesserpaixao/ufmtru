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
			<link rel="stylesheet" type="text/css" href="css/themes/jquery.mobile.icons.min">	
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
 
  </style>
</head>

<body class="ui-mobile-viewport ui-overlay-a">
<div data-role="header" data-position="fixed" data-theme="a" role="banner" class="ui-header ui-bar-a ui-header-fixed slidedown">
					
					<h1 class="ui-title" role="heading" aria-level="1">App RU- APSII UFMT - Pagina Principal
					<a href="logout.php" target="_self" data-icon="bars" data-iconpos="notext" 
	class="ui-btn-center ui-link ui-btn ui-icon-power ui-btn-icon-notext ui-shadow ui-corner-all" 
	 data-role="button" role="button">Sair</a>
					</h1>
						<div class="fotoavatar"><?php include 'avatar.php';?></div>					
		
		<a href="#pg-outside" 
		data-icon="bars" data-iconpos="notext" class="ui-btn-left ui-link ui-btn ui-icon-bars ui-btn-icon-notext ui-shadow ui-corner-all" 
		data-role="button" role="button">Configurar</a>		
		<p><p>
			<div data-role="navbar">
                <ul>
					<li><a href="#pg-principal" data-transition="pop" data-icon="home" class="ui-btn-active ui-state-persist">Principal</a></li>
					<li><a href="#pg-criarvenda" data-transition="fade" data-icon="tag">Comprar</a></li>					
                </ul>
            </div> 
	</div>
	
<div data-role="page" id="pg-criarvenda">			
	<div data-role="footer" >
            <h4>AppRU-UFMT</h4>										
	</div>
	<div data-role="content" >
		<form method="POST" id="criarvenda" action="vender.php"  enctype="multipart/form-data" target="_self">	
			<label for="valordavenda">Valor R$</label>
			<input type="number" name="valorvenda" id="valorvenda" placeholder="0.000,00" size="20" />
			<br class="block" />
			<fieldset name="criarvendatipopag">
			<legend>Tipo Pagamento:</legend>												
				<select form="criarvenda" class="form-control" name="tipopag">
					<label for="tipopag">Selecione a Forma de pagamento:</label>
					<option name="opt0" id="opt0" selected value="1">Debito Automatico</option>
					<option name="opt1" id="opt1" value="2">Cartão Credito</option>							
				</select>
			</fieldset>	
		</form>
	</div>
	<div data-role="footer">       
            <h4>@APSII Empreendimentos</h4>
        </div> 


	</div>	
	
	<div data-role="page" id="pg-principal">		
	<div data-role="footer" >
            <h4>AppRU-UFMT</h4>										
		</div>
		<div data-role="footer" >
           <div data-role="content" >
                    <h4>Vai</h4>
                    
                    <div style="position: relative; left: 10%; top: 40%; width: 30px; border-color: blue;" class="ui-icon-home">Icone 1</div>
                    <div style="position: relative; left: 70%; top: 40%; width: 30px; border-color: blue;">Icone 2</div>
                    <div style="position: relative; left: 40%; top: 10%; width: 30px; border-color: blue;"> Icone 3</div>
                    <div style="position: relative; left: 40%; top: 80%; width: 30px; border-color: blue;">Icone 4</div>
		</div>									
		</div>
		<div data-role="footer">       
            <h4>@APSII Empreendimentos</h4>
        </div> 


	</div>	



<div name="esq" data-role="panel" id="pg-outside" class="ui-panel ui-page-theme-a ui-panel-position-left 
	ui-panel-display-reveal ui-panel-closed ui-body-a ui-panel-animate">
		<div class="ui-controlgroup-label">
			<ul data-role="listview" class="ui-listview ui-page-theme-a">
				<li data-icon="back" class="ui-first-child ui-page-theme-a">
					<a href="#pg-principal" data-rel="close" class="ui-btn ui-btn-icon-right ui-icon-back">Fechar</a></li>
						<div style="pading: 5px;" class="ui-controlgroup-label">
							<ul data-role="listview" class="ui-listview ui-page-theme-a">
								<li class="ui-li-static ui-body-inherit">
								<a href="#pg-relatorios"><span class="ui-icon ui-icon-arrowthick-1-n" style="margin: 3px 0 0 4px;"></span>RIndicadores de Qualidade</a></li>
								
								<li class="ui-li-static ui-body-inherit">
								<a href="#pg-Consultas"><span class="ui-icon ui-icon-arrowthick-1-n" style="margin: 3px 0 0 4px;"></span>Consulta Cardapio</a></li>
							</ul>
						</div>									
				
			</ul>
		</div>		
</div name="esq" >
<div class="ui-loader ui-corner-all ui-body-a ui-loader-default"></div>
<div class="ui-panel-dismiss"></div><div class="ui-panel-dismiss"></div>	


</body>
</html>
