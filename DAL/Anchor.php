<?php
	/*
	* 页面名称：Anchor.php
	* 页面功能：主持人信息管理
	* 页面类别：数据层
	* 编写日期：2015.03.17
	*/
	
	r_require_once("/lib/GenericDao.php");
	
	class Anchor extends GenericDao {
	
	    function getMoreAnchorList($channelId,$pageNum,$pageSize,$offLimit=0){
	    	$sql="select anchorId,B.name as name1,B.image as image1,B.summary as summary1,B.clickCount as clickCount1,channelId,A.name as name2,A.image as image2,A.summary as summary2,A.clickCount as clickCount2,url,isVideo from channel as A inner join anchor as B on A.channelId = B.Channel where A.channelId=$channelId order by anchorId asc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    function getAnchorRankingList(){
	    	$sql="select anchorId,B.name as name1,B.image as image1,B.summary as summary1,B.clickCount as clickCount1,channelId,A.name as name2,A.image as image2,A.summary as summary2,A.clickCount as clickCount2,url,isVideo from channel as A inner join anchor as B on A.channelId = B.Channel 
	    	order by B.clickCount desc limit 0,10";
	    	return $this->executeQuery($sql);
	    }	

	    function getAnchorList($channelId,$pageNum,$pageSize,$offLimit=0){
			$sql="select * from anchor where Channel=$channelId order by anchorId asc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
		}

		function getChannel($pageNum,$pageSize,$offLimit=0)	
		{
			$sql="select * from channel order by channelId asc";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}

		function getChannel4All(){
			$sql="select * from channel order by channelId asc";
			return $this->executeQuery($sql);
		}

		function getAnchor($anchorId)
		{
			$sql="select * from anchor where anchorId=$anchorId";
			return $this->getOne($sql);
		}

		function getTotalAnchor(){
			$sql = "select count(*) as CNT from anchor";
			$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
		}

		function getAnchorByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM anchor ORDER BY anchorId desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		function getOneAnchor($anchorId) {
	    	$sql="SELECT * FROM anchor where anchorId=$anchorId";
	    	return $this->getOne($sql);
	    }   

		function insertAnchor($name,$image,$Channel,$summary,$clickCount,$anchor_content){
			$sql="insert into anchor(name,image,Channel,summary,clickCount,anchor_content) values('$name','$image',$Channel,'$summary',$clickCount,'$anchor_content')";
	    	return $this->executeInsert($sql);
		}
		
		function updateAnchor($anchorId,$name,$image,$Channel,$summary,$clickCount,$anchor_content){
			$sql="update anchor set name='$name',image='$image',Channel=$Channel,summary='$summary',clickCount=$clickCount,anchor_content='$anchor_content' where anchorId=$anchorId";
	    	return $this->executeUpdate($sql);
		}
		
		function deleteAnchor($anchorId){
	    	$sql="delete from anchor where anchorId=$anchorId";
	    	return $this->executeDelete($sql);
	    }
		
		
		
		function getTotalAnchorByChannel($cid){
			$sql = "select count(*) as CNT from anchor where Channel=$cid";
			$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
		}

		function getAnchorByPageByChannel($cid,$pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM anchor where Channel=$cid ORDER BY anchorId desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
	}
?>