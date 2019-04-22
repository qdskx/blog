<?php

namespace controller;
use model\DetailsModel as DModel;
class DetailsController extends Controller 
{
	public $details;

	function __construct()
	{
		parent::__construct();
		$this->details = new DModel();
	}

	function details()
	{

		if(empty($_SESSION['username']))
		{
			$this->notice('禁止非法操作' , 'admin.php?m=index&a=index');
			die;
		}

		$this->selAllPost();
		$this->display('index/adminPost.html');
	}

	// 查询所有帖子
	function selAllPost()
	{
		$allPost = $this->details->selPost();

		$this->assign('postRes' , $allPost[1]);
		$this->assign('allPage' , $allPost[0]);
		$this->assign('total' , $allPost[2]);
	}

	function reply()
	{
		$this->selAllReply();
		$this->display('index/adminRecycle.html');
	}

	// 查询所有回帖
	function selAllReply()
	{
		$allReply = $this->details->selReply();

		$this->assign('replyRes' , $allReply[1]);
		$this->assign('replyAllPage' , $allReply[0]);
		$this->assign('total' , $allReply[2]);		
	}

	// 删除帖子
	function delPost()
	{
		$tid = join(',' , $_POST['tid']);

		$res = $this->details->delPost($tid);

		if($res)
		{
			$this->notice('删除帖子成功' , true);
			die;
		}else
		{
			$this->notice('删除帖子失败');
			die;
		}
	}

	// 留言
	function message()
	{
		$this->selMess();
		$this->display('index/adminMessage.html');
	}

	// 查询留言
	function selMess()
	{
		$messRes = $this->details->selAllMess();

		$this->assign('replyRes' , $messRes[1]);
		$this->assign('replyAllPage' , $messRes[0]);
		$this->assign('total' , $messRes[2]);	
	}


}