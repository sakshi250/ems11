<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
include_once'./database.php';
$table='department';
$data=json_decode(file_get_contents('php://input'));
$query='delete * from '.$table;
$stmt=$pdo->prepare($query);
if($stmt->execute())
{
    $response['message']='department deleted';
    echo json_encode($response);
}
else
{
    $response['message']='error occured';
    echo json_encode($response);
}
?>