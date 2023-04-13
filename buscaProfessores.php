<?php

header('Access-Control-Allow-Origin: *');

$connect = new PDO("mysql:host=localhost;id20457741_gamedb", "id20457741_usuario", "7!e]c3?&n+Cf0-P6");

$received_data = json_decode(file_get_contents("php://input"));

$data = array();

if($received_data->query != '')
{
	$query = "
	SELECT * FROM fatec_professores 
	WHERE salario LIKE '%".$received_data->query."%' 
	ORDER BY salario DESC
	";
}
else
{
	$query = "
	SELECT * FROM fatec_professores 
	ORDER BY id DESC
	";
}

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
	$data[] = $row;
}

echo json_encode($data);

?>