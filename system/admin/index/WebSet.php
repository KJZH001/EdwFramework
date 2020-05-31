<?php
$web=$tid;
//调试输出
if($gb_debug=="true")
{
    echo "当前站点".$web."<br>";
}
//判断文件是否存在
if(file_exists("./website/".$web."/global.php"))
{
    echo "<div class=\"mdui-typo\">
        <h1> 站点设置 <small> ".$web." </small></h1>
        <div class=\"mdui-shadow-1 mdui-p-a-2\">";
    
    $myfile = fopen("./website/".$web."/global.php", "r") or die("Error：读取这个站点的配置文件时发生了意外");
    $fileShow=fread($myfile,filesize("./website/".$web."/global.php"));

    //$fileShow=htmlspecialchars($fileShow);
    //$fileShow=str_replace(PHP_EOL,"<br>", $fileShow);

    echo "<div class=\"mdui-textfield\">
            <textarea class=\"mdui-textfield-input\" placeholder=\"Description\">".$fileShow."</textarea>
        </div>
        <br>
        <button class=\"mdui-btn mdui-color-theme-accent mdui-ripple\">提交</button>
        </div>";

    fclose($myfile);


}
else
{
    echo "<div class=\"mdui-typo\">
        <h1> 站点设置 <small> ".$web." </small></h1>
        <p>发生了一个错误，这个站点没有提供可以设置的内容</p>
        </div>
        ";
}
?>