<?php
    require("./website/".$tid."/admin/plugin/refresh/basic.php");
    echo "<br>";
    $contant=null;
    require("./website/".$tid."/admin/plugin/refresh/course.php");
    echo "<div class=\"mdui-typo\">
                <h1> 站点管理 <small> 晓空iApp手册 For Web </small></h1>
            </div>";
    echo "<br>刷新安卓端数据完毕！";
?>