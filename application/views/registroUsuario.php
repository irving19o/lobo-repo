
   <body class="color-primario-claro" ng-app>
	   
	   <!--Barra de navegación-->
	   <div class="navbar-fixed">
		   <nav class="color-primario-obscuro">
			   <a href="<?php echo(base_url());?>" class="brand-logo center fuente1">LOBO-VIGIA</a>
		   </nav>
	   </div>
	   
	   <br/>
	   
	   <!--Carta para mostrar datos del usuario-->
	   <div class="row">
		   <div class="col s2">
			   <br/>
		   </div>
		   <div class="col s8">
			   <div class="card-panel color-primario">
				   <div class="row">
					   <div class="col s6">
					   	<form action="registro/nuevo" method="post">
						   <label for="nombre">Nombre</label>
						   <input id="nombre" type="text" ng-model="tuNombre" name="nombre"required/>
						   <br/>
						   <label for="apellidoPaterno">Apellido Paterno</label>
						   <input id="apellidoPaterno" type="text" name="apellidoPaterno" required/>
						   <br/>
						   <label for="apellidoMaterno">Apellido Materno</label>
						   <input id="apellidoMaterno" type="text" name="apellidoMaterno" required/>
						   <br/>
						   <label for="sexos">Sexo</label>
						   <br/>
						   <input name="sexo" id="sexo1" type="radio" vaule="1"/>
						   <label for="sexo1">Masculino</label>
						   <input name="sexo" id="sexo2" type="radio" vaule="0"/>
						   <label for="sexo2">Femenino</label>
						   <br/>
						   <label for="fechaNacimiento">Fecha de Nacimiento</label>
						   <input id="fechaNacimiento" type="date" name="fechaNacimiento"/>
						   <br/>
						   <label for="correo">Correo electrónico</label>
						   <input id="correo" type="email" ng-model="tuCorreo" name="correoElectronico" required/>
						   <br/>
						   <label for="usuario">Usuario</label>
						   <input id="usuario" type="text" ng-model="tuUsuario" name="nombreUsuario" required/>
						   <br/>
						   <label for="contrasena">Contraseña</label>
						   <input id="contrasena" type="password" name="contrasena"/>
					   </div>
					   <div class="col s6">
						   <div class="row">
							   <h3>Así se verá tu perfil</h3>
						   </div>
						   <div class="card-panel color-primario-claro">
							   <div class="row">
								   <div class="col s4">
									   <br/>
								   </div>
								   <div class="col s4">
									   <i class="large material-icons">android</i>
								   </div>
								   <div class="col s4">
									   <br/>
								   </div>
							   </div>
							   <div class="row">
								   <h5>Usuario: {{tuUsuario}}</h5>
								   <br/>
								   <h5>Nombre: {{tuNombre}}</h5>
								   <br/>
								   <h5>Correo: {{tuCorreo}}</h5>
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>
		   </div>
		   <div class="col s2">
		   </div>
	   </div>
	   
	   <br/>
	   <!--BOTÓN DE ENVÍO DE DATOS-->
	   <div class="row">
		   <div class="col s5">
			   <br/>
		   </div>
		   <div class="col s2">
			  
				   <button id="enviarDatos" class="btn waves-effect color-resaltado waves-light" type="submit" name="enviar">Enviar
					   <i class="material-icons right">send</i>
				   </button>
			  
		   </div>
		   </form>
		   <div class="col s5">
			   <br/>
		   </div>
	   </div>
	   
	   <script>
		   /*
			   $(document).ready(function(){
				   $("#enviar").hover(function(){
					   $(this).css("background-color","#4dd0e1");
					   console.log("holi");
				   })
			   });
		   */
		   $(document).ready(function(){
			   $('#enviarDatos').on('mouseover', function(){
				   $('#enviarDatos').css('background-color', '#4DD0E1');
				  console.log("si jala ");
			   });
		   });
	   </script>
	   
     <!--Import jQuery before materialize.js-->
     <script type="text/javascript" src="<?php echo(base_url());?>assets/materialize/js/materialize.min.js"></script>
   </body>
</html>