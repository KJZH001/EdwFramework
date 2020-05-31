
<!DOCTYPE html>
<!--  -->
<html>
<head>
<?php
//这里是Admin的index.php
//载入站点配置
require("./system/admin/global.php");
//引入header
require("./system/admin/header.php");
?>
</head>
<?php
//引入侧滑
require("./system/admin/cehua.php");
//引入mian
require("./system/theme/MDUI_official_XiaoKong/php/mian.php");
require("./system/admin/mian.php");
//引入footer
require("./system/admin/footer.php");
?>
</body>
</html>