<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="<?=$sec;?>;url=<?=$url;?>">
	<style>
		div{
			width:200px;
			margin:5px auto;
			padding: 3px;
			border: 1px dashed yellow;
			border-radius: 10px;
			background: url('public/images/skyblue.jpg');
		}
		.report{
			font-weight: bold;
		}
		.msg{
			text-align: center;
			color:red;
			font-size: 18px;
		}
		.loading{
			color:green;
			font-size: 15px;
		}
		.jump{
			color: #313fcc;
			font-size:14px;
		}
	</style>
</head>
<body>
	<div>
		<p class="report">提示：<?=$sec;?>秒后跳转</p>
		<hr />

		<p class="msg"><?=$msg;?></p>

		<p class="loading">正在跳转...<a href="<?=$url;?>" class="jump">立即跳转</a></p>
		
	
	</div>
</body>
</html>
