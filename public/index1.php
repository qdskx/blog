<?php
session_start();

//载入ucpass类
require_once('lib/Ucpaas.class.php');

//初始化必填
$options['accountsid']='ba5fae8f05fa8a04bbb306073058c543';
$options['token']='6bc663faeeead891dbbd6775fe1b73f5';

// $options['accountsid']='9330f93d097c7ae7467f9b1530417e2a';
// $options['token']='0334e69f9f1eda263c3d4411f183ad1a';

//初始化 $options必填
$ucpass = new Ucpaas($options);

//开发者账号信息查询默认为json或xml
header("Content-Type:text/html;charset=utf-8");


//封装验证码
$str = '1234567890123567654323894325789';
$code = substr(str_shuffle($str),0,5);
// $_SESSION['code']=$code;
//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
$appId = "aa1ba42c4b2840399ee81617c7ddb3b4";
// $appId = "021bad761fd64270b57d5f63fe26b8c0";
//给那个手机号发送
$to = $_GET['phone'];

$templateId = "183251";
// $templateId = "251708";
//这就是验证码
$param=$code;
$_SESSION['code1']= $param;

echo $ucpass->templateSMS($appId,$to,$templateId,$param);