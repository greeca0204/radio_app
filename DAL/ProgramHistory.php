<?php
	/*
	* 页面名称：ProgramHistory.php
	* 页面功能：节目回顾信息管理
	* 页面类别：数据层
	* 编写日期：2015.03.17
	*/
	
	r_require_once("/lib/GenericDao.php");
	
	class ProgramHistory extends GenericDao {
	
	    function getProgramHistoryList($channelId,$pageNum,$pageSize,$offLimit=0) {
	    	$sql="SELECT programId,A.name as name1,A.summary as summary1,A.clickCount as clickCount1,A.url as url1,date_time,channelId,B.name as name2, image,B.summary as summary2,B.clickCount as clickCount2,B.url as url2,isVideo FROM programhistory as A inner join channel as B on A.Channel=B.channelId where channelId=$channelId order by date_time desc, A.clickCount desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }

	    function getProgramHistoryRankingList() {
	    	$sql="SELECT programId,A.name as name1,A.summary as summary1,A.clickCount as clickCount1,A.url as url1,date_time,channelId,B.name as name2, image,B.summary as summary2,B.clickCount as clickCount2,B.url as url2,isVideo FROM programhistory as A inner join channel as B on A.Channel=B.channelId order by A.clickCount desc, date_time desc limit 0, 10";
	    	return $this->executeQuery($sql);
	    }

	    function getProgram($programId) {
	    	$sql="SELECT programId,A.name as name1,A.summary as summary1,A.clickCount as clickCount1,A.url as url1,date_time,channelId,B.name as name2, image,B.summary as summary2,B.clickCount as clickCount2,B.url as url2,isVideo FROM programhistory as A inner join channel as B on A.Channel=B.channelId where programId = $programId order by A.clickCount desc, date_time desc limit 0, 1";
	    	return $this->executeQuery($sql);
	    }
		
		function getProgramHistoryByPageByCid($Channel,$pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM programhistory where Channel=$Channel ORDER BY date_time desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		function getProgramHistoryByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM programhistory ORDER BY date_time desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		function getTotalProgramHistoryByCid($Channel){
			$sql="select count(*) as CNT from programhistory where Channel=$Channel";
			$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
		}
		
		function getTotalProgramHistory(){
			$sql="select count(*) as CNT from programhistory";
			$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
		}
		
		function getProgramHistoryById($programId){
			$sql="select * from programhistory where programId=$programId";
			return $this->getOne($sql);
		}
		
		function insertProgramHistory($Channel,$name,$url,$date_time,$clickCount,$create_time,$is_Temporary,$summary){
			$sql = "insert into programhistory(Channel,name,url,date_time,clickCount,create_time,is_Temporary,summary) values($Channel,'$name','$url',$date_time,$clickCount,$create_time,$is_Temporary,'$summary')";
			return $this->executeInsert($sql);
		}
		
		function updateProgramHistory($programId,$Channel,$name,$url,$date_time,$clickCount,$create_time,$is_Temporary,$summary){
			$sql = "update programhistory set Channel=$Channel,name='$name',url='$url',date_time=$date_time,clickCount=$clickCount,create_time=$create_time,is_Temporary=$is_Temporary,summary='$summary' where programId=$programId";
			return $this->executeUpdate($sql);
		}
		
		function deleteProgramHistory($programId){
			$sql = "delete from programhistory where programId=$programId";
			return $this->executeDelete($sql);
		}
	}
?>
