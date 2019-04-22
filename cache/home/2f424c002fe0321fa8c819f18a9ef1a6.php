<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>登录-注册</title>

<link rel="stylesheet" href="public/css/home/log-reg.css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
  <script type="text/javascript" src="./public/js/home/jquery-1.8.1.min.js"></script>
</head>
<body>
<div style="text-align:center;clear:both">


<div class="cotn_principal">
  <div class="cont_centrar">
    <div class="cont_login">
      <div class="cont_info_log_sign_up">
        <div class="col_md_login">
          <div class="cont_ba_opcitiy">
            <h2>登录</h2>
            <p>点击下面的按钮登录.</p>
            <button class="btn_login" onClick="cambiar_login()">登录</button>
          </div>
        </div>
        <div class="col_md_sign_up">
          <div class="cont_ba_opcitiy">
            <h2>注册</h2>
            <p>点击下面的按钮注册.</p>
            <button class="btn_sign_up" onClick="cambiar_sign_up()">注册</button>
          </div>
        </div>
      </div>
      <div class="cont_back_info">
        <div class="cont_img_back_grey"> <img src="public/images/home/po.jpg" alt="" /> </div>
      </div>
      <div class="cont_forms" >
        <div class="cont_img_back_"> <img src="public/images/home/po.jpg" alt="" /> </div>
        <div class="cont_form_login"> <a href="#" onClick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
          <h2>登录</h2>

          <form action="index.php?m=user&a=login" class="formBox" method="post">
          <input class="inp" name="username" type="text" placeholder="请输入用户名" />
          <input class="inp" name="password" type="password" placeholder="请输入密码" />
          <button class="btn_login" type="submit">登录</button>
          </form>
        </div>







        <div class="cont_form_sign_up"> <a href="#" onClick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
          <h2>注册</h2>
          <form action="index.php?m=user&a=dealReg" method="post" class="formBox">
            <input class="inp" name="username" type="text" placeholder="请输入用户名" />
            <input class="inp" name="password" type="password" placeholder="请输入密码" />
            <input class="inp" name="confirm" type="password" placeholder="确认密码" />
            <input class='inp' type="text" name='email' placeholder="请输入邮箱">


            <!-- <input type="text" name='code' />
            <img src="index.php?m=user&a=verify" onclick="this.src='index.php?m=user&a=verify'" id='img' style='height:50px;margin-top:10px;width:108px;' /> -->

            <input class='inp' type="text" id="phone" name='phone' placeholder="请输入手机号" />

            <input type="text" class='inp' id="code" name='verify' placeholder="请输入获取到的验证码" style='width:150px;' /> 
            <a href='javascript:;'  class="btn btn-info" id='getcode' onclick='getcode()' style='color:#eaeaea;text-decoration:none;'>获取验证码</a>



            <button class="btn_sign_up" type="submit">注册</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="public/js/home/log-reg.js"></script>
<script>
      var oBtn= document.getElementById('btn');
      var oImg= document.getElementById('img');
      oBtn.onclick = function ()
      {
        oImg.src = 'index.php?m=user&a=verify?'+Math.random();
      }
    </script>
</body>
<script>
  function getcode()
  {
    $('#getcode').text('60秒后重新获取');
    $('#getcode').removeAttr('onclick');
    var phone = $('#phone').val();
    //写个定时修改文本settime
    var time = 59;
    var into = setInterval(function(){

      $('#getcode').text(time+'秒后重新获取');
      time =time -1;
      if(time<=-1){
        clearInterval(into);
        $('#getcode').text('获取验证码');
        $('#getcode').attr('onclick');
      }
    },1000);
    //ajax    参数1,url  index1.php   参数2, 数据   1234565432
    $.get('public/index1.php',{phone:phone},function(date){
      console.log(date);
    });
  }
</script>


</html>

