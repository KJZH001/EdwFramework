<?php
//开启session
session_start(); 
//销毁会话
session_destroy();
echo "已退出登录";
echo "<script type=\"text/javascript\">
    setTimeout(\"window.location.href='../index.php/Openid?info=loginout'\",0);</script>";
?>