<style>
.card {
  background: #eee;
  padding: 3em;
  line-height: 1.5em;
	margin-bottom: 10px;}

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold;
  font-size: 16px;}

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }
	
	

</style>




  <section style="padding-top: 70px; padding-bottom: 35px;">
    <div class="container">
   <div class="container container mt-4 mb-5">
        <h3 class="display-4 text-center"> Noticias </h3>
        <hr class="bg-dark mb-4 w-25">
        <div class="row">
			<?php
               if($cargarNoticia->num_rows() > 0){
                   foreach($cargarNoticia->result() as $row){
                   ?>
			<div class="col-md-8 offset-md-2">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-4">
						<img class="card-img-top" src="<?php echo base_url() ?>uploads/<?php echo $row->tPortada; ?>" alt="Card image cap">
					</div>
					<div class="details col-md-8">
						<h3 class="product-title"><?php echo $row->tNombre; ?></h3>
						<p class="product-description"><?php echo $row->tDescripcion; ?></p>
						<div class="action">
							<a class="add-to-cart btn btn-default" href="<?php echo $row->tEnlace; ?>" target="_blank" type="button">Ver Enlace</a>
						</div>
					</div>
				</div>
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