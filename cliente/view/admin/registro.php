<?php

require 'cliente.php';

?>
<!DOCTYPE html>
<html >
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
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/color-blue.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/color-blue.css">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="css/style.css"></script>

	
	<!--/ styles -->
	
	<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
	
	<body>
		<div class="page">

	<!-- page header -->
	<header class="page-header main-page sticky">
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
				<li><a href="buscar">Buscar Clientes</a></li>
				<li><a href="../../controller/cerrarSesion">Salir</a></li>

			</ul>
			</li>
			
		</ul>
	</nav>
					<!--/ main nav -->
			
			<!-- mobile nav -->
			<nav id="mobile-main-nav" class="mobile-main-nav">
			<i class="fas fa-bars"></i><a href="#" class="opener">Admin: &nbsp;&nbsp;<?php echo ucfirst($_SESSION['nombre']); ?></a>
			
					
					<ul>
						<li><a href="index">Inicio</a>
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


				<!-- Modal -->
				<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">ENCRIPTACI&Oacute;N DE CLAVE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<div class="indented">
							<div class="conatiner">
							<input type="text" id="input" size="40" placeholder=" Introduce la Clave aqu&iacute;"><br>

							<td style="text-align:center">
							<input type="text" id="hash" size="40" placeholder="Resultado">
							</div>
						</div>
					</div>
					<div class="modal-footer">

					<button type="button" class="btn btn-warning" onclick="document.getElementById('hash').value = hex_md5(document.getElementById('input').value)">Encriptar MD5</button>

					<button type="button" class="btn btn-success" onclick="document.getElementById('hash').value = hex_sha1(document.getElementById('input').value)" disabled>Encriptar SHA1</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
					</div>
					</div>
				</div>
				</div><!--End Modal-->


         <nav class="navtop">			
			<div><h1>TABLA DE CLIENTES &nbsp;<i class="far fa-calendar-check"></i></h1></div>				
			</nav>
			
			

