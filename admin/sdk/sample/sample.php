<?php
// ecms 验证 --start--
// define('EmpireCMSAdmin','1');
// require("../../../../class/connect.php");
// require("../../../../class/db_sql.php");
// require("../../../../class/functions.php");
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
// // ecms 验证 --end--

require_once ( "../Channel.class.php" ) ;

//请开发者设置自己的apiKey与secretKey
$apiKey = "K3fQGdElEj3GaDVAQoUImADl";//fQETSDipKGQE0M9jKcEEsqC0
$secretKey = "ee2A5F77Ylf9BkNGC1bHsmn2sDdu1Baj";//QWZchpiTvVgmEYokAGudY7ZMK29c06yy


function error_output ( $str ) 
{
	echo "\033[1;40;31m" . $str ."\033[0m" . "\n";
}

function right_output ( $str ) 
{
    echo "\033[1;40;32m" . $str ."\033[0m" . "\n";
}

function test_queryBindList ( $userId ) 
{
	global $apiKey;
	global $secretKey;
	$channel = new Channel ($apiKey, $secretKey) ;
	//$optional [ Channel::CHANNEL_ID ] = "3915728604212165383"; 
	$ret = $channel->queryBindList ( $userId, $optional ) ;
	if ( false === $ret ) 
	{
		error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
		error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
		error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
		error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
	}
	else
	{
		right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
		right_output ( 'result: ' . print_r ( $ret, true ) ) ;
	}	
}


