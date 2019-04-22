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
            <li>
              <a href="index.php?m=user&a=about">关于我</a>
            </li>           
            <li>
              <a href="#">帖子 详情</a>
            </li>
            <li class="current-menu-item"><a href="index.php?m=user&a=personal">个人资料</a></li>
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
<!--/header-->
<div class="about-content">
<form action="index.php?m=user&a=updateData" method="post" enctype="multipart/form-data">
<?php if(!empty($selPerson)):?>
<?php foreach($selPerson as $val):?>
  <div class="container">
    <div style="float:left">
      <img src="<?=$val['pic'];?>" alt="" style='width: 400px;border-radius: 50%;'>
      <input type="file" name='head' style='margin-top:10px;width: 300px;height: 30px;'/> 
    </div> 

    <div style='float: left;margin-left: 35px;width: 705px;margin-right: 0;'>
        <h2>自我介绍</h2>
        <div class="accordions purple">
          
          <div class="accordion">
            <div class="accordion-title">修改密码</div>
            <div class="accordion-content">
              原密码
              <input type="password" name="old" />
              新密码
              <input type="password" name='new' placeholder="不修改请留白" />
            </div><!-- .accordion-content -->
          </div><!-- .accordion -->

          <div class="accordion">
            <div class="accordion-title">说一下你最向往的地方？</div>
            <div class="accordion-content">
              <input type="text" name='address' value="<?=$val['address'];?>"  />
            </div><!-- .accordion-content -->
          </div><!-- .accordion -->

          <div class="accordion">
            <div class="accordion-title">个性签名</div>
            <div class="accordion-content">
              <input type="text" name='autograph' value="<?=$val['autograph'];?>" />
            </div><!-- .accordion-content -->
          </div><!-- .accordion -->

        </div><!-- .accordions -->
    </div>  
    <input type="submit" name='sub' value='提交' />
  </div>
  <?php endforeach;?>
<?php endif;?>
</form>
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
  