<!-- Formulario Login -->
<div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
						<form action="" method="post" enctype="multipart/form-data">


							
								<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center" id="exampleModalLabel"> El ID actual en la base de datos es el <span><?php echo $totalClientes;?></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="row">
				<p><strong>Cargo 1</strong> = administrador</p>
				<p><strong>Cargo 2</strong> = paciente</p>
				</div>
	<div class="modal-body">
		<div class="form-row">

		<div class="form-group col-md-12">
		<input type="text" class="form-control <?php echo (isset($error['id']))?"is-invalid":"";?>" name="txtID" value="<?php echo $txtID;?>" placeholder="ID de cliente" id="txtId" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['id']))?$error['id']:"";?>
		</div>
		</div>

		<div class="form-group col-md-6">
		<input type="text" class="form-control <?php echo (isset($error['nombre']))?"is-invalid":"";?>" name="txtNombre" value="<?php echo $txtNombre;?>" placeholder="Nombre" id="txtNombre" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['nombre']))?$error['nombre']:"";?>
		</div>
		</div>

		<div class="form-group col-md-6">
		<input type="text" class="form-control <?php echo (isset($error['email']))?"is-invalid":"";?>" name="txtEmail" value="<?php echo $txtEmail;?>" placeholder="Email" id="txtEmail" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['email']))?$error['email']:"";?>
		</div>
		</div>

		<div class="form-group col-md-6">
		<input type="text" class="form-control <?php echo (isset($error['cargo']))?"is-invalid":"";?>" name="txtCargo" value="<?php echo $txtCargo;?>" placeholder="Cargo" id="txtCargo" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['cargo']))?$error['cargo']:"";?>
		</div>
		</div>
		
		<div class="form-group col-md-6">
		<input type="password" class="form-control <?php echo (isset($error['clave']))?"is-invalid":"";?>" name="txtClave" value="<?php echo $txtClave;?>" placeholder="Clave" id="txtClave" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['clave']))?$error['clave']:"";?>
		</div>
		</div>

		<div class="form-group col-md-6">
		<input type="text" class="form-control <?php echo (isset($error['socio']))?"is-invalid":"";?>" name="txtSocio" value="<?php echo $txtSocio;?>" placeholder="Socio" id="txtSocio" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['socio']))?$error['socio']:"";?>
		</div>
		</div>
		<div class="form-group col-md-6">
		<input type="text" class="form-control <?php echo (isset($error['dni']))?"is-invalid":"";?>" name="txtDni" value="<?php echo $txtDni;?>" placeholder="DNI" id="txtDni">
		<div class="invalid-feedback">
			<?php echo (isset($error['dni']))?$error['dni']:"";?>
		</div>
		</div>
		
		<div class="form-group col-md-12">
		<input type="text" class="form-control <?php echo (isset($error['afiliado']))?"is-invalid":"";?>" name="txtAfiliado" value="<?php echo $txtAfiliado;?>" placeholder="Afiliado" id="txtAfiliado" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['afiliado']))?$error['afiliado']:"";?>
		</div>
		</div>

		<div class="form-group col-md-6">
		<input type="text" class="form-control <?php echo (isset($error['plan1']))?"is-invalid":"";?>" name="txtPlan1" value="<?php echo $txtPlan1;?>" placeholder="Plan Medicardio o 200" id="txtPlan1" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['plan1']))?$error['plan1']:"";?>
		</div>
		</div>

		<div class="form-group col-md-6">
		<input type="text" class="form-control <?php echo (isset($error['plan2']))?"is-invalid":"";?>" name="txtPlan2" value="<?php echo $txtPlan2;?>" placeholder="Plan con o sin coseguro" id="txtPlan2" required>
		<div class="invalid-feedback">
			<?php echo (isset($error['plan2']))?$error['plan2']:"";?>
		</div>
		</div>


		<?php if ($txtFoto!=""){?>
			<br>

			<img src="imagenes/<?php echo $txtFoto;?>" class="img-thumnail rounded mx-auto d-block" width="100px" alt="">

		
			<?php	}?>
			
		<input type="file" class="img-thumnail" accept="image/*" name="txtFoto" width="100px" value="<?php echo $txtFoto;?>" placeholder="Foto" id="txtFoto">
		<br>

		<div class="row">
		<p style="color:red"> <strong>Tama&ntilde;o foto 100px X 100px</strong></p>
		</div>
		<p> <strong>Formatos:</strong>&nbsp;
		Jpg /
		Png</p>

		</div>
	</div>
	

<div class="modal-footer">
<button value="btnAgregar" <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion">Agregar</button>

<button value="btnModificar" <?php echo $accionModificar;?> class="btn btn-warning" type="submit" name="accion">Modificar</button>

<button value="btnEliminar" <?php echo $accionEliminar;?> onclick="return confirmar('¿Realmente quieres eliminar a este cliente?');" class="btn btn-danger" type="submit" name="accion">Eliminar</button>

<button value="btnCancelar" <?php echo $accionCancelar;?> class="btn btn-primary" type="submit" name="accion">Cancelar</button>

</div>
</div>
</div>
</div>
</form>
</div>

<div class="table-responsive-sm">

<!-- Button trigger modal -->
	
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Agregar registro + 
	</button>&nbsp;&nbsp;&nbsp;
	
	<button type="submit"  class="btn btn-primary" data-toggle="modal" data-target="#miModal">Encryptar Clave</button><br><br>

	<table class="table table-hover table-bordered salida">
		
		<thead class="thead-dark">
			<tr>
				<th>Foto</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Cargo</th>
			<!--<th>Clave</th>-->
				<th>Socio</th>
				<th>Afiliado</th>
				<th>DNI</th>
				<th>Planes</th>
				<th>Coseguros</th>
				<th>Acciones</th>
			</tr>
</thead>

