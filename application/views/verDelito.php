<div class="row">
		
	
		
				<div class="card-panel color-primario">
					<div class="row">
						<div class="col s12 color-primario-obscuro fuente1 center" style="color: white;">
							<h1><?php echo $delito[0]->tipoDelito;?></h1>
						</div>
					</div>
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
								<i class="large material-icons">report_problem</i>
							</div>
							<div class="col s4">
								<br/>
							</div>
						</div>
						<div class="row">
							<div class="col s5">
								<p>Hora del delito: <?php echo $delito[0]->horaDelito;?></p>
						   		<br/>
								<p>Fecha del delito: <?php echo $delito[0]->fechaDelito;?></p>
						   		<br/>
								<p>Dirección: <?php echo $delito[0]->direccion;?></p>
							</div>
							<div class="col s1">
								<br/>
							</div>
							<div class="col s5">
								<p>Descripción del perpetuador: <?php echo $delito[0]->descripcionPerpetuador;?></p>
						   		<br/>
								<p>Descripción del arma:  <?php echo $delito[0]->descripcionArma;?></p>
						   		<br/>
								<p>Descripción larga del delito:  <?php echo $delito[0]->descripcionLarga;?></p>
							</div>
							<div class="col s1">
								<br/>
								<br/>
								<br/>
								<a href="<?php echo(base_url());?>principal/crearDelito" class="btn-floating btn-large waves-effect waves-light color-resaltado">
									<i class="material-icons">add</i>
								</a>
							</div>
						</div>
					</div>
					<div class="col s2">
						<br/>
					</div>
				</div>
					<div class="row color-primario-claro">
						<?php if(isset( $_SESSION["nombreDeUsuario"])):?>
						<h5> <?php echo $_SESSION["nombreDeUsuario"];?></h5>
						<p>Comentarios</p>
							<hr/>
							<div id=comentarios>
								<?php foreach ($comentario as $dato): ?>
									<p><?php echo $dato->comentario;?></p>
									<hr/>
									<br>
								<?php endforeach; ?>
							</div>
				
							<form action="<?php echo base_url()?>principal/nuevo_comentario" method="post">
							<input type="text" name="comentario" required/>
							<input type="hidden" name="idDelito" value=" <?php echo $delito[0]->idDelito;?>"/>
							<input type="submit" value="Enviar"/>
						</form>
						<hr/>
							<?php endif;?>
					</div>
			</div>
		
			</div>
			