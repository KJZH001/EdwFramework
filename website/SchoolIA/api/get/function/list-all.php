<?php
if($gb_debug=="true")
{
    echo "调用了list-all.php<br>";
}

//判定数据库
if ($gb_sqlonly=="false") 
{
$gb_sqlname=$gb_sqlprefix."schoolia";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
$sql="select * from weixiu order by id asc;";
$result=mysqli_query($gb_conn,$sql);

$num=1;
$result_json=null;

//echo "id title contant time state（状态） evaluate（评分)<br>";
while($row=mysqli_fetch_assoc($result))
{

$result_json[$num]=$row;
$num++;

}

if($return="json")
{
    if($gb_debug=="false")
	{
		header("content-type:application/json");
	}
    echo json_encode($result_json);
}
else
{
    echo "不受支持的返回值类型";
}

//关闭数据库
mysqli_close($gb_conn);
?>