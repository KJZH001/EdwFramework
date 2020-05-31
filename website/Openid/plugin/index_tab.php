<?php
if($sid=="login"||$sid==null||$sid=="register"||$sid=="error")
{

print <<<EOT
<script>
//注册/登录的Tab切换
var inst = new mdui.Tab('#tab');
document.getElementById('prev').addEventListener('click', function () {
  inst.prev();
});
document.getElementById('next').addEventListener('click', function () {
  inst.next();
});
//注册/登录的Tab切换_moblie
var inst1 = new mdui.Tab('#tab_moblie');
document.getElementById('prev_moblie').addEventListener('click', function () {
  inst1.prev();
});
document.getElementById('next_moblie').addEventListener('click', function () {
  inst1.next();
});
</script>

EOT;

//引入登录提示判定
require("./website/".$fid."/plugin/alert.php");
}
?>