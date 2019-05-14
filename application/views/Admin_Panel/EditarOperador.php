		<div class="content-wrapper">
			<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 card" style="margin-top: 15px; padding-bottom: 15px; background-color: #f2f4f4 ; ">
					<h3 class="text-center" style="margin-top: 15px;">INFORMACIÓN DE OPERADOR</h3>
					
						<?php if($EditarOperador->num_rows() > 0){
                  			foreach($EditarOperador->result() as $row){?>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">C. de Sindicalizado: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->tCodSindicalizado; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">Nombre: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->NombreOperador; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">Apellido: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->ApellidoPaterno." ".$row->ApellidoMaterno; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">Cargo: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->tCargo; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">N. Seguro Social: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->tNumeroSeguro; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">N. Emergencia: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->tTelefonoEmergencia; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">Estatus: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->Estatus; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">Fecha de Registro: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->fhFechaRegistro; ?></span>
						</div>
					</div>
					<div class="row" style="margin-top: 10px;">
					<div class="col-md-12">
						<input type="button" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#GenerarCredencial" onClick="EnviarParametros(<?php echo $row->eCodOperador; ?>)" value="Generar Credencial">
					</div>
					</div>
					<?php
						if($row->tCodEstatus == 'AC'){?>
					<div class="row" style="margin-top: 10px;">
						<div class="col-md-12">
							<input type="button" class="btn btn-danger btn-block btn-lg" style="color:white;" data-toggle="modal" data-target="#BajaOperador" onClick="bajaOperador(<?php echo $row->eCodOperador; ?>)" value="Baja Operador">
						</div>
					</div>
						<?php }
					?>
					
				</div>
				</div>
			<div class="row">
				<div class="col-md-6 offset-md-3 card" style="margin-top: 15px; padding-bottom: 15px; background-color: #f2f4f4 ; ">
					<h3 class="text-center" style="margin-top: 15px;">ACTUALIZAR OPERADOR</h3>
					<form action="<?php echo base_url() ?>Admin_Panel/editarOperador" class="form-horizontal" method="POST" id="FormRegistro" enctype="multipart/form-data">
					<div id="Lista1" class="Elementos">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
						  <input type="text" class="form-control" id="tEmpresa" name="tEmpresa" value="<?php echo $row->tEmpresa; ?>" placeholder="Nombre de la Empresa">
						</div>
						</div>
						</div>
						<a href="#" class="btn btn-success btn-block btn-lg ElementosLista" id="2">Siguiente</a>
					</div>
					<div id="Lista2" class="Elementos">
						
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
					   			<input type="text" class="form-control" id="tNombre" name="tNombre" value="<?php echo $row->NombreOperador; ?>" placeholder="Nombre del Operador">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tApellidoPaterno" value="<?php echo $row->ApellidoPaterno; ?>" name="tApellidoPaterno" placeholder="Apellido Paterno">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tApellidoMaterno" name="tApellidoMaterno" value="<?php echo $row->ApellidoMaterno; ?>" placeholder="Apellido Materno">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="email" class="form-control" id="tCorreo" value="<?php echo $row->Correo; ?>" name="tCorreo" placeholder="Correo">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tTelefono" name="tTelefono" value="<?php echo $row->Telefono; ?>" placeholder="Teléfono">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tCurp" name="tCurp" value="<?php echo $row->tCurp; ?>" placeholder="CURP">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodGrupoSanguineo" name="eCodGrupoSanguineo">
								<?php if($row->eCodGrupoSanguineo){ ?>
									<option hidden value="<?php echo $row->eCodGrupoSanguineo;?>" selected><?php echo $row->GrupoSanguineo;?></option>
								<?php } ?>
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
						   		<input type="text" class="form-control" id="tTelefonoEmergencia" value="<?php echo $row->tTelefonoEmergencia; ?>" name="tTelefonoEmergencia" placeholder="Tel. de Emergencia">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tNumeroSeguro" name="tNumeroSeguro" value="<?php echo $row->tNumeroSeguro; ?>" placeholder="Número Seguro Social">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							
							<div class="form-group">
							    <input class="form-control" id="fhFechaNacimiento" name="fhFechaNacimiento" value="<?php echo $row->fhFechaNacimiento; ?>"onfocus="(this.type='date')" type="text" placeholder="Fecha Nacimiento" id="FhFechaNacimiento">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tCargo" name="tCargo" placeholder="Cargo" value="<?php echo $row->tCargo; ?>">
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodSexo" name="eCodSexo">
						      <option hidden>Sexo</option>
								<?php if($row->eCodSexo){ ?>
									<option hidden value="<?php echo $row->eCodSexo;?>" selected><?php echo $row->Sexo;?></option>
								<?php } ?>
						      <option value="1">Femenino</option>
						      <option value="2">Masculino</option>
						    </select>
						  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodEstado" name="eCodEstado">
						      <option hidden>Estado</option>
								<?php if($row->Estado){ ?>
									<option hidden value="<?php echo $row->eCodEstado;?>" selected><?php echo $row->Estado;?></option>
								<?php }
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
						      <option hidden>Municipio</option>
								<?php if($row->Estado){ ?>
									<option hidden value="<?php echo $row->eCodMunicipio;?>" selected><?php echo $row->Municipio;?></option>
								<?php } ?>
						    </select>
						  </div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tCiudad" name="tCiudad" placeholder="Ciudad" value="<?php echo $row->tCiudad; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tDomicilio" name="tDomicilio" placeholder="Domicilio" value="<?php echo $row->tDomicilio; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tCodigoPostal" name="tCodigoPostal" placeholder="Código Postal" value="<?php echo $row->tCodigoPostal; ?>">
							</div>
						</div>
					</div>
						<a href="#" class="btn btn-success btn-block btn-lg ElementosLista" id="3">Siguiente</a>
						<a href="#" class="btn btn-danger btn-block btn-lg ElementosLista" id="1">Regresar</a>
					</div>
				<div id="Lista3" class="Elementos">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tTipoLicencia" name="tTipoLicencia" placeholder="Tipo de Licencia" value="<?php echo $row->tTipoLicencia; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tNumeroLicencia" name="tNumeroLicencia" placeholder="No. Licencia" value="<?php echo $row->tNumeroLicencia; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <input class="form-control" id="fhFechaVencimiento" name="fhFechaVencimiento" value="<?php echo $row->fhFechaVencimiento; ?>" type="text" placeholder="Fecha Vencimiento" id="fhFechaVencimiento">
							</div>
						</div>
					</div>
					<button type="button" onclick="validarFormulario()" class="btn btn-success btn-block btn-lg">Guardar</button>
					<a href="#" class="btn btn-danger btn-block btn-lg ElementosLista" id="2">Regresar</a>
				</div>
				
						
						
						
						
				</form>
				</div>
				</div>
			</div>
		</div>
		<?php }
              }else{?>
                  <h1>Sin Registros</h1>
                  <?php } ?>
		<div class="modal fade" id="GenerarCredencial" tabindex="-1" role="dialog" aria-labelledby="GenerarCredencial" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header bg-dark text-white">
				<h5 class="modal-title">Generar Credencial</h5>
				<button type="sumbit" class="close text-white" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				¿Estás seguro que deseas generar credencial?
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
				<form action="GenerarCredencial" class="form-horizontal" method="POST">
				<input type="hidden" id="eCodRegistroCredencial" name="eCodRegistroCredencial" value="">
				<button type="submit" class="btn btn-danger">Confirmar</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>

		<div class="modal fade" id="BajaOperador" tabindex="-1" role="dialog" aria-labelledby="BajaOperador" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header bg-dark text-white">
				<h5 class="modal-title">Generar Credencial</h5>
				<button type="sumbit" class="close text-white" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				¿Estás seguro que deseas dar de baja al Operador?
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
				<form action="BajaOperador" class="form-horizontal" method="POST">
				<input type="hidden" id="eCodOperadorBaja" name="eCodOperadorBaja" value="">
				<button type="submit" class="btn btn-danger">Confirmar</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
		<script>
			function EnviarParametros(eCodCredencial){
				document.getElementById("eCodRegistroCredencial").value = eCodCredencial;
			}
			function bajaOperador(eCodOperador){
				document.getElementById("eCodOperadorBaja").value = eCodOperador;
			}
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
					Empresa 		= document.getElementById('tEmpresa'),
					TipoLicencia 	= document.getElementById('tTipoLicencia'),
					NumeroLicencia 	= document.getElementById('tNumeroLicencia'),
					Vigencia 		= document.getElementById('fhFechaVencimiento'),
					bandera			= false,
					mensaje 		= "";
					
					if(Nombre.value == ""){
						mensaje += "* Nombre del Operador\n";
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
				
					if(Cargo.value == ""){
						mensaje += "* Cargo\n";
						bandera = true;
					}
				
					if(Seguro.value == ""){
						mensaje += "* Número de Seguro Social\n";
						bandera = true;
					}
				
					if(Empresa.value == ""){
						mensaje += "* Nombre de la Empresa\n";
						bandera = true;
					}
				
					if(TipoLicencia.value == ""){
						mensaje += "* Tipo de Licencia Federal\n";
						bandera = true;
					}
				
					if(NumeroLicencia.value == ""){
						mensaje += "* Número de Licencia Federal\n";
						bandera = true;
					}
				
					if(Vigencia.value == ""){
						mensaje += "* Vigencia de la Licencia Federal\n";
						bandera = true;
					}
					
					if(bandera == true){
						alert("Por favor revise la siguiente información \n"+mensaje);
					}else{
						document.getElementById('FormRegistro').submit();
					}
					
			}
		</script>
