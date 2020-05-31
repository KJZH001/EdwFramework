<div class="mdui-typo">
<h1> 空梦框架 <small> 站点列表 </small></h1>
</div>

<div class="mdui-table-fluid">
  <table class="mdui-table">
    <thead>
      <tr>
        <th>#</th>
        <th>站点目录</th>
        <th></th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>

        <?php
        $dir = "./website/";
        $list_id=0;
        // 打开目录，然后读取其内容
        if (is_dir($dir)){

            if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false)
                {
                    
                    if($file!="."&&$file!="..")
                    {
                        $list_id=$list_id+1;
                        echo "<tr>
                        <td>".$list_id."</td>";
                        echo "<td>".$file."</td>";
                        echo "<td></td>
                        <td>
                        <div class=\"mdui-typo\">
                        <a href=\"./admin_WebSet_".$file."\">设置</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=\"./admin_WebAdmin_".$file."\">管理</a>
                        </div>
                        </td></tr>";
                    }
                
                }
                closedir($dh);
            }
        }
        ?>

    </tbody>
  </table>
</div>

