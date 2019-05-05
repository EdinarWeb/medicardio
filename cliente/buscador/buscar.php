
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include("head.php");?>

<meta charset="utf-8">
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
			<center><h4>BUSCADOR</h4></center>
		</div>
			<div class="panel-body cold-md-12 col-lg-10 col-xs-12 col-sm-12 col-lg-offset-1">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<div class="form-group row">
							<label for="q" class="col-md-2 control-label"></label>
							<div class="col-md-5">
								<input type="text" class="form-control" id="q" placeholder="Nombre o Cargo" onkeyup='load(1);'>
							</div>
							
							
							
							<div class="col-md-3">
								<button type="button" class="btn btn-default" onclick='load(1);'>
									<span class="glyphicon glyphicon-search" ></span> Buscar</button>
								<span id="loader"></span>
							</div>
							
						</div>
				
				
				
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			</div>
		</div>	
		
	</div>
	<hr>
		<?php include("footer.php"); ?>

	<script type="text/javascript" src="js/VentanaCentrada.js"></script>
	<script type="text/javascript" src="js/buscar.js"></script>
  </body>
</html>