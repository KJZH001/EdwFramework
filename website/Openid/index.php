
<!DOCTYPE html>
<!--  -->
<html>
<head>
<?php
//这里是Openid的index.php
//载入站点配置
require("./website/".$fid."/global.php");
//引入header
require("./website/".$fid."/header.php");
?>
</head>
<?php
//引入mian
require("./website/".$fid."/mian.php");
//引入footer
require("./website/".$fid."/footer.php");
//输出注册登录的Tab切换
require("./website/".$fid."/plugin/index_tab.php");

?>
</body>
</html>