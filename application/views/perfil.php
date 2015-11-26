    

    <body class="color-primario-claro">
		

		
		<?php include 'templates/menu.php'; ?>
		<br/>
		
		<!--Tabs-->
		<div class="row">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s3 fuente2 color-primario-claro"><a class="active" href="#test1" style="color: #727272;">Perfil</a></li>
					<li class="tab col s3 fuente2 color-primario-claro"><a href="#test2" style="color: #727272;">Tus denuncias</a></li>
					<li class="tab col s3 fuente2 color-primario-claro"><a href="#test3" style="color: #727272;">Novedades</a></li>
				</ul>
			</div>
			<div class="row">
				<div class="col s3">
					<br/>
				</div>
				<div class="col s6">
					<br/>
					<br/>
					<div id="test1" class="col s12">
						<div class="row">
							<div class="card-panel color-primario">
								<div class="row">
									<div class="col s2">
										<br/>
									</div>
									<div class="col s8">
										<div class="row">
											<div class="col s4">
												<br/>
											</div>
											<div class="col s4">
												<i class="large material-icons">account_circle</i>
											</div>
											<div class="col s4">
												<br/>
											</div>
										</div>
										<div class="row">
											<div class="col s1">
												<br/>
											</div>
											<div class="col s10">
												<p><i class="small material-icons">accessibility</i><?php echo  ucfirst ($_SESSION['nombreDeUsuario']); ?></p>
												<br/>
												<p><i class="small material-icons">face</i><?php echo $_SESSION['nombre']." ".$_SESSION['apellidoPaterno']." ".$_SESSION['apellidoMaterno']; ?></p>
												<br/>
												<p><i class="small material-icons">email</i><?php echo $_SESSION['correoElectronico']; ?></p>
											</div>
											<div class="col s1">
												<br/>
											</div>
										</div>
									</div>
									<div class="col s2">
										<br/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="test2" class="col s12">
						<div class="row">
							<div class="card-panel color-primario-obscuro">
								<div class="row">
									
									<ul class="collection">
										<?php if (empty($misDenuncias)):?>
									<li class="collection-item dismissable"><div>No Hay denuncias :( <br> Agrega una!! <a href="<?php echo base_url().'principal/crearDelito';?>" class="secondary-content"><i class="material-icons">send</i></a></div></li>
									<?php endif ?>
									
									
								<?php foreach ($misDenuncias as $dato): ?>
									<li class="collection-item dismissable"><div><?php echo $dato->tipoDelito.' ('.$dato->descripcionLarga.')'; ?><a href="<?php echo base_url().'principal/muestra/'.$dato->idDelito?>" class="secondary-content"><i class="material-icons">send</i></a></div></li>
								<?php endforeach; ?>
							</ul>
								</div>
							</div>
						</div>
					</div>
					<div id="test3" class="col s12">
						<div class="row">
							<div class="card-panel color-primario-obscuro">
								<div class="row">
									<ul class="collection">
									
										<?php if (empty($novedades)):?>
									<li class="collection-item dismissable"><div>No hay novedades :( <br> Agrega una Denuncia!!! <a href="<?php echo base_url().'principal/crearDelito';?>" class="secondary-content"><i class="material-icons">send</i></a></div></li>
									<?php endif ?>
									
									
									<?php foreach ($novedades as $dato): ?>
									<li class="collection-item dismissable"><div><?php echo $dato->tipoDelito.' ('.$dato->descripcionLarga.')'; ?><a href="<?php echo base_url().'principal/muestra/'.$dato->idDelito?>" class="secondary-content"><i class="material-icons">send</i></a></div></li>
									<?php endforeach; ?>
							
								
							</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col s3">
					<br/>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function(){
				$(".button-collapse").sideNav();
			})
		</script>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="./assets/materialize/js/materialize.min.js"></script>
	</body>
</html>