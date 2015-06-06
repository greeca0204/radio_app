<?php
	header("Content-type: application/json; charset=utf-8"); 
	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");
	r_require_once("/DAL/Channel.php");		

	@$tablename = $_GET['tablename'];
	@$fieldId = $_GET['fieldId'];
	@$indexId = $_GET['indexId'];
	$channel = new Channel();	
	$channelobj = $channel->updateClickcount($tablename,$fieldId,$indexId);
	
	if($channelobj)
		$json = "{\"datalist\":[{\"update_count\":\"1\"}]\"respState\":{\"code\":\"0\",\"msg\":\"执行成功\"}}";

	echo $json;
?>