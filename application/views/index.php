<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">    
    <header id="Inicio">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-color: black;">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('<?php echo base_url() ?>assets/img/Slider.png')">
          </div>
          <div class="carousel-item" style="background-image: url('<?php echo base_url() ?>assets/img/slider1.jpg')">
            <div class="carousel-caption">
              <h1></h1>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('<?php echo base_url() ?>assets/img/mountain.jpg')">
            <div class="carousel-caption">
              <h1></h1>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

  <section style="padding-top: 35px; padding-bottom: 35px;" id="Noticias">
    <div class="container">
   <div class="container container mt-4 mb-5">
        <h3 class="display-4 text-center"> Noticias </h3>
        <hr class="bg-dark mb-4 w-25">
        <div class="row">
			<?php
               if($cargarNoticia->num_rows() > 0){
                   foreach($cargarNoticia->result() as $row){
                   ?>
            <div class="col-md-4" style="margin-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() ?>uploads/<?php echo $row->tPortada; ?>" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title"><?php echo $row->tNombre; ?></h4>
                        <p class="card-text"><?php echo $row->tDescripcion; ?></p>
                        <a href="<?php echo $row->tEnlace; ?>" target="_blank" class="btn btn-primary rounded-0 mb-2">Ver Más</a>
                    </div>
                </div>
            </div>
			<?php
                   }
               }else{?>
                   <h3>No hay Noticias Disponibles</h3>
                   <?php } ?>
        </div>
    </div>  
    </div>
  </section>

<section id="Nosotros">
<div class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <h3 class="display-4">¿Quiénes Somos?</h3>
                <hr class="bg-dark w-25 ml-0">
                <p class="lead">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <ul class="list-unstyled pl-4">
                    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
                    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
                    <li><i class="fa fa-check"></i> Lorem Ipsum is simply dummy text</li>
                </ul>
                <a href="#" class="btn btn-outline-primary rounded-0"> Read More</a>
            </div>
            <div class="col-md-4 mt-5">
                <img class="card-img-top" src="<?php echo base_url() ?>assets/img/cu.png" alt="Card image cap">
            </div>
        </div>
    </div>
</section>
	<section id="Requerimientos">
		<div class="container">
			<h3 class="display-4 text-center"> Requisitos de Inscripción </h3>
        <hr class="bg-dark mb-4 w-25">
			<div class="row">
			<div class="col-md-6">
				<h3 class="text-center">NUEVO INGRESO</h3>
				<div class="row">
					<div class="col-md-12">
					<h5>Identificación Oficial (Original y 1 Copia)</h5>
					<p>Credencial para votar (I.N.E.), pasaporte vigente, carta consular, cédula profesional o cartilla del servicio militar.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<h5> Acta de Nacimiento (Original y 1 Copia)</h5>
					<p>Se entiende como original a la copia certificada emitida por Oficial del Registro Civil.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<h5>Comprobante de Domicilio (Original y 1 Copia)</h5>
					<p><strong>No mayor a 3 meses de antigüedad;</strong> puede ser recibo de teléfono, luz, agua, predial,  que tenga en cualquiera de los casos, la dirección completa del usuario.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<h5>C.U.R.P. (Original y 1 Copia)</h5>
					<p>Clave Única de Registro de Población.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<h3 class="text-center">RE-INGRESO</h3>
				<div class="row">
					<div class="col-md-12">
					<h5>Identificación Oficial (Original y 1 Copia)</h5>
					<p>Credencial para votar (I.N.E.), pasaporte vigente, carta consular, cédula profesional o cartilla del servicio militar.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<h5> Acta de Nacimiento (Original y 1 Copia)</h5>
					<p>Se entiende como original a la copia certificada emitida por Oficial del Registro Civil.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<h5>Comprobante de Domicilio (Original y 1 Copia)</h5>
					<p><strong>No mayor a 3 meses de antigüedad;</strong> puede ser recibo de teléfono, luz, agua, predial,  que tenga en cualquiera de los casos, la dirección completa del usuario.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
					<h5>C.U.R.P. (Original y 1 Copia)</h5>
					<p>Clave Única de Registro de Población.</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
  
  <section style="padding-top: 35px; padding-bottom: 35px;" id="Contacto">
    <div class="container">
		<h3 class="display-4">Contáctanos</h3>
        <hr class="bg-dark w-25 ml-0">
      <div class="row">
      <div class="col-md-6" style="margin-bottom: 10px;">
        <form action="<?php echo base_url() ?>Welcome/guardarContacto" method="POST">
        <div class="controls">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input id="tNombreContacto" type="text" name="tNombreContacto" class="form-control" placeholder="Nombre Completo" required="required" data-error="Firstname is required.">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input id="tCorreoContacto" type="email" name="tCorreoContacto" class="form-control" placeholder="Correo" required="required">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input id="tTelefonoContacto" type="text" name="tTelefonoContacto" class="form-control" placeholder="Teléfono" required="required">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea id="tMensajeContacto" name="tMensajeContacto" class="form-control" placeholder="Mensaje" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-default" value="ENVIAR" style="width: 100%;">
                </div>
            </div>
        </div>
        </form>
      </div>
      <div class="col-md-6" style="margin-bottom: 10px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15067.937907108471!2d-104.57377177349878!3d19.239508291907352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424c125cdcd6d7d%3A0x5b29401db4f4cf1!2sCihuatl%C3%A1n%2C+Jal.!5e0!3m2!1ses!2smx!4v1553836858850!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      </div>
    </div>
  </section>
  </div>