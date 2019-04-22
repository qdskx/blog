<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理用户 - 异清轩博客管理系统</title>
<link rel="stylesheet" type="text/css" href="public/css/admin/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/css/admin/style.css">
<link rel="stylesheet" type="text/css" href="public/css/admin/font-awesome.min.css">
<link rel="apple-touch-icon-precomposed" href="public/images/admin/icon/icon.png">
<link rel="shortcut icon" href="public/images/admin/icon/favicon.ico">
<script src="public/js/admin/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
<section class="container-fluid">
  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="/">YlsatCMS</a> </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">你好
			<?php if(isset($_SESSION['username'])):?>
			<?=$_SESSION['username'];?></a>
			<?php endif;?>
			

            </li>
            <li><a href="admin.php?m=user&a=loginout">退出登录</a></li>
       
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <div class="row">
    <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
      <ul class="nav nav-sidebar">
        <li><a href="admin.php?m=details&a=details">文章</a></li>
        <li><a href="admin.php?m=details&a=reply">评论</a></li>
        <li><a href="admin.php?m=details&a=message">留言</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li><a href="admin.php?m=category&a=category">栏目</a></li>
      </ul>
      <ul class="nav nav-sidebar">
        <li class="active"><a href='admin.php?m=user&a=user' class="dropdown-toggle" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">用户</a>
        </li>
      </ul>
    </aside>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-lg-10 col-md-offset-2 main" id="main">

        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th><span class="glyphicon glyphicon-th-large"></span> <span class="visible-lg">ID</span></th>
                <th><span class="glyphicon glyphicon-user"></span> <span class="visible-lg">用户名</span></th>
                <th><span class="glyphicon glyphicon-time"></span> <span class="visible-lg">上次登录时间</span></th>
                <th><span class="glyphicon glyphicon-pencil"></span> <span class="visible-lg">操作</span></th>
              </tr>
            </thead>
            <form action="admin.php?m=user&a=del" method="post">
            <tbody>
            <?php if(!empty($allUser)):?>
            <?php foreach($allUser as $val):?>
              <tr>
                <td><?=$val['uid'];?></td>
                <td><?=$val['username'];?></td>
                <td><?php echo date('Y-m-d H:i:s' , $val['lastime']);?></td>
                <td><input type="checkbox" name="uid[<?=$val['uid'];?>]" value="<?=$val['uid'];?>"></td>
              </tr>
              <?php endforeach;?>
              <?php endif;?>
              <tr>
				<td><input type="submit" name='del' value="删除"></td>
              </tr>
            </tbody>
           </form>
          </table>

  				<!-- 分页 start -->
					<div class='page fr clearFix'>


							<a href="<?=$allPage['first'];?>" class='page_mar fl'>首页</i>	


							<a href="<?=$allPage['prev'];?>" class='page_mar fl'>上一页</a>		



							<a href="<?=$allPage['next'];?>" class='page_mar fl'>下一页</a>


							
							<a href="<?=$allPage['end'];?>" class='page_mar fl'>尾页</a>	



					</div>
					<!-- 分页 end -->	
        </div>
    </div>
  </div>
</section>

<script src="js/bootstrap.min.js"></script> 
<script src="js/admin-scripts.js"></script> 
<script>
$(function () {
    $("#main table tbody tr td a").click(function () {
        var name = $(this);
        var id = name.attr("rel"); //对应id   
        if (name.attr("name") === "see") {
            $.ajax({
                type: "POST",
                url: "/User/see",
                data: "id=" + id,
                cache: false, //不缓存此页面   
                success: function (data) {
                    var data = JSON.parse(data);
					$('#truename').val(data.truename);
					$('#username').val(data.username);
					$('#usertel').val(data.usertel);
					$('#userid').val(data.userid);
                    $('#seeUser').modal('show');
                }
            });
        } else if (name.attr("name") === "delete") {
            if (window.confirm("此操作不可逆，是否确认？")) {
                $.ajax({
                    type: "POST",
                    url: "/User/delete",
                    data: "id=" + id,
                    cache: false, //不缓存此页面   
                    success: function (data) {
                        window.location.reload();
                    }
                });
            };
        };
    });
});
</script>
</body>
</html>
