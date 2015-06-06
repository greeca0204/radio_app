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
		r_require_once("/DAL/ProgramHistory.php");
		r_require_once("/DAL/Channel.php");
		
		$tpl = new MySmarty("admin");		
		$programHistory = new ProgramHistory();
		$channel = new Channel();		
		$cid = getRequestIntParam('cid', 0);		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel",$channel->getChannelList());
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $programHistory->getTotalProgramHistory();
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('programHistory', $programHistory->getProgramHistoryByPage($pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('programHistory.php',$pageNum,$totalPages));
		$tpl->display("showProgramHistory.html");
	}
	
	function _history(){
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/smarty/MySmarty.php");
		r_include_once("/DAL/public/paggingbar.php");
		r_require_once("/DAL/ProgramHistory.php");
		r_require_once("/DAL/Channel.php");
		
		$tpl = new MySmarty("admin");		
		$programHistory = new ProgramHistory();
		$channel = new Channel();		
		$cid = getRequestIntParam('cid', 0);		
		$tpl->assign("siteTitle","后台管理系统");
		
		$tpl->assign("channel",$channel->getChannelList());
		$pageNum = getRequestIntParam('page_num', 1);
		$pageSize = 15;
		$totalRecords = $programHistory->getTotalProgramHistoryByCid($cid);
		$totalPages = intval($totalRecords / $pageSize);
		$totalPages += ($totalRecords % $pageSize == 0 ? 0 : 1);
		if($pageNum > $totalPages) $pageNum = $totalPages;
		if($totalRecords>0)
			$tpl->assign('programHistory', $programHistory->getProgramHistoryByPageByCid($cid,$pageNum,$pageSize,0));
		
		//print_r($programHistory->getProgramHistoryByPageByCid($cid,$pageNum,$pageSize,0));
		
		$tpl->assign('paggingbar', genPaggingbar('programHistory.php?action=history&cid='.$cid,$pageNum,$totalPages));
		$tpl->display("showProgramHistory.html");
	}
	
	function _upload(){
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");		
		r_require_once("/DAL/Channel.php");
		$tpl = new MySmarty("admin");	
		$channel = new Channel();		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel",$channel->getChannelList());
		$tpl->display("uploadProgramHistory.html");
	}
	
	function _uploadFile(){
		$fname =  getRequestStringParam('fname', '');
		$fname = substr(uploadFile('fname'),1);

		if($fname)
			echo "<script>location.href='programHistory.php?action=news&fname=$fname';</script>";
		else
			echo "<script>location.href='programHistory.php?action=upload';</script>";
	}
	
	function _news() {
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");		
		r_require_once("/DAL/Channel.php");
		$fname = getRequestStringParam('fname', '');
		$tpl = new MySmarty("admin");	
		$channel = new Channel();		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("fname",$fname);
		$tpl->assign("channel",$channel->getChannelList());
		$tpl->display("uploadProgramHistorylist.html");
	}
	
	function _new() {
		date_default_timezone_set('Asia/Shanghai');
		r_include_once("/smarty/MySmarty.php");
		r_require_once("/DAL/ProgramHistory.php");
		r_require_once("/DAL/Channel.php");

		$programId = getRequestIntParam('programId', 0);
		$Channel = getRequestIntParam('Channel', 0);
		$name = getRequestStringParam('name', '');
		$url = getRequestStringParam('url', '');
		$date_time = getRequestStringParam('date_time', '');
		$date_time = strtotime($date_time);
		$clickCount = getRequestIntParam('clickCount', 0);
		$create_time = time();
		$is_Temporary = 0;
		$summary = getRequestStringParam('summary', '');
		
		$tpl = new MySmarty("admin");
		$programHistory = new ProgramHistory();
		$channel2 = new Channel();
		$channel3 = new Channel();
		
		$tpl->assign("siteTitle","后台管理系统");
		$tpl->assign("channel2",$channel2->getChannelList());		
		$tpl->assign("channel3",$channel3->getChannelList());	
		$tpl->assign("programHistory",$programHistory->getProgramHistoryById($programId));
		$tpl->display("editProgramHistory.html");
	}
	
	function _save() {
		date_default_timezone_set('Asia/Shanghai');
		r_require_once("/DAL/ProgramHistory.php");
		
		$programId = getRequestIntParam('programId', 0);
		$Channel = getRequestIntParam('Channel', 0);
		$name = getRequestStringParam('name', '');
		$url = getRequestStringParam('url', '');
		$date_time = getRequestStringParam('date_time', '');
		$date_time = strtotime($date_time);
		$clickCount = getRequestIntParam('clickCount', 0);
		$create_time = time();
		$is_Temporary = 0;
		$summary = getRequestStringParam('summary', '');
		
		$programHistory = new ProgramHistory();	
		
		if ($programId == 0) {
			$cc = $programHistory->insertProgramHistory($Channel,$name,$url,$date_time,$clickCount,$create_time,$is_Temporary,$summary);
		} else {
			$cc = $programHistory->updateProgramHistory($programId,$Channel,$name,$url,$date_time,$clickCount,$create_time,$is_Temporary,$summary);
		}
		
		if ($cc)
        	echo "<script>alert('操作成功！');window.location.href='programHistory.php';</script>";
    	else
        	echo "<script>alert('操作失败！');window.location.href='programHistory.php';</script>";
	}
	
	function _delete() {
		r_include_once("/DAL/ProgramHistory.php");
		$programHistory = new ProgramHistory();
		$chk1=$_POST['chk1'];
		if ($chk1!="" or count($chk1)!=0) {
			for ($i=0;$i<count($chk1);$i++){
				$cc = $programHistory->deleteProgramHistory($chk1[$i]);
			}
			echo "<script>alert('操作成功！');window.location.href='programHistory.php';</script>";
		}
		else
			echo "<script>alert('操作失败！');window.location.href='programHistory.php';</script>";
	}
?>