<?php
//登录判定
$info=$_REQUEST["info"];
//开启session
@session_start(); 
if ($_SESSION['user'] != null && $info==null)
{
    $dialog_title="您貌似已经登录过了呐~";
    $dialog_content="3秒钟后即将转跳哦~";
    $info="logined";
    /*
    echo "<script type=\"text/javascript\">
    mdui.alert('3秒钟后即将转跳', '您貌似已经登录过了呐~');
    setTimeout(\"window.location.href='../index.php/Openid_info'\",3000);
    </script>";
    */
    //调试输出
    if($gb_debug=="true")
    {
        echo "已经登录账户：".$_SESSION['user']."<br>";
        
    }
}
//登录回调的提示
//登录失败
if ($info=="error") 
{
    $dialog_title="登录失败";
    $dialog_content="用户名或密码错误";
    /*
    echo "<script type=\"text/javascript\">
    mdui.alert('用户名或密码错误', '登录失败');
    setTimeout(\"window.location.href='../index.php/Openid'\",3000);
    </script>";
    */
}
//登录成功
elseif ($info=="successful") 
{
    $dialog_title="登录成功";
    $dialog_content="3秒钟后即将转跳";
    /*
    echo "<script type=\"text/javascript\">
    mdui.alert('3秒钟后即将转跳', '登录成功');
    setTimeout(\"window.location.href='../index.php/Openid_info'\",3000);
    </script>";
    */
}
//退出登录
elseif ($info=="loginout") 
{
    $dialog_title="已退出登录";
    $dialog_content="您的账户已经安全退出，3秒钟后即将转跳";
    /*
    echo "<script type=\"text/javascript\">
    mdui.alert('您的账户已经安全退出，3秒钟后即将转跳', '已退出登录');
    setTimeout(\"window.location.href='../index.php/Openid'\",3000);
    </script>";
    */
}
//调试输出
if($gb_debug=="true")
{
    echo "info的值为：".$info."<br>";
}

//弹窗模板
echo "<div class=\"mdui-dialog\" id=\"login-dialog\">";
echo "<div class=\"mdui-dialog-title\">".$dialog_title."</div>";
echo "<div class=\"mdui-dialog-content\">".$dialog_content."</div>";
echo "</div>";

if($dialog_title!=null)
{
    echo "<script>";
    //调用弹窗
    echo "var inst = new mdui.Dialog('#login-dialog');";
    echo "inst.open();";
    //判断指向目标
    if($info=="successful"||$info=="logined")
    {
        echo "setTimeout(\"window.location.href='../index.php/Openid_info'\",3000);";
    }
    else 
    {
        echo "setTimeout(\"window.location.href='../index.php/Openid'\",3000);";
    }
    echo "</script>";
}

?>
