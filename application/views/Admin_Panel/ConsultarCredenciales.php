<div class="content-wrapper">
	<h1 class="text-center" style="margin-top: 15px;">Noticias </h1>
	<div class="row" style="margin-bottom: 10px;">
		<div class="container"><!--
		<div style="text-align: right;">
			<input type="button" class="btn btn-default" data-toggle="modal" data-target="#ModalFiltro" value="Búsqueda por Filtro">
		</div> -->
		</div>
	</div>
	<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark">
		<tr>
		<th>ID Credencial</th>
		<th>Código Sindicalizado</th>
		<th>Nombre del Operador</th>
		<th>Fecha Creación</th>
		</tr>
		</thead>
		<tbody>
		<?php
              if($cargarCredencial->num_rows() > 0){
                  foreach($cargarCredencial->result() as $row){?>
			<tr>
			<td><?php echo $row->eCodCredencial; ?></td>
			<td><?php echo $row->tCodSindicalizado; ?></td>
			<td><?php echo $row->tNombre." ". $row->tApellidoPaterno." ". $row->tApellidoMaterno; ?></td>
			<td><?php echo $row->fhFechaCreacion; ?></td>
			</tr>
			<?php }
              }else{?>
                  <td colspan="5"></td>
                  <?php } ?>
		
		</tbody>
	</table>
	
</div>
