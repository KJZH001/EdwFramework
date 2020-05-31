<br>
<br>
<div class="mdui-typo-display-1 教程标题">晓空iApp手册Web版 Api列表</div>

<div class="mdui-typo-body-2-opacity 教程内容 内容行距">
<br>
<font size="3" id="show">

欢迎使用 晓空iApp手册Web版的Api！您可以通过本站的Api快速的为您的程序调用到您所需要的数据。
<br>
<br><font size="5">调用教程内容</font>
<br>
<br>Api接口：<strong>http://yourdomain/show.php?class=[name]&id=[num]</strong>
<br>在这这个Api中有两个参数，分别为<strong>class</strong>和<strong>id</strong>。
<br>class参数代表您所指向的教程类别，用于服务器识别输出的类型
<br>class有两个可供选择的参数，分别为<strong>course</strong>(教程类型)和<strong>basic</strong>(基础类型)
<br>返回值为html格式，您可以用iapp的<strong>hs()</strong>函数获取内容，并使用<strong>sj()</strong>函数截取出您所需要的内容
<br>
<br><font size="5">调用搜索内容</font>
<br>
<br>Api接口：<strong>http://yourdomain/searchList.php?word=[name]</strong>
<br>在这个Api中，您会看到只有一个参数，这个参数为搜索的项目标题
<br>为了降低服务器负担，我们仅提供低级模糊搜索（即显示所有完全包含关键字的项目）
<br>同样的，本Api返回值为html格式，您可以用iapp的<strong>hs()</strong>函数获取内容，并使用<strong>sj()</strong>函数截取出您所需要的内容
<br>
<br><font size="4">更多Api即将添加，敬请期待！</font>
<br>
<br>关于使用说明，请参考<a href="http://blog.rcraft.ml/index.php/rcraft-api/" class="去超链接下划线">
http://blog.rcraft.ml/index.php/rcraft-api/</a>
</font>
</div>