<?php

namespace model;
use framework\Model;
class UserModel extends Model
{	

	// 注册时判断用户是否已经存在
	function selExistsUname($username)
	{

		return $this->table('bg_user')->field('*')->where("username = '$username'")->select();
	}

	// 注册用户
	function doAdd($data)
	{

		return $this->table('bg_user')->insert($data);
	}

	// 登录的时候做的判断
	function isMatch($username , $password)
	{
		return $this->table('bg_user')->field('*')->where("username = '$username' and password = '$password'")->select();
	}

	// 查出刚刚注册的用户的信息
	function selRecUser($uid)
	{
		return $this->table('bg_user')->where("uid = $uid")->select();
	}

	function doPerData($data , $uid)
	{
		return $this->table('bg_user')->where("uid = $uid")->update($data);
	}

	function doSelUser($old)
	{
		return $this->table('bg_user')->where("password = '$old'")->select();
	}


}