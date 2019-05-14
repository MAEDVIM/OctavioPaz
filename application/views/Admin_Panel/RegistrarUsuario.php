		<div class="content-wrapper">
			<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 card" style="margin-top: 15px; padding-bottom: 15px; background-color: #f2f4f4 ; ">
					<h3 class="text-center" style="margin-top: 15px;">REGISTRAR USUARIO</h3>
					<form action="<?php echo base_url() ?>Admin_Panel/guardarUsuario" class="form-horizontal" method="POST" id="FormRegistro" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
					   			<input type="text" class="form-control" id="tNombre" name="tNombre" placeholder="Nombre del Usuario">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tApellidoPaterno" name="tApellidoPaterno" placeholder="Apellido Paterno">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tApellidoMaterno" name="tApellidoMaterno" placeholder="Apellido Materno">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tCorreo" name="tCorreo" placeholder="Correo">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tTelefono" name="tTelefono" placeholder="Teléfono">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							
							<div class="form-group">
							    <input class="form-control" id="fhFechaNacimiento" name="fhFechaNacimiento" onfocus="(this.type='date')" type="text" placeholder="Fecha de Nacimiento" id="example-date-input">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodSexo" name="eCodSexo">
						      <option hidden>Sexo</option>
						      <option value="Femenino">Femenino</option>
						      <option value="Masculino">Masculino</option>
						    </select>
						  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodEstado" name="eCodEstado">
						      <option hidden>Estado</option>
						        <?php
			                        foreach ($states as $key => $value) {
			                            echo "<option value='".$value->eCodEstado."'>".$value->tNombre."</option>";
			                        }
			                    ?>
						    </select>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodMunicipio" name="eCodMunicipio">
						      <option>Municipio</option>
						    </select>
						  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tCiudad" name="tCiudad" placeholder="Ciudad">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tDomicilio" name="tDomicilio" placeholder="Domicilio">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tCodigoPostal" name="tCodigoPostal" placeholder="Código Postal">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tUsuario" name="tUsuario" placeholder="Usuario">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="password" class="form-control" id="tContrasena" name="tContrasena" placeholder="Contraseña">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="password" class="form-control" onchange="validarContrasenas()" id="tContrasenaDos" name="tContrasenaDos" placeholder="Confirmar Contraseña">
							</div>
						</div>
					</div>

				<button type="button" onclick="validarFormulario()" class="btn btn-success btn-block btn-lg">Guardar</button>
				</form>
				</div>
				</div>
			</div>
		</div>
		
		<script>
			function validarFormulario(){
				var Nombre			= document.getElementById('tNombre'),
					ApellidoPaterno = document.getElementById('tApellidoPaterno'),
					ApellidoMaterno = document.getElementById('tApellidoMaterno'),
					Correo			= document.getElementById('tCorreo'),
					Telefono		= document.getElementById('tTelefono'),
					FechaNacimiento = document.getElementById('fhFechaNacimiento'),
					Sexo			= document.getElementById('eCodSexo'),
					Estado			= document.getElementById('eCodEstado'),
					Municipio		= document.getElementById('eCodMunicipio'),
					Ciudad			= document.getElementById('tCiudad'),
					Domicilio		= document.getElementById('tDomicilio'),
					CodigoPostal	= document.getElementById('tCodigoPostal'),
					Usuario			= document.getElementById('tUsuario'),
					Contrasena		= document.getElementById('tContrasena'),
					ContrasenaDos	= document.getElementById('tContrasenaDos'),
					bandera			= false,
					mensaje 		= "";
					
					if(Nombre.value == ""){
						mensaje += "* Nombre del Usuario\n";
						bandera = true;
					}
					if(ApellidoPaterno.value == ""){
						mensaje += "* Apellido Paterno\n";
						bandera = true;
					}
					if(ApellidoMaterno.value == ""){
						mensaje += "* Apellido Materno\n";
						bandera = true;
					}
					if(Correo.value == ""){
						mensaje += "* Correo\n";
						bandera = true;
					}
					if(Telefono.value == ""){
						mensaje += "* Teléfono\n";
						bandera = true;
					}
					
					if(FechaNacimiento.value == ""){
						mensaje += "* Fecha de Nacimiento\n";
						bandera = true;
					}
					
					if(Sexo.value == ""){
						mensaje += "* Sexo\n";
						bandera = true;
					}
					
					if(Estado.value == ""){
						mensaje += "* Estado\n";
						bandera = true;
					}
					
					if(Municipio.value == ""){
						mensaje += "* Municipio\n";
						bandera = true;
					}
					
					if(Ciudad.value == ""){
						mensaje += "* Ciudad\n";
						bandera = true;
					}
					
					if(Domicilio.value == ""){
						mensaje += "* Domicilio\n";
						bandera = true;
					}
					
					if(CodigoPostal.value == ""){
						mensaje += "* Código Postal\n";
						bandera = true;
					}
					
					if(Usuario.value == ""){
						mensaje += "* Usuario\n";
						bandera = true;
					}
					
					if(Contrasena.value == ""){
						mensaje += "* Contraseña\n";
						bandera = true;
					}
					
					if(CodigoPostal.value == ""){
						mensaje += "* Repetir Contraseña\n";
						bandera = true;
					}
					
					if(bandera == true){
						alert("Por favor revise la siguiente información \n"+mensaje);
					}else{
						document.getElementById('FormRegistro').submit();
					}
					
			}
			
			function validarContrasenas(){
				var contrasena		= document.getElementById('tContrasena'),
					contrasenaDos	= document.getElementById('tContrasenaDos');
					
					if((contrasena.value != "" && contrasenaDos != "") && (contrasena.value != contrasenaDos.value)){
							alert("Las contraseñas deben ser iguales");
							contrasenaDos.value = "";
					}
			}
			
		</script>
