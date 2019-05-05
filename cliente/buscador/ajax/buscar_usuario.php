<?php
	require_once ("../config/db.php");
	require_once ("../config/conexion.php");
?>

<?php
			
$action='ajax';
	if($action == 'ajax'){
         $q = mysqli_real_escape_string($con,(strip_tags($_REQUEST['q'], ENT_QUOTES)));
		  $sTable = "usuarios";
		 $sWhere = "";
		 $sWhere.="WHERE id<=1000";
		if ( $_GET['q'] != "" )
		{
		$sWhere.= " and nombre like '%$q%' or cargo like '%$q%'";
			
		}
		
		$sWhere.=" order by nombre asc";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './buscar.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			echo mysqli_error($con);
			?>
			<div class="table-responsive ">
			  <table class="table table-hover" style="border-color: #337ab7;">
				<tr style="color: #fff; background-color: #337ab7; border-color: #337ab7;">
					<!--<th>Foto</th>-->
						<th>ID</th>
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
				<?php
				while ($row=mysqli_fetch_array($query)){
						$id=$row['id'];
						$nombre=$row['nombre'];
						$email=$row['email'];
						$cargo=$row['cargo'];
						$socio=$row['socio'];
						$afiliado=$row['afiliado'];
						$dni=$row['dni'];
						$plan1=$row['plan1'];
						$plan2=$row['plan2'];
		
					?>
					<tr>
						<td><?php echo utf8_encode($id); ?></td>
						<td><?php echo utf8_encode($nombre);?></td>
						<td><?php echo utf8_encode($email);?></td>
						<td><?php echo utf8_encode($cargo); ?></td>	
						<td><?php echo utf8_encode($socio); ?></td>	
						<td><?php echo utf8_encode($afiliado); ?></td>	
						<td><?php echo utf8_encode($dni); ?></td>	
						<td><?php echo utf8_encode($plan1); ?></td>	
						<td><?php echo utf8_encode($plan2); ?></td>	
						<td><?php echo "
         
        <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"Confirmacion($id)\"><span class=\"glyphicon glyphicon-remove\"></span>Eliminar</button>
      </div>";?></td>					
					</tr>
					<?php
				}
				?>
				<tr>
					<td colspan=7><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>