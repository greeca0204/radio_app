<?php
	header("Content-type: application/json; charset=utf-8"); 
	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");
	r_require_once("/DAL/Channel.php");	

	$channel = new Channel();
	$channelobj = $channel->getChannelList();


	for($i=0;$i<count($channelobj);$i++){
		$array[$i] = array(
			'channel_id'=>$channelobj[$i]['channelId'],
			'name'=>$channelobj[$i]['name'],
			'image'=>$channelobj[$i]['image'],
			'summary'=>$channelobj[$i]['summary'],
			'click_count'=>$channelobj[$i]['clickCount'],
			'url'=>$channelobj[$i]['url'],
			'isVideo'=>$channelobj[$i]['isVideo']
		);
	}

	$channeljson = json_encode(@$array);
	$json = "{\"datalist\":".$channeljson.",\"respState\":{\"code\":\"0\",\"msg\":\"执行成功\"}}";
	echo $json;
?>
