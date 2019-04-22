<?php

namespace controller;
use \model\CategoryModel as CModel;
use model\DetailsModel as DModel;
use framework\Image;
use framework\Code;
class DetailsController extends Controller
{
	//使用一个变量，用来承接model类的对象
	public $details;
	public $CateInfo;
	function __construct()
	{
		parent::__construct();
		$this->CateInfo = new CModel();
		$this->details = new DModel();
	}

	function single()
	{
		$this->samePost();
		$this->addView();
		$this->seaCate();
		$this->viewPost();
		$this->display();
	}

	// 查询板块信息
	function seaCate()
	{
		$cateInfo = $this->CateInfo->doSeaCate();
 
		$this->assign('cateInfo' , $cateInfo); 
			
	}


	// 遍历帖子信息
	function viewPost()
	{
		if(isset($_GET['tid']))
		{
			$tid = $_GET['tid'];
			$postInfo = $this->details->selPostInfo($tid);
			$replyInfo = $this->details->selReplyInfo($tid);
			$this->assign('postInfo' , $postInfo);
			$this->assign('replyInfo' , $replyInfo);
		}else
		{
			$this->notice('禁止非法操作' , 'index.php');
			die;
		}
	}

	// 浏览量
	function addView()
	{
		if(isset($_GET['tid']))
		{
			$tid = $_GET['tid'];
		}else
		{
			$this->notice('禁止非法操作' , 'index.php');
			die;
		}

		$prevView = $this->details->selPostInfo($tid);

		$data['views'] = $prevView[0]['views'] + 1;

		$view = $this->details->doLove($data , $tid);

	}

	// 发帖
	function addPost()
	{

		$data['authorid'] = $_SESSION['uid'];
		$data['title'] = $_POST['title'];
		if(isset($_GET['cid']))
		{
			$cid = $_GET['cid'];
		}else
		{
			$this->notice('禁止非法操作' , 'index.php');
			die;
		}
		$data['cid'] = $cid;
		$data['content'] = $_POST['content'];
		$data['postime'] = time();
		$ip = $_SERVER['REMOTE_ADDR'];
		if(!strcmp($ip, '::1'))
		{
			$ip = '127.0.0.1';
		}
		$data['postip'] = ip2long($ip);

		$originPic = $_FILES['pic']['tmp_name'];

		$image = new Image('./upload/' , false , 'jpeg');

		$path = $image->suofang($originPic , 2000 , 950);

		$data['postpic'] = $path;

		$res = $this->details->doAddPost($data);

		if($res)
		{
			$this->notice('发帖成功');
			die;
		}else
		{
			$this->notice('发帖失败');
			die;
		}

	}

	// 发表评论
	function addReply()
	{
		if(isset($_SESSION['username']))
		{
			$data['authorid'] = $_SESSION['uid'];
			if(isset($_GET['cid']))
			{
				$cid = $_GET['cid'];
			}else
			{
				$this->notice('禁止非法操作' , 'index.php');
				die;
			}
			$data['cid'] = $cid;
			if(isset($_GET['tid']))
			{
				$tid = $_GET['tid'];
			}else
			{
				$this->notice('禁止非法操作' , 'index.php');
				die;
			}

			$verify = $_POST['code'];

			if(strtolower($verify) != strtolower($_SESSION['code']))
			{
				$this->notice('验证码输入错误');
				die;
			}

			$data['replyid'] = $tid;
			$data['tidtype'] = 0;
			$data['content'] = $_POST['comment'];
			$data['postime'] = time();
			$ip = $_SERVER['REMOTE_ADDR'];
			if(!strcmp($ip, '::1'))
			{
				$ip = '127.0.0.1';
			}
			$data['postip'] = ip2long($ip);
			$res = $this->details->doAddPost($data);

			if($res)
			{
				$this->notice('评论成功');
				die;
			}else
			{
				$this->notice('评论失败');
				die;
			}			
		}else
		{
			$this->notice('请登录' , 'index.php?m=user&a=reg');
		}
	}

	// 搜索
	function search()
	{
		if(!empty($_POST['search']))
		{
			$key = $_POST['search'];

			$seaRes = $this->details->doSearch($key);
		}else if(!empty($_GET['search']))
		{

			$key = $_GET['search'];

			$seaRes = $this->details->doSearch($key);
		}else
		{
			$this->notice('请输入您要查询的关键词');
			die;
		}

		$this->assign('seaRes' , $seaRes[1]);
		$this->assign('seaResAllPage' , $seaRes[0]);
		$this->assign('key' , $key);


		$this->display('details/search.html');
	}	

	// 点赞
	function love()
	{

		if(empty($_GET['tid']))
		{
			$this->notice('禁止非法操作' , 'index.php');
			die;
		}else
		{
			$tid = $_GET['tid'];
		}

		$nowLoveNum = $this->details->selLoveNum($tid);

		$nowLoveNum = $nowLoveNum[0]['love'];

		$data['love'] = $nowLoveNum + 1;

		$love = $this->details->doLove($data , $tid);

		if($love)
		{
			$this->notice('点赞成功');
			die;
		}else
		{
			$this->notice('点赞失败');
			die;
		}

		
	}

	// 留言
	function addMessage()
	{
		if(isset($_SESSION['username']))
		{
			$data['authorid'] = $_SESSION['uid'];
			$data['cid'] = 0;
			$data['tidtype'] = 2;
			$data['content'] = $_POST['content'];
			$data['postime'] = time();
			$ip = $_SERVER['REMOTE_ADDR'];
			if(!strcmp($ip, '::1'))
			{
				$ip = '127.0.0.1';
			}
			$data['postip'] = ip2long($ip);
			$res = $this->details->doAddPost($data);

			if($res)
			{
				$this->notice('留言成功,我会尽快回复你哦');
				die;
			}else
			{
				$this->notice('留言失败,不要伤心,再接再励');
				die;
			}			
		}else
		{
			$this->notice('请登录' , 'index.php?m=user&a=reg');
			die;
		}		
	}

	function verify()
	{
		$code = new Code();
		$code->outImage();
		//保存验证码
		$_SESSION['code'] = $code->code;
	}

	// 查询相关文章
	function samePost()
	{
		// 查询出当前文章的信息
		if(empty($_GET['tid']))
		{
			$this->notice('禁止非法操作' , 'index.php');
			die;
		}else
		{
			$tid = $_GET['tid'];
		}

		$nowInfo = $this->details->selPostInfo($tid);

		$content = $nowInfo[0]['content'];
		$title = $nowInfo[0]['title'];


		$sameRes = $this->details->selSame($content , $title , $tid);

		$this->assign('sameRes' , $sameRes);
	}

}