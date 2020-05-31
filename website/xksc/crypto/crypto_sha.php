
	        <!--获取内容-->
			<div class="mdui-textfield mdui-textfield-floating-label">
  			 <label class="mdui-textfield-label">需要加解的文本</label>
 			 <textarea id="content" class="mdui-textfield-input" type="text"></textarea>
			</div>
			<div class="mdui-textfield mdui-textfield-floating-label">
  			 <label class="mdui-textfield-label">密码</label>
 			 <input id="testPWD" class="mdui-textfield-input" type="text"/>
			</div>
			<!--按钮-->

			<!-- 标题自适应 大屏幕 -->
			<div class="mdui-hidden-xs-down">
				<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA1()">SHA1加密</button>
				<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA224()">SHA224加密</button>
				<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA256()">SHA256加密</button>
				<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA384()">SHA384加密</button>
				<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA512()">SHA512加密</button>
			</div>
			
			<!-- 标题自适应 小屏幕 -->
			<div class="mdui-hidden-sm-up">
				<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA1()">SHA1加密</button>
				<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA224()">SHA224加密</button>
				<br><br><button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA256()">SHA256加密</button>
				<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA384()">SHA384加密</button>
				<br><br><button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="SHA512()">SHA512加密</button>
			</div>
			<!--输出内容-->
	       	<div class="mdui-textfield" id="resultShow">
        	 <textarea type="text" class="mdui-textfield-input" placeholder="输出的内容在这里" disabled></textarea>
       	    </div>
			
			<script src="https://cdn.bootcss.com/crypto-js/3.1.9-1/crypto-js.min.js"></script>
			  <script>
			    function SHA1()
			    {
					
					//获取编辑框内容
 			   	    var content=document.getElementById("content").value;
			  	    var password=document.getElementById("testPWD").value;
  					var mi=CryptoJS.HmacSHA1(content,password);
 				    document.getElementById("resultShow").innerHTML = 
					"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+mi+"</textarea>";
					mdui.updateTextFields();
					
				}
				function SHA224()
			    {
					
					//获取编辑框内容
 			   	    var content=document.getElementById("content").value;
			  	    var password=document.getElementById("testPWD").value;
  					var mi=CryptoJS.HmacSHA224(content,password);
 				    document.getElementById("resultShow").innerHTML = 
					"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+mi+"</textarea>";
					mdui.updateTextFields();
					
				}
				function SHA256()
			    {
					
					//获取编辑框内容
 			   	    var content=document.getElementById("content").value;
			  	    var password=document.getElementById("testPWD").value;
  					var mi=CryptoJS.HmacSHA256(content,password);
 				    document.getElementById("resultShow").innerHTML = 
					"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+mi+"</textarea>";
					mdui.updateTextFields();
					
				}
				function SHA384()
			    {
					
					//获取编辑框内容
 			   	    var content=document.getElementById("content").value;
			  	    var password=document.getElementById("testPWD").value;
  					var mi=CryptoJS.HmacSHA384(content,password);
 				    document.getElementById("resultShow").innerHTML = 
					"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+mi+"</textarea>";
					mdui.updateTextFields();
					
				}
				function SHA512()
			    {
					
					//获取编辑框内容
 			   	    var content=document.getElementById("content").value;
			  	    var password=document.getElementById("testPWD").value;
  					var mi=CryptoJS.HmacSHA512(content,password);
 				    document.getElementById("resultShow").innerHTML = 
					"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+mi+"</textarea>";
					mdui.updateTextFields();
					
				}
              </script>		   
		   
