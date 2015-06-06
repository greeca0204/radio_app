<?php
	session_start();
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	
	if($_SESSION['username'] == null)
	{
		echo "<script>alert('请先登录！');location.href='index.php';</script>";
	}

	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");	

	function _default(){
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/smarty/MySmarty.php");
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/News.php");
		
		$tpl = new MySmarty("admin");		
		$news = new News();
		
		$tpl->assign("siteTitle","后台管理系统");
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $news->getTotalNewsList();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('news', $news->getNewsByPage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('news.php',$pageNum,$totalPages));
		$tpl->display("showNews.html");
	}
	
	function _new() {
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/News.php");

		$newsId = getRequestIntParam('newsId', 0);
		$title = getRequestStringParam('title', '');
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$summary = getRequestStringParam('summary', '');
		$content = getRequestStringParam('content', '');
		$isComment = getRequestIntParam('isComment', 0);
		$clickCount = getRequestIntParam('clickCount', 0);
		$isDeploy = getRequestIntParam('isDeploy', 0);
		$deployTime = getRequestStringParam('deployTime','');	
		$create_time = getRequestStringParam('create_time', '');
		$deployTime = strtotime($deployTime);
		$create_time = strtotime($create_time);

		$url = getRequestStringParam('url','');	
		$news_content = getRequestStringParam('news_content','');	
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$news_content = stripslashes($_POST['content1']);
			} else {
				$news_content = $_POST['content1'];
			}
		}
		
		$tpl = new MySmarty("admin");
		$news = new News();
		
		$tpl->assign("siteTitle","后台管理系统");		
		$tpl->assign("news",$news->getOneNews($newsId));
		$tpl->display("editNews.html");
	}
	
	function _save() {
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/DAL/News.php");
		
		$newsId = getRequestIntParam('newsId', 0);
		$title = getRequestStringParam('title', '');
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$summary = getRequestStringParam('summary', '');
		$content = getRequestStringParam('content', '');
		$isComment = getRequestIntParam('isComment', 0);
		$clickCount = getRequestIntParam('clickCount', 0);
		$isDeploy = getRequestIntParam('isDeploy', 0);
		$deployTime = getRequestStringParam('deployTime','');	
		$create_time = getRequestStringParam('create_time', '');
		$deployTime = strtotime($deployTime);
		$create_time = strtotime($create_time);
		$url = getRequestStringParam('url','');	
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$news_content = stripslashes($_POST['content1']);
			} else {
				$news_content = $_POST['content1'];
			}
		}
		
		$news = new News();
		
		$newimg = substr(uploadImages('image'),1);		

		if ($newsId == 0) {
			$cc = $news->insertNews($title,$image,$summary,$content,$isComment,$clickCount,$isDeploy,$deployTime,$create_time,$url,$news_content);
		} else {
			if($newimg=="")
				$imgurl=$hasimg;
			else
				$imgurl=$newimg;
			
			$cc = $news->updateNews($newsId,$title,$imgurl,$summary,$content,$isComment,$clickCount,$isDeploy,$deployTime,$create_time,$url,$news_content);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='news.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='news.php';</script>";
	}
	
	function _delete() {
		r_include_once("/DAL/News.php");
		$news = new News();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $news->deleteNews($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='news.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='news.php';</script>";
	}
?>