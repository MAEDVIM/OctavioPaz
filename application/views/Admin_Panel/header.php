<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"> <!-- Resource style -->
	<link href="<?php echo base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url().'assets/jquery-ui/jquery-ui.css'?>">
  	
	<title>Panel de Administrador | Centro Universitario Octavio Paz</title>
</head>
<body>
	<header class="cd-main-header">

		<a href="#0" class="cd-nav-trigger"><span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li class="has-children account">
					<a href="#0">
						<?php echo $this->session->userdata("tNombre");?>
					</a>

					<ul>
						<li><a href="<?php echo base_url() ?>/Login/cerrar">Cerrar Sesión</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
				<li class="cd-label">
					<img src="<?php echo base_url() ?>assets/img/brandlogo.png" width="100px;" style="margin-top: 10px; margin-left: 30px;" alt="Logo">
				</li>
				<li class="cd-label">Administración</li>
				<li class="has-children overview">
					<a href="<?php echo base_url() ?>Admin_Panel">Dashboard</a>
				</li>
				
				<li class="has-children users">
					<a href="#0">Registros</a>

					<ul>
						<li><a href="<?php echo base_url() ?>Admin_Panel/ConsultarUsuario">Usuarios</a></li>
						<li><a href="<?php echo base_url() ?>Admin_Panel/RegistrarUsuario">Registrar Usuario</a></li>
						<li><a href="<?php echo base_url() ?>Admin_Panel/ConsultarUsuarios">Alumnos</a></li>
						<li><a href="<?php echo base_url() ?>Admin_Panel/RegistrarAlumnos">Registrar Alumnos</a></li><!--
						<li><a href="<?php echo base_url() ?>Admin_Panel/ConsultarEmpresa">Empresas</a></li>
						<li><a href="<?php echo base_url() ?>Admin_Panel/RegistrarEmpresa">Registrar Empresa</a></li>-->
					</ul>
				</li>
				<!--<li class="has-children images">
					<a href="#0">Credenciales</a>
					
					<ul>
						<li><a href="<?php echo base_url() ?>Admin_Panel/ConsultarCredenciales">Historial</a></li>
					</ul>
				</li> -->
				<li class="has-children comments">
					<a href="#0">Contacto</a>

					<ul>
						<li><a href="<?php echo base_url() ?>Admin_Panel/ConsultarMensajes">Mensajes</a></li>
						<li><a href="<?php echo base_url() ?>Admin_Panel/ConsultarMensajesLeidos">Mensajes Leídos</a></li>
					</ul>
				</li>
				<li class="has-children bookmarks">
					<a href="#0">Noticias</a>
					
					<ul>
						<li><a href="<?php echo base_url() ?>Admin_Panel/ConsultarNoticia">Todas las Noticias</a></li>
						<li><a href="<?php echo base_url() ?>Admin_Panel/CrearNoticia">Nueva Noticia</a></li>
					</ul>
				</li>
			</ul>
<!--
			<ul>
				<li class="cd-label">Página Principal</li>
				 
				<li class="has-children images">
					<a href="#0">Galerías</a>
					
					<ul>
						<li><a href="<?php echo base_url() ?>Admin_Panel">Todas las Galerías</a></li>
						<li><a href="<?php echo base_url() ?>Admin_Panel">Nueva Galería</a></li>
					</ul>
				</li> 

				
			</ul>-->
		</nav>