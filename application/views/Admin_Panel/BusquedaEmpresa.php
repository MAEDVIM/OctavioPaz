<div class="content-wrapper">
	<h1 class="text-center" style="margin-top: 15px;">Empresas</h1>
	<div class="row" style="margin-bottom: 10px;">
		<div class="container">
		<div style="text-align: right;">
			<input type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalFiltro" value="Búsqueda por Filtro">
		</div>
		</div>
	</div>
	
	<table class="table">
		<thead class="thead-dark">
		<tr>
		<th nowrap="nowrap">ID</th>
		<th nowrap="nowrap">Nombre</th>
		<th nowrap="nowrap">Siglas</th>
		<th nowrap="nowrap">Teléfono</th>
		<th nowrap="nowrap">Estado</th>
		<th nowrap="nowrap">Municipio</th>
		<th nowrap="nowrap"></th>
		</tr>
		</thead>
		<tbody>
		<?php
			
              if($buscarEmpresas->num_rows() > 0){
                  foreach($buscarEmpresas->result() as $row){?>
			<tr>
			<td nowrap="nowrap"><?php echo sprintf("%04d", $row->eCodEmpresa); ?></td>
			<td nowrap="nowrap"><?php echo $row->Nombre; ?></td>
			<td nowrap="nowrap"><?php echo $row->Siglas; ?></td>
			<td nowrap="nowrap"><?php echo $row->Telefono; ?></td>
			<td nowrap="nowrap"><?php echo $row->Estado; ?></td>
			<td nowrap="nowrap"><?php echo $row->Municipio; ?></td>
			<td nowrap="nowrap">
			<input type="button" class="btn btn-info" data-toggle="modal" data-target="#EditarRegistro" value="Info">
			<input type="button" class="btn btn-danger" data-toggle="modal" data-target="#EliminarRegistro" value="Eliminar">	
			</td>
			</tr>
			<?php }
              }else{?>
                  <td colspan="8"></td>
                  <?php } ?>
		
		</tbody>
	</table>
	
	<div class="modal fade" id="EliminarRegistro" tabindex="-1" role="dialog" aria-labelledby="EliminarRegistro" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title">Eliminar Empresa</h5>
        <button type="sumbit" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estás seguro que deseas Eliminar la Empresa Seleccionada?
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

<div class="modal fade bd-example-modal-lg" id="EditarRegistro" tabindex="-1" role="dialog" aria-labelledby="EditarRegistro" aria-hidden="true">
<input type="hidden" id="eEditarOperador" name="eEditarOperador" value="">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header bg-dark text-white">
        <h5 class="modal-title">Editar Empresa</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Confirmar</button>
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
		<form action="BuscarEmpresa" class="form-horizontal" method="POST">
      <div class="modal-body">
		  <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="eCodEmpresa" name="eCodEmpresa" placeholder="Código">
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
						<input type="text" class="form-control" id="tSiglas" name="tSiglas" placeholder="Siglas">
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
		<a type="button" href="<?php echo base_url()?>Admin_Panel/ConsultarEmpresa" class="btn btn-danger">Eliminar Filtros</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="submit" class="btn btn-primary">Buscar</button>
		</form>
      </div>
    </div>
  </div>
</div>

</div>
