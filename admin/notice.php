<?php
// ecms 验证 --start--
// define('EmpireCMSAdmin','1');
// require("../../class/connect.php");
// require("../../class/db_sql.php");
// require("../../class/functions.php");
// $link=db_connect();
// $empire=new mysqlquery();
// $editor=1;
// //验证用户
// $lur=is_login();
// $logininid=$lur['userid'];
// $loginin=$lur['username'];
// $loginrnd=$lur['rnd'];
// $loginlevel=$lur['groupid'];
// $loginadminstyleid=$lur['adminstyleid'];
// ecms 验证 --end--
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.textareaCounter.plugin.js"></script>
    <style>
        body{margin:0;padding:0;font-size:12px;font-family: 'Microsoft YaHei','STSong','arial';margin-left:20px;}
        table,table tr td{border:1px #A5D1D1 solid;}
        table{width:900px;}
        table td{padding:15px;}
        .tdOne{width:30%;text-align:right;}
        .tdTwo{width:70%;}
        .con{width:100%;height:150px;resize: none;font-size:12px;font-family: 'Microsoft YaHei','STSong','arial';}
        input{height:25px;font-size:12px;font-family: 'Microsoft YaHei','STSong','arial';vertical-align: middle;}
    </style>
    <script type="text/javascript">
        /**$(function(){
           var options = {
                 'maxCharacterSize': 224,
                 'originalStyle': 'originalTextareaInfo',
                 'warningStyle' : 'warningTextareaInfo',
                 'warningNumber': 40,
                 'displayFormat' : '已输字数 #input 剩余字数 #left 最大字数 #max'
               };
            $('#site').textareaCount(options); 
           
        });*/
        $(function(){
            $("form").submit( function () {
                if($('#site').val()==''){
                    $('.red').empty().append('消息内容不能为空');
                    return false;
                }
                if(!($('#a').is(":checked"))&&!($('#i').is(":checked"))){
                    $('#device').empty().append("设备范围&nbsp;<span style='color:red;'>（请选择设备范围）</span>");
                    return false;
                }
                if($('#url').val()!==''){
                    if(!(/^(\/e\/action\/[A-Za-z]+\.php\?classid=[\d]+&id=[\d]+)$/.test(trim($('#url').val())))){
                        $('.urlP').empty().append('新闻内容url格式不对');
                        return false;
                    }
                }
            });
        });
    </script>
<body>
    <h3>推送管理&nbsp;&gt;&gt;&nbsp;新建通知</h3>
    <form action="sdk/sample/sample.php" method="POST">
        <table cellpadding="0" cellspacing="0">
            <tr><td colspan="2"><p><strong>说明：</strong>填写新闻ID与新闻内容url，则在应用里打开相应的新闻页面，否则打开应用程序。</p></td></tr>
            <tr><td class="tdOne">标题（最多20个字符）</td><td class="tdTwo"><input type="text" size="60" maxlength="20" name="title" />&nbsp;</td></tr>
            <tr><td class="tdOne"><p>消息内容</p><p class="word">（最多224个字符）</p><p style="color: red;" class="red"></p></td><td><textarea class="con" name="content" id="site" onchange="this.value=this.value.substring(0, 224)"></textarea></td></tr>
            <tr><td class="tdOne"><p id="device" >设备范围</p></td><td class="tdTwo"><!--<input type="checkbox" name="android" value="1"  id="a" />&nbsp;Android系统--><input type="checkbox" name="ios" value="2"  id="i" checked="checked" />&nbsp;IOS系统</td></tr>
            <!--
			<tr><td class="tdOne">新闻ID<span style="color: #FF8080;">（可选）</span></td><td class="tdTwo"><input type="text" maxlength="10" size="10" name="newsid" />&nbsp;（此ID与下面新闻内容url中的id的值应一致）</td></tr>
            <tr><td class="tdOne"><p>新闻内容url（不带域名）<span style="color: #FF8080;">（可选）</span></p><p class="urlP" style="color: red;"></p></td><td class="tdTwo"><p><input type="text" maxlength="100" size="60" name="newsurl" id="url" /></p><p>格式如(只能是此格式的)：&nbsp;/e/action/ShowInfo.php?classid=5&amp;id=81</p></td></tr>
            -->
			<tr><td class="tdOne">用户范围</td><td class="tdTwo">所有人</td></tr>
            <tr><td class="tdOne">发送时间</td><td class="tdTwo">即时发送</td></tr>
            <tr><td colspan="2" style="text-align: center;"><input type="submit" value="发送通知" /><input type="reset" value="取消通知" style="margin-left: 100px;" /></td></tr>
        </table>
    </form>
</body>
</html>