<!-- 主界面内容开始 -->
<!-- 基础网格 -->
<div class="mdui-container">

	<?php
	$class=$sid;
	//主页
	//index
	if($class=="index")
	{
		require("./website/".$fid."/mian_zhu.php");
	}
	//实列
	elseif($class=="course")
	{
		require("./website/".$fid."/index/course.php");
	}
	//基础
	elseif($class=="basic")
	{
		require("./website/".$fid."/index/basic.php");
	}
	//显示内容
	elseif($class=="show")
	{
		require("./website/".$fid."/index/show.php");
	}
	//全部列表（静态内容）
	elseif($class=="allHtml")
	{
		require("./website/".$fid."/index/all_html.php");
	}
	//搜索
	elseif($class=="search")
	{
		require("./website/".$fid."/index/search.php");
	}
	//搜索结果
	elseif($class=="searchList")
	{
		require("./website/".$fid."/index/searchList.php");
	}
	//更多（卡片）
	elseif($class=="cards")
	{
		require("./website/".$fid."/index/cards.php");
	}
	//更多工具
	//MD配色
	elseif($class=="md-color")
	{
		require("./website/".$fid."/index/md-color.php");
	}
	//氢应用
	elseif($class=="tools-mian")
	{
		require("./website/".$fid."/index/tools-mian.php");
	}
	//Api
	elseif($class=="api")
	{
		require("./website/".$fid."/index/api.php");
	}
	//算法加解密
	//aes
	elseif($class=="crypto-aes")
	{
		require("./website/".$fid."/crypto/crypto_aes.php");
	}
	//base
	elseif($class=="crypto-base")
	{
		require("./website/".$fid."/crypto/crypto_base.php");
	}
	//des
	elseif($class=="crypto-des")
	{
		require("./website/".$fid."/crypto/crypto_des.php");
	}
	//hmacmd5
	elseif($class=="crypto-hmacmd5")
	{
		require("./website/".$fid."/crypto/crypto_hmacmd5.php");
	}
	//md5
	elseif($class=="crypto-md5")
	{
		require("./website/".$fid."/crypto/crypto_md5.php");
	}
	//utf8
	elseif($class=="crypto-utf8")
	{
		require("./website/".$fid."/crypto/crypto_utf8.php");
	}
	//sha
	elseif($class=="crypto-sha")
	{
		require("./website/".$fid."/crypto/crypto_sha.php");
	}
	//如果无赋值，返回index
	else
	{
		require("./website/".$fid."/mian_zhu.php");
	}
	?>
	   
	</div>
   <!-- 主界面内容基础网格结束 -->
</div>

<!--  -->
<!-- 最大基础网格结束 -->
</div>
<!-- 最大容器结束 -->
</div>

