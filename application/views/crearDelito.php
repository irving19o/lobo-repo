
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
	

	<div class="row contMapa">
	
	 <div class="col s6 ">
	 	<div class="row ">
	 		<br>
	<div id="map"></div>
	 	</div>
	 </div>
	 
	  <div class="col s6">
	  	<br>
	  	<br>
	  	<br>
	 	<?php include 'formularios/formularioDelito.php'?>
	 </div>
	</div>

	<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="<?php echo(base_url());?>assets/materialize/js/materialize.min.js"></script>
		<script>
			$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
		</script>
	</body>
</html>