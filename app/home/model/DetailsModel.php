<?php
namespace model;
use framework\Model;
use framework\Page;
class DetailsModel extends Model
{
	// 首页对帖子的遍历
	function doSelCent()
	{

		$total = $this->table('bg_details , bg_category , bg_user')->field('*')->where('bg_category.cid = bg_details.cid and uid = authorid and tidtype = 1')->count();

		$page = new Page( 3 , $total);

		$offset = $page->limit();

		$paging = $this->table('bg_details , bg_category , bg_user')->field('*')->where('bg_category.cid = bg_details.cid and uid = authorid and tidtype = 1')->order('postime desc')->limit($offset)->select();

		$allPage = $page->allPage();

		return [$allPage , $paging];
	}
	
	// 发帖
	function doAddPost($data)
	{

		return $this->table('bg_details')->insert($data);

	}

	// 帖子详情
	function selPostInfo($tid)
	{
		return $this->table('bg_details , bg_category')->field('*')->where("tid = $tid and bg_details.cid = bg_category.cid and tidtype = 1")->select();
	}

	// 评论详情
	function selReplyInfo($tid)
	{
		return $this->table('bg_details , bg_category , bg_user')->field('*')->where("replyid = $tid and bg_details.cid = bg_category.cid and uid = authorid and tidtype = 0")->select();		
	}

	// 搜索
	function doSearch($key)
	{
		$total = $this->table('bg_details , bg_category , bg_user')->field('*')->where("(username like '%$key%' or classname like '%$key%' or title like '%$key%' or content like '%$key%') and bg_category.cid = bg_details.cid and uid = authorid and tidtype = 1")->count();

		$page = new Page( 3 , $total);

		$offset = $page->limit();

		$paging = $this->table('bg_details , bg_category , bg_user')->field('*')->where("(username like '%$key%' or classname like '%$key%' or title like '%$key%' or content like '%$key%') and bg_category.cid = bg_details.cid and uid = authorid and tidtype = 1")->order('postime desc')->select();

		// var_dump($paging);

		$allPage = $page->allPage();

		return [$allPage , $paging];
	}

	// 首页对回复量的遍历
	function selReplycount($tid)
	{
		
		 return $this->table('bg_details , bg_user , bg_category')->field('love , tid , count("tid") as num')->where("replyid = $tid and tidtype = 0 and isdel = 0 and uid = authorid and bg_category.cid = bg_details.cid")->select();
		 // var_dump($this->sql);
	}

	// 查询当前帖子的点赞数量
	function selLoveNum($tid)
	{
		return $this->table('bg_details')->field('love')->where("tid = $tid")->select();
	}

	// 给帖子点赞数目加一
	function doLove($data , $tid)
	{
		return $this->table('bg_details')->where("tid = $tid")->update($data);
	}

	// 查询板块内容下面的最近帖子
	function doSelPost()
	{
		return $this->table('bg_details , bg_category')->field('*')->where('tidtype = 1 and bg_details.cid = bg_category.cid')->order('postime desc')->limit('3')->select();
	}

	// 相关文章标题和内容的查询
	function selSame($content , $title , $tid)
	{
		return $this->table('bg_details , bg_category , bg_user')->field('*')->where("(title like '%$title%' or content like '%$content%') and (bg_category.cid = bg_details.cid and tidtype = 1 and tid != $tid and uid = authorid)")->limit('3')->select();
	}
}