<?php foreach ($listaUsuarios as $usuario){?>

<tr>

<td><img class="img-thumbnail" width="100px" src="imagenes/<?php echo $usuario['foto'];?>"></td>
<td><?php echo $usuario['nombre'];?></td>
<td><?php echo $usuario['email'];?></td>
<td><?php echo $usuario['cargo'];?></td>
<!--<td><?php echo $usuario['clave'];?></td>-->
<td><?php echo $usuario['socio'];?></td>
<td><?php echo $usuario['afiliado'];?></td>
<td><?php echo $usuario['dni'];?></td>
<td><?php echo $usuario['plan1'];?></td>
<td><?php echo $usuario['plan2'];?></td>

<td>

<form action="" method="post">

<input type="hidden" name="txtID" value="<?php echo $usuario['id'];?>">

<input type="submit" value="Seleccionar" class="btn btn-info form-control" name="accion">
<button value="btnEliminar" onclick="return confirmar('¿Realmente quieres eliminar a este cliente?');" type="submit" class="btn btn-danger form-control" name="accion">Eliminar</button>

</form>
</td>
</tr>


<?php } ?>
</table>

</div><!--End div salida buscador-->
		<!--Paginacion de la tabla clientes-->
		<nav aria-label="Page navigation example">

			
				<ul class="pagination">

				<li class="page-item
				<?php echo $_GET['pagina']<=1 ? 'disabled': '';?>">
					<a class="page-link" href="registro?pagina=<?php echo $_GET['pagina']-1;?>">
					Anterior
					</a>
					</li>

				<?php for($i=0; $i < $paginas;$i++):?>

				<li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active' : '';?>">
					<a class="page-link" href="registro?pagina=<?php echo $i+1;?>">
						<?php echo $i+1;
		?>
					</a>
				</li>

				<?php endfor ?>

				<li class="page-item
				<?php echo $_GET['pagina']>=$paginas? 'disabled': '';?>">
				<a class="page-link" href="registro?pagina=<?php echo $_GET['pagina']+1;?>">Siguiente</a>
				</li>
				</ul>
		</nav>
