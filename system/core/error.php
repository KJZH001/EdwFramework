<?php
//此处代码来自 https://www.cnblogs.com/ncong/p/3913050.html
//定义Error_Handler函数，作为set_error_handler()函数的第一个参数“回调”
function error_handler($error_level,$error_message,$file,$line)
{
	//载入默认配置
	require("./global/global-example.php");
	//载入全局配置
	require("./global/global.php");
	
    $EXIT =FALSE;
    switch($error_level){
    //提醒级别
    case E_NOTICE:
    case E_USER_NOTICE:
    $error_type = 'Notice';
    break;
    //警告级别
    case E_WARNING:
    case E_USER_WARNING:
    $error_type='warning';
    break;
    //错误级别
    case E_ERROR:
    case E_USER_ERROR:
    $error_type='Fatal Error';
    $EXIT = TRUE;
    break;
    //其他未知错误
    default:
    $error_type='Unknown';
    $EXIT = TRUE;
    break; 
    }
    
    
    //直接打印错误信息，也可以写文件，写数据库，反正错误信息都在这，任你发落
    /*printf("<font color='#1E88E5'><b>%s</b></font>:%s 位于 <b>%s</b> 在第 <b>%d</b> 行<br>\n",
        $error_type, $error_message, $file, $line);
    //*/
        
    //如果错误影响到程序的正常执行，跳转到友好的错误提示页面
    
    if ($EXIT==TRUE){
    //友好报错转向
    //echo '<script>location = "err.html";</scrpit>';
    //载入输出报错界面
    require("./system/core/error_message.php");    
    exit;
    
    }
    else
    {
		if($gb_debug=="true")
		{
        printf("<font color='#1E88E5'><b>%s</b></font>:%s 位于 <b>%s</b> 在第 <b>%d</b>
                         行<br>\n",$error_type, $error_message, $file, $line);
		}
    }

    
    

}
        
    //这个才是关键点，把错误的处理交给error_handle()
    set_error_handler('error_handler');

    //报错测试
    //如无特殊原因，请保持注释状态，否则框架将无法正常运行
    
	/*
    //使用未定义的变量要报notice的
    echo $novar;
        
    //除以0要报警告的
    echo 3/0;
        
    //自定义一个错误
    trigger_error('Trigger a fatal error',E_USER_ERROR);
    //*/

?>