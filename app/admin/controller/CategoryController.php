<?php
namespace controller;
use model\CategoryModel as CModel;
class CategoryController extends Controller 
{
	public $cate;
	function __construct()
	{
		parent::__construct();
		$this->cate = new CModel();
	}

	function category()
	{
		if(empty($_SESSION['username']))
		{
			$this->notice('禁止非法操作' , 'admin.php?m=index&a=index');
			die;
		}
		
		$this->cateInfo();
		$this->display('index/adminCate.html');
	}

	function cateInfo()
	{
		$allCate = $this->cate->selCate();

		$this->assign('allCate' , $allCate);
	}

	function doUpdate()
	{
		foreach($_POST['cid'] as $val)
		{
			$data['orderby'] = $_POST['order'][$val];
			$data['classname'] = $_POST['name'][$val];
			$data['intro'] = $_POST['intro'][$val];

			$res = $this->cate->doUpdateCate($data , $val);
		}

		if($res)
		{
			$this->notice('修改板块成功');
			die;
		}else
		{
			$this->notice('修改板块失败');
			die;
		}
	}


}