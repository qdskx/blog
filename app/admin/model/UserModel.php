<?php

namespace model;
use framework\Model;
use framework\Page;
class UserModel extends Model
{	

	function isExistsUser($username , $password)
	{
		return $this->table('bg_user')->field('*')->where("username = '$username' and password = '$password' and undertype = 1")->select();
	}

	function doSelAllUser()
	{
		$total = $this->where('undertype = 0')->count();

		$paging = new Page(5 , $total);

		$offset = $paging->limit();

		$pageRes = $this->where('undertype = 0')->limit($offset)->select();

		$allPage = $paging->allPage();

		return [$allPage , $pageRes , $total];
	}

	function doDel($uid)
	{
		return $this->table('bg_user')->where("uid in ($uid)")->delete();
	}

	function doDelDeta($uid)
	{
		return $this->table('bg_details')->where("authorid in ($uid)")->delete();
	}

}