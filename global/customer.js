/*
这里是本框架预留出嵌入用户全局js的地方
您可以在这里嵌入您自己的js，此处我们预制了官方站点的百度统计Api
您可以将其移除或填入您自己的js以及统计Api
但是请注意，您在此处内嵌的js不一定会被所有的网站源码载入
这取决于该源码是否遵循了相关的制作原则
*/
//百度统计
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?99248521a1e387a96ed13831da2005b1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
