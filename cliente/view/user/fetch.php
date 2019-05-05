<?php

include('database_connection.php');

$column = array('Especialidad', 'Doctor', 'Direccion', 'Barrio', 'Telefono', 'Partido');

$query = "
SELECT * FROM tbl_customer 
";

if(isset($_POST['filter_doctor'], $_POST['filter_partido']) && $_POST['filter_doctor'] != '' && $_POST['filter_partido'] != '')
{
 $query .= '
 WHERE Doctor = "'.$_POST['filter_doctor'].'" AND Partido = "'.$_POST['filter_partido'].'" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY ID DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['Especialidad'];
 $sub_array[] = $row['Doctor'];
 $sub_array[] = $row['Direccion'];
 $sub_array[] = $row['Barrio'];
 $sub_array[] = $row['Telefono'];
 $sub_array[] = $row['Partido'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM tbl_customer";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);

?>