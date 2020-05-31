<!-- 主界面内容开始 -->
<!-- 右侧login -->

<!-- 自适应 大屏幕 -->
<div class="mdui-hidden-xs-down">
<div class="mdui-container mdui-float-right" 
	style="
	width:296px;
	height:100vh;
	background-color:rgba(0,0,0,0.4);
	">
	<!--登录/注册单表-->
	<div class="mdui-tab mdui-hidden" id="tab" mdui-tab>
	  <a href="#tab1-content" id="tab1" class="mdui-ripple">登录</a>
	  <a href="#tab2-content" id="tab2" class="mdui-ripple">注册</a>
	</div>
	
	<br>
	<br>
	<br>
	<center>
	<div class="mdui-typo-headline-opacity mdui-text-color-white-text">空梦框架 Openid</div>
	</center>
	
	<!--pc登录-->
	<div id="tab1-content" class="mdui-p-a-2">
	
		<form action="../api.php?type=post&server=login" method="post">
			<div class="mdui-textfield mdui-textfield-floating-label">
				<label class="mdui-textfield-label mdui-text-color-white-secondary">用户名</label>
				<input class="mdui-textfield-input" type="text"  name="edw_user">
				<div class="mdui-textfield-error mdui-text-color-white-secondary">用户名不能为空</div>
			</div>
			<div class="mdui-textfield mdui-textfield-floating-label">
			  <label class="mdui-textfield-label mdui-text-color-white-secondary">密码</label>
			  <input class="mdui-textfield-input" type="text"  name="edw_pwd">
			</div>
			<button id="next" class="mdui-btn mdui-ripple mdui-text-color-white-secondary" type="button">注册</button>
			<button class="mdui-btn mdui-ripple mdui-float-right mdui-text-color-white-secondary" type="button">忘记密码？</button>

			<br>
			<br>
			<button class="mdui-btn mdui-ripple mdui-color-theme-accent mdui-center mdui-text-color-white-secondary mdui-shadow-0 
			mdui-color-grey-700" style="width:264px;" type="submit">登录</button>
		</form>
		
	</div>
	
	<!--pc注册-->
	<div id="tab2-content" class="mdui-p-a-2">
		
	<form action="../api.php?type=post&server=register" method="post">
		<div class="mdui-textfield mdui-textfield-floating-label">
			<label class="mdui-textfield-label mdui-text-color-white-secondary">User name</label>
			<input class="mdui-textfield-input" type="text" name="edw_user" required/>
			<div class="mdui-textfield-error mdui-text-color-white-secondary">用户名不能为空</div>
		</div>

		<div class="mdui-textfield mdui-textfield-floating-label">
		  <label class="mdui-textfield-label mdui-text-color-white-secondary">Email</label>
		  <input class="mdui-textfield-input" type="email" name="edw_email" required/>
		  <div class="mdui-textfield-error mdui-text-color-white-secondary">邮箱格式错误</div>
		</div>

		<div class="mdui-textfield mdui-textfield-floating-label">
		  <label class="mdui-textfield-label mdui-text-color-white-secondary">Password</label>
		  <input class="mdui-textfield-input" type="text" name="edw_pwd" 
		  pattern="^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z]).*$" required/>
		  <div class="mdui-textfield-error mdui-text-color-white-secondary">密码至少 6 位，且包含大小写字母</div>
		  <div class="mdui-textfield-helper mdui-text-color-white-secondary">请输入至少 6 位，且包含大小写字母的密码</div>
		</div>
		<br>
		<button class="mdui-btn mdui-ripple mdui-color-theme-accent mdui-center mdui-text-color-white-secondary 
		mdui-shadow-0 mdui-color-grey-700" style="width:264px;" type="submit">注册</button>
		</form>
		<br>
		<br>
		<a class="mdui-btn mdui-ripple mdui-text-color-white-secondary" id="prev">←返回登录</a>
		
	</div>
</div>

</div>

