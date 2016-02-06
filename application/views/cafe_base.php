<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="<?php echo base_url(); ?>"></base>
	<title>Cafe</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
     

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
    <script src="js/Director/app.js" type="text/javascript"></script>

     <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script>
      $(function() {
        $( ".datepicker" ).datepicker({
             dateFormat: "yy-mm-dd"
        });
      });
      </script>
</head>


<body class="skin-black">
<header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Café Colimense
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                   
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span>
								<?php if($this->session->userdata('nombre')!=null) {
											echo $this->session->userdata('nombre');
										} else{
											redirect('Sesion');
										} ?>
                                 <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                               <li><a href="<?php echo site_url('Sesion/cerrar_sesion');?>"><i class="fa fa-ban fa-fw pull-right"></i> Salir</a>
                               </li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>

	<div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            &nbsp;
                        </div>
                        <div class="pull-left info">
                            <p>
								<?php if($this->session->userdata('nombre')!=null) {
                                echo "Bienvenido ".$this->session->userdata('nombre')." !";
                                } else{
                                    redirect('Sesion');
                                } ?>
                            </p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('empleados');?>">
                                <i class="fa fa-dashboard"></i> <span>Empleados</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('productores');?>">
                                <i class="fa fa-dashboard"></i> <span>Productores</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('clientes');?>">
                                <i class="fa fa-dashboard"></i> <span>Clientes</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('productos');?>">
                                <i class="fa fa-dashboard"></i> <span>Productos</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('organizacion');?>">
                                <i class="fa fa-dashboard"></i> <span>Organizacion</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/beneficiohumedo');?>">
                                <i class="fa fa-dashboard"></i> <span>Beneficio Humedo</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/beneficioseco');?>">
                                <i class="fa fa-dashboard"></i> <span>Beneficio Seco</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/compra_de_cafe');?>">
                                <i class="fa fa-dashboard"></i> <span>Compra de Café</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/contratos');?>">
                                <i class="fa fa-dashboard"></i> <span>Contratos</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/entradas');?>">
                                <i class="fa fa-dashboard"></i> <span>Entradas</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/pedidos');?>">
                                <i class="fa fa-dashboard"></i> <span>Pedidos</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/salidas');?>">
                                <i class="fa fa-dashboard"></i> <span>Salidas</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/ventas');?>">
                                <i class="fa fa-dashboard"></i> <span>Ventas</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/gastos');?>">
                                <i class="fa fa-dashboard"></i> <span>Gastos</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="sidebar-menu">
                        <li>
                            <a href="<?php echo site_url('procesos/jornales');?>">
                                <i class="fa fa-dashboard"></i> <span>Jornales</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header)  -->


                <!-- Main content -->
               