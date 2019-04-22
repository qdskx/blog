<?php

namespace controller;
use \model\CategoryModel as CModel;
use \model\DetailsModel as DModel;
class IndexController extends Controller
{

	public $CateInfo;
	public $DetaInfo;
	function __construct()
	{
		parent::__construct();
		$this->CateInfo = new CModel();
		$this->DetaInfo = new DModel();
	}


	function index()
	{
		//什么都用写，代表显示app/view/index(控制器)/index(方法名字).html
		
 		$this->seaCate();
 		$this->doSelCent();

		$this->display();
	}

	function seaCate()
	{
		$cateInfo = $this->CateInfo->doSeaCate();
 
		$this->assign('cateInfo' , $cateInfo); 
			
	}


	// 查回复量
	function doSelCent()
	{

		$result = $this->DetaInfo->doSelCent();

		$this->assign('result' , $result[1]);

		if(!empty($result[1]))
		{
			foreach($result[1] as $val)
			{
				$teizi = $this->DetaInfo->selReplycount($val['tid']);

				$tid = $val['tid'];
				$num = $teizi[0]['num'];

				//var_dump($teizi);

				$total[$tid] = $num;
				// $total[$tid] = $teizi[0]['love'];
				$this->assign('total' , $total);

			}
		}


		$this->assign('allPage' , $result[0]); 
	}

}
