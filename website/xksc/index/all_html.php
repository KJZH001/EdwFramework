<br>
<div style="
    margin:12px 0;
    padding:16px;
    color:#fff;
    background:#448aff;
    box-shadow:0 0 4px 2px rgba(0,0,0,0.16);
    border-radius:2px;font-size:16px;
">
    <div class="mdui-typo">
        请注意，这里显示的是经过缓存的静态数据，如果您需要查看最新数据，请点击
        <a href="./xksc_searchList?word=" class="mdui-text-color-pink-accent">这里</a>
    </div>
</div>
<?php
//判断文件是否存在
if(file_exists("./website/".$fid."/index/static/all_html.php"))
{
    require("./website/".$fid."/index/static/all_html.php");
}
else
{
    echo "Error：调用这个文件时发生了意外，请尝试联系网站管理员以寻求帮助";
}
?>