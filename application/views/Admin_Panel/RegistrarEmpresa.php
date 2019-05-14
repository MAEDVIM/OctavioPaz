		<div class="content-wrapper">
			<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 card" style="margin-top: 15px; padding-bottom: 15px; background-color: #f2f4f4 ; ">
					<h3 class="text-center" style="margin-top: 15px;">REGISTRAR EMPRESA</h3>
					<form action="<?php echo base_url() ?>Admin_Panel/guardarEmpresa" class="form-horizontal" method="POST" id="FormRegistro" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
					   			<input type="text" class="form-control" id="tNombre" name="tNombre" placeholder="Nombre">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
					   			<input type="text" class="form-control" id="tSiglas" name="tSiglas" placeholder="Siglas">
							</div>
						</div>
					</div>

					<div class="row">
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
						<div class="col-md-6">
							<div class="form-group">
						    <select class="form-control" id="eCodMunicipio" name="eCodMunicipio">
						      <option>Municipio</option>
						    </select>
						  </div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
						   		<input type="text" class="form-control" id="tDomicilio" name="tDomicilio" placeholder="Dirección">
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
						   		<input type="text" class="form-control" id="tTelefono" name="tTelefono" placeholder="Teléfono">
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
					Telefono		= document.getElementById('tTelefono'),
					Telefono		= document.getElementById('tSiglas'),
					Estado			= document.getElementById('eCodEstado'),
					Municipio		= document.getElementById('eCodMunicipio'),
					Domicilio		= document.getElementById('tDomicilio'),
					CodigoPostal	= document.getElementById('tCodigoPostal'),
					bandera			= false,
					mensaje 		= "";
					
					if(Nombre.value == ""){
						mensaje += "* Nombre\n";
						bandera = true;
					}
					if(Nombre.value == ""){
						mensaje += "* Siglas\n";
						bandera = true;
					}
					if(Telefono.value == ""){
						mensaje += "* Teléfono\n";
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
					
					if(Domicilio.value == ""){
						mensaje += "* Domicilio\n";
						bandera = true;
					}
					
					if(CodigoPostal.value == ""){
						mensaje += "* Código Postal\n";
						bandera = true;
					}
					
					if(bandera == true){
						alert("Por favor revise la siguiente información \n"+mensaje);
					}else{
						document.getElementById('FormRegistro').submit();
					}
					
			}
		</script>
