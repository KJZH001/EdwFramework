<div class="mdui-typo">
<h1> 创新实验室 <small> 物品登记表 </small></h1>
</div>

<div class="mdui-table-fluid">
  <table class="mdui-table">
    <thead>
      <tr>
        <th>#</th>
        <th>物品</th>
        <th>参考日期</th>
        <th>状态</th>
        <th>备注</th>
        <th>负责人</th>
      </tr>
    </thead>
    <tbody>

        <?php
        //判定数据库
if ($gb_sqlonly=="false") 
{
	$gb_sqlname=$gb_sqlprefix."schoolia";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
//$sql="select * from post order by id desc limit 1;";
$sql="select * from maker order by id asc;";
$result=mysqli_query($gb_conn,$sql);
?>


<div class="mdui-col-md-9 mdui-col-xs-12">

	<?php
	while($row=mysqli_fetch_assoc($result))
	{
	$id=$row['id'];
	$goods=$row['goods'];
    $time=$row['time'];
    $state=$row['state'];
    $remarks=$row['remarks'];
    $object=$row['object'];

	$remark=str_replace(PHP_EOL,"<br>", $remark);
    $object=str_replace(PHP_EOL,"<br>", $object);
	
		echo "
			<tr>
            <td>".$id."</td>
            <td>".$goods."</td>
            <td>".$time."</td>
            <td>".$state."</td>
            <td><pre>".$remarks."</pre></td>
            <td><pre>".$object."</pre></td>
            </tr>
		";
	}
        ?>

    </tbody>
  </table>
</div>

