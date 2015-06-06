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
		r_require_once("/DAL/Anchor.php");
		r_require_once("/DAL/Channel.php");
		
		$tpl = new MySmarty("admin");		
		$anchor = new Anchor();
		$channel = new Channel();		
		$cid = getRequestIntParam('cid', 0);
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel",$channel->getChannelList());
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $anchor->getTotalAnchor();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('anchor', $anchor->getAnchorByPage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('anchor.php',$pageNum,$totalPages));
		$tpl->display("showAnchor.html");
	}
	
	function _anchor()
	{
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/smarty/MySmarty.php");
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/Anchor.php");
		r_require_once("/DAL/Channel.php");
		
		$tpl = new MySmarty("admin");		
		$anchor = new Anchor();
		$channel = new Channel();		
		$cid = getRequestIntParam('cid', 0);
		
		$tpl->assign("siteTitle","后台管理系统");	
		$tpl->assign("channel",$channel->getChannelList());
		
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $anchor->getTotalAnchorByChannel($cid);
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('anchor', $anchor->getAnchorByPageByChannel($cid,$pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('anchor.php?action=anchor&cid=$cid',$pageNum,$totalPages));
		$tpl->display("showAnchor.html");
	}	
	
	function _new() {
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Anchor.php");
		r_require_once("/DAL/Channel.php");

		$anchorId = getRequestIntParam('anchorId', 0);
		$name = getRequestStringParam('name', '');
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$Channel = getRequestIntParam('Channel', 0);
		$summary = getRequestStringParam('summary', '');
		$clickCount = getRequestIntParam('clickCount', 0);
	
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$anchor_content = stripslashes($_POST['content1']);
			} else {
				$anchor_content = $_POST['content1'];
			}
		}
		
		$tpl = new MySmarty("admin");
		$anchor = new Anchor();
		$channel = new Channel();
		$channel2 = new Channel();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel2",$channel->getChannelList());		
		$tpl->assign("anchor",$anchor->getAnchor($anchorId));
		$tpl->assign("channel",$channel->getChannelList());
		$tpl->display("editAnchor.html");
	}
	
	function _save() {
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/DAL/Anchor.php");
		
		$anchorId = getRequestIntParam('anchorId', 0);
		$name = getRequestStringParam('name', '');
		$image = getRequestStringParam('image', '');
		$hasimg = getRequestStringParam('hasimg', '');
		$Channel = getRequestIntParam('Channel', 0);
		$summary = getRequestStringParam('summary', '');
		$clickCount = getRequestIntParam('clickCount', 0);
	
		if (!empty($_POST['content1'])) {
			if (get_magic_quotes_gpc()) {
				$anchor_content = stripslashes($_POST['content1']);
			} else {
				$anchor_content = $_POST['content1'];
			}
		}
		
		$anchor = new Anchor();
		
		$newimg = substr(uploadImages('image'),1);		
		
		if ($anchorId == 0) {
			$cc = $anchor->insertAnchor($name,$newimg,$Channel,$summary,$clickCount,$anchor_content);
		} else {
			if($newimg=="")
				$imgurl=$hasimg;
			else
				$imgurl=$newimg;
			
			$cc = $anchor->updateAnchor($anchorId,$name,$imgurl,$Channel,$summary,$clickCount,$anchor_content);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='anchor.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='anchor.php';</script>";
	}
	
	function _delete() {
		r_include_once("/DAL/Anchor.php");
		$anchor = new Anchor();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $anchor->deleteAnchor($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='anchor.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='anchor.php';</script>";
	}
?>