<?php

namespace model;
use framework\Model;
class CategoryModel extends Model 
{
	function selCate()
	{
		return $this->table('bg_category')->field('*')->select();
	}

	function doUpdateCate($data , $val)
	{
		return $this->table('bg_category')->where("cid = $val")->update($data);
	}
}