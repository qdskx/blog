<?php
namespace controller;
use model\UserModel as UModel;
class UserController extends Controller
{

	public $user;

	function __construct()
	{
		parent::__construct();
		$this->user = new UModel();
	}

	function login()
	{
		$username = $_POST['username'];
		$password = MD5($_POST['password']);

		$res = $this->user->isExistsUser($username , $password);

		if($res)
		{	
			$_SESSION['uid'] = $res[0]['uid'];
			$_SESSION['username'] = $res[0]['username'];
			$_SESSION['password'] = $res[0]['password'];
			$_SESSION['undertype'] = $res[0]['undertype'];
			$_SESSION['email'] = $res[0]['email'];
			$_SESSION['autograph'] = $res[0]['autograph'];
			$_SESSION['pic'] = $res[0]['pic'];
			
			$this->notice('登录成功' , 'admin.php?m=user&a=user');
			die;
		}else
		{
			$this->notice('登录失败');
			die;
		}
	}

	// 博主登陆成功后现实的界面
	function user()
	{
		if(empty($_SESSION['username']))
		{
			$this->notice('禁止非法操作' ,  'admin.php?m=index&a=index');
			die;
		}
		$this->selAllUser();
		$this->display('index/adminUser.html');
	}

	function selAllUser()
	{

		$allUser = $this->user->doSelAllUser();


		$this->assign('allUser' , $allUser[1]);
		$this->assign('allPage' , $allUser[0]);
		$this->assign('total' , $allUser[2]);
	}

	function del()
	{
		$uid = join(',' , $_POST['uid']);

		$this->user->doDelDeta($uid);
		$delRes = $this->user->doDel($uid);

		if($delRes)
		{
			$this->notice('删除成功');
			die;
		}else
		{
			$this->notice('删除失败');
			die;
		}
	}

	function loginout()
	{
		$_SESSION[] = [];

		session_destroy();

		$this->notice('成功退出后台' , 'index.php?m=index&a=index');
		die;
	}
}