<br>
<br>

<?php
/* 配置初始化 */

//默认楼层
if($gb_url2!="error")
{
	$floor=$gb_url2;
};
//自动刷新
if($gb_url3=="auto")
{
	$gb_autoRefresh="true";
};
//调试输出
if($gb_debug=="true")
{	
	echo "自动刷新参数：".$gb_autoRefresh;
	echo "<br>当前楼层为：".$floor;
}


//判定数据库
if ($gb_sqlonly=="false") 
{
	$gb_sqlname=$gb_sqlprefix."schoolia";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
//$sql="select * from post order by id desc limit 1;";
$sql="select * from post where floor=".$floor." order by id desc;";
$result=mysqli_query($gb_conn,$sql);
?>


<div class="mdui-col-md-9 mdui-col-xs-12">

	<?php
	while($row=mysqli_fetch_assoc($result))
	{
	$title=$row['title'];
	$time=$row['time'];
	$department=$row['department'];
	$contant=$row['contant'];
	//$contant=htmlspecialchars($row['contant']);
	$contant=str_replace(PHP_EOL,"<br>", $contant);
	
		echo "
			<div class=\"mdui-card\">

				<!-- 卡片头部，包含头像、标题、副标题 -->

				<!-- 卡片的标题和副标题 -->
				<div class=\"mdui-card-primary\">
					<div class=\"mdui-card-primary-title\">".$title."</div>
					<div class=\"mdui-card-primary-subtitle\">". $time."</div>
					<div class=\"mdui-card-primary-subtitle\">". $department."</div>
				
				</div>

				<!-- 卡片的内容 -->
				<div class=\"mdui-card-content\">
					". $contant."
				</div>

			</div>

			<br>
		";
	}

	?>

	<div class="mdui-card">

	  <!-- 卡片头部，包含头像、标题、副标题 -->

	  <!-- 卡片的标题和副标题 -->
	  <div class="mdui-card-primary">
		<!-- <div class="mdui-card-primary-title"><?php //echo $title; ?></div>
		<div class="mdui-card-primary-subtitle"><?php //echo $time; ?></div>
		<div class="mdui-card-primary-subtitle"><?php //echo $department; ?></div> -->
		
		<!-- <div class="mdui-typo">
 			 <h1>h1 标题 heading</h1>
		</div> -->

		<!-- <div class="mdui-card-primary-subtitle">公告时间 部门</div> -->

		<div class="mdui-card-primary-title">Title</div>
        <div class="mdui-card-primary-subtitle">Subtitle</div>
		
	  </div>

	 	 <!-- 卡片的内容 -->
		<div class="mdui-card-content">
			<?php //echo $contant; ?>

			这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
			<br>这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
			<br>这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
		</div>

	</div>
	<div class="mdui-card">
		<div class="mdui-card-media">
			<img src="../website/SchoolIA/src/weather.jpg"/>
			<div class="mdui-card-media-covered">
				<div class="mdui-card-primary">
					<div class="mdui-card-primary-title">Title</div>
					<div class="mdui-card-primary-subtitle">Subtitle</div>
				</div>
			</div>
		</div>
	</div>

	<br>

	<div class="mdui-card">

	  <!-- 卡片头部，包含头像、标题、副标题 -->

	  <!-- 卡片的标题和副标题 -->
	  <div class="mdui-card-primary">
		<!-- <div class="mdui-card-primary-title"><?php //echo $title; ?></div>
		<div class="mdui-card-primary-subtitle"><?php //echo $time; ?></div>
		<div class="mdui-card-primary-subtitle"><?php //echo $department; ?></div> -->
		
		<!-- <div class="mdui-typo">
 			 <h1>h1 标题 heading</h1>
		</div> -->

		<!-- <div class="mdui-card-primary-subtitle">公告时间 部门</div> -->

		<div class="mdui-card-primary-title">Title</div>
        <div class="mdui-card-primary-subtitle">Subtitle</div>
		
	  </div>

	  <!-- 卡片的内容 -->
	  <div class="mdui-card-content">
	  <?php //echo $contant; ?>
	  
	  这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
	  <br>这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
	  <br>这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
	 </div>


	</div>

	<br>


	

	
</div>



<div class="mdui-hidden-md-up">
		<br>
</div>


<div class="mdui-col-md-3 mdui-col-xs-12">
	<div class="mdui-card">

		<?php
		//判定数据库
		$sql="select * from weather order by id desc limit 1;";
		$result=mysqli_query($gb_conn,$sql);
		$row=mysqli_fetch_assoc($result);
		//输出数据
		$type=$row['type'];
		$time=$row['time'];
		$temperature=$row['temperature'];
		$contant=htmlspecialchars($row['contant']);
		$contant=str_replace(PHP_EOL,"<br>", $contant);
		/*关闭连接*/
		mysqli_close($gb_conn);
		
		?>
	  <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
	  <div class="mdui-card-media">
		<img src="../website/SchoolIA/src/weather.jpg"/>


	  <!-- 卡片的标题和副标题 -->
	  <div class="mdui-card-primary">
		<div class="mdui-card-primary-title"><?php echo $type; ?></div>
		<div class="mdui-card-primary-subtitle"><?php echo $temperature; ?>℃</div>
	  </div>

	  <!-- 卡片的内容 -->
	  <div class="mdui-card-content"><?php echo $contant; ?>
	  <br>
	  <div class="mdui-card-primary-subtitle">更新时间：<?php echo $time; ?></div>
	  </div>

	</div>
	</div>
</div>

<?php
	if($gb_autoRefresh=="true")
	{
		echo "
		<script>
			var url=window.location.href;
			var time=new Date();
			
			setInterval(function(){
				window.location.href=url
			},5000)
		</script>
		";
	};

?>


