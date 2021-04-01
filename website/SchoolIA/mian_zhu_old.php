<br>
<br>

<?php
//判定数据库
if ($gb_sqlonly=="false") 
{
	$gb_sqlname=$gb_sqlprefix."schoolia";
}
//引入数据库
require("./system/core/conn.php");
//查询数据库
$sql="select * from post order by id desc limit 1;";
$result=mysqli_query($gb_conn,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$time=$row['time'];
$department=$row['department'];
$contant=$row['contant'];

?>


<div class="mdui-col-md-9 mdui-col-xs-12">
	<div class="mdui-card">

	  <!-- 卡片头部，包含头像、标题、副标题 -->

	  <!-- 卡片的标题和副标题 -->
	  <div class="mdui-card-primary">
		<div class="mdui-card-primary-title"><?php echo $title; ?></div>
		<div class="mdui-card-primary-subtitle"><?php echo $time; ?></div>
		<div class="mdui-card-primary-subtitle"><?php echo $department; ?></div>
		<!--
		<div class="mdui-card-primary-subtitle">公告时间</div>
		<div class="mdui-card-primary-subtitle">部门</div>
		-->
	  </div>

	  <!-- 卡片的内容 -->
	  <div class="mdui-card-content">
	  <?php echo $contant; ?>
	  <!--
	  这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
	  <br>这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
	  <br>这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容这里是公告的内容
	  --></div>


	</div>
	
	<div class="mdui-card">

	  <!-- 卡片的内容 -->
	  <div class="mdui-card-content">
		    <div class="mdui-card-menu">
			  <button class="mdui-btn mdui-btn-icon mdui-text-color-black-secondary"
				onclick="window.location.href='./SchoolIA_fankui';">
			  <i class="mdui-icon material-icons">filter_none</i>
			  </button>
			</div>
	  
	  		<div class="mdui-card-primary-title">快速反馈</div>
	  
	  <!-- 浮动标签 -->
		<div class="mdui-textfield mdui-textfield-floating-label">
		  <label class="mdui-textfield-label">反馈内容</label>
		  <textarea class="mdui-textfield-input"></textarea>
		</div>
	  </div>
	  
	  <!-- 卡片的按钮 -->
	  <div class="mdui-card-actions">
		<button class="mdui-btn mdui-ripple"><i class="mdui-icon material-icons">near_me</i>发射</button>
		<button class="mdui-btn mdui-ripple mdui-float-right"
			onclick="window.location.href='./SchoolIA_liuyan';">
		<i class="mdui-icon material-icons">open_in_new</i>打开留言板
		</button>
		
	  </div>


	</div>
	
</div>


<div class="mdui-hidden-md-up">
		<br>
</div>


<div class="mdui-col-md-3 mdui-col-xs-12">
	<div class="mdui-card">

	  <!-- 卡片的媒体内容，可以包含图片、视频等媒体内容，以及标题、副标题 -->
	  <div class="mdui-card-media">
		<img src="../website/SchoolIA/src/weather.jpg"/>


	  <!-- 卡片的标题和副标题 -->
	  <div class="mdui-card-primary">
		<div class="mdui-card-primary-title">晴天</div>
		<div class="mdui-card-primary-subtitle">0~0℃</div>
	  </div>

	  <!-- 卡片的内容 -->
	  <div class="mdui-card-content">这里是天气的内容这里是天气的内容这里是天气的内容这里是天气的内容这里是天气的内容这里是天气的内容</div>

	  <!-- 卡片的按钮 -->
	  <div class="mdui-card-actions">
		<button class="mdui-btn mdui-ripple"><i class="mdui-icon material-icons">refresh</i>立即更新</button>
	  </div>

	</div>
	</div>
</div>


