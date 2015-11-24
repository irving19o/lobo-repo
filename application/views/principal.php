
    <body>
		
		<!--Barra de navegación-->
		
	<?php 
	if (isset($_SESSION['nombreDeUsuario'])){
		include 'templates/menu.php';}
	else{
		include 'templates/menuNL.php';
	}	?>
		
	
	<?php	include 'mapa.php';?>

	<script>
			$(document).ready(function(){
				$(".button-collapse").sideNav();
			})
		</script>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="./assets/materialize/js/materialize.min.js"></script>
	</body>
</html>