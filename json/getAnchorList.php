<?php
	header("Content-type: application/json; charset=utf-8"); 
	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");
	r_require_once("/DAL/Anchor.php");	

	$anchor = new Anchor();
	//$channelobj = $anchor->getChannel(0,5);
	$channelobj = $anchor->getChannel4All();

	for($i=0;$i<count($channelobj);$i++){
		$anchorobj = $anchor->getAnchorList($channelobj[$i]['channelId'],0,5);
		for($j=0;$j<count($anchorobj);$j++){
			$array2[$j] = array(
				'anchor_id'=>$anchorobj[$j]['anchorId'],
				'name'=>$anchorobj[$j]['name'],
				'image'=>$anchorobj[$j]['image'],
				'summary'=>$anchorobj[$j]['summary'],
				'click_count'=>$anchorobj[$j]['clickCount']
			);
		}

		$array[$i] = array(
			'channel_id'=>$channelobj[$i]['channelId'],
			'name'=>$channelobj[$i]['name'],
			'image'=>$channelobj[$i]['image'],
			'summary'=>$channelobj[$i]['summary'],
			'click_count'=>$channelobj[$i]['clickCount'],
			'url'=>$channelobj[$i]['url'],
			'isVideo'=>$channelobj[$i]['isVideo'],
			'anchors'=> $array2
		);		
		unset($array2);		
	}
        
	$anchorobjjson = json_encode(@$array);
	$json = "{\"datalist\":".$anchorobjjson.",\"respState\":{\"code\":\"0\",\"msg\":\"执行成功\"}}";
	echo $json;
?>