<!-- 自适应 小屏幕 -->
<div class="mdui-hidden-sm-up">

<div class="mdui-container" 
	style="
	width:296px;
	height:100vh;
	background-color:rgba(0,0,0,0.4);
	">
	
	<!--登录/注册单表-->
	<div class="mdui-tab mdui-hidden" id="tab_moblie" mdui-tab>
	  <a href="#tab1-content_moblie" id="tab1_moblie" class="mdui-ripple">登录</a>
	  <a href="#tab2-content_moblie" id="tab2_moblie" class="mdui-ripple">注册</a>
	</div>
	
	<br>
	<br>
	<br>
	<center>
	<div class="mdui-typo-headline-opacity mdui-text-color-white-text">空梦框架 Openid</div>
	</center>
	
	<!--手机登录-->
	<div id="tab1-content_moblie" class="mdui-p-a-2">

	<form action="../api.php?type=post&server=login" method="post">

		<div class="mdui-textfield mdui-textfield-floating-label">
			<label class="mdui-textfield-label mdui-text-color-white-secondary">用户名</label>
			<input class="mdui-textfield-input" type="text" name="edw_user">
			<div class="mdui-textfield-error mdui-text-color-white-secondary">用户名不能为空</div>
		</div>
		<div class="mdui-textfield mdui-textfield-floating-label">
		<label class="mdui-textfield-label mdui-text-color-white-secondary">密码</label>
		<input class="mdui-textfield-input" type="text" name="edw_pwd">
		</div>
		<button id="next_moblie" class="mdui-btn mdui-ripple mdui-text-color-white-secondary" type="button">注册</button>
		<button class="mdui-btn mdui-ripple mdui-float-right mdui-text-color-white-secondary" type="button">忘记密码？</button>

		<br>
		<br>
		<button class="mdui-btn mdui-ripple mdui-color-theme-accent mdui-center mdui-text-color-white-secondary 
		mdui-shadow-0 mdui-color-grey-700"style="width:264px;">登录</button>
		</form>

	</div>
	
	<!--手机注册-->
	<div id="tab2-content_moblie" class="mdui-p-a-2">
	<form action="../api.php?type=post&server=register" method="post">
		<div class="mdui-textfield mdui-textfield-floating-label">
			<label class="mdui-textfield-label mdui-text-color-white-secondary">User name</label>
			<input class="mdui-textfield-input" type="text" name="edw_user" required/>
			<div class="mdui-textfield-error mdui-text-color-white-secondary">用户名不能为空</div>
		</div>

		<div class="mdui-textfield mdui-textfield-floating-label">
		<label class="mdui-textfield-label mdui-text-color-white-secondary">Email</label>
		<input class="mdui-textfield-input" type="email" name="edw_email" required/>
		<div class="mdui-textfield-error mdui-text-color-white-secondary">邮箱格式错误</div>
		</div>

		<div class="mdui-textfield mdui-textfield-floating-label">
		<label class="mdui-textfield-label mdui-text-color-white-secondary">Password</label>
		<input class="mdui-textfield-input" type="text" name="edw_pwd" 
		pattern="^.*(?=.{6,})(?=.*[a-z])(?=.*[A-Z]).*$" required/>
		<div class="mdui-textfield-error mdui-text-color-white-secondary">密码至少 6 位，且包含大小写字母</div>
		<div class="mdui-textfield-helper mdui-text-color-white-secondary">请输入至少 6 位，且包含大小写字母的密码</div>
		</div>
		<br>
		<button class="mdui-btn mdui-ripple mdui-color-theme-accent mdui-center mdui-text-color-white-secondary mdui-shadow-0 
		mdui-color-grey-700" style="width:264px;" type="submit">注册</button>
	</form>
	<br>
	<br>
	<a class="mdui-btn mdui-ripple mdui-text-color-white-secondary" id="prev_moblie">←返回登录</a>
	</div>
	
</div>

</div>