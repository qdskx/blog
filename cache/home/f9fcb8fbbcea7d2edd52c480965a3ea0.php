<!DOCTYPE html>
<html>
<head>

	<title>Josephine - HTML Template</title>

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<meta name="author" content="">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="<?=$sec;?>;url=<?=$url;?>">
	<!-- Favicons -->
	<link rel="shortcut icon" href="public/images/home/favicon.png">
	<link rel="apple-touch-icon" href="public/images/home/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="public/images/home/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="public/images/home/apple-touch-icon-114x114.png">

	<!-- CSS -->
	<link rel="stylesheet" href="public/css/home/fonts/font-awesome.css">
	<link rel="stylesheet" href="public/css/home/plugins.css">
	<link rel="stylesheet" href="public/css/home/main.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900%7CMontserrat:400,700%7CLora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

</head>
<body>

 



	<header id="header">

		<div id="header-top">

			<div class="wrapper clearfix">
				
				<nav id="navigation">
					<ul class="menu">
						<li>
							<a href="index.php">首页</a>
						</li>
						<li>
							<a href="index.php?m=user&a=about">关于我</a>
						</li>						
						<li>
							<a href="#">帖子 详情</a>
						</li>
						<li><a href="index.php?m=user&a=personal">个人资料</a></li>
						<li><a href="index.php?m=details&a=search">搜索</a></li>
						<li><a href="index.php?m=category&a=category">板块</a></li>
						<li>
						<?php if(isset($_SESSION['username'])):?>
						<a href="index.php?m=user&a=loginout">退出</a>
						<?php else: ?>
						<a href="index.php?m=user&a=reg">登录 注册</a>
						<?php endif;?>
						</li>
					</ul><!-- .menu -->
				</nav><!-- #navigation -->

				<div id="navigation-hamburger">

					<span class="navigation-hamburger-hook"><span class="fa fa-reorder"></span></span>
					<select>
						<option value="#">- Select -</option>
						<!-- automatically populated based on #navigation -->
					</select>

				</div><!-- #navigation-hamburger -->
				
				<div id="header-search">
					<div class="header-search-inner">
						<form method="get" action="search.html">
							<input type="text" name="s" placeholder="Search and hit enter" />
						</form>
						<span class="header-search-icon"><span class="fa fa-search"></span></span>
					</div><!-- .search-form-wrapper -->
				</div><!-- #header-search -->

				<div id="header-social">

					<a href="#" target="_blank" class="fa fa-twitter"></a>
					<a href="#" target="_blank" class="fa fa-facebook"></a>
					<a href="#" target="_blank" class="fa fa-youtube-play"></a>
					<a href="#" target="_blank" class="fa fa-vimeo"></a>
					<a href="#" target="_blank" class="fa fa-tumblr"></a>

				</div><!-- #header-social -->

			</div><!-- .wrapper -->

		</div><!-- #header-top -->

		<div id="header-main">

			<div class="wrapper">

				<a href="#" title="Josephine" rel="home">						
					<img src="public/images/home/logo.png" alt="Josephine" />
				</a>

			</div><!-- .wrapper -->

		</div><!-- #header-main -->

	</header><!-- #header -->

	<div id="main">

		<div class="wrapper">

			<div class="white-wrap message-404">

				<!-- <h1>Sorry, Page Not Found!</h1>
				The page you are looking for was moved, removed, renamed or might have never existed. -->
				<h2><?=$msg;?></h2>
			</div><!-- .404-message -->

		</div><!-- .wrapper -->

	</div><!-- #main -->

	<footer id="footer">

		<div id="footer-about">

			<div class="wrapper clearfix">

				<div class="col col-3">&nbsp;</div><!-- Empty col to push the next col -->

				<div class="col col-6">

					<h2 id="footer-about-title">About Josephine</h2>
					
					<div id="footer-about-content">
						Mauris sed diam risus. Mauris tempor elit ut urna consectetur, malesuada porta magna luctus. Phasellus ullamcorper consequat justo, at ultricies diam consequat ut. Integer et sapien sit dolor.
					</div><!-- #footer-about-content -->

					<div id="footer-about-social">
						
						<a href="#" target="_blank"><span class="fa fa-twitter"></span></a>
						<a href="#" target="_blank"><span class="fa fa-facebook"></span></a>
						<a href="#" target="_blank"><span class="fa fa-vimeo"></span></a>
						<a href="#" target="_blank"><span class="fa fa-dribbble"></span></a>

					</div><!-- #footer-about-social -->

				</div><!-- .col-6 -->

			</div><!-- .wrapper -->

		</div><!-- #footer-about -->

		<div id="footer-copyright">

			<div class="wrapper">

				Copyright &copy; Josephine 2015. All rights reserved.

			</div><!-- .wrapper -->

		</div><!-- #footer-copyright -->

	</footer><!-- #footer -->

	<!-- JavaScript -->
	<script type="text/javascript" src="public/js/home/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="public/js/home/plugins.js"></script>
	<script type="text/javascript" src="public/js/home/main.js"></script>

</body>
</html>
