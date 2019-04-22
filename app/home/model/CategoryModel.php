<?php
namespace model;
use framework\Model;
use framework\Page;
class CategoryModel extends Model
{
	// 查所以板块
	function doSeaCate()
	{
		return $this->table('bg_category')->field('*')->limit('4')->select();
	}

	// 查板块的对于帖子
	function CatePost($cid)
	{
		$total = $this->table('bg_category , bg_details')->field('tid')->where("bg_category.cid = bg_details.cid and isdel = 0 and bg_details.cid = $cid and isdel = 0 and tidtype = 1")->count('tid');

		$paging = new Page(4 , $total);

		$offset = $paging->limit();

		$pageRes = $this->table('bg_details , bg_category')->field('*')->where("bg_category.cid = bg_details.cid and bg_details.cid = $cid and isdel = 0 and tidtype = 1")->order('postime desc')->limit($offset)->select();

		$allPage = $paging->allPage();


		return [$allPage , $pageRes];
	}
	
}