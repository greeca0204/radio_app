<?php
	header("Content-type: application/json; charset=utf-8"); 
	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");
	r_require_once("/DAL/Anchor.php");	
	
	@$channel_id =  $_GET['channel_id'];
	@$page = $_GET['page'];
	@$page_size = $_GET['page_size'];

	$anchor = new Anchor();
	$anchorobj = $anchor->getMoreAnchorList($channel_id,$page,$page_size);
	for($i=0;$i<count($anchorobj);$i++){
		$array[$i] = array(
			'anchor_id'=>$anchorobj[$i]['anchorId'],
			'name'=>$anchorobj[$i]['name1'],
			'image'=>$anchorobj[$i]['image1'],
			'summary'=>$anchorobj[$i]['summary1'],
			'click_count'=>$anchorobj[$i]['clickCount1'],
			'channel'=>array(
				'channel_id'=>$anchorobj[$i]['channelId'],
				'name'=>$anchorobj[$i]['name2'],
				'image'=>$anchorobj[$i]['image2'],
				'summary'=>$anchorobj[$i]['summary2'],
				'click_count'=>$anchorobj[$i]['clickCount2'],
				'url'=>$anchorobj[$i]['url'],
				'isVideo'=>$anchorobj[$i]['isVideo']
			)
		);
	}

	        
	$anchorobjjson = json_encode(@$array);
	$json = "{\"datalist\":".$anchorobjjson.",\"respState\":{\"code\":\"0\",\"msg\":\"执行成功\"}}";
	echo $json;
?>
