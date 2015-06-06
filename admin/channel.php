<?php
	session_start();
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
	
	if($_SESSION['username'] == null)
	{
		echo "<script>alert('请先登录！');location.href='index.php';</script>";
	}

	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");	

	function _default()
	{
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/smarty/MySmarty.php");
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/Channel.php");
		
		$tpl = new MySmarty("admin");		
		$channel = new Channel();		
		
		$tpl->assign("siteTitle","后台管理系统");

		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $channel->getTotalChannel();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('channel', $channel->getChannelByPage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('channel.php',$pageNum,$totalPages));
		$tpl->display("showChannel.html");
	}

	function _new() {
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Channel.php");

		$channelId = getRequestIntParam('channelId', 0);
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$name = getRequestStringParam('name', '');
		$summary = getRequestStringParam('summary', '');
		$url = getRequestStringParam('url', '');
		$clickCount = getRequestIntParam('clickCount', 0);
		$isVideo = getRequestIntParam('isVideo', 0);
		
		$tpl = new MySmarty("admin");
		$channel = new Channel();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel",$channel->getChannelById($channelId));
		$tpl->display("editChannel.html");
	}
	
	function _save() {
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/DAL/Channel.php");
		
		$channelId = getRequestIntParam('channelId', 0);
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$name = getRequestStringParam('name', '');
		$summary = getRequestStringParam('summary', '');
		$url = getRequestStringParam('url', '');
		$clickCount = getRequestIntParam('clickCount', 0);
		$isVideo = getRequestIntParam('isVideo', 0);
	
		$channel = new Channel();
		
		$newimg = substr(uploadImages('image'),1);		
		
		if ($channelId == 0) {
			$cc = $channel->insertChannel($newimg,$name,$summary,$url,$clickCount,$isVideo);
		} else {
			if($newimg=="")
				$imgurl=$hasimg;
			else
				$imgurl=$newimg;
			
			$cc = $channel->updateChannel($channelId,$imgurl,$name,$summary,$url,$clickCount,$isVideo);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='channel.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='channel.php';</script>";
	}
	
	function _delete() {
		r_include_once("/DAL/Channel.php");
		$channel = new Channel();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $channel->deleteChannel($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='channel.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='channel.php';</script>";
	}
?>