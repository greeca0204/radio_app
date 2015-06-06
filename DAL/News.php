<?php
	/*
	* 页面名称：News.php
	* 页面功能：新闻信息管理
	* 页面类别：数据层
	* 编写日期：2015.03.17
	*/
	
	r_require_once("/lib/GenericDao.php");
	
	class News extends GenericDao {
	
	    function getFocusNews() {
	    	$sql="SELECT * FROM news where isComment=1 and isDeploy=1 order by newsId desc limit 5";
	        return $this->executeQuery($sql);
	    }
	    
	    function getNewsList($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM news where isDeploy=1 ORDER BY newsId desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
	    
	    function getTotalNewsList() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM news";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
	    
	    function getSearchNewsList($title,$pageNum,$pageSize,$offLimit=0) {
	    	$sql="SELECT * FROM news where title like '%$title%' order by newsId desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		function getTotalSearchNewsList($tilte) {
	    	$sql = "SELECT COUNT(*) AS CNT FROM news where title='$title'";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }

	    function getNews($newsId){
	    	$sql = "SELECT * FROM news where newsId=$newsId";
	    	return $this->getOne($sql);
	    }	
		
		function getNewsByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM news ORDER BY newsId desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		function getOneNews($newsId) {
	    	$sql="SELECT * FROM news where newsId=$newsId";
	    	return $this->getOne($sql);
	    }   
		function getOneNewsExt($newsId){
		$sql="SELECT * FROM news where newsId=$newsId limit 0,1";
		return $this->executeQuery($sql);
		}	
		function insertNews($title,$image,$summary,$content,$isComment,$clickCount,$isDeploy,$deployTime,$create_time,$url,$news_content){
			$sql="insert into news(title,image,summary,content,isComment,clickCount,isDeploy,deployTime,create_time,url,news_content) values('$title','$image','$summary','$content',$isComment,$clickCount,$isDeploy,$deployTime,$create_time,'$url','$news_content')";
	    	return $this->executeInsert($sql);
		}
		
		function updateNews($newsId,$title,$image,$summary,$content,$isComment,$clickCount,$isDeploy,$deployTime,$create_time,$url,$news_content){
			$sql="update news set title='$title',image='$image',summary='$summary',content='$content',isComment=$isComment,clickCount=$clickCount,isDeploy=$isDeploy,deployTime=$deployTime,create_time=$create_time,url='$url',news_content='$news_content' where newsId=$newsId";
	    	return $this->executeUpdate($sql);
		}
		
		function deleteNews($newsId){
	    	$sql="delete from news where newsId=$newsId";
	    	return $this->executeDelete($sql);
	    }
	}
?>
