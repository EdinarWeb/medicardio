<?php

  /*
    En ocasiones el usuario puede volver al login
    aun si ya existe una sesion iniciada, lo correcto
    es no mostrar otra ves el login sino redireccionarlo
    a su pagina principal mientras exista una sesion entonces
    creamos un archivo que controle el redireccionamiento
  */

  session_start();

  // isset verifica si existe una variable o eso creo xd
  if(isset($_SESSION['id'])){
    header('location: controller/redirec.php');
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medicardio - Servicio Privado de Emergencias y Atenci&oacute;n  M&eacute;dica Domiciliaria</title>
		
		<!-- metas -->
		<meta charset="utf-8">
		<meta name="author" content="http://themeforest.net/user/CreativeWS/portfolio">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
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

    <!-- Importamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome: para los iconos -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (mÃ¡s bonitas que el alert) -->
    <link rel="stylesheet" href="css/sweetalert.css">
    <!-- Estilos personalizados: archivo personalizado 100% real no feik -->
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>

    <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->
    <div class="page">

<!-- page header -->
<header class="page-header main-page sticky">
  <div class="sticky-wrapp">
    <div class="sticky-container">
      <!-- logo -->
      <section id="logo" class="logo">
        <div>
          <a href="/medicardio/index.html"><img src="img/blue/logo.png" alt="Clinico"></a>
        </div>
      </section>
      <!--/ logo -->
      
    <!-- main nav -->
<nav class="main-nav">
  <ul>
     <li><a href="/medicardio/index.html" class="active"><i class="fa fa-plus"></i>Inicio</a>
    <li><a href="/medicardio/services.html"><i class="fa fa-plus"></i>Servicios</a></li>
    <li><a href="/medicardio/contacts.html"><i class="fa fa-plus"></i>Contacto</a></li>
  </ul>
</nav>
    <!--/ main nav -->
      
      <!-- mobile nav -->
      <nav id="mobile-main-nav" class="mobile-main-nav">
        <i class="fa fa-bars"></i><a href="#" class="opener">Navigation</a>
        <ul>
          <li><i></i><a href="./medicardio/index.html" class="active">Inicio</a>
          <li><a href="./medicardio/services.html">Servicios</a></li>
          <li><a href="./medicardio/contacts.html">Contacto</a></li>
        </ul>
      </nav>
      <!--/ mobile nav -->
    </div>
  </div>
</header>
<!--/ page header -->

  <!-- page title -->
  <section class="page-title">
    <div class="grid-row clearfix">
      <h1>Clientes</h1>
      
      <nav class="bread-crumbs">
        <a href="index.html">Inicio</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
        <a href="#">Clientes</a>
      </nav>
    </div>
  </section>
<!--/ page title -->

 <!--
      Las clases que utilizo en los divs son propias de Bootstrap
      si no tienes conocimiento de este framework puedes consultar la documentacion en
      https://v4-alpha.getbootstrap.com/getting-started/introduction/
    -->


    <!-- Formulario Login -->
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
          <!-- Margen superior (css personalizado )-->
          <div class="spacing-1"></div>
          <form id="formulario_registro">
            <!-- Estructura del formulario -->
            <fieldset>

              <legend class="center">Registro</legend>

              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Nombre</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para usuario -->
              <label class="sr-only" for="user">Email</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                <input type="text" class="form-control" name="email" placeholder="Ingresa tu email">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave" placeholder="Ingresa tu clave">
              </div>

              <!-- Div espaciador -->
              <div class="spacing-2"></div>

              <!-- Caja de texto para la clave-->
              <label class="sr-only" for="clave">Verificar contraseña</label>
              <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                <input type="password" autocomplete="off" class="form-control" name="clave2" placeholder="Verificar contraseña">
              </div>

              <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
              <div class="row" id="load" hidden="hidden">
                <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                  <img src="img/load.gif" width="100%" alt="">
                </div>
                <div class="col-xs-12 center text-accent">
                  <span>Validando información...</span>
                </div>
              </div>
              <!-- Fin load -->

              <!-- boton #login para activar la funcion click y enviar el los datos mediante ajax -->
              <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                  <div class="spacing-2"></div>
                  <button type="button" class="btn btn-primary btn-block" name="button" id="registro">Registrate</button>
                </div>
              </div>

            </fieldset>
          </form>
        </div>
      </div>
    </div>

    <!-- / Final Formulario login -->

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
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-instagram"></a>
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

    <!-- Jquery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="js/operaciones.js"></script>
  </body>
</html>
