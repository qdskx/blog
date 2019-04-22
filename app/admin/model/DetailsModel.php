<?php

namespace model;
use framework\Model;
use framework\Page;

class DetailsModel extends Model 
{
	// 便利帖子
	function selPost()
	{
		$total = $this->table('bg_details , bg_category')->where("tidtype = 1 and bg_category.cid = bg_details.cid")->count('tid');

		$paging = new Page(5 , $total);

		$offset = $paging->limit();

		$pageRes = $this->table('bg_details , bg_category')->field('*')->where('tidtype = 1 and bg_category.cid = bg_details.cid')->order('postime desc')->limit($offset)->select();

		$allPage = $paging->allPage();

		return [$allPage , $pageRes , $total];
	}

	// 遍历回帖
	function selReply()
	{
		$total = $this->table('bg_details , bg_category , bg_user')->where("tidtype = 0 and bg_category.cid = bg_details.cid and uid = authorid")->count('tid');

		$paging = new Page(5 , $total);

		$offset = $paging->limit();

		$pageRes = $this->table('bg_details , bg_category , bg_user')->field('*')->where('tidtype = 0 and bg_category.cid = bg_details.cid and uid = authorid')->order('postime desc')->limit($offset)->select();

		$allPage = $paging->allPage();

		return [$allPage , $pageRes , $total];		
	}

	function delPost($tid)
	{
		return $this->table('bg_details')->where("tid in ($tid)")->delete();
	}

	// 遍历留言
	function selAllMess()
	{
		$total = $this->table('bg_details , bg_user')->where("tidtype = 2 and uid = authorid")->count('tid');

		$paging = new Page(5 , $total);

		$offset = $paging->limit();

		$pageRes = $this->table('bg_details , bg_user')->field('*')->where('tidtype = 2 and uid = authorid')->order('postime desc')->limit($offset)->select();

		$allPage = $paging->allPage();

		return [$allPage , $pageRes , $total];		
	}
}