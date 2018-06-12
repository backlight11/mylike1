<?php
header('Content-Type: text/html; charset=utf-8');
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis->auth('963852');
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=leaf;port=3300", "root", "963852");