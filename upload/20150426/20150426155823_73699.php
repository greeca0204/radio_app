<?php
	/*
	* 页面名称：Programitemlist.php
	* 页面功能：节目单信息管理
	* 页面类别：数据层
	* 编写日期：2015.03.17
	*/
	
	r_require_once("/lib/GenericDao.php");
	
	class Programitemlist extends GenericDao {
	
	    function getProgramItemList($channelId,$currdate) {
	    	/*
	    	$sql="select * from programitemlist as A inner join channel as B inner join anchor as C 
	    	on A.Channel=B.channelId and A.Anchor = C.anchorId 
	    	where B.channelId=$channelId and currdate=$currdate";
	    	*/
	    	$sql="select programItemId,A.name as name1, anchorNames,beginTime,endTime,currdate,channelId,B.name as name2,image,summary,clickCount,url,isVideo from programitemlist as A inner join channel as B on A.Channel=B.channelId where B.channelId=$channelId and currdate=$currdate";
	        return $this->executeQuery($sql);
	    }
		
		function getAllProgramItemList($pageNum,$pageSize,$offLimit=0){
			$sql="select * from programitemlist";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}
		
		function getTotalByAllProgramItemList(){
			$sql="select count(*) as CNT from programitemlist";
			$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
		}
		
		function getProgramItemListByChannel($channelId,$pageNum,$pageSize,$offLimit=0){
			$sql="select * from programitemlist where Channel=$channelId";
			return $this->pagedQuery($sql,$pageNum,$pageSize);
		}
		
		function getTotalByProgramItemListByChannel($channelId){
			$sql="select count(*) as CNT from programitemlist where Channel=$channelId";
			$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
		}
		
		function getOneProgramItem($programItemId){
			$sql="select * from programitemlist where programItemId=$programItemId";
			return $this->getOne($sql);
		}
		
		function insertProgramItemList($Channel,$anchorNames,$name,$beginTime,$endTime,$currdate,$create_time,$isTemporary){
			$sql = "insert into programitemlist(Channel,anchorNames,name,beginTime,endTime,currdate,create_time,isTemporary) values($Channel,'$anchorNames','$name',$beginTime,$endTime,$currdate,$create_time,$isTemporary)";
			return $this->executeInsert($sql);
		}
		
		function updateProgramItemList($programItemId,$Channel,$anchorNames,$name,$beginTime,$endTime,$currdate,$create_time,$isTemporary){
			$sql = "update programitemlist set Channel=$Channel,anchorNames='$anchorNames',name='$name',beginTime=$beginTime,endTime=$endTime,currdate=$currdate,create_time=$create_time,isTemporary=$isTemporary where programItemId=$programItemId";
			return $this->executeUpdate($sql);
		}
		
		function deleteProgramitemlist($programItemId){
			$sql = "delete from programitemlist where programItemId=$programItemId";
			return $this->executeDelete($sql);
		}
	}
?>
