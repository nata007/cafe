<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <base href="<?php echo base_url(); ?>"></base>
    <link rel="stylesheet" type="text/css" href="css/cafe_sesion.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Café colimense. Bienvenido !</title>
</head>
<body>
<div class="login">
<?php 
	  $attributes = array('id' => 'form1');
	  echo form_open('Sesion',$attributes) ?>
<?php echo validation_errors(); ?>

<div class="sesion_basemaestra_centrado">
 
    <div class="sesion_apartado_titulo">
    <h1>Café colimense</h1>
    </div>
    <div class="sesion_apartado_contenido">
		<input type="text" placeholder="CURP" class="sesion_campo_login" autofocus id="clave" name="clave"
        required>
        <input type="password" placeholder="CONTRASEÑA" class="sesion_campo_login" id="contrasena" name="contrasena"
        required>
        <button type="submit" class="btn btn-primary btn-block btn-large">INICIAR SESIÓN</button>
       <!--	<input type="submit" value="INICIAR SESIÓN" title="INICIAR SESIÓN" class="sesion_boton_login" id="login">
       -->
    </div>
</div>

<?php echo form_close(); ?>
</div>
</body>

