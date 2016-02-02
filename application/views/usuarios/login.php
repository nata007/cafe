<!DOCTYPE html>
<html>
	<head>
		<meta content="utf8" />
		<base href="<?php echo base_url(); ?>"></base>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<title>Café</title>

	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
		    <form method="post"  action="<?php echo site_url('usuarios/login'); ?>" >
		    	<input type="text" name="nombre" placeholder="nombre de usuario" required="required" />
		        <input type="password" name="password" placeholder="Password" required="required" />
		        <button type="submit" class="btn btn-primary btn-block btn-large">Entrar</button>
		    </form>
		</div>

	</body>
</html>