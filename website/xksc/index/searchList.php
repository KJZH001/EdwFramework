<br>
<?php
//获取从链接中传来的参数
$word=$_REQUEST["word"];

//查询数据库 表 course

    //判定数据库
    if ($gb_sqlonly=="false") 
    {
        $gb_sqlname=$gb_sqlprefix."data";
    }
    require("./system/core/conn.php");//引入数据库
    $sql="select * from `xksc_course` where `title` like '%".$word."%'";
    $result=mysqli_query($gb_conn,$sql);
    
    while($row=mysqli_fetch_assoc($result))
    {
    //echo  $row['标题'], "&nbsp;", $row['内容'], "<br/>";
    
    $show=htmlspecialchars($row['content']);
    $id=$row['id']-1;
    //示列卡片
    echo "<div class=\"mdui-card mdui-hoverable\"  onclick=\"window.open('./xksc_show?class=course&id=".$id."');\">";
    
    //卡片的标题和副标题
    echo "<div class=\"mdui-card-primary\">";
    echo "<div class=\"mdui-card-primary-title\" > <div class=\"mdui-text-color-blue-accent\">",$row['title'],"</div></div>";
    echo "</div>";
    
    //卡片的内容
    echo "<div class=\"mdui-card-content mdui-text-truncate\">",$show,"</div>";
    echo "</div>";
    //卡片结束
    echo "<br>";
    echo "<br>";
    }
    
//查询数据库 表 basic

    require("./system/core/conn.php");//引入数据库
    $sql="select * from `xksc_basic` where `title` like '%".$word."%'";
    $result=mysqli_query($gb_conn,$sql);
    
    while($row=mysqli_fetch_assoc($result))
    {
    //echo  $row['标题'], "&nbsp;", $row['内容'], "<br/>";
    
    $show=htmlspecialchars($row['content']);
    $id=$row['id']-1;
    //示列卡片
    echo "<div class=\"mdui-card mdui-hoverable\"  onclick=\"window.open('./xksc_show?class=basic&id=".$id."');\">";
    
    //卡片的标题和副标题
    echo "<div class=\"mdui-card-primary\">";
    echo "<div class=\"mdui-card-primary-title\" > <div class=\"mdui-text-color-blue-accent\">",$row['title'],"</div></div>";
    echo "</div>";
    
    //卡片的内容
    echo "<div class=\"mdui-card-content mdui-text-truncate\">",$show,"</div>";
    echo "</div>";
    //卡片结束
    echo "<br>";
    echo "<br>";
    }
    
    
mysqli_close($gb_conn);
?>