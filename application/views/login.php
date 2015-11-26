
    <body class="fondo">
		<br/>
		<!--LOGO-->
		<div class="row">
			<div class="col s4">
				<br/>
			</div>
			<div class="col s4 center">
				<a href="<?php echo(base_url())?>">
				<h1 id="logo" class="color-primario-texto center">LOBO-VIGIA</h1></a>
			</div>
			<div class="col s4">
				<br/>
			</div>
		</div>
		<br/>
		<!--Tarjetas-->
		<div class="row">
			<div class="col s1">
				<br/>
			</div>
			<div class="col s6 tarjeta-izquierda" style="color:white;">
				<h4 id="segunda-fuente">Una aplicación que procura tu seguridad.</h4>
				<br/>
				<h5>El proyecto LOBO-VIGIA nace de la necesidad de la seguridad de los estudiantes ya que a pesar de la seguridad ya brindada por la Benemérita Universidad Autónoma de Puebla y la policía del estado de Puebla la posibilidad de ser víctima de un delito continúa siendo latente.</h5>
				<br/>
				<h5 id="slogan" ><b>Tu Seguridad Al Alcance De Tu Mano</b></h5>
			</div>
			<div class="col s1">
				<br/>
			</div>
			<div class="col s3 tarjeta-derecha" style="color:white;">
				<div class="row">
					<h3 id="segunda-fuente" style="text-align: center;">Iniciar Sesión</h3>
				</div>
				<br/>
				<form action="login/entrar" method="post">
				<label for="usuario">Usuario</label>
				<input id="usuario" type="text" ng-model="tuUsuario" name="usuario"/>
				<br/>
				<label for="contrasena">Contraseña</label>
				<input id="contrasena" type="password" name="contrasena"/>
				<br/>
				<div class="row">
					<div class="col s4">
						<br/>
					</div>
					<div class="col s3">
						<button id="enviarDatos" class="btn waves-effect color-resaltado waves-light" type="submit" name="enviar">Enviar
								<i class="material-icons right">send</i>
							</button>
						</form>
						<br/>
						<a href="./registro">Regístrate.</a>
					</div>
					<div class="col s5">
						<br/>
					</div>
				</div>
			</div>
			<div class="col s1">
				<br/>
			</div>
		</div>
				
		
		<script type="text/javascript" src="<?php echo(base_url());?>assets/materialize/js/materialize.min.js"></script>
		<script>
		  function animar(){$('h1').filter('#logo').animate({
										  opacity: 0
										  },0, function() {
											  $('h1').filter('#logo').animate({
												  opacity: 1
											  },6000)
										  }
															)}
		  animar();
	  </script>
    </body>
  </html>