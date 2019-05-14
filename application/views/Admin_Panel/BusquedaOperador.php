<div class="content-wrapper">
	<h1 class="text-center" style="margin-top: 15px;">Operadores</h1>
	<div class="row" style="margin-bottom: 10px;">
		<div class="container">
		<div style="text-align: right;">
			<input type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalFiltro" value="Búsqueda por Filtro">
		</div>
		</div>
	</div>
	<div class="table-responsive">
	<table class="table table-hover table-striped">
		<thead class="thead-dark">
		<tr>
		<th nowrap="nowrap">Código Sindicalizado</th>
		<th nowrap="nowrap">Nombre</th>
		<th nowrap="nowrap">Apellido Paterno</th>
		<th nowrap="nowrap">Apellido Materno</th>
		<th nowrap="nowrap">Correo</th>
		<th nowrap="nowrap">Teléfono</th>
		<th nowrap="nowrap">Estado</th>
		<th nowrap="nowrap">Municipio</th>
		<th nowrap="nowrap"></th>
		</tr>
		</thead>
		<tbody>
		<?php
              if($buscarOperador->num_rows() > 0){
                  foreach($buscarOperador->result() as $row){?>
			<tr>
			<td nowrap="nowrap"><?php echo $row->tCodSindicalizado; ?></td>
			<td nowrap="nowrap"><?php echo $row->NombreOperador; ?></td>
			<td nowrap="nowrap"><?php echo $row->ApellidoPaterno; ?></td>
			<td nowrap="nowrap"><?php echo $row->ApellidoMaterno; ?></td>
			<td nowrap="nowrap"><?php echo $row->Correo; ?></td>
			<td nowrap="nowrap"><?php echo $row->Telefono; ?></td>
			<td nowrap="nowrap"><?php echo $row->Estado; ?></td>
			<td nowrap="nowrap"><?php echo $row->Municipio; ?></td>
			<td nowrap="nowrap">
				<input type="button" class="btn btn-info" onClick="EditarOperador(<?php echo $row->eCodOperador; ?>)" value="Ver Más">
				<input type="button" class="btn btn-danger" data-toggle="modal" data-target="#EliminarRegistro" onClick="EnviarParametros(<?php echo $row->eCodOperador; ?>)" value="Eliminar">
			</td>
			</tr>
			<?php }
              }else{?>
                  <td colspan="8"></td>
                  <?php } ?>
		
		</tbody>
	</table>
	</div>
</div>
<form action="InformacionOperador" class="form-horizontal" method="POST" id="FormEditarOperador">
	<input type="hidden" name="editarOperador" id="editarOperador">
</form>

<div class="modal fade" id="EliminarRegistro" tabindex="-1" role="dialog" aria-labelledby="EliminarRegistro" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Eliminar Operador</h5>
        <button type="sumbit" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estás seguro que deseas Eliminar el Operador?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
		<form action="EliminarOperador" class="form-horizontal" method="POST">
		<input type="hidden" id="eCodRegistro" name="eCodRegistro" value="">
        <button type="submit" class="btn btn-danger">Confirmar</button>
		</form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ModalFiltro" tabindex="-1" role="dialog" aria-labelledby="ModalFiltro" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Filtrado</h5>
        <button type="sumbit" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<form action="BuscarOperador" class="form-horizontal" method="POST">
      <div class="modal-body">
		  <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="tCodSindicalizado" name="tCodSindicalizado" placeholder="Código Sindicalizado">
						</div>
					</div>
				</div>
		  	<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" id="tNombre" name="tNombre" placeholder="Nombre">
					</div>
				</div>
			  	<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" id="tApellido" name="tApellido" placeholder="Apellidos">
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
							<input type="text" class="form-control" id="tEstado" name="tEstado" placeholder="Estado">
						</div>
					</div>
				<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="tMunicipio" name="tMunicipio" placeholder="Municipio">
						</div>
					</div>
			</div>
      </div>
      <div class="modal-footer">
		<a type="button" href="<?php echo base_url()?>Admin_Panel/ConsultarOperador" class="btn btn-danger">Eliminar Filtros</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Buscar</button>
		</form>
      </div>
    </div>
  </div>
</div>

<script>
function EnviarParametros(eCodRegistro){
	document.getElementById("eCodRegistro").value = eCodRegistro;
}
	
function EditarOperador(eCodOperador){
	document.getElementById("editarOperador").value = eCodOperador;
	document.getElementById('FormEditarOperador').submit();
}

</script>