function test_verifyBind ( $userId )
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel ( $apiKey, $secretKey ) ;
    //$optional [ Channel::CHANNEL_ID ] = 2484515682371722163;
    $ret = $channel->verifyBind ( $userId, $optional ) ;
    if ( false === $ret )
    {   
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

//推送android设备消息             ($user_id)
function test_pushMessage_android ($title,$content,$newsId,$newsContentUrl) 
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel ( $apiKey, $secretKey ) ;
	//推送消息到某个user，设置push_type = 1; 
	//推送消息到一个tag中的全部user，设置push_type = 2;
	//推送消息到该app中的全部user，设置push_type = 3;
	$push_type = 3;
	//$optional[Channel::USER_ID] = $user_id; //如果推送单播消息，需要指定user
	//optional[Channel::TAG_NAME] = "xxxx";  //如果推送tag消息，需要指定tag_name

	//指定发到android设备
	$optional[Channel::DEVICE_TYPE] = 3;
	//指定消息类型为通知
	$optional[Channel::MESSAGE_TYPE] = 1;
	//通知类型的内容必须按指定内容发送，示例如下：
	$message = "{ 
			'title': '{$title}',
			'description': '{$content}',
            'notification_builder_id': 0,
            'notification_basic_style': 7,
            'open_type':2,
            'custom_content': {
            	'newsId':'{$newsId}', 
            	'newsContentUrl':'{$newsContentUrl}'
           	}
 		}";
	
	$message_key = "msg_key";
    $ret = $channel->pushMessage ( $push_type, $message, $message_key, $optional ) ;
    if ( false === $ret )
    {
        echo "<div style='color:red;'>发送（Android）通知失败</div>";
        //error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        //error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        //error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        //error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {
        echo "<div style='color:green;'>发送（Android）通知成功</div>";
        //right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        //right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

//推送ios设备消息             ($user_id)
function test_pushMessage_ios ($content,$newsId,$newsContentUrl)  
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel ( $apiKey, $secretKey ) ;

	$push_type = 3; //推送单播消息
	//$optional[Channel::USER_ID] = $user_id; //如果推送单播消息，需要指定user

	//指定发到ios设备
	$optional[Channel::DEVICE_TYPE] = 4;
	//指定消息类型为通知
	$optional[Channel::MESSAGE_TYPE] = 1;
	//如果ios应用当前部署状态为开发状态，指定DEPLOY_STATUS为1，默认是生产状态，值为2.
	//旧版本曾采用不同的域名区分部署状态，仍然支持。
	$optional[Channel::DEPLOY_STATUS] = 1;
	//通知类型的内容必须按指定内容发送，示例如下：
	$message = "{ 
		'aps':{
			'alert':'{$content}',
			'sound':'',
			'badge':0
		},
        'newsId':'{$newsId}', 
       	'newsContentUrl':'{$newsContentUrl}'
 	}";
	
	$message_key = "msg_key";
    $ret = $channel->pushMessage ( $push_type, $message, $message_key, $optional ) ;
    if ( false === $ret )
    {
        echo "<div style='color:red;'>发送（IOS系统）通知失败</div>";
       
        //error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        //error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        //error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        //error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {
        echo "<div style='color:green;'>发送（IOS系统）通知成功</div>";
        
        //right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        //right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

function test_fetchMessageCount ( $userId  )
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel ( $apiKey, $secretKey ) ;
    $ret = $channel->fetchMessageCount ( $userId) ;
    if ( false === $ret )
    {   
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {   
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

function test_fetchMessage ( $userId  )
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel ($apiKey, $secretKey) ;
    $ret = $channel->fetchMessage ( $userId ) ;
    if ( false === $ret )
    {   
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {   
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

function test_deleteMessage ( $userId, $msgIds )
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel ($apiKey, $secretKey ) ;
    //$optional [ Channel::CHANNEL_ID ] = 4152049051604943232;
    $ret = $channel->deleteMessage ( $userId, $msgIds, $optional ) ;
    if ( false === $ret )
    {   
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {   
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}


function test_setTag($tag_name, $user_id)
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel($apiKey, $secretKey);
    $optional[Channel::USER_ID] = $user_id;
    $ret = $channel->setTag($tag_name, $optional);
    if (false === $ret) {   
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
        return false;
    } else {   
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
        return $ret['response_params']['tid'];
    }
}

function test_fetchTag($tag_name = null)
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel($apiKey, $secretKey);
	$optional[Channel::TAG_NAME] = $tag_name;
    $ret = $channel->fetchTag($optional);
    if (false === $ret) {   
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    } else {   
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }

}


function test_deleteTag($tag_name)
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel($apiKey, $secretKey);
    $ret = $channel->deleteTag($tag_name);
    if (false === $ret) {   
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    } else {   
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }

}


function test_queryUserTags($user_id)
{
    global $apiKey;
	global $secretKey;
    $channel = new Channel($apiKey, $secretKey);
    $ret = $channel->queryUserTags($user_id);
    if (false === $ret) {   
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    } else {   
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }

}

function test_initAppIoscert ( $name, $description, $release_cert, $dev_cert )
{
    global $apiKey;
    global $secretKey;
    $channel = new Channel ($apiKey, $secretKey) ;
	//如果ios应用当前部署状态为开发状态，指定DEPLOY_STATUS为1，默认是生产状态，值为2.
	//旧版本曾采用不同的域名区分部署状态，仍然支持。
	//$optional[Channel::DEPLOY_STATUS] = 1;
    
	$ret = $channel->initAppIoscert ($name, $description, $release_cert, $dev_cert) ;
    if ( false === $ret )
    {
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

function test_updateAppIoscert ( $name, $description, $release_cert, $dev_cert )
{
    global $apiKey;
    global $secretKey;
    $channel = new Channel ($apiKey, $secretKey) ;
	//如果ios应用当前部署状态为开发状态，指定DEPLOY_STATUS为1，默认是生产状态，值为2.
	//旧版本曾采用不同的域名区分部署状态，仍然支持。
	//$optional[Channel::DEPLOY_STATUS] = 1;

    $optional[ Channel::NAME ] = $name;
    $optional[ Channel::DESCRIPTION ] = $description;
    $optional[ Channel::RELEASE_CERT ] = $release_cert;
    $optional[ Channel::DEV_CERT ] = $dev_cert;
    $ret = $channel->updateAppIoscert ($optional) ;
    if ( false === $ret )
    {
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

function test_queryAppIoscert ( )
{
    global $apiKey;
    global $secretKey;
    $channel = new Channel ($apiKey, $secretKey) ;
	//如果ios应用当前部署状态为开发状态，指定DEPLOY_STATUS为1，默认是生产状态，值为2.
	//旧版本曾采用不同的域名区分部署状态，仍然支持。
	//$optional[Channel::DEPLOY_STATUS] = 1;

    $ret = $channel->queryAppIoscert () ;
    if ( false === $ret )
    {
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

function test_deleteAppIoscert ( )
{
    global $apiKey;
    global $secretKey;
    $channel = new Channel ($apiKey, $secretKey) ;
    $ret = $channel->deleteAppIoscert () ;
    if ( false === $ret )
    {
        error_output ( 'WRONG, ' . __FUNCTION__ . ' ERROR!!!!' ) ;
        error_output ( 'ERROR NUMBER: ' . $channel->errno ( ) ) ;
        error_output ( 'ERROR MESSAGE: ' . $channel->errmsg ( ) ) ;
        error_output ( 'REQUEST ID: ' . $channel->getRequestId ( ) );
    }
    else
    {
        right_output ( 'SUCC, ' . __FUNCTION__ . ' OK!!!!!' ) ;
        right_output ( 'result: ' . print_r ( $ret, true ) ) ;
    }
}

header('Content-Type:text/html;charset=utf-8');
$title = trim(str_replace(array("\"",'\''),array("“",'‘'),strip_tags($_POST['title'])));
//$content = trim(strip_tags($_POST['content']));
$content = trim(str_replace(array("\"",'\''),array("“",'‘'),strip_tags($_POST['content'])));
$android =$_POST['android']?intval($_POST['android']):0;
$ios = $_POST['ios']?intval ($_POST['ios']):0;
$newsId = intval($_POST['newsid'])?intval($_POST['newsid']):'';
$newsContentUrl =strip_tags(trim($_POST['newsurl']));
if(preg_match("/^(\/e\/action\/[A-Za-z]+\.php\?classid=[\d]+&id=[\d]+)$/i",$newsContentUrl,$arr)){
    $newsContentUrl=$arr[0];
}else{
    $newsId='';
    $newsContentUrl = '';
}
if(!empty($content)&&isset($content)){
    if(empty($title)&&!isset($title)){
        $title ='';
    }
    if($android===1){
       test_pushMessage_android ($title,$content,$newsId,$newsContentUrl); 
    }
    if($ios===2){
        test_pushMessage_ios ($content,$newsId,$newsContentUrl);
    }
    if(!($ios===2)&&!($android===1)){
        echo '您没有选择移动设备，发送消息失败';    
    }
}else{
    echo '您还没有填写消息内容，不能发送消息';
    exit;
}
?>