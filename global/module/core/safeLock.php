<?php
/*
空梦框架 安全锁
这个php文件用于解决框架由于底层结构为面向过程导致的问题弊端
请在您认为需要绝对安全的php模块的起始位置引用这个php
这样可以防止这些模块被意外的引用而产生漏洞
引用代码
require("/global/module/core/safeLock.php");
*/

if(@$gb_debug!="true")
{
//关闭notice报错提示
error_reporting(E_ALL^E_NOTICE);
}

if($gb_debug!="false" or "true")
{
    if($gb_debug=="true")
    {
        echo "当前运行已经触发 空梦框架安全锁";
        echo "请检查您的请求是否正常！";
    }
    //输出500
    echo "
        <html>
        <head><title>500 Internal Server Error</title></head>
        <body>
        <center><h1>500 Internal Server Error</h1></center>
        <hr><center>nginx</center>
        </body>
        </html>
    ";
    //结束运行
    exit();
}

?>