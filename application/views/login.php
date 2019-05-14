<link href="<?php echo base_url() ?>assets/css/login.css" rel="stylesheet">

<style>
	.Error{
		background-color: #E74C3C;
		color: white;
		padding:5px;
		text-align: center;
		border-radius: 5px;
		margin: -5px;
	}
</style>
<div class="container" style="margin-top: 75px; margin-bottom: 300px;">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form id="login" class="form-signin" action="<?php echo base_url() ?>Login/ingresar" class="form-horizontal" method="POST">
                <?php
				    if(isset($error)){
					    echo "<div class='Error'>".$error."</div>";
				    }
				?>
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="tUsuario" name="tUsuario" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" id="tContrasena" name="tContrasena" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Recordar Contraseña
                    </label>
                </div>
                <button class="btn btn-lg btn-default btn-block btn-signin" type="submit">INICIAR SESIÓN</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                ¿Olvidaste la Contraseña?
            </a>
        </div><!-- /card-container -->
    </div>