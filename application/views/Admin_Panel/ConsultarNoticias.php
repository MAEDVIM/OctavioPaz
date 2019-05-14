<div class="content-wrapper">
	<h1 class="text-center" style="margin-top: 15px;">Noticias </h1>
	<div class="row" style="margin-bottom: 10px;">
	</div>
	<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark">
		<tr>
		<th>ID</th>
		<th>Encabezado</th>
		<th>Descripción</th>
		<th>Fecha Creación</th>
		<th></th>
		</tr>
		</thead>
		<tbody>
		<?php
              if($cargarNoticias->num_rows() > 0){
                  foreach($cargarNoticias->result() as $row){?>
			<tr>
			<td><?php echo $row->eCodNoticia; ?></td>
			<td><?php echo $row->Asunto; ?></td>
			<td><?php echo $row->Descripcion; ?></td>
			<td><?php echo $row->FechaCreacion; ?></td>
			<td><a href="<?php echo $row->Enlace; ?>" class="btn btn-warning" style="color: white;" target="_blank">Enlace</a>
				<input type="button" class="btn btn-danger" onClick="EliminarNoticia(<?php echo $row->eCodNoticia; ?>)" value="Eliminar"></td>
			</tr>
			<?php }
              }else{?>
                  <td colspan="5"></td>
                  <?php } ?>
		
		</tbody>
	</table>

	
</div>
	
	<form action="EliminarNoticia" class="form-horizontal" method="POST" id="FormEliminarNoticia">
		<input type="hidden" id="eCodNoticia" name="eCodNoticia">
	</form>
	
	<script>
		function EliminarNoticia(eCodNoticia){
			document.getElementById("eCodNoticia").value = eCodNoticia;
			document.getElementById('FormEliminarNoticia').submit();
		}
	</script>
