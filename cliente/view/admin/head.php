<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 1){
    header('location: index.php');
  }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Medicardio - Servicio Privado de Emergencias y Atenci&oacute;n  M&eacute;dica Domiciliaria</title>
		
		<!-- metas -->
		<meta charset="utf-8">
		<meta name="keywords" content="">
		<meta name="theme-color" content="#008FD5">
		<meta name="MobileOptimized" content="width">
		<meta name="HandheldFriendly" content="true">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<link rel="shortcut icon" type="image/png" href="./img/app/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<!--/ metas -->
		

    <!-- styles -->
    <link rel="apple-touch-icon" href="./app/apple-touch-icon.png">
    <link rel="apple-touch-startup-image" href="./app/apple-touch-icon.png">
		<!--/ metas -->
		
		<!-- styles -->
		<link rel="stylesheet" type="text/css" href="css/layerslider.css">
		<link rel="stylesheet" type="text/css" href="css/fullwidth/skin.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/color-blue.css">
		<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="css/custom.css">
	<link rel=icon href='img/logo-icon.png' sizes="32x32" type="image/png">

		<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
 <script type="text/javascript">
    function Confirmacion(id,accion) {
        var answer = confirm("Deseas eliminar este registro?")
        if (answer){
          //codigo de aceptar
          //sirve para llamar otra pagina y pasarle variables como parametros..
          var accion='eliminar';
       location.href='guardar-usuario.php?id='+id+'&accion='+accion;
          }else{
        //codigo de cancelar
          }
      }
</script>
	</head>
	
	<body>
		<div class="page">

			<!-- page header -->
			<header class="page-header sticky">
				<div class="sticky-wrapp">
					<div class="sticky-container">
						<!-- logo -->
						<section id="logo" class="logo">
							<div>
								<a href="index"><img src="img/blue/logo.png" alt="Clinico"></a>
							</div>
						</section>
						<!--/ logo -->
						
					<!-- main nav -->
					<nav class="main-nav">
						
				<ul>
					<li>
						<a href="#"><i class="fas fa-user-circle"></i> <i class="fa fa-plus"></i>&nbsp;Admin:&nbsp; <?php echo ucfirst($_SESSION['nombre']);?></a>
					<ul>
						<li><a href="index">Inicio</a></li>
						<li><a href="registro">Registro De Clientes</a></li>
						<li><a href="buscar">Buscar Clientes</a></li>
						<li><a href="../../controller/cerrarSesion">Salir</a></li>
					</ul>
					</li>
					
				</ul>
			</nav>
					<!--/ main nav -->
						
						<!-- mobile nav -->
						<nav id="mobile-main-nav" class="mobile-main-nav">
						<i class="fas fa-bars"></i>
						<a href="#" class="opener">Admin: &nbsp;&nbsp;<?php echo ucfirst($_SESSION['nombre']); ?></a>
						
								
								<ul>
									<li><a href="index">Inicio</a></li>
									<li><a href="registro">Registro De Clientes</a>
									<li><a href="buscar">Buscar Clientes</a>
									<li><a href="../../controller/cerrarSesion">Salir</a></li>
								</ul>
								</li>
							</ul>
						</nav>
						<!--/ mobile nav -->
					</div>
				</div>
			</header>
			<!--/ page header -->

   
            <nav class="navtop">			
			<div><h1>BUSCAR CLIENTES &nbsp;<i class="fas fa-user-check"></i></h1></div>				
					</nav>


					<!--<section>
						<div class="container">
						<div class="row">
							<h1>BIENVENIDO/A &nbsp;A  TU PANEL DE ADMINISTRACI&Oacute;N&nbsp;&nbsp;<?php echo ucfirst($_SESSION['nombre']); ?></h1>
						</div>
						</div>
					</section>-->
