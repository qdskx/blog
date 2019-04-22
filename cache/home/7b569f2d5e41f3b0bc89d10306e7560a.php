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
						<li class="current-menu-item"><a href="index.php?m=category&a=category">板块</a></li>
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
						<form method="post" action="index.php?m=details&a=search">
							<input type="text" name="search" placeholder="Search and hit enter" />
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

				<a href="index.php" title="Josephine" rel="home">						
					<img src="public/images/home/logo.png" alt="Josephine" />
				</a>

			</div><!-- .wrapper -->

		</div><!-- #header-main -->

	</header><!-- #header -->

	<div id="main">

		<div class="wrapper clearfix">

			<div id="content" class="col col-8">
				
				<div class="white-wrap">

					<div class="section-heading">
						<span class="section-heading-line"></span>
						<span class="section-heading-text">板块</span>
					</div><!-- .section-heading -->

					<div class="blog-posts-alt blog-posts-alt-diagonal-effect-enabled clearfix">
				
						<div class="blog-post-alt col col-6">

							<div class="blog-post-alt-thumb">

								<div class="blog-post-alt-thumb-inner">
									<a href="index.php?m=category&a=selCatePost&cid=1"><img src="public/images/home/featured-posts/featured-1.jpg" alt="" /></a>
								</div><!-- .blog-post-alt-thumb-inner -->
								<div class="blog-post-alt-thumb-cover"></div>

							</div><!-- .blog-post-alt-thumb -->

							<div class="blog-post-alt-main">

								<div class="blog-post-alt-main-inner">

									<div class="blog-post-alt-date">
										October 23, 2015
									</div><!-- .blog-post-alt-date -->

									<div class="blog-post-alt-title">
										<h2><a href="index.php?m=category&a=selCatePost&cid=1">Strawberry Cake</a></h2>
									</div><!-- .blog-post-alt-title -->

									<div class="blog-post-alt-cat">
										<a href="index.php?m=category&a=selCatePost&cid=1">食物</a>
									</div><!-- .blog-post-alt-cat -->

									<div class="blog-post-alt-read-more">
										<a href="index.php?m=category&a=selCatePost&cid=1">READ ARTICLE</a>
									</div><!-- .blog-post-alt-read-more -->

								</div><!-- .blog-post-alt-main-inner -->

							</div><!-- .blog-post-alt-main -->

						</div><!-- .blog-post-alt -->

						<div class="blog-post-alt col col-6 col-last">

							<div class="blog-post-alt-thumb">

								<div class="blog-post-alt-thumb-inner">
									<a href="index.php?m=category&a=selCatePost&cid=2"><img src="public/images/home/featured-posts/featured-2.jpg" alt="" /></a>
								</div><!-- .blog-post-alt-thumb-inner -->
								<div class="blog-post-alt-thumb-cover"></div>

							</div><!-- .blog-post-alt-thumb -->

							<div class="blog-post-alt-main">

								<div class="blog-post-alt-main-inner">

									<div class="blog-post-alt-date">
										October 23, 2015
									</div><!-- .blog-post-alt-date -->

									<div class="blog-post-alt-title">
										<h2><a href="index.php?m=category&a=selCatePost&cid=2">Girl With A Rose</a></h2>
									</div><!-- .blog-post-alt-title -->

									<div class="blog-post-alt-cat">
										<a href="index.php?m=category&a=selCatePost&cid=2">摄影</a>
									</div><!-- .blog-post-alt-cat -->

									<div class="blog-post-alt-read-more">
										<a href="index.php?m=category&a=selCatePost&cid=2">READ ARTICLE</a>
									</div><!-- .blog-post-alt-read-more -->

								</div><!-- .blog-post-alt-main-inner -->

							</div><!-- .blog-post-alt-main -->

						</div><!-- .blog-post-alt -->

						<div class="blog-post-alt col col-6">

							<div class="blog-post-alt-thumb">

								<div class="blog-post-alt-thumb-inner">
									<a href="index.php?m=category&a=selCatePost&cid=3"><img src="public/images/home/featured-posts/featured-3.jpg" alt="" /></a>
								</div><!-- .blog-post-alt-thumb-inner -->
								<div class="blog-post-alt-thumb-cover"></div>

							</div><!-- .blog-post-alt-thumb -->

							<div class="blog-post-alt-main">

								<div class="blog-post-alt-main-inner">

									<div class="blog-post-alt-date">
										October 23, 2015
									</div><!-- .blog-post-alt-date -->

									<div class="blog-post-alt-title">
										<h2><a href="index.php?m=category&a=selCatePost&cid=3">Cat On The Floor</a></h2>
									</div><!-- .blog-post-alt-title -->

									<div class="blog-post-alt-cat">
										<a href="index.php?m=category&a=selCatePost&cid=3">时尚</a>
									</div><!-- .blog-post-alt-cat -->

									<div class="blog-post-alt-read-more">
										<a href="index.php?m=category&a=selCatePost&cid=3">READ ARTICLE</a>
									</div><!-- .blog-post-alt-read-more -->

								</div><!-- .blog-post-alt-main-inner -->

							</div><!-- .blog-post-alt-main -->

						</div><!-- .blog-post-alt -->

						<div class="blog-post-alt col col-6 col-last">

							<div class="blog-post-alt-thumb">

								<div class="blog-post-alt-thumb-inner">
									<a href="index.php?m=category&a=selCatePost&cid=4"><img src="public/images/home/featured-posts/featured-4.jpg" alt="" /></a>
								</div><!-- .blog-post-alt-thumb-inner -->
								<div class="blog-post-alt-thumb-cover"></div>

							</div><!-- .blog-post-alt-thumb -->

							<div class="blog-post-alt-main">

								<div class="blog-post-alt-main-inner">

									<div class="blog-post-alt-date">
										October 23, 2015
									</div><!-- .blog-post-alt-date -->

									<div class="blog-post-alt-title">
										<h2><a href="index.php?m=category&a=selCatePost&cid=4">Beatiful Blonde Hair</a></h2>
									</div><!-- .blog-post-alt-title -->

									<div class="blog-post-alt-cat">
										<a href="index.php?m=category&a=selCatePost&cid=4">技术</a>
									</div><!-- .blog-post-alt-cat -->

									<div class="blog-post-alt-read-more">
										<a href="index.php?m=category&a=selCatePost&cid=4">READ ARTICLE</a>
									</div><!-- .blog-post-alt-read-more -->

								</div><!-- .blog-post-alt-main-inner -->

							</div><!-- .blog-post-alt-main -->

						</div><!-- .blog-post-alt -->

					</div><!-- .blog-posts-alt -->

				</div><!-- .white-wrap -->

			</div><!-- #content -->

			<div id="sidebar" class="col col-4 col-last">

				<div class="widget">

					<h3 class="widget-title">
						<span class="widget-title-line"></span>
						<span class="widget-title-text">阴天快乐</span>
					</h3>

					<iframe id="fancybox-frame" name="fancybox-frame1514787160658" frameborder="0" scrolling="no" hspace="0"  src="http://i.tianqi.com/index.php?c=code&a=getcode&id=38&h=60&w=610" style='height: 100px;'></iframe>


				</div><!-- .widget -->

				<div class="widget">

					<h3 class="widget-title">
						<span class="widget-title-line"></span>
						<span class="widget-title-text">最近发帖</span>
					</h3>

					<div class="widget-content">
						
						<div class="recent-posts-widget">
							
							<?php if(!empty($postInfo)):?>
							<?php foreach($postInfo as $val):?>
							<div class="recent-posts-widget-post">

								<div class="recent-posts-widget-thumb">
									<a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>"><img src="<?=$val['postpic'];?>" alt="" /></a>
								</div><!-- .recent-posts-widget-thumb -->

								<div class="recent-posts-widget-main">

									<div class="recent-posts-widget-date"><?php echo date('Y-m-d H:i:s' , $val['postime']);?></div>
									<div class="recent-posts-widget-title"><a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>"><?=$val['title'];?></a></div>
									<div class="recent-posts-widget-category"><a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>"><?=$val['classname'];?></a></div>

								</div><!-- .recent-posts-widget-main -->

							</div><!-- .recent-posts-widget-post -->
							<?php endforeach;?>
							<?php endif;?>

						</div><!-- .recent-posts-widget -->

					</div><!-- .widget-content -->

				</div><!-- .widget -->

			</div><!-- #sidebar -->

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
