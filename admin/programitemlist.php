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
		r_require_once("/DAL/Programitemlist.php");
		r_require_once("/DAL/Channel.php");
		
		$tpl = new MySmarty("admin");		
		$programitemlist = new Programitemlist();
		$channel = new Channel();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel",$channel->getChannelList());
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $programitemlist->getTotalByAllProgramItemList();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('programitemlist', $programitemlist->getAllProgramItemList($pageNum,$pageSize,0));
		$tpl->assign('paggingbar', genPaggingbar('programitemlist.php',$pageNum,$totalPages));
		$tpl->display("showProgramitemlist.html");
	}

	function _item()
	{
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/smarty/MySmarty.php");
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/Programitemlist.php");
		r_require_once("/DAL/Channel.php");
		
		$tpl = new MySmarty("admin");		
		$programitemlist = new Programitemlist();
		$channel = new Channel();
		$cid = getRequestIntParam('cid', 0);
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel",$channel->getChannelList());
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $programitemlist->getTotalByProgramItemListByChannel($cid);
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('programitemlist', $programitemlist->getProgramItemListByChannel($cid,$pageNum,$pageSize,$offLimit=0));
		$tpl->assign('paggingbar', genPaggingbar('programitemlist.php?action=item&cid=$cid',$pageNum,$totalPages));
		$tpl->display("showProgramitemlist.html");
	}
	
	function _upload(){
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");		
		r_require_once("/DAL/Channel.php");
		$tpl = new MySmarty("admin");	
		$channel = new Channel();		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel",$channel->getChannelList());
		$tpl->display("uploadProgramitem.html");
	}
	
	function _uploadFile(){
		$fname =  getRequestStringParam('fname', '');
		$fname = substr(uploadFile('fname'),1);

		if($fname)
			echo "<script>location.href='programitemlist.php?action=new&fname=$fname';</script>";
		else
			echo "<script>location.href='programitemlist.php?action=upload';</script>";
	}
	
	function _new() {
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");		
		r_require_once("/DAL/Channel.php");
		$fname = getRequestStringParam('fname', '');
		$tpl = new MySmarty("admin");	
		$channel = new Channel();		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("fname",$fname);
		$tpl->assign("channel",$channel->getChannelList());
		$tpl->display("uploadProgramitemlist.html");
	}
	
	function _news() {
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/Programitemlist.php");
		r_require_once("/DAL/Channel.php");

		$programItemId = getRequestIntParam('programItemId', 0);
		$Channel = getRequestIntParam('Channel', 0);
		$anchorNames = getRequestStringParam('anchorNames', '');
		$name = getRequestStringParam('name', '');
		$beginTime = getRequestStringParam('beginTime', '');
		$beginTime = strtotime($beginTime);
		$endTime = getRequestStringParam('endTime', '');
		$endTime = strtotime($endTime);
		$currdate = getRequestStringParam('currdate', '');
		$currdate = strtotime($currdate);
		$create_time = time();
		$isTemporary = 0;
	
		$tpl = new MySmarty("admin");
		$programitemlist = new Programitemlist();
		$channel2 = new Channel();
		$channel3 = new Channel();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel2",$channel2->getChannelList());	
		$tpl->assign("channel3",$channel3->getChannelList());			
		$tpl->assign("programitemlist",$programitemlist->getOneProgramItem($programItemId));
		$tpl->display("editProgramitemlist.html");
	}
	
	function _save() {
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/DAL/Programitemlist.php");
	
		$programItemId = getRequestIntParam('programItemId', 0);
		$Channel = getRequestIntParam('Channel', 0);
		$anchorNames = getRequestStringParam('anchorNames', '');
		$name = getRequestStringParam('name', '');
		$beginTime = getRequestStringParam('beginTime', '');
		$beginTime = strtotime($beginTime);
		$endTime = getRequestStringParam('endTime', '');
		$endTime = strtotime($endTime);
		$currdate = getRequestStringParam('currdate', '');
		$currdate = strtotime($currdate);
		$create_time = time();
		$isTemporary = 0;

		$programitemlist = new Programitemlist();

		if ($programItemId == 0) {
			$cc = $programitemlist->insertProgramItemList($Channel,$anchorNames,$name,$beginTime,$endTime,$currdate,$create_time,$isTemporary);
		} else {
			$cc = $programitemlist->updateProgramItemList($programItemId,$Channel,$anchorNames,$name,$beginTime,$endTime,$currdate,$create_time,$isTemporary);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='programitemlist.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='programitemlist.php';</script>";
	}
	
	function _delete() {
		r_include_once("/DAL/Programitemlist.php");
		$programitemlist = new Programitemlist();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $programitemlist->deleteProgramitemlist($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='programitemlist.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='programitemlist.php';</script>";
	}
?>