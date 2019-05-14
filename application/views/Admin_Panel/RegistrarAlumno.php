		<div class="content-wrapper">
			<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 card" style="margin-top: 15px; padding-bottom: 15px; background-color: #f2f4f4 ; ">
					<h3 class="text-center" style="margin-top: 15px;">REGISTRAR ALUMNO</h3>
					<form action="<?php echo base_url() ?>Admin_Panel/guardarAlumno" class="form-horizontal" method="POST" id="FormRegistro" enctype="multipart/form-data">
						
					<div id="Lista1" class="Elementos">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
						  <input type="text" class="form-control" id="tEscuela" name="tEscuela" placeholder="Escuela">
						</div>
						</div>
						</div>
						<a href="#" class="btn btn-success btn-block btn-lg ElementosLista" id="2">Siguiente</a>
					</div>
					<div id="Lista2" class="Elementos">
						
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
					   			<input type="text" class="form-control" id="tNombre" name="tNombre" placeholder="Nombre del Alumno">
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
						   		<input type="email" class="form-control" id="tCorreo" name="tCorreo" placeholder="Correo">
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
						   		<input type="text" class="form-control" id="tCurp" name="tCurp" placeholder="CURP">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodGrupoSanguineo" name="eCodGrupoSanguineo">
								<option hidden>Grupo Sanguineo</option>
								<option value="1">A+</option>
								<option value="2">A-</option>
								<option value="3">B+</option>
								<option value="4">B-</option>
								<option value="5">AB+</option>
								<option value="6">AB-</option>
								<option value="7">O+</option>
								<option value="8">O-</option>
						    </select>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tTelefonoEmergencia" name="tTelefonoEmergencia" placeholder="Tel. de Emergencia">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tNumeroSeguro" name="tNumeroSeguro" placeholder="Número Seguro Social">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							
							<div class="form-group">
							    <input class="form-control" id="fhFechaNacimiento" name="fhFechaNacimiento" onfocus="(this.type='date')" type="text" placeholder="Fecha Nacimiento" id="example-date-input">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tRecomendado" name="tRecomendado" placeholder="Opcional">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodSexo" name="eCodSexo">
						      <option hidden>Sexo</option>
						      <option value="1">Femenino</option>
						      <option value="2">Masculino</option>
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
						<a href="#" class="btn btn-success btn-block btn-lg ElementosLista" id="3">Siguiente</a>
						<a href="#" class="btn btn-danger btn-block btn-lg ElementosLista" id="1">Regresar</a>
					</div>
				<div id="Lista3" class="Elementos">
					<!--<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tRecomendado" name="tRecomendado" placeholder="Recomendado">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tNumeroLicencia" name="tNumeroLicencia" placeholder="">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <input class="form-control" id="fhFechaVencimiento" name="fhFechaVencimiento" onfocus="(this.type='date')" type="text" placeholder="Fecha Vencimiento" id="example-date-input">
							</div>
						</div>
					</div>-->
					<button type="button" onclick="validarFormulario()" class="btn btn-success btn-block btn-lg">Guardar</button>
					<a href="#" class="btn btn-danger btn-block btn-lg ElementosLista" id="2">Regresar</a>
				</div>
				
						
						
						
						
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
					Cargo 			= document.getElementById('tCargo'),
					Seguro 			= document.getElementById('tNumeroSeguro'),
					Vigencia 		= document.getElementById('fhFechaVencimiento'),
					bandera			= false,
					mensaje 		= "";
					
					if(Nombre.value == ""){
						mensaje += "* Nombre del Alumno\n";
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
				
					if(Seguro.value == ""){
						mensaje += "* Número de Seguro Social\n";
						bandera = true;
					}
				
					if(bandera == true){
						alert("Por favor revise la siguiente información \n"+mensaje);
					}else{
						document.getElementById('FormRegistro').submit();
					}
					
			}
		</script>
