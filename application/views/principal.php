
    <body>
    	<style type="text/css">
    	html, body .contMapa, .row, .col, .s6  { 
			height: 100%; margin: 0; padding: 0; }
			
    	</style>
    		 
    <?php include 'templates/mapa.php'?>

	<?php 
	if (isset($_SESSION['nombreDeUsuario'])){
		include 'templates/menu.php';}
	else{
		include 'templates/menuNL.php';
	}	?>
	
	<div style="height:100%;">

	<div class="row contMapa" style="height:100%;">
	
	 <div class="col s6 ">
	 	<div class="row ">
	 		<br>
	<div id="map"></div>
	 	</div>
	 </div>
	 
	  <div class="col s6">
	 	<?php include 'verDelito.php';
	 
	 	?>
	 	
	 </div>
	</div>
	</div>


	<script>
			$(document).ready(function(){
				$(".button-collapse").sideNav();
			})
		</script>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="<?php echo(base_url());?>assets/materialize/js/materialize.min.js"></script>
		
	</body>
</html>