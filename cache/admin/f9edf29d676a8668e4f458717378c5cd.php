<!doctype html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>帖子管理</title>
		<link rel='stylesheet' type='text/css' href='public/css/admin/adminBase.css' />
		<link rel='stylesheet' type='text/css' href='public/css/admin/G-index.css' />
		<link rel='stylesheet' type='text/css' href='public/css/admin/adminPost.css' />
		<style>
			.left .nav-le .bottom{
				margin-top:420px;
			}
		</style>
	</head>
	<body>
		<div class='box clearFix'>
			<div class='top fl clearFix'>
				<div class='top1'></div>
				<div class='top2'></div>
				<div class='top3'></div>
				<div class='top-le'><i>Discuz!</i><br/>Control Panel</div>
				<div class='top-gang'></div>
				<ul class='nav clearFix'>
					<li><a href='admin.php?m=user&a=user'>用户管理</a></li>
					<li><a href='admin.php?m=category&a=category'>版块管理</a></li>
					<li><a href='adminPost.php' class='onclick'>帖子管理</a></li>
				</ul>
				<ul class='exit'>
					<li><p>你好, 创始人 </p>
						<em>&nbsp;&nbsp;
						<?php if(isset($_SESSION['username'])):?>
							<?=$_SESSION['username'];?>
						<?php else: ?>
						admin
						<?php endif;?>
						&nbsp;&nbsp;</em>
					<a href="admin.php?m=user&a=loginout">[退出]</a>
					<a href='index.php'><img src="public/img/nav.jpg"></a>
					</li>
				</ul>
			</div>
			<div class='left clearFix'>
				<ul class='nav-le clearFix'>
					<li class='on1'><a href="admin.php?m=details&a=details"><img src='public/img/dot.gif'>帖子管理</a></li>
					<li><a href="admin.php?m=details&a=reply"><img src='public/img/dot.gif'>回帖管理</a></li>
					<li><a href="admin.php?m=details&a=message"><img src='public/img/dot.gif'>留言管理</a></li>
					<li class='bottom'>Powered by <a href="#">phpxy</a> V2© 2012, <a href="#">phpxy</a> Inc.</li>
				</ul>
			
			</div>
			<div class='right clearFix'>
				<div class='r-top'>帖子管理</div>
				<div class='r1'>
					<?php if(!empty($postRes)):?>
					<p>主题数：
						<?=$total;?>
					</p>
					<?php else: ?>
					<p>主题数：0</p>
					<?php endif;?>
				</div>
				<ul class='r2 clearFix'>
					<li style='margin-left:65px'>标题</li>
					<li>版块</li>
					<li>回复</li>
					<li>浏览</li>
					<li>最后发表</li>
				</ul>
				
				<form action="admin.php?m=details&a=delPost" method="post" enctype="multipart/form-data" class="clearFix">
				<?php if(!empty($postRes)):?>
					<?php foreach($postRes as $value):?>
					<div class='r3'>
						<input type='checkbox' name='tid[]' value="<?=$value['tid'];?>"  style="margin-left:9px;" />
						<p><a href="index.php?m=details&a=single&cid=<?=$value['cid'];?>&tid=<?=$value['tid'];?>"><?=$value['title'];?></a></p>
						<p class='b2' style='margin-left: 48px;'><a href="#"><?=$value['classname'];?></a></p>
						<a href='#' class='b4'><?=$value['replycount'];?></a>
						<a href='#' class='b5'><?=$value['views'];?></a>
						<a href='#' class='b6' style="width:200px;"><?php echo date('Y-m-d H:i:s' , $value['postime']);?></a>
					</div>
					<?php endforeach;?>
				<?php endif;?>
				    <input type='submit' name='sub_del' value='删除' class='submit' />

					<!-- 分页 start -->
					<div class='page fr clearFix'>


							<a href="<?=$allPage['first'];?>" class='page_mar fl'>首页</i>	


							<a href="<?=$allPage['prev'];?>" class='page_mar fl'>上一页</a>		



							<a href="<?=$allPage['next'];?>" class='page_mar fl'>下一页</a>


							
							<a href="<?=$allPage['end'];?>" class='page_mar fl'>尾页</a>	



					</div>
					<!-- 分页 end -->	
				


					
				</form>
			
			</div>
		</div>
	
	
	</body>
</html>