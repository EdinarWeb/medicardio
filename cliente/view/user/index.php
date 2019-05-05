<?php
  session_start();

  // Validamos que exista una session y ademas que el cargo que exista sea igual a 1 (Administrador)
  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: index.php');
  }

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Medicardio - Servicio Privado de Emergencias y Atenci&oacute;n  M&eacute;dica Domiciliaria</title>
		
		<!-- metas -->
		<meta charset="utf-8">
		<meta name="author" content="http://edinarweb.com.ar">
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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

		
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
						<a href="#"><i class="fas fa-user-circle"></i> <i class="fa fa-plus"></i>&nbsp;Usuario:&nbsp; <?php echo ucfirst($_SESSION['nombre']);?></a>
					<ul>
						<li><a href="profile">Carnet Medicardio</a></li>
						<li><a href="target">Cartilla Medica</a></li>
						<li><a href="../../controller/cerrarSesion">Salir</a></li>
					</ul>
					</li>
					
				</ul>
			</nav>
					<!--/ main nav -->
						
						<!-- mobile nav -->
						<nav id="mobile-main-nav" class="mobile-main-nav">
						<i class="fa fa-bars"></i><a href="#" class="opener">Usuario: &nbsp;&nbsp;<?php echo ucfirst($_SESSION['nombre']); ?></a>
						
								
								<ul>
									<li><a href="profile">Carnet Medicardio</a>
									<li><a href="target">Cartilla Medica</a>
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
			<div><h1><strong>Bienvenido/a&nbsp; a &nbsp;<span style="color:red;"><strong>MEDICARDIO</strong></span> &nbsp;	<i class="fas fa-ambulance"></i></strong></h1></div>				
       	 </nav>
		<div class="container">
			<div class="row">
				<section>
					<h1>
						<strong>Bienvenido a <span style="color:red;">MEDICARDIO</span></strong>
					</h1>
				</section>
			</div>
		</div>

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
		<!--/ scripts -->
		

		
	</body>
</html>
