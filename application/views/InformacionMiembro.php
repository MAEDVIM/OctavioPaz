		<div class="content-wrapper" style="margin-top: 75px; margin-bottom: 300px;">
			<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 card" style="margin-top: 15px; padding-bottom: 15px; background-color: #f2f4f4 ; ">
					<h3 class="text-center" style="margin-top: 15px;">INFORMACIÓN DE OPERADOR</h3>
					
						<?php if($InformacionOperador->num_rows() > 0){
                  			foreach($InformacionOperador->result() as $row){?>
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
							<span style="font-size: 14px;"> <?php echo $row->tNombre; ?></span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<span style="font-size: 14px; font-weight: bold; text-align: right;">Apellido: </span>
						</div>
						<div class="col-md-6">
							<span style="font-size: 14px;"> <?php echo $row->tApellidoPaterno." ".$row->tApellidoMaterno; ?></span>
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
				</div>
				</div>
			</div>
		</div>
		<?php }
              }else{?>
                  <h1 class="text-center">Sin Registros</h1>
                  <?php } ?>
