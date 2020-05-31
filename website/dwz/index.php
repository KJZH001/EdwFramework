
<!DOCTYPE html>
<!--  -->
<html>
<head>
<?php
//这里是dwz的index.php
//载入站点配置
require("./website/".$fid."/global.php");
//引入header
require("./system/theme/MDUI_official_XiaoKong/php/header.php");
?>
</head>
<?php
//引入侧滑
require("./website/".$fid."/cehua.php");
//引入mian
require("./system/theme/MDUI_official_XiaoKong/php/mian.php");
require("./website/".$fid."/mian.php");
//引入footer
require("./system/theme/MDUI_official_XiaoKong/php/footer.php");
?>

</body>
</html>