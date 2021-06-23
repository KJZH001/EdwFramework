<?php

//$=$_REQUEST[""];
$id=$_REQUEST["id"];
$evaluate=$_REQUEST["evaluate"];

if($gb_debug=="true")
{
    echo "调用了done.php<br>";
}

//判定数据库
if ($gb_sqlonly=="false") 
{
$gb_sqlname=$gb_sqlprefix."schoolia";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
$sql="UPDATE `weixiu` SET `status` = '1', `evaluate` = '".$evaluate."' WHERE `weixiu`.`id` = ".$id.";";
//echo "<br>".$sql;

if($return="json")
{
    if($gb_debug=="false")
	{
		header("content-type:application/json");
	}
    if (mysqli_query($gb_conn, $sql)) {
        $result_json=array('msg'=>'数据提交成功！');
        echo json_encode($result_json);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($gb_conn);
    }
    
    
}
else
{
    echo "不支持的数据类型";
}




//关闭数据库
mysqli_close($gb_conn);



?>
