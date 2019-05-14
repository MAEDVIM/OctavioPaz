<div class="content-wrapper">
	<h1 class="text-center" style="margin-top: 15px;">Usuarios</h1>
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
			<th nowrap="nowrap">ID</th>
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
              if($cargarUsuarios->num_rows() > 0){
                  foreach($cargarUsuarios->result() as $row){?>
			<tr>
			<td nowrap="nowrap"><?php echo sprintf("%04d", $row->eCodUsuario); ?></td>
			<td nowrap="nowrap"><?php echo $row->NombreUsuario; ?></td>
			<td nowrap="nowrap"><?php echo $row->ApellidoPaterno; ?></td>
			<td nowrap="nowrap"><?php echo $row->ApellidoMaterno; ?></td>
			<td nowrap="nowrap"><?php echo $row->Correo; ?></td>
			<td nowrap="nowrap"><?php echo $row->Telefono; ?></td>
			<td nowrap="nowrap"><?php echo $row->Estado; ?></td>
			<td nowrap="nowrap"><?php echo $row->Municipio; ?></td>
			<td nowrap="nowrap">
				<input type="button" class="btn btn-danger" onClick="EliminarUsuario(<?php echo $row->eCodUsuario; ?>)" value="Eliminar Usuario">
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

<form action="EliminarUsuario" class="form-horizontal" method="POST" id="FormEliminarUsuario">
	<input type="hidden" id="eCodUsuario" name="eCodUsuario">
</form>
	
	<script>
		function EliminarUsuario(eCodUsuario){
			document.getElementById("eCodUsuario").value = eCodUsuario;
			document.getElementById('FormEliminarUsuario').submit();
		}
	</script>
	
<div class="modal fade" id="ModalFiltro" tabindex="-1" role="dialog" aria-labelledby="ModalFiltro" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Filtrado</h5>
        <button type="sumbit" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
		<form action="BuscarUsuario" class="form-horizontal" method="POST">
      <div class="modal-body">
		  <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="eCodUsuario" name="eCodUsuario" placeholder="Código">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Buscar</button>
		</form>
      </div>
    </div>
  </div>
</div>
</div>
