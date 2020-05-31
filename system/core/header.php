<?php
//此处为head的html和php代码
	
	//判断是否输出低级报错
	if($gb_debug=="false")
	{
	//关闭notice报错提示
	error_reporting(E_ALL^E_NOTICE);
	}
?>
<!-- 输出meta -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

<?php
//输出标题
echo "<title>".$gb_name."</title>";
?>

<!-- 输出css -->
  <link rel="stylesheet" href="./css/mdui.min.css">
  <style  type="text/css">
   .card-cloud-download
   {
   padding-top: 100px;
   padding-bottom: 100px;
   }
   .card-mdps
   {
   padding-top: 100px;
   padding-bottom: 100px;
   }
   .cehua_top_text
   {
   padding-top: 40px;
   padding-bottom: 40px;
   }
   .去超链接下划线
   {
   text-decoration:none;
   }
  </style>

