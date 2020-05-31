
	        <!--获取内容-->
			<div class="mdui-textfield mdui-textfield-floating-label">
  			 <label class="mdui-textfield-label">需要加解密的文本</label>
 			 <textarea id="content" class="mdui-textfield-input" type="text"></textarea>
			</div>
			<!--按钮-->
			<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="jiaMi()">加密</button>
			<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="jieMi()">解密</button>
			<!--输出内容-->
	       	<div class="mdui-textfield" id="resultShow">
        	 <textarea type="text" id="shuchu" class="mdui-textfield-input" placeholder="输出的内容在这里" disabled></textarea>
       	    </div>
			
			  <script>
			  function jiaMi()
			    {
					shuchu.value=content.value.replace(/[^\u0000-\u00FF]/g,function($0){return escape($0).replace(/(%u)(\w{4})/gi,"&#x$2;")}); 
					mdui.updateTextFields();
				}
				function jieMi()
			    {
					shuchu.value=unescape(content.value.replace(/&#x/g,'%u').replace(/;/g,'')); 
					mdui.updateTextFields();
				}
              </script>		   
		   
