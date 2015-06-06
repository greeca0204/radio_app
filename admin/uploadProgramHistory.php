<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
$db=mysql_connect("localhost","radio_app","radio_app@rgd.com.cn&");
$sqlname="radio_app";
mysql_select_db($sqlname,$db);
mysql_query("SET NAMES 'UTF8'",$db);
$fname = @$_GET['fname'];
$fname = "http://app.rgd.com.cn/radio_app/".$fname;

$handle = fopen ($fname,"r");
$sql="insert into programhistory(Channel,name,url,date_time,clickCount,summary) values('";
while ($data = fgetcsv ($handle, 1000, ",")) {
   $num = count ($data);
   for ($c=0; $c < $num; $c++) {
	   if($c==3)
			$data[$c] = strtotime($data[$c]);
	   if($c==$num-1){
		   $sql=$sql.$data[$c]."');";
		   break;
		}
       $sql=$sql.$data[$c]."','";
   }
print "<br>";
echo $sql."<br>";
mysql_query($sql);
echo "SQL语句执行成功！<br>";
$sql="insert into programhistory(Channel,name,url,date_time,clickCount,summary) values('";
}
fclose ($handle);
echo "<script>alert('历史回顾导入成功！');location.href='programHistory.php';</script>";

?>