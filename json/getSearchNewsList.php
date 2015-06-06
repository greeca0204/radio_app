<?php
	header("Content-type: application/json; charset=utf-8"); 
	require_once("../global.inc.php");
	r_require_once("/lib/MultiActions.php");
	r_require_once("/DAL/News.php");	

	@$title = $_GET['title'];
	@$page = $_GET['page'];
	@$page_size = $_GET['page_size'];
	
	$news = new News();
	$newsobj = $news->getSearchNewsList($title,$page,$page_size);
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
