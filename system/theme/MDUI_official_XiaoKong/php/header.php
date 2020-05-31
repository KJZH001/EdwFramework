
<!-- 输出meta -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

<?php
//输出标题
echo "<title id=\"title\">".$gb_name."</title>";
?>

<!-- 输出css -->
  <?php
  //判断是否从cdn服务器载入css
  if ($gb_cdn=="true") 
  {
    echo "<link rel=\"stylesheet\" href=\"//cdnjs.loli.net/ajax/libs/mdui/0.4.3/css/mdui.min.css\">";
  }
  else
  {
    echo "<link rel=\"stylesheet\" href=\"../system/theme/MDUI_official_XiaoKong/css/mdui.min.css\">";
  }
  ?>
  
  <style  type="text/css">
   .edw-no-linkUnderLine
   {
    text-decoration:none;
   }
   .cehua_top_text
   {
    padding-top:40px;
    padding-bottom:40px;
   }
  </style>
