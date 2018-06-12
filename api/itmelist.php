<?php
include_once 'config.php';

$sql = "select * from article_list";

$pdo->query('ser names utf8');

$stm = $pdo->query($sql);
if ($stm) {
    $arr = $stm->fetchAll(PDO::FETCH_ASSOC);
    if ($arr) {
        echo json_encode($arr);
    } else {
        echo 0;
    }
} else {
    echo 0;
}
?>