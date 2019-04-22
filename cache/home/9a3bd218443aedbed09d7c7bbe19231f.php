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
						<li class="current-menu-item">
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
						<?php if(isset($_SESSION['username']) && $_SESSION['uid'] == 1):?>
						<li>
						<a href="admin.php?m=index&a=index">管理中心</a>
						</li>
						<?php endif;?>
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
	
	<div class="featured-blog-posts">

		<div class="featured-blog-posts-inner">

			<div class="blog-posts-alt blog-posts-alt-diagonal-effect-enabled no-col-spacing carousel-container">

				<div class="carousel" data-stop-on-hover="false" data-columns="4" data-pagination="false" data-slide-speed="200" data-pagination-speed="800" data-scroll-per-page="false">
					
					<div class="blog-post-alt carousel-item">

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
									<h2><a href="index.php?m=category&a=selCatePost&cid=1">Strawberry Shortcake</a></h2>
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

					<div class="blog-post-alt carousel-item">

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

					<div class="blog-post-alt carousel-item">

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

					<div class="blog-post-alt carousel-item">

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
									<h2><a href="index.php?m=category&a=selCatePost&cid=4">Beautiful Blonde Hair</a></h2>
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

					<div class="blog-post-alt carousel-item">

						<div class="blog-post-alt-thumb">

							<div class="blog-post-alt-thumb-inner">
								<a href="single.html"><img src="public/images/home/featured-posts/featured-5.jpg" alt="" /></a>
							</div><!-- .blog-post-alt-thumb-inner -->
							<div class="blog-post-alt-thumb-cover"></div>

						</div><!-- .blog-post-alt-thumb -->

						<div class="blog-post-alt-main">

							<div class="blog-post-alt-main-inner">

								<div class="blog-post-alt-date">
									October 23, 2015
								</div><!-- .blog-post-alt-date -->

								<div class="blog-post-alt-title">
									<h2><a href="single.html">Decorating New Office</a></h2>
								</div><!-- .blog-post-alt-title -->

								<div class="blog-post-alt-cat">
									<a href="archives.html">Photography</a>
								</div><!-- .blog-post-alt-cat -->

								<div class="blog-post-alt-read-more">
									<a href="single.html">READ ARTICLE</a>
								</div><!-- .blog-post-alt-read-more -->

							</div><!-- .blog-post-alt-main-inner -->

						</div><!-- .blog-post-alt-main -->

					</div><!-- .blog-post-alt -->

					<div class="blog-post-alt carousel-item">

						<div class="blog-post-alt-thumb">

							<div class="blog-post-alt-thumb-inner">
								<a href="single.html"><img src="public/images/home/featured-posts/featured-6.jpg" alt="" /></a>
							</div><!-- .blog-post-alt-thumb-inner -->
							<div class="blog-post-alt-thumb-cover"></div>

						</div><!-- .blog-post-alt-thumb -->

						<div class="blog-post-alt-main">

							<div class="blog-post-alt-main-inner">

								<div class="blog-post-alt-date">
									October 23, 2015
								</div><!-- .blog-post-alt-date -->

								<div class="blog-post-alt-title">
									<h2><a href="single.html">Blueberry Shake</a></h2>
								</div><!-- .blog-post-alt-title -->

								<div class="blog-post-alt-cat">
									<a href="archives.html">Food</a>
								</div><!-- .blog-post-alt-cat -->

								<div class="blog-post-alt-read-more">
									<a href="single.html">READ ARTICLE</a>
								</div><!-- .blog-post-alt-read-more -->

							</div><!-- .blog-post-alt-main-inner -->

						</div><!-- .blog-post-alt-main -->

					</div><!-- .blog-post-alt -->

				</div><!-- .carousel -->

				<a href="#" class="carousel-go-prev"></a>
				<a href="#" class="carousel-go-next"></a>

			</div><!-- blog-posts-alt -->

		</div><!-- #featured-blog-posts-inner -->

	</div><!-- #featured-blog-posts -->

	<div id="main">

		<div class="wrapper clearfix">
		
			<div id="sidebar" class="col col-4">
				
				<?php if(isset($_SESSION['username'])):?>
				<div class="widget">

					<div class="about-author-widget">

						<div class="about-author-widget-banner">
							<img src="public/images/home/widget-about-author/banner.png" alt="" />
						</div>

						<div class="about-author-widget-avatar">
							<img src="<?=$_SESSION['pic'];?>" alt="" />
						</div>

						<h2 class="about-author-widget-name"><?=$_SESSION['username'];?></h2>
						<?php if($_SESSION['undertype'] == 1):?>
						<h3 class="about-author-widget-position">Lifestyle Blogger</h3>
						<?php else: ?>
						<h3 class="about-author-widget-position"><?=$_SESSION['email'];?></h3>
						<?php endif;?>

						<div class="about-author-widget-text">
							<?=$_SESSION['autograph'];?>
						</div>

					</div><!-- .about-author-widget -->

				</div><!-- .widget -->
				<?php endif;?>
				<!-- <div class="widget"> -->

				<div class="widget">

					<div class="widget-content">

						<embed src="http://www.blogclock.cn/swf/S100003bc4baf25-c.swf" Width="220px" Height="150px" type="application/x-shockwave-flash" quality="high" wmode="transparent" style='margin-left:23px;'></embed>


					</div><!-- .widget-content -->
					

				</div><!-- .widget -->

				<div class="widget">

					<h3 class="widget-title">
						<span class="widget-title-line"></span>
						<span class="widget-title-text">各大板块</span>
					</h3>

					<div class="widget-content">
                        <?php if(!empty($cateInfo)):?>
						
						<div class="recent-posts-widget">
                        <?php foreach($cateInfo as $val):?>
							<div class="recent-posts-widget-post">

								<div class="recent-posts-widget-thumb">
									<a href="index.php?m=category&a=category"><img src="<?=$val['classpic'];?>" alt="" /></a>
								</div><!-- .recent-posts-widget-thumb -->

								<div class="recent-posts-widget-main">

									<div class="recent-posts-widget-date" style='font-style: normal;'>关于这个板块</div>
									<div class="recent-posts-widget-title"><a href="index.php?m=category&a=category"><?=$val['intro'];?></a></div>
									<div class="recent-posts-widget-category"><a href="index.php?m=category&a=category"><?=$val['classname'];?></a></div>

								</div><!-- .recent-posts-widget-main -->

							</div><!-- .recent-posts-widget-post -->
						<?php endforeach;?>
						</div><!-- .recent-posts-widget -->
						
                        <?php endif;?>
					</div><!-- .widget-content -->

				</div><!-- .widget -->

			</div><!-- #sidebar -->
			<div id="content" class="col col-8 col-last">
				
				<div class="blog-posts clearfix">
				<?php if(!empty($result)):?>
					<?php foreach($result as $val):?>
					<div class="blog-post">

						<div class="blog-post-thumb">
							<a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>"><img src="<?=$val['postpic'];?>" alt="" /></a>
						</div><!-- .blog-post-thumb -->

						<div class="blog-post-main clearfix">
							
							<div class="blog-post-author">
							
								<div class="blog-post-author-avatar">
									<img src="<?=$val['pic'];?>" alt="" />
								</div><!-- .blog-post-author-avatar -->

								<div class="blog-post-author-name">
									<span>Posted By</span>
									<a href="archives.html"><?=$val['username'];?></a>
								</div><!-- .blog-post-author-name -->

								<div class="blog-post-tags" style='line-height: 17px;'>
									<?=$val['autograph'];?>
								</div><!-- .blog-post-tags -->

							</div><!-- .blog-post-author -->
						
							<div class="blog-post-info">

								<div class="blog-post-info-inner">
							
									<div class="blog-post-title">
										<h2><a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>"><?=$val['title'];?></a></h2>
									</div><!-- .blog-post-title -->

									<div class="blog-post-meta">
										<?php echo date('Y-m-d H:i:s' , $val['postime']);?>, In: <a href="index?m=category&a=selCatePost&cid=<?=$val['cid'];?>"><?=$val['classname'];?></a>
										<p style='font-style: normal;'>
										浏览量：<?=$val['views'];?>
										回复量：
											<?php if(!empty($total)):?>
												<?php foreach($total as $key => $v):?>
													<?php if($key == $val['tid']):?>
														<?=$v;?>
														<?php if($v > 1):?>
															<img src="public/images/home/hot.png" alt="" style='border-radius: 50%'>
														<?php endif;?>
													<?php endif;?>
												<?php endforeach;?>
											<?php endif;?>
											点赞量：<?=$val['love'];?><img src="public/images/home/love.png" alt="" style='margin-left: 5px;margin-top: 2px;'>
										</p>
										<!-- <p></p> -->
									</div><!-- .blog-post-meta -->

									<div class="blog-post-excerpt">
										<?=$val['content'];?>
									</div><!-- .dslc-blog-post-excerpt -->

									<div class="blog-post-read-more">
										<a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>">CONTINUE READING</a>
									</div><!-- .blog-post-read-more -->

								</div><!-- .blog-post-info-inner -->

							</div><!-- .blog-post-info -->

						</div><!-- .blog-post-main -->

					</div><!-- .blog-post -->
					<?php endforeach;?>
					<?php endif;?>

				</div><!-- .blog-posts -->
				
				<?php if(!empty($allPage)):?>
				<div class="pagination">

					<a href="<?=$allPage['first'];?>" class="current-pagination-item">首页</a>
					<a href="<?=$allPage['prev'];?>">上一页</a>
					<a href="<?=$allPage['next'];?>">下一页</a>
					<a href="<?=$allPage['end'];?>">尾页</a>
					
				</div><!-- .pagination -->
				<?php endif;?>
			</div><!-- #content -->



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
