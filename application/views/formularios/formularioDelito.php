	<!--Tarjeta-->
<form action="<?php echo(base_url())?>principal/add" method="POST">
			
		<div class="card-panel color-primario">
				<div class="row">
					<div class="col s2">
						<br>
					</div>
					<div class="col s8">
						<div class="row">
							<div class="col s4">
								<br>
							</div>
							<div class="col s4">
								<i class="large material-icons">report_problem</i>
							</div>
							<div class="col s4">
								<br>
							</div>
						</div>
						<div class="row">
							<div class="col s5">
								<label for="TipoDeDelito">Tipo de delito</label>
								<input id="TipoDeDelito" type="text" name="tipoDelito" required >
						   		<br>
						   		<label for="HoraDelDelito">Hora del delito</label>
						   		<input id="HoraDelDelito" type="time" name="horaDelito" required>
						   		<br>
								<label for="FechaDelDelito">Fecha del delito</label>
						   		<input id="FechaDelDelito" type="text" name="fechaDelito" class="datepicker picker__input" readonly="" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="FechaDelDelito_root" required>
						   		<?php include('calendario.php');?>
						   		<br>
						   		<label for="Direccion">Direccion</label>
						   		<input id="Direccion" type="text" name="direccion" required>
							</div>
							<div class="col s1">
								<br>
							</div>
							<div class="col s5">
						   		<label for="DescripcionPerpetuador">Descripción del perpetuador</label>
						   		<input id="DescripcionPerpetuador" class="materialize-textarea" name="descripcionPerpetuador" required>
						   		<br>
						   		<label for="DescripcionArma">Descripción del arma</label>
						   		<input id="DescripcionArma" class="materialize-textarea" name ="descripcionArma" required>
						   		<br>
						   		<label for="DescripcionLarga">Descripción larga del delito</label>
						   		<input id="DescripcionLarga" class="materialize-textarea" name="descripcionLarga" required>
						   		<br>
								<br>
								
						   		<input id="Lat" type="hidden" name="lat" required>
						   		<input id="Long" type="hidden" name="long" required>	
								
				  					<button id="enviarDatos" class="btn waves-effect color-resaltado waves-light" type="submit" name="enviar">Enviar
										<i class="material-icons right">send</i>
									</button>
							
						
							</div>
							<div class="col s1">
								<br>
							</div>
						</div>
					</div>
					<div class="col s2">
						<br>
					</div>
				</div>
			</div>
		
		</form>
	