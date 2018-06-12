<?php
include_once 'config.php';
$id = int( $_GET['id']);

$id = 16;



$sql = "select name,age,email from user_list where id=?";

$pdo->query('ser names utf8');


$stm = $pdo->prepare($sql);

$bool = $stm->execute(array($id));

if(!$bool){
echo 0;
exit();
}

$arr = $stm->fetch(PDO::FETCH_ASSOC);

if($arr){
	echo json_encode($arr);
}else{
	echo 0;
}




?>