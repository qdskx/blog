<?php
session_start();
date_default_timezone_set('PRC');
header("Content-type: text/html; charset=utf-8");
include 'bootstrap/Psr4AutoLoad.php';
include 'bootstrap/Start.php';
include 'bootstrap/alias_admin.php';

//添加映射关系的
$config = include 'config/config_admin.php';
Start::route();