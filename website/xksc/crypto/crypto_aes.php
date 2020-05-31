
	        <!--获取内容-->
			<div class="mdui-textfield mdui-textfield-floating-label">
  			 <label class="mdui-textfield-label">需要加解密的文本</label>
 			 <textarea id="content" class="mdui-textfield-input" type="text"></textarea>
			</div>
			<div class="mdui-textfield mdui-textfield-floating-label">
  			 <label class="mdui-textfield-label">密码</label>
 			 <input id="testPWD" class="mdui-textfield-input" type="text"/>
			</div>
			<!--按钮-->
			<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="jiaMi()">加密</button>
			<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent" onclick="jieMi()">解密</button>
			<!--输出内容-->
	       	<div class="mdui-textfield" id="resultShow">
        	 <textarea type="text" class="mdui-textfield-input" placeholder="输出的内容在这里" disabled></textarea>
       	    </div>
			
			<script src="https://cdn.bootcss.com/crypto-js/3.1.9-1/crypto-js.min.js"></script>
			  <script>
			  function jiaMi()
			    {
					
					//获取编辑框内容
 			   	    var content=document.getElementById("content").value;
			  	    var password=document.getElementById("testPWD").value;
  					var mi=CryptoJS.AES.encrypt(content,password);
 				    document.getElementById("resultShow").innerHTML = 
					"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+mi+"</textarea>";
					mdui.updateTextFields();
					
				}
				function jieMi()
			    {
			    var content=document.getElementById("content").value;
			  	var password=document.getElementById("testPWD").value;
				var result=CryptoJS.AES.decrypt(content,password).toString(CryptoJS.enc.Utf8);
				document.getElementById("resultShow").innerHTML = 
				"<textarea type=\"text\" class=\"mdui-textfield-input\" id=\"resultText\" placeholder=\"输出的内容在这里\" disabled>"+result+"</textarea>";
				}
				mdui.updateTextFields();
              </script>		   
		   
