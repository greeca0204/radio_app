<?php
	header("Content-type: application/json; charset=utf-8"); 
	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");
	r_require_once("/DAL/ProgramHistory.php");	
	
	@$channelId =  $_GET['channelId'];
	@$page = $_GET['page'];
	@$page_size = $_GET['page_size'];

	$programHistory = new ProgramHistory();
	$programHistoryobj = $programHistory->getProgramHistoryList($channelId,$page,$page_size);

	for($i=0;$i<count($programHistoryobj);$i++){
		$array[$i] = array(
			'program_history_id'=>$programHistoryobj[$i]['programId'],
			'name'=>$programHistoryobj[$i]['name1'],
			'summary'=>$programHistoryobj[$i]['summary1'],
			'click_count'=>$programHistoryobj[$i]['clickCount1'],
			'url'=>$programHistoryobj[$i]['url1'],
			'datetime'=>$programHistoryobj[$i]['date_time'],
			'channel'=>array(
				'channel_id'=>$programHistoryobj[$i]['channelId'],
				'name'=>$programHistoryobj[$i]['name2'],
				'image'=>$programHistoryobj[$i]['image'],
				'summary'=>$programHistoryobj[$i]['summary2'],
				'click_count'=>$programHistoryobj[$i]['clickCount2'],
				'url'=>$programHistoryobj[$i]['url2'],
				'isVideo'=>$programHistoryobj[$i]['isVideo']
			)
		);
	}

	        
	$programHistoryjson = json_encode(@$array);
	$json = "{\"datalist\":".$programHistoryjson.",\"respState\":{\"code\":\"0\",\"msg\":\"执行成功\"}}";
	echo $json;
?>
