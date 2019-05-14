<style>
.border-1 {border:1px solid #e2e2e2;}
.pad-20 {padding:10px;}
.stats-box {min-height:100px;}
.stats-box:hover {background:#f2f2f2; color:#dd0000; text-decoration: none;}
.padding-card{padding: 15px;}
.margin-card{margin: 15px;}
</style>		

<div class="content-wrapper">
	<?php  
	//$OpAgosto 		= $this->db->query('SELECT * FROM BitOperadores WHERE fhFechaRegistro BETWEEN "2018-08-01 00:00:00" AND "2018-08-31 23:59:00";');
	//$OpSeptiembre 	= $this->db->query('SELECT * FROM BitOperadores WHERE fhFechaRegistro BETWEEN "2018-09-01 00:00:00" AND "2018-09-31 23:59:00";');
	//$OpOctubre 		= $this->db->query('SELECT * FROM BitOperadores WHERE fhFechaRegistro BETWEEN "2018-10-01 00:00:00" AND "2018-10-31 23:59:00";');
	//$OpNoviembre 	= $this->db->query('SELECT * FROM BitOperadores WHERE fhFechaRegistro BETWEEN "2018-11-01 00:00:00" AND "2018-11-31 23:59:00";');
	//$OpDiciembre	= $this->db->query('SELECT * FROM BitOperadores WHERE fhFechaRegistro BETWEEN "2018-12-01 00:00:00" AND "2018-12-31 23:59:00";');
	//
	//$CrAgosto 		= $this->db->query('SELECT * FROM BitCredenciales WHERE fhFechaCreacion BETWEEN "2018-08-01 00:00:00" AND "2018-08-31 23:59:00";');
	//$CrSeptiembre 	= $this->db->query('SELECT * FROM BitCredenciales WHERE fhFechaCreacion BETWEEN "2018-09-01 00:00:00" AND "2018-09-31 23:59:00";');
	//$CrOctubre 		= $this->db->query('SELECT * FROM BitCredenciales WHERE fhFechaCreacion BETWEEN "2018-10-01 00:00:00" AND "2018-10-31 23:59:00";');
	//$CrNoviembre 	= $this->db->query('SELECT * FROM BitCredenciales WHERE fhFechaCreacion BETWEEN "2018-11-01 00:00:00" AND "2018-11-31 23:59:00";');
	//$CrDiciembre	= $this->db->query('SELECT * FROM BitCredenciales WHERE fhFechaCreacion BETWEEN "2018-12-01 00:00:00" AND "2018-12-31 23:59:00";');
	?>
	<input type="hidden" id="eRegistroDia" 			name ="eRegistroDia">
	<input type="hidden" id="eRegistroSemana" 		name ="eRegistroSemana">
	<input type="hidden" id="eRegistroMes" 			name ="eRegistroMes">
	<input type="hidden" id="eCredencialesDia" 		name ="eCredencialesDia">
	<input type="hidden" id="eCredencialesMes" 		name ="eCredencialesMes">
	<input type="hidden" id="eCredencialesSemana" 	name ="eCredencialesSemana">
	<input type="hidden" id="eCredencialesDia" 		name ="eCredencialesDia">
	
	<input type="hidden" id="OpAgosto"	 	value="<?php //echo $OpAgosto->num_rows();?>">
	<input type="hidden" id="OpSeptiembre" 	value="<?php //echo $OpSeptiembre->num_rows();?>">
	<input type="hidden" id="OpOctubre" 	value="<?php //echo $OpOctubre->num_rows();?>">
	<input type="hidden" id="OpNoviembre" 	value="<?php //echo $OpNoviembre->num_rows();?>">
	<input type="hidden" id="OpDiciembre" 	value="<?php //echo $OpDiciembre->num_rows();?>">
	
	<input type="hidden" id="CrAgosto"	 	value="<?php //echo $CrAgosto->num_rows();?>">
	<input type="hidden" id="CrSeptiembre" 	value="<?php //echo $CrSeptiembre->num_rows();?>">
	<input type="hidden" id="CrOctubre" 	value="<?php //echo $CrOctubre->num_rows();?>">
	<input type="hidden" id="CrNoviembre" 	value="<?php //echo $CrNoviembre->num_rows();?>">
	<input type="hidden" id="CrDiciembre" 	value="<?php //echo $CrDiciembre->num_rows();?>">
	
<script src="<?php echo base_url() ?>assets/js/chartjs/Chart.js"></script>
	<h1 class="text-center" style="margin-top: 15px;">DASHBOARD</h1>
	<div class="row">
	<div class="col-md-12 ">
        <div class= "card padding-card">
    		<div class="row">
			    <div class="col-md-4 text-center">
			        <a href="#">
			        <div class="stats-box border-1 pad-20">
			        <h3><?php  
						//$query = $this->db->query('SELECT * FROM BitOperadores WHERE tCodEstatus = "AC" OR tCodEstatus = "NU";'); 
						//echo $query->num_rows(); ?>
					</h3>
			        <h5>Alumnos Registrados</h5>
			        </div>
			        </a>
			    </div>
			    <div class="col-md-4 text-center">
			        <a href="#">
			        <div class="stats-box border-1 pad-20">
			        <h3><?php  
						//$query = $this->db->query('SELECT * FROM BitCredenciales;'); 
						//echo $query->num_rows(); ?>
					</h3>
			        <h5>Inscripciones</h5>
			        </div>
			        </a>
			    </div>
			    <div class="col-md-4 text-center">
			        <a href="#">
			        <div class="stats-box border-1 pad-20">
			        <h3><?php  
						//$query = $this->db->query('SELECT * FROM BitNoticias WHERE tCodEstatus = "AC" OR tCodEstatus = "NU";'); 
						//echo $query->num_rows(); ?>
					</h3>
			        <h5>Noticias</h5>
			        </div>
			        </a>
			    </div>
			</div>
       	</div>
   	</div>
		</div>
	
	<div class="row" style="margin-top: 15px;">
		<div class="col-md-6 offset-md-3">
			<div class="card padding-card">
		<canvas id="myChart" width="400" height="400"></canvas>
<script>
	
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        datasets: [{
            label: 'Alumnos',
            data: [document.getElementById("OpAgosto").value,
				   document.getElementById("OpSeptiembre").value,
				   document.getElementById("OpOctubre").value,
				   document.getElementById("OpNoviembre").value, 
				   document.getElementById("OpDiciembre").value],
            backgroundColor: [
                'rgba( 255, 87, 51)',
                'rgba( 255, 87, 51)',
                'rgba( 255, 87, 51)',
                'rgba( 255, 87, 51)',
                'rgba( 255, 87, 51)'
            ],
            borderColor: [
                'rgba( 255, 87, 51)',
                'rgba( 255, 87, 51)',
                'rgba( 255, 87, 51)',
                'rgba( 255, 87, 51)',
                'rgba( 255, 87, 51)'
            ],
            borderWidth: 1
        },{
            label: 'Inscripciones',
            data: [document.getElementById("CrAgosto").value,
				   document.getElementById("CrSeptiembre").value,
				   document.getElementById("CrOctubre").value,
				   document.getElementById("CrNoviembre").value, 
				   document.getElementById("CrDiciembre").value],
            backgroundColor: [
                'rgba( 46, 64, 83 )',
                'rgba( 46, 64, 83 )',
                'rgba( 46, 64, 83 )',
                'rgba( 46, 64, 83 )',
                'rgba( 46, 64, 83 )'
            ],
            borderColor: [
                'rgba(  46, 64, 83)',
                'rgba(  46, 64, 83)',
                'rgba(  46, 64, 83)',
                'rgba(  46, 64, 83)',
                'rgba(  46, 64, 83)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
		</div>
			</div>
		
		
		<!--<div class="col-md-6">
			<div class="card padding-card">
		<canvas id="myChart2" width="400" height="400"></canvas>
<script>
var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo"],
        datasets: [{
            label: 'Operadores',
            data: [12, 19, 3, 5, 2, 3, 10],
            backgroundColor: [
                'rgba( 192, 57, 43)',
                'rgba( 192, 57, 43)',
                'rgba( 192, 57, 43)',
                'rgba( 192, 57, 43)',
                'rgba( 192, 57, 43)',
                'rgba( 192, 57, 43)',
                'rgba( 192, 57, 43)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },
				  {
            label: 'Credenciales',
            data: [10, 11, 8, 4, 3, 6, 12],
            backgroundColor: [
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)'
            ],
            borderColor: [
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)',
                'rgba(40, 180, 99)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
			</div>
		</div>-->
	</div>
	<div class="row" style="margin-top:20px;">
		<div class="col-md-12 ">
        <div class= "card padding-card">
    		<div class="row">
			    <div class="col-md-4 offset-md-1 text-center">
			        <a href="#">
			        <div class="stats-box border-1 pad-20">
			        <h3><?php  
						//$query = $this->db->query('SELECT * FROM SisUsuarios WHERE tEstatus = "AC" OR tEstatus = "NU";'); 
						//echo $query->num_rows(); ?>
					</h3>
			        <h5>Usuarios</h5>
			        </div>
			        </a>
			    </div>
			    <div class="col-md-4 offset-md-2 text-center">
			        <a href="#">
			        <div class="stats-box border-1 pad-20">
			        <h3><?php  
						//$query = $this->db->query('SELECT * FROM SisUsuarios WHERE bAdministrador = 1 AND tEstatus = "AC" OR tEstatus = "NU";'); 
						//echo $query->num_rows(); ?>
					</h3>
			        <h5>Administradores</h5>
			        </div>
			        </a>
			    </div>
			</div>
       	</div>
   	</div>
	</div>
</div>


