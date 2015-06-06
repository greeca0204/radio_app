<?php
	/*
	 * 页面名称：index.php
	 * 页面功能：网站前台
	 * 页面类别：业务层
	 * 编写日期：2014.05.07
	 */
	
	header('Content-Type: text/html; charset=UTF-8');
	include("global.inc.php");
	r_require_once("/lib/MultiActions.php");

	//首页
	function _default()
	{
		r_require_once("/smarty/MySmarty.php");
		r_require_once("/DAL/News.php");

		$newsId = getRequestIntParam('newsId', 0);
		$tpl = new MySmarty();
		$news = new News();

		$tpl->assign("news",$news->getNews($newsId));
		$tpl->display("news.html");
	}
?>