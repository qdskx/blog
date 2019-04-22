<?php
namespace controller;
use model\CategoryModel as CModel;
use model\DetailsModel as DModel;
class CategoryController extends Controller
{
	public $cate;
	public $details;
	function __construct()
	{
		parent::__construct();
		$this->cate = new CModel();
		$this->details = new DModel();
	}

	function category()
	{
		$this->SelPost();
		$this->SelCate();
		$this->display();
	}

	// 查所有板块
	function SelCate()
	{
		$cateInfo = $this->cate->doSeaCate();
		$this->assign('cateInfo' , $cateInfo);
	}

	function SelPost()
	{
		$postInfo = $this->details->doSelPost();

		$this->assign('postInfo' , $postInfo);
	}

	// 差每个板块对应的帖子
	function selCatePost()
	{
		if(isset($_GET['cid']))
		{
			$cid = $_GET['cid'];

			$catePost = $this->cate->CatePost($cid);

			$this->assign('postRes' , $catePost[1]);
			$this->assign('postResAllpage' , $catePost[0]);

		}else
		{
			$this->notice('禁止非法操作');
			die;
		}

		$this->display('category/catePost.html');
	}


}