<?php

namespace controller;
use framework\Code;
use framework\Upload;
use framework\Image;
use model\UserModel;

class UserController extends Controller
{
	//使用一个变量，用来承接model类的对象
	public $user;
	function __construct()
	{
		parent::__construct();
		$this->user = new UserModel();
	}

	function reg()
	{

		$this->display();
	}

	function dealReg()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];
		$email = $_POST['email'];
		// $verify = $_POST['code'];

		$shouji = $_POST['verify'];

		if(strtolower($shouji) != $_SESSION['code1'])
		{
			$this->notice('手机验证码输入错误');
			die;
		}

		// 判断用户名
		if(mb_strlen($username) < 2 || mb_strlen($username) > 4)
		{
			$msg = '用户名长度在2到4位,请重新输入';
			$this->notice($msg);
			die;
		}else
		{
			$res = $this->user->selExistsUname($username);
			if($res)
			{
				$this->notice('用户名已存在');
				die;
			}
		}

		// 判断密码
		if($password != $confirm)
		{
			$this->notice('两次输入密码不一致');
			die;
		}else if(mb_strlen($password) < 4)
		{
			$this->notice('密码长度不能小于4位');
			die;
		}

		if(!preg_match('/^[\w-]+@([a-zA-Z0-9-]+\.)+((com)|(cn)|(net)|(edu))$/i', $email))
		{
			$this->notice('邮箱格式错误');
			die;
		}

		$data['phone'] = $_POST['phone'];
		$data['username'] = $username;
		$data['password'] = md5($password);
		$data['undertype'] = 0;
		$data['email'] = $email;
		$ip = $_SERVER['REMOTE_ADDR'];
		if(!strcmp($ip, '::1'))
		{
			$ip = '127.0.0.1';
		}
		$data['regip'] = ip2long($ip);
		$data['regtime'] = time();
		$data['lastime'] = time();

		$addUser = $this->user->doAdd($data);

		if($addUser)
		{

			$uid = mysqli_insert_id($this->user->link);

			$recUser = $this->user->selRecUser($uid);

			$_SESSION['username'] = $recUser[0]['username'];
			$_SESSION['uid'] = $recUser[0]['uid'];
			$_SESSION['password'] = $recUser[0]['password'];
			$_SESSION['undertype'] = $recUser[0]['undertype'];
			$_SESSION['email'] = $recUser[0]['email'];
			$_SESSION['autograph'] = $recUser[0]['autograph'];
			$_SESSION['pic'] = $recUser[0]['pic'];
			$_SESSION['ip'] = $recUser[0]['regip'];
			$_SESSION['phone'] = $recUser[0]['phone'];

			$this->notice('注册成功' , 'index.php');
		}else
		{
			$this->notice('注册失败');
		}

	}

	// 登录
	function login()
	{
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$res = $this->user->isMatch($username , $password);

		if($res)
		{

			$_SESSION['uid'] = $res[0]['uid'];
			$_SESSION['username'] = $res[0]['username'];
			$_SESSION['password'] = $res[0]['password'];
			$_SESSION['undertype'] = $res[0]['undertype'];
			$_SESSION['email'] = $res[0]['email'];
			$_SESSION['autograph'] = $res[0]['autograph'];
			$_SESSION['phone'] = $res[0]['phone'];
			$_SESSION['pic'] = $res[0]['pic'];

			// $this->assign('res' , $res);
			$this->notice('登录成功', 'index.php');
			die;
		}else
		{
			$this->notice('用户名与密码不匹配');
		}
	}

	// 退出
	function loginout()
	{
		$data['lastime'] = time();

		$uid = $_SESSION['uid'];

		$upLastTime = $this->user->doPerData($data , $uid);
		
		$_SESSION[] = [];
		session_destroy();

		$this->notice('退出成功' , 'index.php');
		die;
	}

	// 关于我界面
	function about()
	{
		$this->display('user/about.html');
	}

	// 个人资料界面
	function personal()
	{
		if(isset($_SESSION['uid']))
		{
			$uid = $_SESSION['uid'];
		}else
		{
			$this->notice('请登录');
			die;
		}

		$selPerson = $this->user->selRecUser($uid);

		$_SESSION['pic'] = $selPerson[0]['pic'];

		$this->assign('selPerson' , $selPerson);

		$this->display('user/personal.html');
	}

	function updateData()
	{
		if(isset($_SESSION['username']))
		{
			$uid = $_SESSION['uid'];
		}else
		{
			$this->notice('请登录');
			die;
		}

		$up = new Upload();
		$img = new Image();

		$upPath = $up->uploadFile('head')[1];

		$sfPath = $img->suofang($upPath , 600 , 700);

		if(!empty($_POST['new']))
		{

			$old = md5($_POST['old']);

			$existsUser = $this->user->doSelUser($old);

			if(!$existsUser)
			{
				$this->notice('旧密码输入错误');
				die;
			}

			$data['password'] = md5($_POST['new']);
		}

		if(isset($sfPath) && isset($upPath))
		{
			$data['pic'] = $sfPath;
		}
		
		if(isset($_POST['autograph']))
		{
			$data['autograph'] = $_POST['autograph'];
		}
		
		if(isset($_POST['address']))
		{
			$data['address'] = $_POST['address'];
		}
		

		$personInfo = $this->user->doPerData($data , $uid);

		if($personInfo)
		{
			$selPerson = $this->user->selRecUser($uid);
			$this->assign('selPerson' , $selPerson);
			$this->notice('修改个人资料成功');
			die;
		}else
		{
			$this->notice('修改个人资料失败');
			die;
		}

		
	}



}