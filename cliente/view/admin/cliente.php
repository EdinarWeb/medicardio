<?php

session_start();


	$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
	$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
	$txtEmail=(isset($_POST['txtEmail']))?$_POST['txtEmail']:"";
	$txtCargo=(isset($_POST['txtCargo']))?$_POST['txtCargo']:"";
	$txtSocio=(isset($_POST['txtSocio']))?$_POST['txtSocio']:"";
	$txtClave=(isset($_POST['txtClave']))?$_POST['txtClave']:"";
	$txtAfiliado=(isset($_POST['txtAfiliado']))?$_POST['txtAfiliado']:"";
	$txtDni=(isset($_POST['txtDni']))?$_POST['txtDni']:"";
	$txtPlan1=(isset($_POST['txtPlan1']))?$_POST['txtPlan1']:"";
	$txtPlan2=(isset($_POST['txtPlan2']))?$_POST['txtPlan2']:"";
	$txtFoto=(isset($_FILES['txtFoto']["name"]))?$_FILES['txtFoto']["name"]:"";

	$accion=(isset($_POST['accion']))?$_POST['accion']:"";

	$error=array();

	$accionAgregar="";
	$accionModificar=$accionEliminar=$accionCancelar="disabled";
	$mostrarModal=false;

	include ("Conexion/conexion.php");

