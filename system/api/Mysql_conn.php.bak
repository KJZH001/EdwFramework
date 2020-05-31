<?php
  //连接数据库
  $gb_conn=mysqli_connect($gb_servername, $gb_username, $gb_password,$gb_sqlname);
  //判断连接
  if (!$gb_conn) {
	if($gb_debug=="true")
    {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    }
	exit;
  }
  mysqli_set_charset($gb_conn,"utf8");
?>