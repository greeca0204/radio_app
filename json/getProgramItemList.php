<?php
	header("Content-type: application/json; charset=utf-8"); 
	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");
	r_require_once("/DAL/Programitemlist.php");	
	
	@$channelId =  $_GET['channelId'];
	@$currdate = $_GET['currdate'];

	$programitemlist = new Programitemlist();
	$programitemlistobj = $programitemlist->getProgramItemList($channelId,$currdate);

	for($i=0;$i<count($programitemlistobj);$i++){
		$array[$i] = array(
			'program_item_list_id'=>$programitemlistobj[$i]['programItemId'],
			'name'=>$programitemlistobj[$i]['name1'],
			'anchorNames'=>$programitemlistobj[$i]['anchorNames'],
			'begin_time'=>$programitemlistobj[$i]['beginTime'],
			'end_time'=>$programitemlistobj[$i]['endTime'],
			'curr_date'=>$programitemlistobj[$i]['currdate'],
			'channel'=>Array(
				'channel_id'=>$programitemlistobj[$i]['channelId'],
				'name'=>$programitemlistobj[$i]['name2'],
				'image'=>$programitemlistobj[$i]['image'],
				'summary'=>$programitemlistobj[$i]['summary'],
				'click_count'=>$programitemlistobj[$i]['clickCount'],
				'url'=>$programitemlistobj[$i]['url'],
				'isVideo'=>$programitemlistobj[$i]['isVideo']
			)
/*
			,
			'anchor'=>Array(
				'anchor_id'=>$programitemlistobj[$i]['anchorId'],
				'name'=>$programitemlistobj[$i]['name'],
				'image'=>$programitemlistobj[$i]['image'],
				'summary'=>$programitemlistobj[$i]['summary'],
				'content'=>$programitemlistobj[$i]['content'],
				'click_count'=>$programitemlistobj[$i]['clickCount']
			)
*/
		);
	}

	$programitemlistjson = json_encode(@$array);
	$json = "{\"datalist\":".$programitemlistjson.",\"respState\":{\"code\":\"0\",\"msg\":\"执行成功\"}}";
	echo $json;
?>
