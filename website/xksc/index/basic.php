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
        请注意，这里仅会展示位于数据库最顶部的10条数据，如果您需要查看全部数据，请点击
        <a href="./xksc_allHtml" class="mdui-text-color-pink-accent">这里</a>
    </div>
</div>
<?php
//判定数据库
if ($gb_sqlonly=="false") 
{
	$gb_sqlname=$gb_sqlprefix."data";
}
//引入数据库
require("./system/core/conn.php");
$sql="SELECT id,title,content  FROM xksc_basic limit 10";
$result=mysqli_query($gb_conn,$sql);

//echo('标题 内容 '). "<br/>";
while($row=mysqli_fetch_assoc($result))
{
    //暂停执行
    usleep(1000);
    //echo  $row['标题'], "&nbsp;", $row['内容'], "<br/>";

    $show=htmlspecialchars($row['content']);
    $id=$row['id']-1;
    //示列卡片
    echo "<div class=\"mdui-card mdui-hoverable\"  
    onclick=\"window.open('./xksc_show?class=basic&id=".$id."');\">";

    //卡片的标题和副标题
    echo "<div class=\"mdui-card-primary\">";
    echo "<div class=\"mdui-card-primary-title\" > 
    <div class=\"mdui-text-color-blue-accent\">",$row['title'],"</div></div>";
    echo "</div>";

    //卡片的内容
    echo "<div class=\"mdui-card-content mdui-list-item-three-line\">",$show,"</div><br>";
    echo "</div>";
    //卡片结束
    echo "<br>";
    echo "<br>";
}

//关闭数据库
mysqli_close($gb_conn);

?>