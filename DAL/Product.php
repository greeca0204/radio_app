<?php
	r_require_once("/lib/GenericDao.php");
	
	class Product extends GenericDao {
	
	    function getAllProduct() {
	    	$sql="SELECT * FROM diy_product ORDER BY pid asc";
	        return $this->executeQuery($sql);
	    }
		
		function getAllProductByType($tcid) {
	    	$sql="SELECT * FROM diy_product where tcid=$tcid ORDER BY sort asc";
	        return $this->executeQuery($sql);
	    }
	    
	    function getProductByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM diy_product ORDER BY pid desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
	    
	    function getTotalbyProduct() {
	    	$sql = "SELECT COUNT(*) AS CNT FROM diy_product";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
	    }
	    
	    function getOneProduct($pid) {
	    	$sql="SELECT * FROM diy_product where pid=$pid";
	    	return $this->getOne($sql);
	    }   
	       
	    function insertProduct($proname,$img1,$img2,$img3,$intro,$tcid,$list_intro,$sort) {
	    	$sql="insert into diy_product(proname,img1,img2,img3,intro,tcid,list_intro,sort) values('$proname','$img1','$img2','$img3','$intro',$tcid,'$list_intro',$sort)";
	    	return $this->executeInsert($sql);
	    }
	    
	    function updateProduct($pid,$proname,$img1,$img2,$img3,$intro,$tcid,$list_intro,$sort) {
			$sql="update diy_product set proname='$proname',img1='$img1',img2='$img2',img3='$img3',intro='$intro',tcid=$tcid,list_intro='$list_intro',sort=$sort where pid=$pid";
	    	return $this->executeUpdate($sql);
	    }
	    
	    function deleteProduct($pid){
	    	$sql="delete from diy_product where pid=$pid";
	    	return $this->executeDelete($sql);
	    }
		
		function getTotalbyProductDetail(){
			$sql = "SELECT COUNT(*) AS CNT FROM diy_product_detail as A,diy_product as B,tbl_product_classes as C where A.pid=B.pid and A.cid=C.id";
	    	$row = $this->getOne($sql);
	    	return $row?$row['CNT']:0;
		}
		
		function getProductDetailByPage($pageNum,$pageSize,$offLimit=0) {
	    	$sql = "SELECT * FROM diy_product_detail as A,diy_product as B,tbl_product_classes as C where A.pid=B.pid and A.cid=C.id ORDER BY pdid desc";
	    	return $this->pagedQuery($sql,$pageNum,$pageSize);
	    }
		
		function getOneProductDetail($pdid){
			$sql = "SELECT * FROM diy_product_detail where pdid=$pdid";
	    	return $this->getOne($sql);
		}
		
		function insertProductDetail($pid,$cid,$content){
			$sql="insert into diy_product_detail(pid,cid,content) values($pid,$cid,'$content')";
	    	return $this->executeInsert($sql);
	    }
	    
	    function updateProductDetail($pdid,$pid,$cid,$content) {
			$sql="update diy_product_detail set pid=$pid,cid=$cid,content='$content' where pdid=$pdid";
	    	return $this->executeUpdate($sql);
	    }
		
		function deleteProductDetail($pdid){
	    	$sql="delete from diy_product_detail where pdid=$pdid";
	    	return $this->executeDelete($sql);
	    }
		
		function getProductDetailInfo($pid){
	    	$sql="select * from diy_product_detail as A inner join tbl_product_classes as B on A.cid=B.id where pid=$pid  ORDER BY A.cid asc";
	    	return $this->executeQuery($sql);
	    }
		
		function getLink(){
			$sql="select * from aola_flink limit 0,14";
	    	return $this->executeQuery($sql);
		}
		
		function getYQ(){
			$sql="select * from diy_product where tcid=3 ORDER BY sort asc limit 0,2";
	    	return $this->executeQuery($sql);
		}
	}
?>