<?php
	header("Content-type: application/json; charset=utf-8"); 
	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");
	r_require_once("/DAL/News.php");	

	@$newsId = $_GET['newsId'];
	
	$news = new News();
	$newsobj = $news->getOneNewsExt($newsId);
	for($i=0;$i<count($newsobj);$i++){
		$array[$i] = array(
			'news_id'=>$newsobj[$i]['newsId'],
			'title'=>$newsobj[$i]['title'],
			'image'=>$newsobj[$i]['image'],
			'summary'=>$newsobj[$i]['summary'],
			'content'=>$newsobj[$i]['content'],
			'click_count'=>$newsobj[$i]['clickCount'],
			'is_comment'=>$newsobj[$i]['isDeploy'],
			'is_deploy'=>$newsobj[$i]['deployTime'],
			'deploy_time'=>$newsobj[$i]['create_time'],
			'url'=>$newsobj[$i]['url']
		);
	}
	$newsjson = json_encode(@$array);
	$json = "{\"datalist\":".$newsjson.",\"respState\":{\"code\":\"0\",\"msg\":\"执行成功\"}}";
	echo $json;
?>
