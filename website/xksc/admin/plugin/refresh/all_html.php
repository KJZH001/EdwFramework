
<div class="mdui-typo">
   <h1> 站点管理 <small> 晓空iApp手册 For Web </small></h1>
</div>

<?php
//获取从链接中传来的参数
$word=null;

//暂时储存的变量
$contant;

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
    $contant=$contant."<div class=\"mdui-card mdui-hoverable\"  onclick=\"window.open('./xksc_show?class=course&id=".$id."');\">";
    
    //卡片的标题和副标题
    $contant=$contant. "<div class=\"mdui-card-primary\">";
    $contant=$contant. "<div class=\"mdui-card-primary-title\" > <div class=\"mdui-text-color-blue-accent\">".$row['title']."</div></div>";
    $contant=$contant. "</div>";
    
    //卡片的内容
    $contant=$contant. "<div class=\"mdui-card-content mdui-text-truncate\">".$show."</div>";
    $contant=$contant. "</div>";
    //卡片结束
    $contant=$contant. "<br>";
    $contant=$contant. "<br>";
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
    $contant=$contant. "<div class=\"mdui-card mdui-hoverable\"  onclick=\"window.open('./xksc_show?class=basic&id=".$id."');\">";
    
    //卡片的标题和副标题
    $contant=$contant. "<div class=\"mdui-card-primary\">";
    $contant=$contant. "<div class=\"mdui-card-primary-title\" > <div class=\"mdui-text-color-blue-accent\">".$row['title']."</div></div>";
    $contant=$contant. "</div>";
    
    //卡片的内容
    $contant=$contant. "<div class=\"mdui-card-content mdui-text-truncate\">".$show."</div>";
    $contant=$contant. "</div>";
    //卡片结束
    $contant=$contant. "<br>";
    $contant=$contant. "<br>";
    }
    
//写入数据
$myfile = fopen("./website/".$web."/index/static/all_html.php", "w") or die("Error：调用这个文件时发生了意外，请检查您的权限");
fwrite($myfile, $contant);
fclose($myfile);

//关闭数据库    
mysqli_close($gb_conn);

echo "刷新静态缓存完毕！";

?>