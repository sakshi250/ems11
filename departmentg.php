<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
include_once'./database.php';
$table='department';
$query='select * from '.$table;
$stmt=$pdo->prepare($query);
if($stmt->execute())
{
    $department=$stmt->fetchAll(PDO::FETCH_OBJ);
    echo json_encode(['department'=>$department]);
}
else
{
    $response['message']='error occured';
    echo json_encode($response);
}
?>