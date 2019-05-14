		<div class="content-wrapper">
			<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3 card" style="margin-top: 15px; padding-bottom: 15px; background-color: #f2f4f4; ">
					<h3 class="text-center" style="margin-top: 15px;">NUEVA NOTICIA</h3>
					<form action="<?php echo base_url() ?>Admin_Panel/guardarNoticia" class="form-horizontal" method="POST" enctype="multipart/form-data">
					
					<div class="form-group">
					   	<input type="text" class="form-control" id="tNombre" name="tNombre" placeholder="Nombre de la Noticia">
					</div>
					<div class="form-group">
				    <textarea class="form-control" id="tDescripcion" name="tDescripcion" placeholder="Descripción de la Noticia" rows="3"></textarea>
				  </div>
				  <div class="form-group">
				  	<label>Imágen de Portada</label>
				    <input type="file" class="form-control-file" id="userfile" name="userfile" aria-describedby="fileHelp" maxlength="300" style="resize: none;">
				  </div>
				  <div class="form-group">
					  <input type="text" class="form-control" id="tEnlace" name="tEnlace" placeholder="Enlace de la Noticia">
				</div>
				<button type="submit" id="butonNoticia" name="butonNoticia" class="btn btn-success btn-block btn-lg">Guardar</button>
				</form>
				</div>
				</div>
			</div>
		</div>
