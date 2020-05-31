<?php
$server=$_REQUEST["server"];
if(file_exists("./system/api/get/".$server.".php"))
		{
			require("./system/api/get/".$server.".php");
		}
		else
		{
			if($gb_debug=="true")
			{
				echo "未找到文件";
			}
			require("./system/core/404.php");
		}

?>