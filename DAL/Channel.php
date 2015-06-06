<?php
	/*
	* 页面名称：Channel.php
	* 页面功能：频道信息管理
	* 页面类别：数据层
	* 编写日期：2015.03.17
	*/
	
	r_require_once("/lib/GenericDao.php");
	
	class Channel extends GenericDao {
	
	    function getChannelList() {
	    	$sql="SELECT * FROM channel order by channelId asc";
	        return $this->executeQuery($sql);
	    }
	    
	    function getChannelRankingList() {
	    	$sql = "SELECT * FROM channel ORDER BY clickCount desc";
	    	return $this->executeQuery($sql);
	    }

	    function updateClickcount($tablename,$fieldId,$indexId){
	    	$sql = "update $tablename set clickCount=clickCount+1 where $fieldId = $indexId";
	    	return $this->executeUpdate($sql);
	    }
		
		function getTotalChannel(){
			$sql = "select count(*) as CNT from channel";
			$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
		}

		function getChannelByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM channel";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		function getChannelById($channelId){
	    	$sql = "SELECT * FROM channel where channelId=$channelId";		
			return $this->getOne($sql);
		}
		
		function insertChannel($image,$name,$summary,$url,$clickCount,$isVideo){
			$sql = "insert into channel(image,name,summary,url,clickCount,isVideo) values('$image','$name','$summary','$url',$clickCount,$isVideo)";
			return $this->executeInsert($sql);
		}
		
		function updateChannel($channelId,$image,$name,$summary,$url,$clickCount,$isVideo){
			$sql="update channel set image='$image',name='$name',summary='$summary',url='$url',clickCount=$clickCount,isVideo=$isVideo where channelId=$channelId";
	    	return $this->executeUpdate($sql);
		}
		
		function deleteChannel($channelId){
	    	$sql="delete from channel where channelId=$channelId";
	    	return $this->executeDelete($sql);
	    }
	}
?>