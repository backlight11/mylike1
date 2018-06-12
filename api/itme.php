<?php





$wzid = $_POST['12'];
$wzid = 12; 
if($redis->exists('itme'.$wzid)){
    echo $redis->get('itme'.$wzid);
    exit();
}
include_once 'config.php';
$sql = "select * from article_list where id=?";

$stm = $pdo->prepare($sql);
$bool = $stm->execute([$wzid]);
if(!$bool){
    echo '0';
    exit();
}
$arr = $stm->fetch(PDO::FETCH_ASSOC);
$json = json_encode($arr);
echo $json;
$redis->set('itme'.$wzid,$json);
