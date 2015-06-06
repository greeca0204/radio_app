<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="zh-cn" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script charset="utf-8" src="js/jquery.js"></script>
<script charset="utf-8" src="js/menu.js"></script>
</head>
<body>
<?php 
    if($_SESSION['username'] == null)
    	echo "<script>alert('请先登录！');location.href='index.php';</script>";
?>
        <div id="menu">
            <center>
                <?php
                $say = "您好！";
				date_default_timezone_set('PRC');
				//echo date('H:i:s');
                $time = intval(date('Hi'));				
                if ($time >= 1900 || $time < 300)
                    $say = "晚上好！";
                else if ($time <= 600)
                    $say = "凌晨好！";
                else if ($time >= 600 && $time < 1130)
                    $say = "早上好！";
                else if ($time >= 1130 && $time < 1230)
                    $say = "中午好！";
                else if ($time >= 1230 && $time < 1800)
                    $say = "下午好！";
                else
                    $say = "傍晚好！";
                echo $_SESSION['username'] . '，' . $say;
                ?>
            </center>
            <ul>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">管理员信息管理</a>
                    <ul>
                    	<li><a href="admin.php?action=new" target="mainFrame">添加管理员信息</a></li>
                    	<li><a href="admin.php" target="mainFrame">管理员信息管理</a></li>              	
                    </ul>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">数据库管理</a>
                    <ul>
                    	<li><a href="bak/bak.php" target="mainFrame">数据库备份</a></li>
                    	<li><a href="bak/bak.php?a_type=bakin" target="mainFrame">数据库还原</a></li>              	
                    </ul>
                </li>
                <li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">新闻信息管理</a>
                    <ul>
                        <li><a href="news.php?action=new" target="mainFrame">添加新闻信息</a></li>
                        <li><a href="news.php" target="mainFrame">新闻信息管理</a></li>                
                    </ul>
                </li>
				<li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">频道信息管理</a>
                    <ul>
                        <li><a href="channel.php?action=new" target="mainFrame">添加频道信息</a></li>
                        <li><a href="channel.php" target="mainFrame">频道信息管理</a></li>                
                    </ul>
                </li>
				<li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">主持人信息管理</a>
                    <ul>
                        <li><a href="anchor.php?action=new" target="mainFrame">添加主持人信息</a></li>
                        <li><a href="anchor.php" target="mainFrame">主持人信息管理</a></li>                
                    </ul>
                </li>
				<li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">历史回顾信息管理</a>
                    <ul>
						<li><a href="programHistory.php?action=upload" target="mainFrame">批量导入历史回顾信息</a></li>
                        <li><a href="programHistory.php?action=new" target="mainFrame">添加历史回顾信息</a></li>
                        <li><a href="programHistory.php" target="mainFrame">历史回顾信息管理</a></li>                
                    </ul>
                </li>
				<li class="main">
                    <a class="parent" href="javascript:void(0);" style="background:#069;">节目单信息管理</a>
                    <ul>
                        <li><a href="programitemlist.php?action=upload" target="mainFrame">批量导入节目单信息</a></li>
                        <li><a href="programitemlist.php?action=news" target="mainFrame">逐条添加节目单信息</a></li>
						<li><a href="programitemlist.php" target="mainFrame">节目单信息管理</a></li>                
                    </ul>
                </li>
				<li class="main">
                    <a class="parent" href="notice.php" target="mainFrame" style="background:#069;">消息推送信息管理</a>
                </li>
                <li><a id="logout" href="index.php?action=loginout" style="background:#069;">退出系统</a></li>
            </ul>
        </div>
</body>
</html>