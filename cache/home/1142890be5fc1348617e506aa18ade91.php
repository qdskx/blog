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
						<li class="current-menu-item">
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

			<div id="sidebar" class="col col-4">

				<div class="widget">

					<div class="about-author-widget">

						<embed src="http://www.blogclock.cn/swf/S100159f1bf6d59-8.swf" Width="270px" Height="180px" type="application/x-shockwave-flash" quality="high" wmode="transparent"></embed>

					</div><!-- .about-author-widget -->

				</div><!-- .widget -->

				<div class="widget">

					<h3 class="widget-title">
						<span class="widget-title-line"></span>
						<span class="widget-title-text">最新文章</span>
					</h3>

					<div class="widget-content">
                        <?php if(!empty($cateInfo)):?>
						
						<div class="recent-posts-widget">
                        <?php foreach($cateInfo as $val):?>
							<div class="recent-posts-widget-post">

								<div class="recent-posts-widget-thumb">
									<a href="index.php?m=category&a=selCatePost&cid=<?=$val['cid'];?>"><img src="<?=$val['classpic'];?>" alt="" /></a>
								</div><!-- .recent-posts-widget-thumb -->

								<div class="recent-posts-widget-main">

									<div class="recent-posts-widget-date" style='font-style: normal;'><?=$val['intro'];?></div>
									<div class="recent-posts-widget-title"><a href="index.php?m=category&a=selCatePost&cid=<?=$val['cid'];?>">Cat On The Floor</a></div>
									<div class="recent-posts-widget-category"><a href="index.php?m=category&a=selCatePost&cid=<?=$val['cid'];?>"><?=$val['classname'];?></a></div>

								</div><!-- .recent-posts-widget-main -->

							</div><!-- .recent-posts-widget-post -->
						<?php endforeach;?>
						</div><!-- .recent-posts-widget -->
						
                        <?php endif;?>
					</div><!-- .widget-content -->

				</div><!-- .widget -->

			</div><!-- #sidebar -->

			<div id="content" class="col col-8 col-last">
					
				<?php if(!empty($postInfo)):?>
				<?php foreach($postInfo as $val):?>
				<div class="blog-post blog-post-single">

					<div class="blog-post-thumb">
						<img src="<?=$val['postpic'];?>" alt="" />
					</div><!-- .blog-post-thumb -->

					<div class="blog-post-main clearfix">
					
						<div class="blog-post-info">

							<div class="blog-post-info-inner">
						
								<div class="blog-post-title">
									<h1><?=$val['title'];?></h1>
								</div><!-- .blog-post-title -->

								<div class="blog-post-meta">
									<?php  echo date('Y-m-d H:i:s' , $val['postime']);?>, In: <a href="index?m=category&a=selCatePost&cid=<?=$val['cid'];?>"><?=$val['classname'];?></a>
								</div><!-- .blog-post-meta -->

								<p>
								浏览量：<?=$val['views'];?>
								回复量：<?php if(!empty($replyInfo)):?><?php echo count($replyInfo);?><?php else: ?>0<?php endif;?>
								<a href="index.php?m=details&a=love&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>">点赞:<?=$val['love'];?><img src="public/images/home/love.png" alt="" style='margin-left: 5px;margin-top: 2px;'></a>
								</p>
								<div class="blog-post-content">
									
									<p><?=$val['content'];?></p>
									<h3>What Is <?=$val['title'];?>?</h3>

								</div><!-- .dslc-blog-post-content -->

							</div><!-- .blog-post-info-inner -->

							<!-- 一键分享的代码 Start -->
							<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
							<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
							<!-- 一键分享的代码 End -->

						</div><!-- .blog-post-info -->
						
					</div><!-- .blog-post-main -->

				</div><!-- .blog-post -->

				<?php if(isset($_SESSION['username']) && $_SESSION['undertype'] == 1):?>
				<div id="leave-comment">

					<div class="white-wrap">

						<div class="section-heading">
							<span class="section-heading-line"></span>
							<span class="section-heading-text">发表文章</span>
						</div><!-- .section-heading -->

						<form action="index.php?m=details&a=addPost&cid=<?=$_GET['cid'];?>" method="post" enctype="multipart/form-data">
							
							<div class="clearfix">

								<div class="leave-comment-name col col-4">
									<input name="title" type="text" value="" size="30" placeholder="TITLE *" aria-required="true">
								</div><!-- .leave-comment-name -->

								<div class="leave-comment-email col col-4">
									<input name="pic" type="file" value="" aria-required="true">
								</div><!-- .leave-comment-email -->

							</div><!-- .clearfix -->
							
							<div class="leave-comment-message">
								<textarea name="content" placeholder="COMMENT" aria-required="true"></textarea>
							</div><!-- .leave-comment-message -->
							
							<div class="leave-comment-submit">
								<input name="submit" type="submit" id="submit" class="submit" value="点击发表文章" />
							</div><!-- .leave-comment-submit -->

						</form>

					</div><!-- .white-wrap -->

				</div><!-- #leave-comment -->
				<?php endif;?>


				<?php if(!empty($replyInfo)):?>
				<?php foreach($replyInfo as $val):?>
				<div id="comments">

					<div class="white-wrap">

						<ol class="comments">

							<li class="comment">

								<span class="comment-author-avatar"><img src="<?=$val['pic'];?>" alt="" style='width:70px;height: 70px;' /></span>

								<div class="comment-inner">

									<div class="comment-info clearfix">

										<div class="comment-meta">
											<span class="comment-meta-author"><?=$val['username'];?></span>
											<span class="comment-meta-date"><?php echo date('Y-m-d H:i:s' , $val['postime']); ?></span>
										</div><!-- .comment-meta -->

										<span class="comment-reply">
											<a rel="nofollow" href="index.php?m=details&a=single&cid=<?=$_GET['cid'];?>&tid=<?=$_GET['tid'];?>#reply">Reply</a>
										</span>

									</div><!-- .comment-info -->

									<div class="comment-main">

										<p><?=$val['content'];?></p>

									</div><!-- .comment-main -->

								</div><!-- .comment-inner -->


							
							</li><!-- .comment -->

						</ol>

					</div><!-- .white-wrap -->

				</div><!-- #comments -->
				<?php endforeach;?>
				<?php endif;?>

				<?php endforeach;?>
				<?php endif;?>


				<?php if(!empty($sameRes)):?>
				<div class="related-posts white-wrap">

					<div class="section-heading">
						<span class="section-heading-line"></span>
						<span class="section-heading-text">相似文章</span>
					</div><!-- .section-heading -->
					
					
					<div class="blog-posts-alt blog-posts-alt-diagonal-effect-enabled clearfix">
						<?php foreach($sameRes as $val):?>
						<div class="blog-post-alt carousel-item col col-4">

							<div class="blog-post-alt-thumb">

								<div class="blog-post-alt-thumb-inner">
									<a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>"><img src="<?=$val['postpic'];?>" alt=""  /></a>
								</div><!-- .blog-post-alt-thumb-inner -->
								<div class="blog-post-alt-thumb-cover"></div>

							</div><!-- .blog-post-alt-thumb -->

							<div class="blog-post-alt-main">

								<div class="blog-post-alt-main-inner">

									<div class="blog-post-alt-date">
										October 12th, 2015
									</div><!-- .blog-post-alt-date -->

									<div class="blog-post-alt-title">
										<h2><a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>"><?=$val['title'];?></a></h2>
									</div><!-- .blog-post-alt-title -->

									<div class="blog-post-alt-cat">
										<a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>"><?=$val['classname'];?></a>
									</div><!-- .blog-post-alt-cat -->

									<div class="blog-post-alt-read-more">
										<a href="index.php?m=details&a=single&cid=<?=$val['cid'];?>&tid=<?=$val['tid'];?>">READ ARTICLE</a>
									</div><!-- .blog-post-alt-read-more -->

								</div><!-- .blog-post-alt-main-inner -->

							</div><!-- .blog-post-alt-main -->
						
						</div><!-- .blog-post-alt -->
						<?php endforeach;?>
					</div><!-- .blog-posts-alt -->
					
				</div><!-- .related-posts -->
				<?php endif;?>
				

	
				<a name="reply"></a>
				
				<div id="leave-comment">

					<div class="white-wrap">

						<div class="section-heading">
							<span class="section-heading-line"></span>
							<span class="section-heading-text">你可以在这里发表你的观点</span>
						</div><!-- .section-heading -->

						<form action="index.php?m=details&a=addReply&cid=<?=$_GET['cid'];?>&tid=<?=$_GET['tid'];?>" method="post"> 							
							
							<div class="leave-comment-message">
								<textarea name="comment" placeholder="COMMENT" aria-required="true"></textarea>
							</div><!-- .leave-comment-message -->
							

							<div>
								<input type="text" name='code' style='float:left;margin-top:20px;' placeholder="请输入验证码" />

            					<img src="index.php?m=details&a=verify" onclick="this.src='index.php?m=details&a=verify'" id='img' style='height:50px;margin-top:20px;margin-left:10px;width:120px;float:left;' />

							</div>

							<div style="clear:both;"></div>

							<div class="leave-comment-submit">
            											
								<input name="submit" type="submit" id="submit" class="submit" value="点击发表回复" />
							</div><!-- .leave-comment-submit -->

						</form>

					</div><!-- .white-wrap -->

				</div><!-- #leave-comment -->
				
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
<script>
      var oBtn= document.getElementById('btn');
      var oImg= document.getElementById('img');
      oBtn.onclick = function ()
      {
        oImg.src = 'index.php?m=details&a=verify?'+Math.random();
      }
</script>	


	<!-- JavaScript -->
	<script type="text/javascript" src="public/js/home/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="public/js/home/plugins.js"></script>
	<script type="text/javascript" src="public/js/home/main.js"></script>

</body>
</html>