switch($accion){
    //Funcion para agregar usuarios
    case 'btnAgregar':
			
		if ($txtID=="") {
			$error['id']="Escribe un id valido";
		}
		if ($txtNombre=="") {
			$error['nombre']="Escribe un nombre valido";
		}		
		if ($txtEmail=="") {
			$error['email']="Escribe un correo valido";
		}
		if ($txtCargo=="") {
			$error['cargo']="Escribe un cargo valido";
		}
		if ($txtSocio=="") {
			$error['socio']="Escribe un numero de socio valido";
		}
		if ($txtClave=="") {
			$error['clave']="Escribe minima de 6 digitos";
		}
		if ($txtAfiliado=="") {
			$error['afiliado']="Escribe un nombre de afiliado valido";
		}
		if ($txtDni=="") {
			$error['dni']="Escribe un dni valido";
		}
		if ($txtPlan1=="") {
			$error['plan1']="Escribe un plan valido";
		}
		if ($txtPlan2=="") {
			$error['plan2']="Escribe un coseguro valido";
		}
		if (count($error)>0) {
			$mostrarModal=true;
			break;
		}

		$sentencia=$pdo->prepare("INSERT INTO usuarios(id,nombre,email,cargo,clave,socio,afiliado,dni,plan1,plan2,foto) VALUES (:id,:nombre,:email,:cargo,:clave,:socio,:afiliado,:dni,:plan1,:plan2,:foto) ");

		$sentencia->bindParam(':id',$txtID);
		$sentencia->bindParam(':nombre',$txtNombre);
		$sentencia->bindParam(':email',$txtEmail);
		$sentencia->bindParam(':cargo',$txtCargo);
		$sentencia->bindParam(':clave',$txtClave);
		$sentencia->bindParam(':socio',$txtSocio);
		$sentencia->bindParam(':afiliado',$txtAfiliado);
		$sentencia->bindParam(':dni',$txtDni);
		$sentencia->bindParam(':plan1',$txtPlan1);
		$sentencia->bindParam(':plan2',$txtPlan2);

		//Funcion para optener fecha de subida de fotografia
		$Fecha= new DateTime();
		$nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.jpg";

		$tmpFoto=$_FILES["txtFoto"]["tmp_name"];

		if ($tmpFoto!="") {
			move_uploaded_file($tmpFoto,"imagenes/".$nombreArchivo);
		}

		$sentencia->bindParam(':foto',$nombreArchivo);
		$sentencia->execute();

		header("Location: registro.php");

		break;

//Funcion para Modificar usuarios
case 'btnModificar':

		$sentencia=$pdo->prepare("UPDATE usuarios SET 
		nombre=:nombre,
		email=:email,
		cargo=:cargo,
		clave=:clave,
		socio=:socio,
		afiliado=:afiliado,
		dni=:dni,
		plan1=:plan1,
		plan2=:plan2 WHERE id=:id"); 

		$sentencia->bindParam(':id',$txtID);
		$sentencia->bindParam(':nombre',$txtNombre);
		$sentencia->bindParam(':email',$txtEmail);
		$sentencia->bindParam(':cargo',$txtCargo);
		$sentencia->bindParam(':clave',$txtClave);
		$sentencia->bindParam(':socio',$txtSocio);
		$sentencia->bindParam(':afiliado',$txtAfiliado);
		$sentencia->bindParam(':dni',$txtDni);
		$sentencia->bindParam(':plan1',$txtPlan1);
		$sentencia->bindParam(':plan2',$txtPlan2);
		
		$sentencia->execute();

		//Funcion para optener modificaci??n de fotografia
		$Fecha= new DateTime();
		$nombreArchivo=($txtFoto!="")?$Fecha->getTimestamp()."_".$_FILES["txtFoto"]["name"]:"imagen.jpg";

		$tmpFoto=$_FILES["txtFoto"]["tmp_name"];

		if ($tmpFoto!="") {
			move_uploaded_file($tmpFoto,"imagenes/".$nombreArchivo);

		//Funcion que elimina la fotografia de la base de datos
		$sentencia=$pdo->prepare("SELECT foto FROM usuarios WHERE id=:id"); 
		$sentencia->bindParam(':id',$txtID);
		$sentencia->execute();
		$usuario=$sentencia->fetch(PDO::FETCH_LAZY);
		//print_r($usuario);

		if (isset($usuario["foto"])) {
			if (file_exists("imagenes/".$usuario["foto"])) {

				if ($usuario['foto']!="imagen.jpg") {
				unlink("imagenes/".$usuario["foto"]);
			}
			}
		}

		//Funcion para modificar datos de usuario
		$sentencia=$pdo->prepare("UPDATE usuarios SET 
		foto=:foto WHERE id=:id"); 
		$sentencia->bindParam(':foto',$nombreArchivo);
		$sentencia->bindParam(':id',$txtID);
		$sentencia->execute();
		}
		header('Location: registro.php');

		echo $txtID;
		echo "Presionaste btnModificar";

        //Funcion para eliminar
        break;
        case 'btnEliminar':

        //Funcion que elimina la fotografia de la base de datos
        $sentencia=$pdo->prepare("SELECT foto FROM usuarios WHERE id=:id"); 
        $sentencia->bindParam(':id',$txtID);
        $sentencia->execute();
        $usuario=$sentencia->fetch(PDO::FETCH_LAZY);
        //print_r($usuario);

        if (isset($usuario["foto"])&&($item['foto']!="imagen.jpg")) {
            if (file_exists("imagenes/".$usuario["foto"])) {
                unlink("imagenes/".$usuario["foto"]);
            }
        }

        //Funcion que elimina usuario
        $sentencia=$pdo->prepare("DELETE FROM usuarios WHERE id=:id"); 
        $sentencia->bindParam(':id',$txtID);
        $sentencia->execute();
        header("Location: index.php");
        
        echo $txtID;
        echo "Presionaste btnEliminar";
        break;
        case 'btnCancelar':
                header("Location: registro");
        break;
        case "Seleccionar":

        $accionAgregar="disabled";
        $accionModificar=$accionEliminar=$accionCancelar="";
        $mostrarModal=true;

        //Funcion que elimina la fotografia de la base de datos
        $sentencia=$pdo->prepare("SELECT * FROM usuarios WHERE id=:id"); 
        $sentencia->bindParam(':id',$txtID);
        $sentencia->execute();
        $usuario=$sentencia->fetch(PDO::FETCH_LAZY);

        $txtNombre=$usuario['nombre'];
        $txtEmail=$usuario['email'];
        $txtCargo=$usuario['cargo'];
        $txtClave=$usuario['clave'];
        $txtSocio=$usuario['socio'];
        $txtDni=$usuario['dni'];
        $txtAfiliado=$usuario['afiliado'];
        $txtPlan1=$usuario['plan1'];
        $txtPlan2=$usuario['plan2'];
        $txtFoto=$usuario['foto'];

        break;	
        }

        $sentencia=$pdo->prepare("SELECT * FROM `usuarios` WHERE 1");
		$sentencia->execute();
		$listaUsuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		
		

        //print_r($listaUSuarios);

?>
<?php


//Llamar a todos los clientes a la base de datos

$sql='SELECT * FROM usuarios';
$sentencia=$pdo->prepare($sql);
$sentencia->execute();

$resultado=$sentencia->fetchAll();

//Funcion para cantidad de paginas
$articuloPorPagina=3;

//Funcion para contar cantidad de clientes en la tabla
$totalClientes=$sentencia->rowCount();

$paginas=$totalClientes/3;
$paginas=ceil($paginas);


?>