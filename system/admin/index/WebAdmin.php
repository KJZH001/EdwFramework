<?php
$web=$tid;
//调试输出
if($gb_debug=="true")
{
    echo "当前站点".$web."<br>";
}
if(file_exists("./website/".$web."/admin/index.php"))
{
    require("./website/".$web."/admin/index.php");
}
else
{
    echo "<div class=\"mdui-typo\">
        <h1> 站点管理 <small> ".$web." </small></h1>
        <p>发生了一个错误，这个站点没有提供可以管理的后台页面</p>
        </div>
        ";
}
?>