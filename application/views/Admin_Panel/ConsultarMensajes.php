<div class="content-wrapper">
	<h1 class="text-center" style="margin-top: 15px;">Mensajes de Contacto</h1>
	<div class="row" style="margin-bottom: 10px;">
	</div>
	<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark">
		<tr>
		<th nowrap="nowrap">ID</th>
		<th nowrap="nowrap">Nombre</th>
		<th nowrap="nowrap">Correo</th>
		<th nowrap="nowrap">Teléfono</th>
		<th nowrap="nowrap">Mensaje</th>
		<th nowrap="nowrap">Fecha</th>
		<th></th>
		</tr>
		</thead>
		<tbody>
		<?php
			
              if($cargarContacto->num_rows() > 0){
                  foreach($cargarContacto->result() as $row){?>
			<tr>
			<td nowrap="nowrap"><?php echo sprintf("%04d", $row->eCodContacto); ?></td>
			<td nowrap="nowrap"><?php echo $row->tNombre; ?></td>
			<td nowrap="nowrap"><?php echo $row->tCorreo; ?></td>
			<td nowrap="nowrap"><?php echo $row->tTelefono; ?></td>
			<td><?php echo $row->tMensaje; ?></td>
			<td nowrap="nowrap"><?php echo $row->fhFecha; ?></td>
			<td nowrap="nowrap">
			<input type="button" class="btn btn-info" onClick="MarcarLeido(<?php echo $row->eCodContacto; ?>)" value="Marcar Leído">
			</td>
			</tr>
			<?php }
              }else{?>
                  <td colspan="8"></td>
                  <?php } ?>
		
		</tbody>
	</table>
<form action="MarcarMensajeLeido" class="form-horizontal" method="POST" id="FormMarcarLeido">
	<input type="hidden" id="eCodMensaje" name="eCodMensaje">
</form>
	
	<script>
		function MarcarLeido(eCodMensaje){
			document.getElementById("eCodMensaje").value = eCodMensaje;
			document.getElementById('FormMarcarLeido').submit();
		}
	</script>


</div>