</div>
</div>	
</div>
	<?php if($mostrarModal){?>
		<script>
				$('#exampleModal').modal('show');
		</script>
	<?php }?>

		<script>
				$('#miModal').on('show.bs.modal', function (e) {
					var button = e.relatedTarget;
					if($(button).hasClass('no-modal')) {
						e.stopPropagation();
					}  
					});
		</script>

	<script>
		function confirmar(Mensaje) {
			return (confirm(Mensaje))?true:false;
		}
	</script>

			<!-- page footer -->
			<footer class="page-footer">
				<a href="#" id="top-link" class="top-link"><i class="fa fa-angle-double-up"></i></a>
				
				<div class="grid-row">
					<div class="grid-col grid-col-3">
						<!-- last news -->
						<section class="widget-alt last-news">
							<div class="widget-icon"></div>
							<div class="widget-title">Medicardio</div>
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sollicitudin justo non odio molestie, sed venenatis elit, consectetur adipiscing.</li>
								<li>Donec quis condimentum leo, et congue dolor. Integer auctor facilisis odio. Duis vitae nibh tristique, consectetur lacus a, facilisis rutrum enim.</li>
								<li>Cras fermentum interdum dapibus. Maecenas imperdiet, consectetur adipiscing magna nec odio cursus, vitae consequat ante.</li>
							</ul>
						</section>
						<!--/ last news -->
					</div>
					
					<div class="grid-col grid-col-3">
						<!-- location -->
						<section class="widget-alt location">
							<div class="widget-icon"></div>
							<div class="widget-title">Ubicaci&oacute;n</div>
							<address>Address will be appear here, some details here City Name, Country.</address>
							<ul>
								<li><i class="fa fa-phone"></i>(907) 555-55555</li>
								<li><i class="fa fa-at">@</i>company@youremail.com</li>
								<li><i class="fa fa-skype"></i>Medical Skype Name</li>
							</ul>
							<nav>
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
							</nav>
						</section>
						<!--/ location -->	
					</div>
					
					<div class="grid-col grid-col-3">
						<!-- last news -->
						<section class="widget-alt recent-posts">
							<div class="widget-icon"></div>
							<div class="widget-title">Noticias</div>
							<ul>
								<li>
									<a href="#"><img src="pic/post/1.png" width="80" height="80" alt=""></a>
									<p><a href="#">New study links lutein with eye health benefits, consectetur adipiscing</a><br>5 months ago</p>
								</li>
								<li>
									<a href="#"><img src="pic/post/2.png" width="80" height="80" alt=""></a>
									<p><a href="#">Pets may reduce risk of heart disease, et congue dolor heart</a><br>8 months ago</p>
								</li>
								<li>
									<a href="#"><img src="pic/post/3.png" width="80" height="80" alt=""></a>
									<p><a href="#">Discoveries offer a new explanation for diabetes, consectetur</a><br>10 months ago</p>
								</li>
							</ul>
						</section>
						<!--/ last news -->						
					</div>
					
					<div class="grid-col grid-col-3">
						<!-- work time -->
						<section class="widget-alt work-time">
							<div class="widget-icon"></div>
							<dl>
								<dt>Lu</dt>
								<dd>08:00 am - 12:00 pm</dd>
								<dt>Ma</dt>
								<dd>01:00 am - 05:00 pm</dd>
								<dt>Mi</dt>
								<dd>Free day</dd>
								<dt>Ju</dt>
								<dd>08:00 am - 12:00 pm</dd>
								<dt>Vi</dt>
								<dd>08:00 am - 12:00 pm</dd>
								<dt>Sa</dt>
								<dd>08:00 am - 12:00 pm</dd>
								<dt>Do</dt>
								<dd>Free day</dd>
							</dl>
							<a href="#contacto" class="button">Contacto</a>
						</section>
						<!--/ work time -->							
					</div>
				</div>
			</footer>
			<!--/ page footer -->
			
			<!-- copyrights -->
			<div class="copyrights"><div class="footer_copyright">
				<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <span ><a href="http://medicardio.com.ar/index.html" style="color:red" target="_blank">Medicardio</a></span> | Dise&ntilde;o & Programaci&oacute;n por<a href="https://edinarweb.com.ar" target="_blank"  class="text_footer_edcode_2"> EdinarWeb&#174;</a>
	
						<a href="#"><img src="images/qr.jpg"  class="copy-left img-data-fiscal" alt=""/></a>
	
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>	
			</div>
		<!--/ copyrights -->

		</div>
		
		<!-- scripts -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.migrate.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
		<script type="text/javascript" src="js/jquery.flot.js"></script>
		<script type="text/javascript" src="js/jquery.flot.pie.js"></script>
		<script type="text/javascript" src="js/jquery.flot.categories.js"></script>
		<script type="text/javascript" src="js/greensock.js"></script>
		<script type="text/javascript" src="js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>

	<!-- Superscrollorama -->		
		<script type="text/javascript" src="js/jquery.superscrollorama.js"></script>
		<script type="text/javascript" src="js/TweenMax.min.js"></script>
		<script type="text/javascript" src="js/TimelineMax.min.js"></script>
	<!--/ Superscrollorama -->
	
		<script type="text/javascript" src="js/jquery.ui.core.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
		<script type="text/javascript" src="js/jquery.ui.accordion.min.js"></script>
		<script type="text/javascript" src="js/jquery.tweet.js"></script>
	<!-- EASYPIECHART -->
		<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
	<!--/ EASYPIECHART -->
		<script type="text/javascript" src="js/jquery.autocomplete.min.js"></script>
		<script type="text/javascript" src="js/scripts.js"></script>
		<script src="js/md5-min.js" type="text/javascript"></script>
		<script src="js/sha1-min.js" type="text/javascript"></script>

		<!--/ scripts -->
		

		
	</body>
</html>
