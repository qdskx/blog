<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Personal Blog a Blogging Category Flat Bootstarp  Responsive Website Template | About :: w3layouts</title>
	<link href="public/css/home/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="public/css/home/style.css" rel='stylesheet' type='text/css' />
	<link href="public/css/home/main.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<!-- <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'> -->
		<!-- <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'> -->
		<!----//webfonts---->
		  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="public/js/home/move-top.js"></script>
<script type="text/javascript" src="public/js/home/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->

</head>
<body>
<!---header---->			
	<header id="header">

		<div id="header-top">

			<div class="wrapper clearfix">
				
				<nav id="navigation">
					<ul class="menu">
						<li>
							<a href="index.php">首页</a>
						</li>
						<li class="current-menu-item">
							<a href="index.php?m=user&a=about">关于我</a>
						</li>						
						<li>
							<a href="#">帖子 详情</a>
						</li>
						<li><a href="index.php?m=user&a=Personal">个人资料</a></li>
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

				<a href="index.html" title="Josephine" rel="home">						
					<img src="public/images/home/logo.png" alt="Josephine" />
				</a>

			</div><!-- .wrapper -->

		</div><!-- #header-main -->

	</header><!-- #header -->
<!--/header-->
<div class="about-content">
	 <div class="container">
		 <h2>你也认为要战胜千年的黑暗 就需要花上千年的时间吗？？？</h2>
		 <div class="about-section">
			<div class="accordions purple">
				
				<div class="accordion">
					<div class="accordion-title">很乐意为大家分享一封我个人非常喜欢的信！</div>
					<div class="accordion-content">
						当王子知道公主生病的时候，王子正在打仗。
						王子说，他不管了。
						他要放下那场战争，他要逃亡，他要去看他的公主。
						可是他的战友跟他说，现在外面松枪林弹雨，
						所有人都在看你，看你的动静。
						你现在去是自投罗网。
						王子还是逃了出去，穿过重重阻拦和岗哨。
						终于到了公主的地方。
						王子推开门，
						他哽噎着想说很多话，
						他连对不起都说得支离破碎，
						他连怎么抱她是最好的姿势，都弄不明白。
						终于跪下来大哭，女孩儿也哭了。
						因为她从来不知道，
						为什么两个相爱的人，
						在受苦的时候想要接近。
						会那么，疼
					</div><!-- .accordion-content -->
				</div><!-- .accordion -->

				<div class="accordion">
					<div class="accordion-title">这将会是我最想去的地方</div>
					<div class="accordion-content">
						若有风来 便随风来 等风走 若有思念来袭 便随思念来 等思念走 如此 定然会有痛苦吧 或许会留下来就此生活吧 或许在生活中会就此离去吧 
					</div><!-- .accordion-content -->
				</div><!-- .accordion -->

				<div class="accordion">
					<div class="accordion-title">换做是你，会如何欣赏这首歌？？</div>
					<div class="accordion-content">
						这是一首有些失望但不绝望，哀而不伤的歌。我们之前所有的错过，再遇见某个人之后就都是对的。你在某一刻突然释怀，之前所纠缠你的冬天就此离开，再也不会阴云密布，再也不会大雪纷飞。你曾幻想过所有的未来，也曾对明天充满过期待。所以你满怀信心的等待，但是未来却偏离了你的安排。每到阴天的傍晚，你就更希望家里等你的是温暖的灯光，而不是冷冰冰的空气。你也给过自己机会，但他们始终不是你的等待。你不愿将就，所以你固执的等着爱情兜兜转转的找到你。在他来之前，你幻想过无数次见面的场景，排练过无数次相遇的对白。万事俱备，可怜东风。风拥着人海从你身边而过，你孤零零的像一颗礁石，海浪从你分开。即使如此，你也相信，你等，他就会来。你受过伤害，但漫长的时间已经让你愈合。你固执的等待，不顾家人的担心和朋友的关心，只是因为你相信他会来。总有一天，你穿过小路，他正从那边向你走来，拥抱住你，在你耳边轻轻道：“我遇见你是最美丽的意外。”
					</div><!-- .accordion-content -->
				</div><!-- .accordion -->

			</div><!-- .accordions -->	


				<div id="leave-comment">

					<div class="white-wrap">

						<div class="section-heading">
							<span class="section-heading-line"></span>
							<span class="section-heading-text">
							LOOK HERE ! 你可以给我留言</span>
						</div><!-- .section-heading -->

						<form action="index.php?m=details&a=addMessage" method="post">
							
							<div class="leave-comment-message">
								<textarea name="content" placeholder="想说什么呢" aria-required="true"></textarea>
							</div><!-- .leave-comment-message -->
							
							<div class="leave-comment-submit">
								<input name="submit" type="submit" id="submit" class="submit" value="提交" />
							</div><!-- .leave-comment-submit -->

						</form>

					</div><!-- .white-wrap -->

				</div><!-- #leave-comment -->				 
		  </div>		 
	  </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
	 <p>Copyrights © 2015 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>
  <!-- JavaScript -->
  <script type="text/javascript" src="public/js/home/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="public/js/home/plugins.js"></script>
  <script type="text/javascript" src="public/js/home/main.js"></script>

</body>
</html>
	
