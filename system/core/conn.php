<?php
  //连接数据库
  $gb_conn=mysqli_connect($gb_servername, $gb_username, $gb_password,$gb_sqlname);
  //判断连接
  if (!$gb_conn) {
	if($gb_debug=="true")
    {
    printf("发生了一个意外错误，我们无法连接到Mysql数据库！\n错误代码: %s ", mysqli_connect_error());
    }
	exit;
  }
  mysqli_set_charset($gb_conn,"utf8");
?>