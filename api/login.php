<?php

$email = $_POST['email'];
$pwd = $_POST['pwd'];
$code = $_POST['code'];
//0.验证码错误
//1.邮箱格式错误
//2.密码长度不足或空
//3.密码或账号有误
//json.登录成功 json=用户数据（name,email,age,nickname,sex）
if($code != $_SESSION['code']){
    echo 0;
    exit();
}
if(!preg_match('//', $email)){
    echo 1;
    exit();
}
if(strlen($pwd)<6 && $pwd==null){
    echo 2;
    exit();
}
include_once 'config.php';

$email = addslashes($email);
$pwd  =md5($pwd);
$sql = "select name,email,age,nickname,sex from user_list where email=? and pwd=?";
$stm = $pdo->prepare($sql);
$bool = $stm->execute(array($email,$pwd));
if(!$bool){
    echo 3;
    exit();
}
$arr = $stm->fetch(PDO::FETCH_ASSOC);
$_SESSION['id']=$arr['id'];
$_SESSION['nikename']=$arr['nikename'];
$_SESSION['email']=$arr['email'];
echo json_encode($arr);