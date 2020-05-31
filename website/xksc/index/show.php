<br>
<br>
<?php
//获取从链接中传来的参数
$class=$_REQUEST["class"];
$id=$_REQUEST["id"];

//查询数据库
//判断类型
//类型为course
if ($class=="course")
{
    //判定数据库
    if ($gb_sqlonly=="false") 
    {
        $gb_sqlname=$gb_sqlprefix."data";
    }
    require("./system/core/conn.php");//引入数据库
    $sql="SELECT * FROM xksc_course limit ".$id.",1;";
    $result=mysqli_query($gb_conn,$sql);
    $row=mysqli_fetch_assoc($result);
    
}
//类型为basic
else
{
    //判定数据库
    if ($gb_sqlonly=="false") 
    {
        $gb_sqlname=$gb_sqlprefix."data";
    }
    require("./system/core/conn.php");//引入数据库
    $sql="SELECT * FROM xksc_basic limit ".$id.",1;";
    $result=mysqli_query($gb_conn,$sql);
    $row=mysqli_fetch_assoc($result);
}



//开始显示正文
$show=htmlspecialchars($row['content']);
$show=str_replace(PHP_EOL,"<br>", $show);

echo "<div class=\"mdui-typo-display-1 教程标题\">".$row['title']."</div>";
echo "<br><br><div class=\"mdui-typo-body-2-opacity 教程内容 内容行距\">
    <font size=\"3\" id=\"show\">".$show."</font></div>";



/*
echo "<script type=\"text/javascript\"> ";
echo "var txts = \"".$输出."\";";
echo "txts=txts.replace(/[]/g,'<br>');";
echo "document.getElementById(\"show\").innerHTML=txts;";
echo "</script>";
*/


//echo "共计替换了: ".$计数." 次";

/*
//测试输出的内容
echo "获取到的类别为 ".$class;
echo "<br>";
echo "获取到的id为 ".$id;
*/
/*关闭连接*/
mysqli_close($gb_conn);
?>