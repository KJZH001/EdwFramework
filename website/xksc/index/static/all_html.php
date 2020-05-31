<div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=0');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">Rcraft官方站</div></div></div><div class="mdui-card-content mdui-text-truncate">http://bbs.rcraft.ml/</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=1');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">历史网址</div></div></div><div class="mdui-card-content mdui-text-truncate">PS.以下网址均为废弃的旧网站，无法打开
&lt;Rcraft论坛 - 为Rcraft用户和iApp开发者提供的免费交流场所&gt;
http://rcraft.88448.com/wap/
&lt;Rcraft官网&gt;
http://rcraft.ccaeo.com
http://rcraft.xszz.gq
&lt;iApr官网&gt;
http://iapr0.waphx.com/wapindex.aspx?siteid=71807&amp;classid=0
</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=2');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">说明</div></div></div><div class="mdui-card-content mdui-text-truncate">此处的示列代码大多数来自于互联网，来自于互联网的示列代码与作者无关。
如果有重复的，请联系作者。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=3');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">简易闹钟</div></div></div><div class="mdui-card-content mdui-text-truncate">//@EB级储存卡
//年、月、日、时、分、秒的id为1、2、3、4、5、6
fr(&quot;%abc/闹钟.txt&quot;,l)
sss l=l
f(sss.l==null)
{
  time(&quot;Y&quot;,a1)
  time(&quot;m&quot;,b1)
  time(&quot;d&quot;,c1)
  time(&quot;H&quot;,d1)
  time(&quot;M&quot;,e1)
  time(&quot;S&quot;,f1)
  s(a1*31536000+b1*2592000+c1*86400+d1*3600+e1*60+f1,g1)
  ug(1,&quot;text&quot;,a)
  ug(2,&quot;text&quot;,b)
  ug(3,&quot;text&quot;,c)
  ug(4,&quot;text&quot;,d)
  ug(5,&quot;text&quot;,e)
  ug(6,&quot;text&quot;,f)
  s(a*31536000+b*2592000+c*86400+d*3600+e*60+f,g)
  fw(&quot;%abc/闹钟.txt&quot;g)
  s-(g,g1,g2)
  ss(g2+&quot;000&quot;,v)
  f(v&lt;=0)
  {
    tw(&quot;时间已过&quot;)
    }
  else
  {
    stop(v)
    ufnsui()
    {
      bfm(&quot;abc.mp3&quot;)
      }
    }
  }
else
{
  stop(sss.l)
  ufnsui()
  {
    bfm(&quot;abc.mp4&quot;)
    }
  }</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=4');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">导入自定义字体</div></div></div><div class="mdui-card-content mdui-text-truncate">//把ttf字体文件放入@fonts/fonttitle.ttf里面就好了，注意文本id
fc(&quot;@fonts/Bauhaus93.TTF&quot;, &quot;%B93.TTF&quot;, false, copy)
fe(&quot;%B93.TTF&quot;,exist)
//字体文件不存在或者字体文件过大会出现各种错误，字体文件应该只支持TTF格式
f(exist==true){
fdir(&quot;%B93.TTF&quot;,path)
//获取控件ID 3   view对象
gvs(3,tv3)
//通过本地文件创建Typeface
javax(ttf,null,&quot;android.graphics.Typeface&quot;,&quot;createFromFile&quot;,&quot;String&quot;,path)
//设置字体给tv3对象
javax(t,tv3,&quot;android.widget.TextView&quot;,&quot;setTypeface&quot;,&quot;android.graphics.Typeface&quot;,ttf)
//设置标题，查看文件路径是否正常
us(2,&quot;text&quot;,path)
}else{
tw(&quot;字体文件不存在&quot;)
}

//936537504 使用本源码可以不注释版权，但是请不要厚颜无耻的说是你做的！谢谢！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=5');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">三星/LG设置应用角标</div></div></div><div class="mdui-card-content mdui-text-truncate">s count = 88
//显示的数字

java(packageName,activity,&quot;android.content.Context.getPackageName&quot;)
//获取包名
java(pm,activity,&quot;android.content.Context.getPackageManager&quot;)
java(launchIntent,pm,&quot;android.content.pm.PackageManager.getLaunchIntentForPackage&quot;,&quot;String&quot;,packageName)
java(component,launchIntent,&quot;android.content.Intent.getComponent&quot;)
java(launchActivityName,component,&quot;android.content.ComponentName.getClassName&quot;)
//获取启动类名

sit(intent,&quot;action&quot;,&quot;android.intent.action.BADGE_COUNT_UPDATE&quot;)
sit(intent,&quot;extra&quot;,&quot;badge_count&quot;,count)
sit(intent,&quot;extra&quot;,&quot;badge_count_package_name&quot;,packageName)
sit(intent,&quot;extra&quot;,&quot;badge_count_class_name&quot;,launchActivityName)

java(null,activity,&quot;android.content.Context.sendBroadcast&quot;,&quot;android.content.Intent&quot;,intent)

//仅支持三星和LG手机，其他无效果。
//其他机型正在适配中～
//残页QQ1582270018</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=6');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">滚动式sran随机数 修正版</div></div></div><div class="mdui-card-content mdui-text-truncate">//@EB级储存卡
s a=1
w(a&gt;0)
{
  s(a+1,b)
  syso(b)
  sran(10000,1000000,c)
  s g=&quot;@abc.png&quot;
  s(c-1,d)
  s(c-2,e)
  s(c-3,f)
 ftz(d, e, f, g)
 {
 }
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=7');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">倒计时</div></div></div><div class="mdui-card-content mdui-text-truncate">//@EB级储存卡
//文本的id为1
t()
{
  s a=&quot;正在倒计时10秒&quot;
  ufnsui()
  {
    us(1,&quot;text&quot;,a)
    }
  s a=10
  for(1;10)
  {
    f(a==1)
    {
      ufnsui()
      {
        us(1,&quot;text&quot;,&quot;倒计时完成&quot;)
        }
      endcode
      }
    s(a-1,a)
    ss(&quot;正在倒计时&quot;+a+&quot;秒&quot;,c)
    ufnsui()
    {
      us(1,&quot;text&quot;,c)
      }
    stop(1000)
    //设置更新的间隔为一秒
    //如果设为500，则一秒后会提示正在倒计时8秒
    }
  }</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=8');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击两次返回</div></div></div><div class="mdui-card-content mdui-text-truncate">//@EB级储存卡
//在按键按下事件中运行
f(st_kC==4)
//判断是否点击返回键
{
  f(sss a==null)
  {
    sss a=0
    tw(&quot;再按一次返回键退出&quot;)
    t()
    {
      stop(2000)
      //这里是两次点击间隔到最长时间,超过就要再点两次
      //1秒=1000
      sss a=null
      }
    }
  else
  {
    ends()
    }
  }</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=9');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">在文件夹中循环创建无用文件</div></div></div><div class="mdui-card-content mdui-text-truncate">//@EB级储存卡
//注意，此类代码仅供测试，出现文件丢失等情况本手册概不负责
t()
{
  s a=1
  w(a&gt;0)
  {
    s(a+1,a)
    syso(a)
    sran(1,100000,b)
    ss(&quot;%abc/&quot;+b+&quot;.txt&quot;,c)
    //赋予c以&quot;%abc/b.txt/的文件名
    //因为b是随机数，所以文件名不会重复(很小概率)，可以循环创建无用文件
    fw(c,b)
  }
}
//也可以把&quot;fw(c,b)&quot;改为:
//fr(&quot;%abc.txt&quot;,d)
//fw(c.d)
//使用指定%abc.txt文件内容</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=10');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">扩大文件内存占用</div></div></div><div class="mdui-card-content mdui-text-truncate">//@EB级储存卡
//注意，此类代码仅供测试，出现文件丢失等情况本手册概不负责
//扩大文件n倍内存
s a=&quot;%abc.txt&quot;
fr(a,b)
ss(b+b,c)
//赋予c以两个&quot;%abc.txt&quot;的内容
//如果是s(b+b+b,c)，则是三倍，以比类推
fw(a,c)
//把n个&quot;%abc.txt&quot;的内容写入&quot;%abc.txt&quot;中
//如果运行2次，则会使&quot;%abc.txt&quot;扩大n^2倍


//增加文件n倍内存
t()
{
s a=&quot;%abc.txt&quot;
fr(a,b)
ss(b+b,c)
//赋予c以两个&quot;%abc.txt&quot;的内容
//如果是s(b+b+b,c)，则是三倍，以比类推
fw(a,c)
//把n个&quot;%abc.txt&quot;的内容写入&quot;%abc.txt&quot;中
//如果运行2次，则会使&quot;abc.txt&quot;增大2n倍
}

//注:&quot;增加文件n倍内存&quot;与&quot;扩大文件n倍内存&quot;不同
//&quot;增加文件n倍内存&quot;指在当前文件上加上自己(原文件)    扩大文件n倍内存&quot;指在当前文件的基础上加上自己(当前文件)
//例:假设&quot;%abc.txt&quot;文件为&quot;123456&quot;，扩大后变更为&quot;123456123456&quot;</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=11');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">人工解决无编程经验初学者的问题</div></div></div><div class="mdui-card-content mdui-text-truncate">//@EB级储存卡
/.
温馨提醒，这是这个人开发出来的一个没什么乱用的代码，
在s qun=k的这行前面几乎都没什么用，使用前请自行修改
./
fw(&quot;3.txt&quot;,&quot;1&quot;)
fw(&quot;4.txt&quot;,&quot;2&quot;)
fw(&quot;5.txt&quot;,&quot;4&quot;)
fw(&quot;1.txt&quot;,&quot;6&quot;)
fw(&quot;2.txt&quot;,&quot;6&quot;)
fw(&quot;6.txt&quot;,&quot;6&quot;)
fw(&quot;8.txt&quot;,&quot;6&quot;)
fw(&quot;7.txt&quot;,&quot;8&quot;)
fw(&quot;9.txt&quot;,&quot;8&quot;)
fr(&quot;%1.txt&quot;,a1)
fr(&quot;%2.txt&quot;,a2)
fr(&quot;%3.txt&quot;,a3)
fr(&quot;%4.txt&quot;,a4)
fr(&quot;%5.txt&quot;,a5)
fr(&quot;%6.txt&quot;,a6)
fr(&quot;%7.txt&quot;,a7)
fr(&quot;%8.txt&quot;,a8)
fr(&quot;%9.txt&quot;,a9)
s(a1*100000000+a2*10000000+a3*1000000+a4*100000+a5*10000+a6*1000+a7*100+a8*10+a9,k)
s qun=k
ss(&quot;mqqapi://card/show_pslcard?src_type=internal&amp;version=1&amp;uin=&quot;+qun+&quot;&amp;card_type=group&amp;source=qrcode&quot;,joinqq)
sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,joinqq)
uit(a, &quot;chooser&quot;, &quot;QQ群窗口&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=12');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">Java 获取电量信息</div></div></div><div class="mdui-card-content mdui-text-truncate">//@残页
javanew(intentFilter,&quot;android.content.IntentFilter&quot;,&quot;String&quot;,&quot;android.intent.action.BATTERY_CHANGED&quot;)
java(batteryStatus,activity,&quot;android.content.Context.registerReceiver&quot;,&quot;android.content.BroadcastReceiver&quot;,null,&quot;android.content.IntentFilter&quot;,intentFilter)
//BATTERY_CHANGED是一个粘性广播，所以传null值就能拿到当前状态

java(status,batteryStatus,&quot;android.content.Intent.getIntExtra&quot;,&quot;String&quot;,&quot;status&quot;,&quot;int&quot;,-1)
f(status == 2) {
  tw(&quot;充电中&quot;)
  } else f(status == 3 || status == 4) {
  tw(&quot;放电中&quot;)
  } else f(status == 5) {
  tw(&quot;已充满&quot;)
  }

java(plug,batteryStatus,&quot;android.content.Intent.getIntExtra&quot;,&quot;String&quot;,&quot;plugged&quot;,&quot;int&quot;,-1)
f(plug == 1) {
  tw(&quot;AC充电中&quot;)
  } else f(plug == 2) {
  tw(&quot;USB充电中&quot;)
  } else f(plug == 4) {
  tw(&quot;无线充电中&quot;)
  }

java(level,batteryStatus,&quot;android.content.Intent.getIntExtra&quot;,&quot;String&quot;,&quot;level&quot;,&quot;int&quot;,-1)
//当前电池电量
java(scale,batteryStatus,&quot;android.content.Intent.getIntExtra&quot;,&quot;String&quot;,&quot;scale&quot;,&quot;int&quot;,-1)
//最大电池电量
ss(&quot;当前电池电量：&quot; + level + &quot;
最大电池电量：&quot; + scale,msg)
tw(msg)

//参考资料：https://developer.android.google.cn/training/monitoring-device-state/battery-monitoring.html 等</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=13');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">输入法显示控制</div></div></div><div class="mdui-card-content mdui-text-truncate">@膨胀到底  @我是哔小将  
//请根据需要，自行修改
s flag = 50
/.
可选值：
0 系统默认，由系统选择显示方式
2 当用户进入时，默认隐藏输入法
4 当用户进入时，默认显示输入法
16 输入法弹出时，调整空白区域来显示输入法。即使调整空白区域，输入法还是有可能遮挡一些有内容区域，这时用户就只有退出输入法才能看到这些被遮挡区域并进行交互。
18 与16相同，但是当用户进入时，默认隐藏输入法
20 与16相同，但是当用户进入时，默认显示输入法
32 输入法弹出时，顶起当前布局（更改布局高度，同时整个布局上移）
34 与32相同，但是当用户进入时，默认隐藏输入法
36 与32相同，但是当用户进入时，默认显示输入法
48 当输入法弹出时，什么也不做，直接让输入法覆盖界面
50 与48相同，但是当用户进入时，默认隐藏输入法
52 与48相同，但是当用户进入时，默认显示输入法
./
java(window,activity,&quot;android.app.Activity.getWindow&quot;)
java(null,window,&quot;android.view.Window.setSoftInputMode&quot;,&quot;int&quot;,flag)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=14');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">浏览器控制</div></div></div><div class="mdui-card-content mdui-text-truncate">//这两个用其中一个就好
//第一个
gvs(浏览器控件ID,wv)
java(ws,wv,&quot;android.webkit.WebView.getSettings&quot;)
//设置WebView是否支持使用屏幕控件或手势进行缩放，默认是true，支持缩放。
java(null,ws,&quot;android.webkit.WebSettings.setSupportZoom&quot;,&quot;boolean&quot;,false)
//第二个
//隐藏浏览器放大缩小按钮
s id=浏览器控件
gvs(id,wv)
java(ws,wv,&quot;android.webkit.WebView.getSettings&quot;)
java(null,ws,&quot;android.webkit.WebSettings.setBuiltInZoomControls&quot;,&quot;boolean&quot;,true)
java(null,ws,&quot;android.webkit.WebSettings.setDisplayZoomControls&quot;,&quot;boolean&quot;,false)
转载自@俺村俺最帅</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=15');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用支付宝支付</div></div></div><div class="mdui-card-content mdui-text-truncate">s url=&quot;HTTPS://QR.ALIPAY.COM/FKX0326118CZPOZQQRXH4D&quot;
//以上链接改为你的支付宝二维码链接

s pay=&quot;alipayqr://platformapi/startapp?saId=10000007&amp;clientVersion=3.7.0.0718&amp;qrcode=&quot;
ss(pay+url,pay)
sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,pay)
uit(a, &quot;chooser&quot;, &quot;支付宝捐款&quot;)

说明：需要已安装支付宝，此代码将打开支付宝指定转账界面。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=16');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用支付宝手机充值</div></div></div><div class="mdui-card-content mdui-text-truncate">s zfb=&quot;alipayqr://platformapi/startapp?saId=10000003&quot;
//跳转支付宝手机充值页面
sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,zfb)
uit(a, &quot;chooser&quot;, &quot;支付宝手机充值&quot;)

说明：需要已安装支付宝才能起效，此代码可以跳转到支付宝话费充值界面。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=17');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用支付宝扫一扫</div></div></div><div class="mdui-card-content mdui-text-truncate">s zfb=&quot;alipayqr://platformapi/startapp?saId=10000007&quot;
sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)

sit(a,&quot;data&quot;,zfb)
uit(a, &quot;chooser&quot;, &quot;支付宝扫一扫&quot;)

说明：需要以安装支付宝才能起效。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=18');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">音乐播放代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s m=&quot;音乐路径&quot;
bfm(m,sss.sth)
bfms(sss.sth,&quot;sl&quot;,true)


如果要播放网页音乐请输入以下代码：
t()
{
s m=&quot;音乐直链&quot;
bfm(m,sss.sth)
bfms(sss.sth,&quot;sl&quot;,true)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=19');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取根目录文件显示在列表上</div></div></div><div class="mdui-card-content mdui-text-truncate">s ss=&quot;&quot;
.这是根目录
fl(ss,true,b)
for(c;b)
{
ula(a,2=&quot;@60a85caf970cd853ebf9529f4a46f42c.png&quot;,3=c)
}
fl(ss,false,b)
for(c;b)
{
ula(a,2=&quot;@79.png&quot;,3=c)
}
uls(8,a,&quot;a.iyu&quot;,&quot;100dp&quot;,-2)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=20');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">图片全屏显示</div></div></div><div class="mdui-card-content mdui-text-truncate">width=-1
height=-1
src=@2016211.png
.这是图片路径
scaletype=fitxy
.以上放到图片控件属性里</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=21');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击调用侧滑</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(2,&quot;isdraweropen&quot;,b)
.2是侧滑的ID
f(b==true)
{
us(2,&quot;closedrawer&quot;,&quot;start&quot;)

}
else
{
us(2,&quot;opendrawer&quot;,&quot;start&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=22');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">下拉菜单改变字体颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">.以本软件为例，字体颜色更换
s wa=&quot;黑;红;绿;蓝&quot;
sl(wa,&quot;;&quot;,c)
uls(30,c)
.注：30是下拉菜单ID，以上放载入事件。


ug(30,&quot;selecteditem&quot;,b)
.获取下拉框参数

f(b==&quot;红&quot;)
.判断是否红色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ffff0a00&quot;)
}
else f(b==&quot;蓝&quot;)
.判断是否蓝色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ff001eff&quot;)
}
else f(b==&quot;黑&quot;)
.判断是否黑色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#f8000000&quot;)
}
else f(b==&quot;绿&quot;)
.判断是否绿色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ff00cc22&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=23');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">设置字体阴影</div></div></div><div class="mdui-card-content mdui-text-truncate">.把以下代码放进控件属性里面

shadowradius=4
shadowcolor=#000000
shadowdx=0.5
shadowdy=-5


.iapp代码助手</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=24');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">设置光标选中文字颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=文本或者编辑框id
ug(id,&quot;text&quot;,tx)
ug(id,&quot;selectionstart&quot;,a)
ug(id,&quot;selectionend&quot;,b)
ssg(tx,a,b,c)
s aa=&quot;&lt;font color=#DC143C&gt;&quot;
s aaa=&quot;&lt;/font&gt;&quot;
ss(aa+c+aaa,hh)
sr(tx,c,hh,uuy)
sr(uuy,&quot;\n&quot;,&quot;&lt;br&gt;&quot;,ui)
ss(&quot;(html)&quot;+ui,uy)
us(id,&quot;text&quot;,uy)
us(id,&quot;selection&quot;,a)
.保留光标位置
.作者:youyou iapp代码助手原作开源，感谢嘻嘻哈哈走过去帮助</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=25');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">简单闪动图</div></div></div><div class="mdui-card-content mdui-text-truncate">dha(dh, true, false)
dh(dh, &quot;duration&quot;, 50)
.每次执行的时间间隔
dh(dh, &quot;repeat&quot;, 2000000000)
.重复的次数
us(1, &quot;dh&quot;, dh)
.图片控件的ID</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=26');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">远程更新软件写法</div></div></div><div class="mdui-card-content mdui-text-truncate">s dq=&quot;1.5&quot;
.当前版本号，每升级一次来这里改一个版本号
tw(&quot;检测中&quot;)
t()
{
hs(&quot;https://share.weiyun.com/d21af7ff8722fd49eb506f9a40814f55&quot;,wy)
sj(wy,&quot;《&quot;,&quot;》&quot;,bb)
sj(wy,&quot;★&quot;,&quot;★&quot;,gg)
sj(wy,&quot;〖&quot;,&quot;〗&quot;,gx)
f(bb&gt;dq)
{
ufnsui()
{
utw(null,&quot;有新版本更新&quot;,gg,&quot;更新&quot;,&quot;取消&quot;,false,v)
{
hw(gx)
}
else
{
syso()
}
}
}
else
{
ufnsui()
{
tw(&quot;没有更新版本&quot;)
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=27');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断文件是否存在</div></div></div><div class="mdui-card-content mdui-text-truncate">s a=&quot;%xinl/gg.xinl&quot;
//a是文件路径
fe(a,b)
f(b==&quot;true&quot;)
{
ufnsui()
{
tw(&quot;文件存在&quot;)
//这里还可以添加其他代码
}
}
else
{
ufnsui()
{
tw(&quot;文件不存在&quot;)
//这里还可以添加其他代码
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=28');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">应用签到</div></div></div><div class="mdui-card-content mdui-text-truncate">s lj=&quot;q/i/a/n/dao.txt&quot;
s lj2=&quot;q/i/a/n/dsj.txt&quot;

fr(lj2,time)
time(2,tt)
syso(tt)
syso(time)
f(time==tt)
{
tw(&quot;今天已经签到过了！&quot;)
}
else
{
fr(lj,jf)
s(jf+1,jff)
fw(lj,jff)
ss(&quot;积分:&quot;+jff,jfff)
us(4,&quot;text&quot;,jfff)
.4是积分显示控件ID

fw(lj2,tt)
tw(&quot;签到成功，积分+1&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=29');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用图库</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.GET_CONTENT&quot;)
sit(a, &quot;type&quot;, &quot;image/*&quot;)
uit(a, &quot;result&quot;,1)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=30');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">表白特效</div></div></div><div class="mdui-card-content mdui-text-truncate">s q2=&quot;可能遇见你，对我来说是最大的幸福。有了你，我的生涯变的无穷广阔，有了你，世界变得如斯迷人。你是世界，世界是你。我乐意用本人的心，好好的陪着你，爱着你。陪你到你想去的处所，居心走完咱们人生的余下的旅程。在将来的日子里，兴许什么都无奈断定，但独一能够肯定的是，我爱的人是你，无论当初仍是未来，我想我这里都会是你最暖和的港湾，都是为你遮风避雨的城墙。&quot;

s id=这里填写编辑框或者文本控件的ID
slg(q2,q3)
s+(1,q3)

t()
{
s q=1
s q1=w
s q4=1
s q6=0
w(q==1)
{
ssg(q2,q6,q4,q5)
ufnsui()
{
ss(q5+&quot;_&quot;,q5)

us(id,&quot;text&quot;,q5)
}
s(q4+1,q4)
f(q4==q3)

{

s q=0

ufnsui()

{

.这里写打完后的执行代码

}

}

stop(200)
.调整打印速度
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=31');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">保存图片到QQ收藏</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)

sit(a, &quot;type&quot;, &quot;image/jpeg&quot;)

sit(a,&quot;classname&quot;,&quot;com.tencent.mobileqq&quot;, &quot;cooperation.qqfav.widget.QfavJumpActivity&quot;)

sit(a, &quot;extra&quot;, &quot;android.intent.extra.STREAM&quot;,&quot;/sdcard/lunbo.png&quot;)

uit(a, &quot;chooser&quot;, &quot;收藏图片&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=32');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">分享5次进入软件</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(27,&quot;text&quot;,a)
f(a==5)
{
.要进入的界面
uigo(&quot;ym&quot;)
end()
}
else
{
s+(1,a,b)
us(5,&quot;text&quot;,b)
ss(&quot;已经分享了&quot;+b+&quot;次&quot;,g)
t()
{
stop(5000)
ufnsui()
{
tw(g)
}
}
sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)

sit(a, &quot;type&quot;, &quot;text/plain&quot;)

sit(a, &quot;extra&quot;, &quot;android.intent.extra.SUBJECT&quot;, &quot;分享软件&quot;)

sit(a, &quot;extra&quot;, &quot;android.intent.extra.TEXT&quot;, &quot;内容&quot;)

sit(a, &quot;flags&quot;, 2547391605)

uit(a, &quot;chooser&quot;, &quot;分享软件&quot;)

}
文本控件的text属性要为0</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=33');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">搜索音乐文件</div></div></div><div class="mdui-card-content mdui-text-truncate">tw(&quot;扫描音乐需要较长时间，请耐心等候∩_∩&quot;)
.文件夹
s yy1=&quot;mp1&quot;
s yy2=&quot;mp2&quot;
s yy3=&quot;mp3&quot;
s yy4=&quot;wma&quot;
s yy5=&quot;wav&quot;
s yy6=&quot;mid&quot;
s yy7=&quot;aac&quot;
s yy8=&quot;mpg&quot;
s yy9=&quot;mpeg&quot;
s yy10=&quot;flac&quot;
s yy11=&quot;m4a&quot;
.音乐文件后缀名



fe(&quot;/storage/emulated/0&quot;,sf1)
f(sf1==true)
{
s lj=&quot;/storage/emulated/0;&quot;
}
fe(&quot;/storage/sdcard1&quot;,sf2)
f(sf2==true)
{
s lj=&quot;/storage/sdcard1;&quot;
}
f(sf1==true &amp;&amp; sf2==true)
{

s lj=&quot;/storage/emulated/0;/storage/sdcard1&quot;
}



sl(lj,&quot;;&quot;,a1)
.文件路径

t()
{
for(a3;a1)
{
.循环赋值文件路径
ufnsui()
.线程中更新界面
{
us(sss.smyy,&quot;text&quot;,a3)
.设置控件2显示当前扫描的路径
}
.ss(lj1+&quot;/&quot;+a2,a3)
.循环拼接得出文件路径
f(a3 ?* &quot;.&quot;)
{
.前面有个点的是隐藏文件，不用理它，还可以减轻扫描强度
}
else
{
fi(a3,sf1)
.获取路径是文件还是文件夹
f(sf1==true)
.判断路径是文件还是文件夹
{
f(a3 ? &quot;.&quot;)
{
.判断文件夹里面是不是包含有一个点，有的话不用理它
}
else
{
.扫描……

fl(a3,b1)
.文件列表
for(b2;b1)
{
.循环赋值文件路径
ufnsui()
.线程中更新界面
{
us(sss.smyy,&quot;text&quot;,b2)
.设置控件2显示当前扫描的路径
}
ss(a3+&quot;/&quot;+b2,b3)
.循环拼接得出文件路径
f(b3 ?* &quot;.&quot;)
{
.前面有个点的是隐藏文件，不用理它，还可以减轻扫描强度
}
else
{
fi(b3,sf2)
.获取路径是文件还是文件夹
f(sf2==true)
.判断路径是文件还是文件夹
{
f(b3 ? &quot;.&quot;)
{
.判断文件夹里面是不是包含有一个点，有的话不用理它
}
else
{
.扫描……


fl(b3,c1)
.文件列表
for(c2;c1)
{
.循环赋值文件路径
ufnsui()
.线程中更新界面
{
us(sss.smyy,&quot;text&quot;,c2)
.设置控件2显示当前扫描的路径
}
ss(b3+&quot;/&quot;+c2,c3)
.循环拼接得出文件路径
f(c3 ?* &quot;.&quot;)
{
.前面有个点的是隐藏文件，不用理它，还可以减轻扫描强度
}
else
{
fi(c3,sf2)
.获取路径是文件还是文件夹
f(sf2==true)
.判断路径是文件还是文件夹
{
f(c3 ? &quot;.&quot;)
{
.判断文件夹里面是不是包含有一个点，有的话不用理它
}
else
{
.扫描……


fl(c3,d1)
.文件列表
for(d2;d1)
{
.循环赋值文件路径
ufnsui()
.线程中更新界面
{
us(sss.smyy,&quot;text&quot;,d2)
.设置控件2显示当前扫描的路径
}
ss(c3+&quot;/&quot;+d2,d3)
.循环拼接得出文件路径
f(d3 ?* &quot;.&quot;)
{
.前面有个点的是隐藏文件，不用理它，还可以减轻扫描强度
}
else
{
fi(d3,sf2)
.获取路径是文件还是文件夹
f(sf2==true)
.判断路径是文件还是文件夹
{
f(d3 ? &quot;.&quot;)
{
.判断文件夹里面是不是包含有一个点，有的话不用理它
}
else
{
.扫描……


fl(d3,e1)
.文件列表
for(e2;e1)
{
.循环赋值文件路径
ufnsui()
.线程中更新界面
{
us(sss.smyy,&quot;text&quot;,e2)
.设置控件2显示当前扫描的路径
}
ss(d3+&quot;/&quot;+e2,e3)
.循环拼接得出文件路径
f(e3 ?* &quot;.&quot;)
{
.前面有个点的是隐藏文件，不用理它，还可以减轻扫描强度
}
else
{
fi(e3,sf2)
.获取路径是文件还是文件夹
f(sf2==true)
.判断路径是文件还是文件夹
{
f(e3 ? &quot;.&quot;)
{
.判断文件夹里面是不是包含有一个点，有的话不用理它
}
else
{
.扫描……
}
}
else
{
f(e3  *?  yy1|| e3  *?  yy2|| e3  *?  yy3|| e3  *?  yy4|| e3  *?  yy5|| e3  *?  yy6|| e3  *?  yy7|| e3  *?  yy8|| e3  *?  yy9|| e3  *?  yy10||  e3 *? yy11)
{
ss(sss.sz+e3+&quot;\n&quot;,sss.sz)
ula(yy,1=e2,2=e3)
syso(e3)
.是音乐的话赋值列表显示
}
else
{
.不是音乐的话不用理它
}
}
}
}





}
}
else
{
f(d3  *?  yy1|| d3  *?  yy2|| d3  *?  yy3|| d3  *?  yy4|| d3  *?  yy5|| d3  *?  yy6|| d3  *?  yy7|| d3  *?  yy8|| d3  *?  yy9|| d3  *?  yy10||  d3 *? yy11)
{
ss(sss.sz+d3+&quot;\n&quot;,sss.sz)
ula(yy,1=d2,2=d3)
syso(d3)
.是音乐的话赋值列表显示
}
else
{
.不是音乐的话不用理它
}
}
}
}






}
}
else
{
f(c3  *?  yy1|| c3  *?  yy2|| c3  *?  yy3|| c3  *?  yy4|| c3  *?  yy5|| c3  *?  yy6|| c3  *?  yy7|| c3  *?  yy8|| c3  *?  yy9|| c3  *?  yy10||  c3 *? yy11)
{
ss(sss.sz+c3+&quot;\n&quot;,sss.sz)
ula(yy,1=c2,2=c3)
syso(c3)
.是音乐的话赋值列表显示
}
else
{
.不是音乐的话不用理它
}
}
}
}






}
}
else
{
f(b3  *?  yy1|| b3  *?  yy2|| b3  *?  yy3|| b3  *?  yy4|| b3  *?  yy5|| b3  *?  yy6|| b3  *?  yy7|| b3  *?  yy8|| b3  *?  yy9|| b3  *?  yy10||  b3 *? yy11)
{
ss(sss.sz+b3+&quot;\n&quot;,sss.sz)
ula(yy,1=b2,2=b3)
syso(b3)
.是音乐的话赋值列表显示
}
else
{
.不是音乐的话不用理它
}
}
}
}




}
}
else
{
f(a3  *?  yy1|| a3  *?  yy2|| a3  *?  yy3|| a3  *?  yy4|| a3  *?  yy5|| a3  *?  yy6|| a3  *?  yy7|| a3  *?  yy8|| a3  *?  yy9|| a3  *?  yy10||  a3 *? yy11)
{
ss(sss.sz+a3+&quot;\n&quot;,sss.sz)
ula(yy,1=a2,2=a3)
syso(a3)
.是音乐的话赋值列表显示
}
else
{
.不是音乐的话不用理它
}
}
}
}
ufnsui()
{
fw(&quot;%捡破烂的小屁孩/欧欧音播/音乐列表&quot;,sss.sz)
.把音乐列表写入文件
.uls(1,yy,&quot;smyyzt.iyu&quot;,-1,-2)
.设置列表显示内容
tw(&quot;音乐扫描完成&quot;)
endutw()
uigo(&quot;zjm.iyu&quot;)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=34');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">下载后导入iapp</div></div></div><div class="mdui-card-content mdui-text-truncate">.把以下代码输入到列表的单击触屏项目中

ulag(st_vW,st_pN,软件链接文本ID,a)
ulag(st_vW,st_pN,软件名字文本ID,z)
ss(&quot;%IAPD源码/&quot;+z+&quot;.iapp&quot;,m)
sss z=z
sss m=m


t()
{
ufnsui()
{
utw(&quot;&quot;,&quot;&quot;,&quot;jz.iyu&quot;,false,sss.utw)
{

}
}
ufnsui()
{
gvs(sss.utw,2,c)
}
dhr(dh,0,360,1,0.5,1,0.5)
dh(dh,&quot;duration&quot;,2000)
ufnsui()
{
us(c,&quot;dh&quot;,dh)
}
dh(dh, &quot;repeat&quot;, 1000)
hd(a,m,true,kk)
fe(m,ll)
f(ll==true)
{
ufnsui()
{

endutw()
ufnsui()
{
utw(&quot;&quot;,&quot;&quot;,&quot;dr.iyu&quot;,false,jjj)
{

}
}
}
}
else
{
ufnsui()
{
tw(&quot;下载失败&quot;)
}
}
}



.把以下代码输入到导入按钮中


ss(&quot;%iApp/ProjectApp/&quot;+sss.z+&quot;/dh&quot;,h)
ss(&quot;%iApp/ProjectApp/&quot;+sss.z,b)



t()
{

fw(h,&quot;yes&quot;)
fd(h,kk)
fuzs(sss.m,b,m)
syso(b)
ufnsui()
{
tw(&quot;导入成功&quot;)
endutw()
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=35');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">iapp提取视频链接</div></div></div><div class="mdui-card-content mdui-text-truncate">&lt;code&gt;
t()
{

ug(编辑框id,&quot;text&quot;,dz)
hs(dz,aa)
//获取网站地址，并hs获取网页内容
s se = &quot;.*?(https?://(.*?\.mp4)).*?&quot;
.s a = 0
se(aa,se,0,se)
se(se, &quot;find&quot;, e)
w(e == true)
{
se(se, &quot;group&quot;, 1, e)
sr(e,&quot;&amp;amp;amp;&quot;,&quot;&quot;,e)
sr(e,&quot;&amp;lt;a href=&quot;&quot;,&quot;&quot;,e)
sr(e,&quot;&quot;&quot;,&quot;&quot;,e)

f(a == null)
{
s a =e
}
else
{
ss(a+&quot;\n&quot;+e,a)
}
se(se, &quot;find&quot;, e)
ufnsui()
{
us(编辑框或文本id,&quot;text&quot;,&quot;&quot;)
us(编辑框或文本id&quot;text&quot;,a)
}
}
}
}
&lt;/code&gt;</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=36');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取调窗或不同界面控件内容</div></div></div><div class="mdui-card-content mdui-text-truncate">utw(null,&quot;弹窗标题&quot;,&quot;m.iyu&quot;,&quot;确定&quot;,false,v)
{
gvs(v,1,ok)
//通过gvs获取v变量界面里控件为1的对象
ug(ok,&quot;text&quot;,yes)
//再获取ok对象的文本内容
tw(yes)
}

道理很简单，通过gvs获取弹窗界面里的控件，再通过us获取或者us设置。
如果是到不同同界面
ug(lb.1,&quot;text&quot;,b)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=37');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">美化控钮或背景</div></div></div><div class="mdui-card-content mdui-text-truncate">s a1 = 5
s b1 = 15
s c1 = &quot;#ff059700|#ff059700|#ff059700&quot;
s d1 = &quot;#ff059700&quot;
s e1 = &quot;topbottom&quot;
ngde(a1,b1,c1,d1,e1,f)
us(24,&quot;background&quot;,f)


ーーーーーーーー

ngde(&quot;5&quot;,&quot;5&quot;,&quot;#ff00bdff&quot;,&quot;#ff00bdff&quot;, a)

us(6,&quot;background&quot;,a)
us(6,&quot;backgroundripple&quot;,&quot;#607D8B&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=38');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">设置列表背景为圆角</div></div></div><div class="mdui-card-content mdui-text-truncate">参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,&quot;background&quot;,&quot;#336699&quot;)

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,&quot;#336699&quot;,yes)
us(ok,&quot;background&quot;,yes)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=39');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给列表载入各种动画效果</div></div></div><div class="mdui-card-content mdui-text-truncate">//获取控件对象id1
gvs(st_vW,list.1,gvs_1)
//获取控件对象1


//.右往左滑动特效
swh(&quot;pxw&quot;,w)
dht(dh, w,0,150, 0)
dh(dh, &quot;duration&quot;,450)
us(gvs_1, &quot;dh&quot;, dh)






/.左往右动画
swh(&quot;pxw&quot;,w)
dht(dh,0,w,10, 0)
dh(dh, &quot;duration&quot;,450)
us(gvs_1, &quot;dh&quot;, dh)
./左往右动画

/.列表翻转动画
dhas(dh,gvs_1, &quot;rotationY&quot;, 0,30,60,90,120,150,180,210,240,270,300,330,360)
dh(dh, &quot;duration&quot;, 1500)
dh(dh, &quot;start&quot;)
.//列表翻转动画


/.列表渐显动画

dha(dh,true, false)
dh(dh, &quot;duration&quot;, 1000)
us(gvs_1, &quot;dh&quot;, dh)

.//列表渐显动画


/.由小到大显示
dhs(dh, 0.4, 2.0, 0.4, 2.0, 1, 0.4, 1, 0.4)
dh(dh, &quot;duration&quot;, 1500)
us(gvs_1, &quot;dh&quot;, dh)
./由小到大显示
参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,&quot;background&quot;,&quot;#336699&quot;)

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,&quot;#336699&quot;,yes)
us(ok,&quot;background&quot;,yes)
获取内容(界面名.控件id,控件属性,取值)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=40');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">仿iapp代码补全</div></div></div><div class="mdui-card-content mdui-text-truncate">.需要自己布局，自己动脑
.下面是仿iapp代码补全辅助工具
ss gbwz0=0
.ug(xbx.19,&quot;text&quot;,txjq2)
//xbx.19为编辑框的id
s txjq2=st_sS
sss txjq=txjq2
sr(txjq2,&quot;\n&quot;,&quot;щ&quot;,txjq)
ug(xbx.19,&quot;selectionstart&quot;,gbwz)
ss gbwz0=gbwz
ssg(txjq,0,gbwz,jq)
sss jq=jq
s zf=&quot;,&quot;={}&gt;&lt;(); -*!|/:?&amp;\#@$p[]_щ &quot;
s zkh=&quot;(&quot;
s ykh=&quot;)&quot;
sss gbwz=gbwz
t()
{
w(ss.gbwz0&gt;0)
{
s-(ss.gbwz0,1,ss.gbwz0)
s-(ss.gbwz0,1,gbwz1)
ssg(jq,ss.gbwz0,gbwz,jq2)
ssg(jq,gbwz1,ss.gbwz0,jq3)
f(jq3==null)
{
s jq3=&quot; &quot;
}
sss jq2=jq2
f(zf?jq3&amp;&amp;zf!=&quot;&quot;)
{
sss gbwz0=ss.gbwz0
ss gbwz0=0
f(jq2!=zhk&amp;&amp;jq2!=ykh&amp;&amp;jq2!=&quot; &quot;)
{
fn ss.tx(jq2)
}
else f(jq2!=zhk||jq2!=ykh||jq2!=&quot; &quot;)
{
ufnsui()
{
us(xbx.87,&quot;visibility&quot;,&quot;gone&quot;)
//xbx.87为显示在右上角那个列表控件
}
}
}
}
}


写入ss.myu模块里
fn tx(ssgj)
ufnsui()
{
us(xbx.87,&quot;visibility&quot;,&quot;gone&quot;)
}
ula(ssjg, &quot;clear&quot;)
s sslj=&quot;@function/&quot;
ss(sslj &quot;fix.txt&quot;,ssnr1)
//要搜索的函数表
fr(ssnr1,nr1)
s fh=&quot;sl(nr1,fh,sc1)
s ssjg=null
s ssjl=0
t()
{
f(ssgj==&quot;&quot;)
{
.tw(&quot;输入不能为空&quot;)
}
else
{
for(sd1;sc1)
{
sj(sd1,&quot;「&quot;,&quot;」&quot;,hsj)
sj(sd1,&quot;《&quot;,&quot;》&quot;,hsdm)
sj(sd1,&quot;〖&quot;,&quot;〗&quot;,hsys)
f(hsdm?*ssgj)
{
s (ssjl,1,ssjl)
ula(ssjg,2=hsdm,3=hsys,-1=hsj)
}
}
f(ssjl&gt;=5)
{
s w=&quot;200dp&quot;
}
else
{
s h=-2
}
us(xbx.87,&quot;height&quot;,h)
f(ssjl!=0)
{
ufnsui()
{
us(xbx.87,&quot;visibility&quot;,&quot;visible&quot;)
uls(xbx.87,ssjg,&quot;zdtxlb.iyu&quot;,-1,-2)
}
}
else
{
ufnsui()
{
us(xbx.87,&quot;visibility&quot;,&quot;gone&quot;)
.tw(&quot;无匹配&quot;)
}
}
}
}


显示到右上角列表的单击项目事件
ulag(st_vW,st_pN,2,cr)
ulag(st_vW,st_pN,-1,ts)
s bjk=sss.bjk
ug(bjk,&quot;selectionstart&quot;,dqgb)
f(sss.gbwz==dqgb)
{
sr(sss.jq2,&quot;щ&quot;,&quot;\n&quot;,jq2x)
sr(sss.jq,&quot;щ&quot;,&quot;\n&quot;,jqx)
slg(cr,jcd)
s (sss.gbwz0,jcd,szgb)
ss(jq2x &quot;@jsmjq&quot;,jq2)
ss(jqx &quot;@jsmjq&quot;,jq)
sr(sss.txjq,jqx,jq,zbcr)
sr(zbcr,jq2,cr,wccr)
us(bjk,&quot;text&quot;,wccr)
us(bjk,&quot;selection&quot;,szgb)
}
else
{
fn charu.cr(cr)
//这里是插入文本模块，前面貌似讲过
}
tw(ts)
us(st_vW,&quot;visibility&quot;,&quot;gone&quot;)




.作者：嘻嘻哈哈走过去</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=41');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">编辑框高亮</div></div></div><div class="mdui-card-content mdui-text-truncate">.放进编辑框监听事件文本更新后

s id=编辑框id
ug(id,&quot;text&quot;,nr)
ug(id,&quot;selectionstart&quot;,wz)
.获取部分
s ss=&quot;这里面填你要高亮的内容♡→这货是分隔符，可以换掉。♡可以批量替换&quot;
sl(ss,&quot;♡&quot;,ss)
sgszl(ss,sb)
.设置数组
s xh=0
for(0;sb)
{
sgsz(ss,xh,ss2)
ss(&quot;&lt;font color=#FFA500&gt;&quot;+ss2+&quot;&lt;/font&gt;&quot;,th)
.用于高亮的html
sr(nr,ss2,th,nr)
s(xh+1,xh)
}
.循环拼接为html
sr(nr,&quot;\n&quot;,&quot;&lt;br&gt;&quot;,nr)
ss(&quot;(html)&quot;+nr,nr)
us(id,&quot;text&quot;,nr)
us(id,&quot;selection&quot;,wz)
.这个用来保存光标位置
.作者:不详</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=42');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">编辑框显示行号</div></div></div><div class="mdui-card-content mdui-text-truncate">.放进编辑框监听事件文本更新后


t()
{
s bjk=编辑框id
s wb=用来显示行数的文本id
.先布局在弄
s hs=0
f(st_sS?&quot;\n&quot;)
{
ug(bjk,&quot;text&quot;,nr)
sr(nr,&quot;\n&quot;,&quot;\nh%h&quot;,nr1)
//这里需要注意，2.08版本后添加了正则表达式，所以用的功能需要正则表达式才能正常，不过这里可以稍微改进下就可以了，不解释了，自己参悟
sl(nr1,&quot;\n&quot;,nr2)
for(nr3;nr2)
{
s+(hs,1,hs)
ss(hs1+&quot;\n&quot;+hs,hs1)
}
sr(hs1,&quot;\n1\n&quot;,&quot;1\n&quot;,hs2)
//这里是为了解决第一行显示的错误
ufnsui()
{
us(wb,&quot;text&quot;,hs2)
}
}
}
sss hszkg=1</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=43');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">光标位置插入内容</div></div></div><div class="mdui-card-content mdui-text-truncate">ss tj=&quot;iapp代码助手&quot;
s id=&quot;编框id&quot;
slg(ss.tj,zfcd)
ug(id,&quot;selectionstart&quot;,gbwz)
ug(id,&quot;text&quot;,bjnr)
s(gbwz zfcd,gbwz2)
ssg(bjnr,0,gbwz,hq2)
ssg(bjnr,gbwz,hq3)
ss(hq2 ss.tj hq3,hq4)
us(id,&quot;text&quot;,hq4)
us(id,&quot;selection&quot;,gbwz2)

.作者：youyou</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=44');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">图片无限旋转</div></div></div><div class="mdui-card-content mdui-text-truncate">.放页面载入事件
dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, &quot;duration&quot;, 3000)
us(图片id, &quot;dh&quot;, dh)
dhon(dh)
{
us(图片id, &quot;dh&quot;, dh)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=45');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">搜索列表关键词代码</div></div></div><div class="mdui-card-content mdui-text-truncate">sl(&quot;iapp;youyou;iapp代码助手;i学习;无敌&quot;,&quot;;&quot;,po)
.分割一段内容为数组
for(a;po)
{
//循环判断是否包含需要搜索的内容
f(a?&quot;iapp代码助手&quot;)
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(a)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=46');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">限制使用密码进入软件</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(密码输入编辑框id,&quot;text&quot;,a)
f(a==&quot;初始密码&quot;)
{
tw(&quot;密码正确&quot;)
.这里可以加上其他代码，比如，密码正确后跳转界面uigo(界面名)
}
else
{
tw(&quot;密码错误&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=47');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">注册码与注册机的原理</div></div></div><div class="mdui-card-content mdui-text-truncate">有时候作者为了保留权利，特加入了注册码做为正版软件，使用方需要向作者购买或索爱激活码才能通过检测，但如何才能让每个人的激活不通用呢？那么就需要获取使用方的imei号，因为每部机器的imei都是不同的，下面就教大家如何去写。

1.有两种办法保存数据，一种为本地，一种为服务器，我们先说说第一种，首先要用一个本地文件做为保存记录，下次打开才不会再次要求输入激活码，我们以根目录abc.txt文件为例。

2.
________________

simei(imei)
s2(imei*2,imei1)
s(imei1*2,imei2)
.获取机器号并乘以2后赋值给imei2，可任意计算，假设有s2算法最后一步一定要用单s计算

s wj=&quot;abc.txt&quot;
.这个是保存数据的文件路径，越隐蔽越好

fe(wj,a)
f(a==&quot;true&quot;)
{
fr(wj,b)
f(b==&quot;&quot;)
{
tw(&quot;注册文件异常！&quot;)
}
else
{
f(b==imei2)
{
tw(&quot;已注册，欢迎使用！&quot;)
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw(&quot;注册失败！&quot;)
}
}
}
else
{
tw(&quot;未注册，请注册后使用！&quot;)
}

_________________

3.下面为服务器办法，这种办法不易破解，首先要有一个服务端的权限，可以自由编辑且地址不会被改变，与远程更新原理一样，可以用帖子、我的磨或网页，一定要是仅你本人编辑并且该地址不会变才行。

.我们以我的磨(wodemo.net)为例，先在我的磨注册一个网站，然后编写一个撰文，把仅限使用用户的imei号写上去，多个用符号隔开，如，我有一部机器码为123，另一个为456，那么就写上”123，456”，完成后保存，用uc浏览器复制该网页地址出来，比如复制出来的是qiulai.modemo.net

_________________

simei(imei)
.获取用户机器号

t()
{
s b=imei
hs(&quot;http://1294858802.wodemo.net&quot;,null,null,a)
f(a?b)
{
tw(&quot;已注册，欢迎使用！&quot;)
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw(&quot;未注册，请注册后使用！&quot;)
}
}

.通过网页的返回判断是否有该机器号，存在就成功注册，不存在就失败。

__________________


.注：有些手机的机器号带有字母，使用第一种办法需要判断字母后再计算，否则会出错，第二种办法就不用计算，任何机器号都可以。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=48');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文本保存、读取、查找</div></div></div><div class="mdui-card-content mdui-text-truncate">保存:
1、
fw(&quot;abc.txt&quot;,&quot;这里是内容&quot;)

2、
s a=&quot;这里是内容&quot;
fw(&quot;abc.txt&quot;,a)

3、
s a=&quot;iapp/abc.txt&quot;
s b=&quot;这里是内容&quot;
fw(a,b)

.iapp为文件夹，abc.txt为文件

________________


读取:
1、
fr(&quot;abc.txt&quot;,a)
tw(a)

2、
s a=&quot;iapp/abc.txt&quot;
fr(a,b)
us(id,&quot;text&quot;,b)

.iapp为文件夹，abc.txt为文件，id为控件id须修改

________________


查找:

s a=&quot;这里是要找的内容，我们来找这里有几个”找”字&quot;
s b=&quot;找&quot;

s c=0
s d=0
s e=0
slg(a,g)
t()
{
w(e==0)
{
siof(a,b,c,f)
f(f==-1)
{
s e=1
ss(&quot;查找完成，共&quot;+d+&quot;个&quot;,h)
tw(h)
}
else
{
s(f+1,f)
ssg(a,f,g,a)
slg(a,g)
s(d+1,d)
}
}
}

________________

.注：.a是要查找内容，b是要找的字，如果要查找的内容是读出文本那就加一个读出涵数，然后把上面s a=&quot;xxx&quot;那句删除掉，如：

s a=&quot;这里是要找的内容，我们来找这里有几个”找”字&quot;

改成:

fr(&quot;abc.txt&quot;,a)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=49');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文本取值与赋值</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=这里是文本或编辑框控件id


ug(id,&quot;text&quot;,a)

.获取内容并赋值变量给a
._______________

s a=&quot;你好&quot;
us(id,&quot;text&quot;,a)

.将变量a赋值给控件</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=50');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">全局循环背景音乐</div></div></div><div class="mdui-card-content mdui-text-truncate">.这是全局的任何页面都可以播放哦

.设置音乐文件路径并播放，将播放组件对象设为全局
s miusic = &quot;文件路径&quot;
bfm(miusic, sss.mp3)
.设置循环播放
bfms(sss.mp3, &quot;sl&quot;, true)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=51');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">在侧滑和滑动窗体显示列表的方法</div></div></div><div class="mdui-card-content mdui-text-truncate">.很多小伙伴用原始方法都不行因为这里是侧滑和滑动窗体的主页</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=52');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文字逐渐向左无限移动</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
  s id=控件id
  swh(&quot;pxw&quot;,w)
  s s=w
  ufnsui()
  {
    us(id,&quot;layout_marginleft&quot;,s)
  }
  w(1==1)
  {
    f(s&amp;gt;0)
    {
      s(s-5,s)
      ufnsui()
      {
        us(id,&quot;layout_marginleft&quot;,s)
      }
      stop(10)
      .循环间隔
    }
    else
    {
      s s=w
    }
  }
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=53');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文字逐渐缩小</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
  s id=文本控件ID
  s t=150
  .设置文本字体初始大小
  w(t&amp;gt;15)
  .启用循环，当字体大小小于5时停止循环
  {
    s(t-2,t)
    ufnsui()
    {
      us(id,&quot;textsize&quot;,t)
    }
    stop(20)
    .设置停顿间隔
  }
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=54');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">远程弹窗公告</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
  hs(&quot;这里是网址&quot;,a)
  sj(a,&quot;获取符&quot;,&quot;获取符&quot;,b)
  ufnsui()
  {
    utw(null,&quot;公告&quot;,b,&quot;知道了&quot;,true,sb)
    {
    }
  }
  
  
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=55');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">一建清除文件夹所有文件</div></div></div><div class="mdui-card-content mdui-text-truncate">fn del(path)
t()
{
  f(ss.path0==null)
  {
    fi(path,f)
    f(f==false)
    {
      ufnsui()
      {
        tw(&quot;文件夹路径错误！&quot;)
      }
      ss path0=null
      endcode
      //判断是否为文件夹，否就停止运行
    }
    ss path0=path
    //把实时要删的文件夹存到变量path0中
  }
  
  f(path?ss.path0)
  {
    //判断原要删的文件夹路径中是否包含有实时要删的文件夹路径，如果包含则执行下面的代码，否就表示原要删的文件夹已删除
    fd(path,f)
    //尝试删除该文件夹，返值到f
    f(f==true)
    {
      //如果删除path文件夹成功则
      ss(&quot;删除：&quot;+path+&quot;  成功1！&quot;,k)
      syso(k)
      //打印删除的文件（夹）路径详情
      slg(path,l)
      slof(path,&quot;/&quot;,l,l1)
      //取路径path的倒数第一个字符&quot;/&quot;的位置
      ssg(path,0,l1,path1)
      //截取路径path的父目录
      fn a.del(path1)
      //开始新一轮的删除，以path1为叁数
      endcode
    }
    //如果删除文件夹path失败，则表示path是一个非空文件夹，执行下面的循环删除里面的文件（夹）
    fl(path,a)
    for(b;a)
    {
      ss(path+&quot;/&quot;+b,path2)
      fd(path2,f)
      f(f==false)
      {
        fn a.del(path2)
        //如果删除文件夹path2失败则重新以path2为叁数重新删除
        endcode
      }
      ss(&quot;删除：&quot;+path2+&quot;  成功！&quot;,k)
      .syso(k)
      //打印删除成功的文件（夹）路径
    }
    fn a.del(path)
    endcode
    //文件夹path里面的所有文件（夹）全删完后重新开始删除，传入叁数path
  }
  ss path0=null
  ufnsui()
  {
    tw(&quot;删除完毕！&quot;)
  }
}
end fn

//以上代码请放到模块a.myu里，如果你要改模块名称，请将上面代码里的3个a.del改一下

//以下代码放到按钮点击事件中,传入要删的文件夹调用上面的模块一键删除
s lj=&quot;/sdcard/abc&quot;
.模块会自动判断路径的正确性以及是否是文件夹
fn a.del(lj)
.调用模块开始删除</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=56');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">防止打开软件输入法</div></div></div><div class="mdui-card-content mdui-text-truncate">在编辑框的父控件属性里添加：
focusable=true
focusableintouchmode=true
即可</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=57');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">随机语录的启动语录</div></div></div><div class="mdui-card-content mdui-text-truncate">sl(&quot;你爹|你大爷|你二爷|你大舅|你二舅|你大侄子&quot;,&quot;|&quot;,ok)
//分割为数组

sran(1,6,sj)
//生产1-6的随机数

sgsz(ok,sj,yes)
//随机访问语录

tw(yes)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=58');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给编辑框添加滚动条方法</div></div></div><div class="mdui-card-content mdui-text-truncate">在使用编辑框的时候难免会遇到一个有点蛋疼的问题，编辑框没有滚动条而且主要的是编辑框下滑速度不忍直视，但一个方法即可解决。

首先添加一个滚动控件，在滚动控件里添加编辑框就行了。具体效果可参考iApc的内容预览。非常好用哦</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=59');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">去除编辑框点击后有背景颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">默认编辑框只要设置颜色就会出现一个点击输入后颜色 浅蓝色的背景


比如设置编辑框白色，输入内容时编辑框背景颜色就会变成浅蓝色，非常影响美观。

解决办法非常简单，在编辑框的获得焦点事件写下代码：
us(编辑框id,&quot;background&quot;,&quot;&quot;)

即可去除默认的颜色当然也可以设置其他颜色。在后面的&quot;&quot;里输入颜色代码即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=60');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">编辑框的内容不垂直居中</div></div></div><div class="mdui-card-content mdui-text-truncate">当你设置编辑框高度后，默认的编辑框里的文字是垂直居中的，可在属性里设置：

gravity=top

即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=61');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给编辑框的文字设置颜色，语法高亮</div></div></div><div class="mdui-card-content mdui-text-truncate">可参考iAPP的编辑代码时语法高亮。具体过程就不说了

编辑框属性里内容：

text=(html)&lt;font color=#006000&gt;我是绿色&lt;font&gt;我不是绿色</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=62');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击发送QQ临时对话接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qq=1294858802
//你的QQ号
ss(&quot;mqqwpa://im/chat?chat_type=wpa&amp;uin=&quot;+qq+&quot;&amp;version=1&quot;,urlqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,urlqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=63');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给控件加圆角的方法</div></div></div><div class="mdui-card-content mdui-text-truncate">需要在载入事件先赋值，代码如下：

ngde(5,&quot;#ffffff&quot;,ok)
us(1,&quot;background&quot;,ok)

设置id为1的控件圆角的角度是5，背景颜色是#ffffff，通过ok调用，可以多个控件一起调用，还有其他更多属性，可搜索  ngde 查看。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=64');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">列表点击颜色的设置</div></div></div><div class="mdui-card-content mdui-text-truncate">列表点击颜色有两种，一种是项目点击事件。

还有一种我比较推荐，就是在列表界面，给线性布局加点击事件，把背景设置为透明就有点击效果了，参考iApc的列表点击效果！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=65');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">滑动窗体滑动界面切换</div></div></div><div class="mdui-card-content mdui-text-truncate">道理很简单，代码太长说下原理就行了。


在滑动窗体切换界面事件写下代码

f(st_pN==0)
{
tw(&quot;你现在是第一个界面&quot;)
}
else f(st_pN==1)
{
tw(&quot;你滑动到了第二个界面&quot;)
}

注意的是st_pN获取当前界面是从0开始的，也就是第一个界面是0第二个是1，以此类推。

既然得出了当前界面那还不简单？us设置颜色啊，比如获取界面是第二个就把某个控件变成黄色或者换个图片。代码要写很多。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=66');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">在侧滑或者滑动窗体显示列表方法</div></div></div><div class="mdui-card-content mdui-text-truncate">若没有滑动窗体或者侧滑窗体，那么添加列表的代码就是这样的

ula(ula,1=&quot;测试&quot;)
uls(id,ula,&quot;list.iyu&quot;,-2,-2)

加了滑动窗体后，就应该这样写

t()
{
ula(ula,1=&quot;测试&quot;)
ufnsui()
{
uls(界面名.id,ula,&quot;list.iyu&quot;,-2,-2)
}
}

加在mian载入事件！不同的只是需要加线程和滑动窗体里的界面名。ufnsui也是必须加的，线程内更新界面都要加，开源项目里有示例工程，网格视图同理。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=67');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取手机系统版本的方法</div></div></div><div class="mdui-card-content mdui-text-truncate">sjxx(xt)
sgsz(xt,2,xtb)
sj(xtb,&quot;\n&quot;,null,xtb)
sj(xtb,&quot;\n&quot;,null,apk)
f(apk&gt;=19)
{
tw(&quot;你的系统低于安卓4.4&quot;)
}

别问我19是怎么来的，关于系统版本对应的SDK可百度查阅。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=68');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">隐藏列表滚动条与隐藏列表分割线</div></div></div><div class="mdui-card-content mdui-text-truncate">iAPP默认的列表分割线并不好看，当然你完全可以重新定义分割线，可参考iApc的列表分割线（分割线距离左边有一段距离）

属性添加：
scrollbars=none
//隐藏滚动条
dividerheight=0dp
//设置分割线高度为0

隐藏分割线后怎么添加分割线呢？答案很简单，在你的列表显示界面，添加一条线性布局高度为1即可

隐藏滚动条不仅在列表有效，在滚动控件和水平滚动控件一样有效哦！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=69');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hs获取网页后编码错误解决办法</div></div></div><div class="mdui-card-content mdui-text-truncate">在用hs获取网页后难免会遇到中文编码错误的问题，原因就是该网页使用gb2313中文编码，安卓是使用utf-8中文编码的，解决办法就是转换下。

示例
hs(&quot;http://baidu.com&quot;,by)
sutf8to(by, b)
tw(b)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=70');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">退出软件动画效果</div></div></div><div class="mdui-card-content mdui-text-truncate">原理很简单，通过st_kC获取用户按的是哪个按键，判断是不是等于4（4是退出），是就退出并显示跳转动画，其中lan(4)可设置1-11，可查询跳转动画代码。


f(st_kC==4)
{
end()
lan(4)

}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=71');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">关于弹窗载入界面的教程</div></div></div><div class="mdui-card-content mdui-text-truncate">2.0的新功能弹窗可以载入另一个界面，我们可以在弹窗里加图片，加进度条，加视频，加一切控件，这使得弹窗变得很好用，但是弹窗基本大家都会了，有几个人会做获取或者设置弹窗界面的内容呢？

示例
utw(null,&quot;弹窗标题&quot;,&quot;m.iyu&quot;,&quot;确定&quot;,false,v)
{
gvs(v,1,ok)
//通过gvs获取v变量界面里控件为1的对象
ug(ok,&quot;text&quot;,yes)
//再获取ok对象的文本内容
tw(yes)
}

道理很简单，通过gvs获取弹窗界面里的控件，再通过us获取或者us设置。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=72');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">论启动图的正确做法</div></div></div><div class="mdui-card-content mdui-text-truncate">首先搞清楚为什么要启动图？启动图不是为了让软件高大上一些，他是为了让软件打开后加载数据时不让用户看到。我非常抵制和排斥跳转界面，low到家了！

比如iApc的启动图，iApc打开后会加载4个列表，也就是示例，代码，控件，更多，加载这四个个列表大约需要一秒钟时间，如果iApc没有启动图，那么打开iApc后所有列表会是空，也要等到一秒后列表才会加载出来，影响体验。

目前iApc的启动图是列表加载完毕后隐藏图片控件，我自认为这是最好的做法了，当然也欢迎吐槽。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=73');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">软件第一次使用弹窗提示</div></div></div><div class="mdui-card-content mdui-text-truncate">这个比较简单，代码如下：

fe(&quot;$dyc.txt&quot;,dyc)
//获取文件是否存在
f(dyc==&quot;false&quot;)
//判断是否存在
{
utw(null,&quot;提示&quot;,&quot;你是第一次使用本软件哦&quot;,&quot;确定&quot;,false,dycs)
{
}
fw(&quot;$dyc.txt&quot;,&quot;yes&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=74');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">post提交示例</div></div></div><div class="mdui-card-content mdui-text-truncate">post提交（可参考本软件的反馈信息）。学会post提交后你可以做一些联网软件，比如像QQ微信这样的，当然工程量比较大，但做个论坛还是没问题的！

以下是jkniu.com截取的搜索表单；
   &lt;form id=&quot;search-form&quot; name=&quot;g&quot; method=&quot;get&quot; action=&quot;/bbs/book_list.aspx&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;siteid&quot; value=&quot;1000&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;classid&quot; value=&quot;0&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;action&quot; value=&quot;search&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;type&quot; value=&quot;title&quot;&gt;
          &lt;input type=&quot;text&quot; name=&quot;key&quot; placeholder=&quot;请输入关键字&quot;&gt;
      &lt;/form&gt;

通常表单都是form开头form结尾！截取这部分就行了。
第一个form的action=表示提交的网站接口就是/bbs/book_list.aspx 当然他没有网址就表示是本网站也就是http://jkniu.com/bbs/book_list.aspx

接下来看第二行input，input的意思是输入框他的属性是hidden表示这个输入框是隐藏的，我们看他的name=siteid 只需要截取siteid就行了，还有一个是value=1000表示这个输入框的输入内容是1000

这样得出第一个post提交内容：siteid=1000

第二、第三、第四同理，分别得出：classid=0、action=search、type=title

重点来了，最后一个input也就是输入框，他不是隐藏的，而是要输入的，也就是key=输入的搜索内容。

得出：key=搜索关键字

接下来开始提交，当然必须加线程：

hs(&quot;http://jkniu.com/bbs/book_list.aspx&quot;,&quot;site=1000&amp;classid=0&amp;action=search&amp;type=title&amp;key=搜索关键字&quot;,&quot;utf-8&quot;,ok)

其中ok就是返回的搜索结果，你可以通过截取搜索出来的内容添加到你的列表控件或者文本控件。注意如果软件做论坛之类的内容，需要登录的，就需要记录cookie，过程比较麻烦就不说了。看下手册你就懂！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=75');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">模块的使用说明</div></div></div><div class="mdui-card-content mdui-text-truncate">模块的使用说明：模块的作用只是为了节约你的写代码时间，其实和载入事件没什么区别。

比如新建一个模块：m.myu
在模块里写以下代码：

fn ok(sb)
tw(&quot;我是模块&quot;)
end fn

在其他界面的载入事件调用：
代码如下：

fn m.ok(sb)

界面打开后就会执行m.myu模块里 fn ok(sb) 以内的事件。
当然你也可以在这个模块里加不同的调用代码，比如：

fn ok(sb)
tw(&quot;我是模块&quot;)
end fn

fn yes(no)
tw(&quot;我是模块&quot;)
end fn

通过fn m.yes(no)调用模块fn yes(no)部分的代码！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=76');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击两次退出软件</div></div></div><div class="mdui-card-content mdui-text-truncate">将下列代码复制到“按键按下事件”&quot;或者按键释放事件&quot; ：

 f(st_kC==4)
{
f(ss.end==null)
{
ss end=0
tw(&quot;再按一次退出iApc&quot;,0)
t()
{
stop(1000)
ss end=null
}
}
else
{
end()
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=77');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">分享软件代码</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)
sit(a, &quot;type&quot;, &quot;text/plain&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.SUBJECT&quot;, &quot;分享软件&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.TEXT&quot;, &quot;iapp代码助手是一款iApp辅助工具，手册源码，示例工程，你需要的我都有，你确定不来试试？</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=78');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文字跑马灯</div></div></div><div class="mdui-card-content mdui-text-truncate">//文本跑马灯显示
//设置在文本属性里面

width=-1
height=-2
//文本控件宽高
text=iApc是一款特别不错的iAPP学习手册哦，你确定不要来试试吗？
//显示文本
textsize=16dp
//字体大小
singleline=true
//内容显示在同一行
ellipsize=marquee
//文本超出宽度后显示跑马灯
marqueerepeatlimit=marquee_forever
//跑马灯无限重复
focusableintouchmode=true
//获取焦点（必须设置）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=79');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">控件背景图片</div></div></div><div class="mdui-card-content mdui-text-truncate">可设置在线性布局，文本控件，按钮控件，图片按钮控件，相对布局控件，帧布局控件等

直接在控件属性里输入background=图片路径
线性为例：
width=-1
height=-1
orientation=vertical
background=@bj.jpg</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=80');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">软件自动检测更新</div></div></div><div class="mdui-card-content mdui-text-truncate">//以下代码放在载入事件
t()
{
s link=&quot;网址&quot;
hs(link,new)
sj(new,&quot;&lt;bb&gt;&quot;,&quot;&lt;/bb&gt;&quot;,bb)
.截取源码中&lt;bb&gt;到&lt;/bb&gt;中间的版本号
sj(new,&quot;&lt;url&gt;&quot;,&quot;&lt;/url&gt;&quot;,url)
//截取新版本下载地址

f(bb&gt;1)
{
hws(url)
//有新版本直接调用系统浏览器下载
}
else
{
ufnsui()
{
tw(&quot;已经是最新版&quot;)
}
}
}

以下是你在网页中的代码示例

&lt;bb&gt;2&lt;/bb&gt;&lt;url&gt;http://flmle.com/down.apk&lt;/url&gt;</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=81');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断输入框是否包含中文</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(id,&quot;text&quot;,a)
stobm(a,&quot;utf-8&quot;,b)
f(a==b)
{
tw(&quot;输入中文不包含&quot;)
}
else
{
tw(&quot;输入含有中文及中文标点&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=82');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断文件是否存在</div></div></div><div class="mdui-card-content mdui-text-truncate">//abc.txt是文件名
fe(&quot;abc.txt&quot;,bbb)
f(bbb == &quot;true&quot;)
{
tw(&quot;存在&quot;)
}
else
{
tw(&quot;不存在&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=83');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用应用市场给本软件评分</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a,&quot;ACTION&quot;, &quot;Intent.ACTION_VIEW&quot;)
sit(a,&quot;data&quot;,&quot;market://details?id=com.iapc&quot;)
uit(a, &quot;chooser&quot;, &quot;选择操作方式&quot;)

必须在应用市场有你的软件，否则会提示没有该应用。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=84');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">图片无限旋转动画</div></div></div><div class="mdui-card-content mdui-text-truncate">dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, &quot;duration&quot;, 3000)
us(图片id, &quot;dh&quot;, dh)
dhon(dh)
{
us(图片id, &quot;dh&quot;, dh)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=85');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hs获取网页的新功能-代理IP</div></div></div><div class="mdui-card-content mdui-text-truncate">来看看 手册的介绍
//带自动设置cookie方式获取网页，并记录当前网页的Cookie，并设置Header头:（可设置多条，以“||”隔开）文件头包括了Cookie，User-Agent设备型号，设置连接超时，设置接收超时，设置代理IP。
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = &quot;http://wap.baidu.com/&quot;
hs(a, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, null, true, &quot;User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||accept=*/*||accept-language=zh-CN&quot;, 20000, 20000, &quot;10.0.0.172:80&quot;, b)
syso(b)
}

效果不明觉厉。简单点说就是。如果你有很多代理IP，你就能做一个cc攻击（效率低下），但做一个网页刷访问还是不错的，都是模拟真实用户访问的。

比如这样的，20000是访问超时时间也就是20秒，最好设置10000-20000左右最好，怎么无限更换代理IP呢？你只需要把很多IP分割为数组，如：

sl(&quot;109.22.33.58:80#36.69.52.33:80&quot;,&quot;#&quot;,ok)
然后for循环读取ok，再循环hs访问即可（不要做坏事哈）

t()
{
hs(&quot;网址&quot;,null, &quot;utf-8&quot;, null, true, null, 20000, 20000, &quot;10.0.0.172:80&quot;, b)
syso(b)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=86');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给按钮加触摸时的深色 方法</div></div></div><div class="mdui-card-content mdui-text-truncate">按钮控件又或者是文本控件，线性布局等，只要设置了背景颜色不是白色透明，比如绿色，那么点击时的深色颜色就没有了。

其实特别简单的做法就是，先给按钮套一个线性布局，设置线性布局背景为绿色，按钮背景为透明。再给按钮加个点击事件试试看！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=87');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取imei进行计算密码</div></div></div><div class="mdui-card-content mdui-text-truncate">通常如果获取imei来计算一些密码，直接simei(imei)即可，但如果出现因为字母，那么计算就会出问题了。（有部分手机imei是有英文字符的）

比如
simei(imei)
s(imei/2,ok)
tw(ok)

如果imei有英文字母，这个计算就不成立了，也就出错！怎么办呢？很简单，用正则表达式替换下字符即可，示例：

simei(imei)
sr(imei,&quot;[a-z]&quot;,&quot;9&quot;,imei)
s(imei/2,ok)
tw(ok)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=88');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">搜索列表关键字的实现方法</div></div></div><div class="mdui-card-content mdui-text-truncate">sl(&quot;蛋疼;鸡肋;鸡蛋;鸡皮疙瘩;蛋糕&quot;,&quot;;&quot;,so)
//分割一段内容为数组
for(k;so)
{
//循环判断是否包含需要搜索的内容
f(k?&quot;蛋&quot;)
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(k)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=89');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用其他程序分享文件代码</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)
sit(a, &quot;type&quot;, &quot;*/*&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.STREAM&quot;,&quot;/sdcard/iApp/Userimg/icon_iapp.png&quot;)
uit(a, &quot;chooser&quot;, &quot;分享&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=90');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">us设置滑动侧滑窗体里控件属性</div></div></div><div class="mdui-card-content mdui-text-truncate">在有滑动窗体或者侧滑窗体的时候需要加个判断什么的，比如判断网络是否连接，需要通过us设置文字来显示，但是直接在mian界面载入事件，比如这样：

us(a.2,&quot;text&quot;,&quot;有网络&quot;)

你会发现没有任何效果，因为界面无法交互，但你只需要把代码放在 “界面载入完毕事件” 就行了。因为这个事件界面可以交互。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=91');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击取消编辑框获得焦点</div></div></div><div class="mdui-card-content mdui-text-truncate">编辑框获得焦点就是编辑框点击后的光标效果，默认只要点击了编辑框，除非退出再进，否则是无法取消掉光标的，这时候就需要代码来设置一下。

us(2,&quot;focusable&quot;,false)
//设置id为2编辑框不获得焦点

可以放在返回事件等等，按一次返回取消掉获得焦点，不过这样后编辑框就无法点击了，怎么办呢？很简单，让编辑框再可以获得焦点即可。代码如下

us(2,&quot;focusable&quot;,true)
us(2,&quot;focusableintouchmode&quot;,true)

注意的是；必须放在编辑框的触屏监听事件！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=92');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">添加点击菜单时的选项</div></div></div><div class="mdui-card-content mdui-text-truncate">代码如下：

case 选择A:
tw(&quot;A&quot;)
break
case 选择B:
tw(&quot;B&quot;)
break
case 选择C:
tw(&quot;C&quot;)
break
default:
tw(&quot;载入成功&quot;)
break

其中，选择A等是标题，tw是点击后的事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=93');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">列表里设置背景圆角参考iApc</div></div></div><div class="mdui-card-content mdui-text-truncate">参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,&quot;background&quot;,&quot;#336699&quot;)

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,&quot;#336699&quot;,yes)
us(ok,&quot;background&quot;,yes)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=94');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">下载文件简单代码</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
hd(&quot;http://flmle.com/ok.apk&quot;,&quot;iApp/ok.apk&quot;,true,ok)
//iApp/ok是保存路径，true是如果存在则覆盖

f(ok==&quot;0&quot;)
{
ufnsui()
{
tw(&quot;下载成功&quot;)
}
}
else
{
ufnsui()
{
tw(&quot;下载失败&quot;)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=95');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给编辑框添加滚动条方法</div></div></div><div class="mdui-card-content mdui-text-truncate">在使用编辑框的时候难免会遇到一个有点蛋疼的问题，编辑框没有滚动条而且主要的是编辑框下滑速度不忍直视，但一个方法即可解决。

首先添加一个滚动控件，在滚动控件里添加编辑框就行了。具体效果可参考iApc的内容预览。非常好用哦</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=96');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">去除编辑框点击后有背景颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">默认编辑框只要设置颜色就会出现一个点击输入后颜色 浅蓝色的背景


比如设置编辑框白色，输入内容时编辑框背景颜色就会变成浅蓝色，非常影响美观。

解决办法非常简单，在编辑框的获得焦点事件写下代码：
us(编辑框id,&quot;background&quot;,&quot;&quot;)

即可去除默认的颜色当然也可以设置其他颜色。在后面的&quot;&quot;里输入颜色代码即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=97');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">编辑框的内容不垂直居中</div></div></div><div class="mdui-card-content mdui-text-truncate">当你设置编辑框高度后，默认的编辑框里的文字是垂直居中的，可在属性里设置：

gravity=top

即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=98');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给编辑框的文字设置颜色，语法高亮</div></div></div><div class="mdui-card-content mdui-text-truncate">可参考iAPP的编辑代码时语法高亮。具体过程就不说了

编辑框属性里内容：

text=(html)&lt;font color=#006000&gt;我是绿色&lt;font&gt;我不是绿色</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=99');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击发送QQ临时对话接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qq=2279499274
//你的QQ号
ss(&quot;mqqwpa://im/chat?chat_type=wpa&amp;uin=&quot;+qq+&quot;&amp;version=1&quot;,urlqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,urlqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=100');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击添加QQ群接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qun=333797002
//群号
ss(&quot;mqqapi://card/show_pslcard?src_type=internal&amp;version=1&amp;uin=&quot;+qun+&quot;&amp;card_type=group&amp;source=qrcode&quot;,joinqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,joinqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=101');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">设置字体阴影</div></div></div><div class="mdui-card-content mdui-text-truncate">.把以下代码放进控件属性里面

shadowradius=4
shadowcolor=#000000
shadowdx=0.5
shadowdy=-5


.iapp代码助手</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=102');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">编辑框显示行号</div></div></div><div class="mdui-card-content mdui-text-truncate">.放进编辑框监听事件文本更新后


t()
{
s bjk=编辑框id
s wb=用来显示行数的文本id
.先布局在弄
s hs=0
f(st_sS?&quot;\n&quot;)
{
ug(bjk,&quot;text&quot;,nr)
sr(nr,&quot;\n&quot;,&quot;\nh%h&quot;,nr1)
//这里需要注意，2.08版本后添加了正则表达式，所以用的功能需要正则表达式才能正常，不过这里可以稍微改进下就可以了，不解释了，自己参悟
sl(nr1,&quot;\n&quot;,nr2)
for(nr3;nr2)
{
s+(hs,1,hs)
ss(hs1+&quot;\n&quot;+hs,hs1)
}
sr(hs1,&quot;\n1\n&quot;,&quot;1\n&quot;,hs2)
//这里是为了解决第一行显示的错误
ufnsui()
{
us(wb,&quot;text&quot;,hs2)
}
}
}
sss hszkg=1</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=103');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">光标位置插入内容</div></div></div><div class="mdui-card-content mdui-text-truncate">ss tj=&quot;iapp代码助手&quot;
s id=&quot;编框id&quot;
slg(ss.tj,zfcd)
ug(id,&quot;selectionstart&quot;,gbwz)
ug(id,&quot;text&quot;,bjnr)
s(gbwz zfcd,gbwz2)
ssg(bjnr,0,gbwz,hq2)
ssg(bjnr,gbwz,hq3)
ss(hq2 ss.tj hq3,hq4)
us(id,&quot;text&quot;,hq4)
us(id,&quot;selection&quot;,gbwz2)

.作者：youyou</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=104');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">图片无限旋转</div></div></div><div class="mdui-card-content mdui-text-truncate">.放页面载入事件
dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, &quot;duration&quot;, 3000)
us(图片id, &quot;dh&quot;, dh)
dhon(dh)
{
us(图片id, &quot;dh&quot;, dh)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=105');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">搜索列表关键词代码</div></div></div><div class="mdui-card-content mdui-text-truncate">sl(&quot;iapp;youyou;iapp代码助手;i学习;无敌&quot;,&quot;;&quot;,po)
.分割一段内容为数组
for(a;po)
{
//循环判断是否包含需要搜索的内容
f(a?&quot;iapp代码助手&quot;)
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(a)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=106');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">限制使用密码进入软件</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(密码输入编辑框id,&quot;text&quot;,a)
f(a==&quot;初始密码&quot;)
{
tw(&quot;密码正确&quot;)
.这里可以加上其他代码，比如，密码正确后跳转界面uigo(界面名)
}
else
{
tw(&quot;密码错误&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=107');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">注册码与注册机的原理</div></div></div><div class="mdui-card-content mdui-text-truncate">有时候作者为了保留权利，特加入了注册码做为正版软件，使用方需要向作者购买或索爱激活码才能通过检测，但如何才能让每个人的激活不通用呢？那么就需要获取使用方的imei号，因为每部机器的imei都是不同的，下面就教大家如何去写。

1.有两种办法保存数据，一种为本地，一种为服务器，我们先说说第一种，首先要用一个本地文件做为保存记录，下次打开才不会再次要求输入激活码，我们以根目录abc.txt文件为例。

2.
________________

simei(imei)
s2(imei*2,imei1)
s(imei1*2,imei2)
.获取机器号并乘以2后赋值给imei2，可任意计算，假设有s2算法最后一步一定要用单s计算

s wj=&quot;abc.txt&quot;
.这个是保存数据的文件路径，越隐蔽越好

fe(wj,a)
f(a==&quot;true&quot;)
{
fr(wj,b)
f(b==&quot;&quot;)
{
tw(&quot;注册文件异常！&quot;)
}
else
{
f(b==imei2)
{
tw(&quot;已注册，欢迎使用！&quot;)
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw(&quot;注册失败！&quot;)
}
}
}
else
{
tw(&quot;未注册，请注册后使用！&quot;)
}

_________________

3.下面为服务器办法，这种办法不易破解，首先要有一个服务端的权限，可以自由编辑且地址不会被改变，与远程更新原理一样，可以用帖子、我的磨或网页，一定要是仅你本人编辑并且该地址不会变才行。

.我们以我的磨(wodemo.net)为例，先在我的磨注册一个网站，然后编写一个撰文，把仅限使用用户的imei号写上去，多个用符号隔开，如，我有一部机器码为123，另一个为456，那么就写上”123，456”，完成后保存，用uc浏览器复制该网页地址出来，比如复制出来的是qiulai.modemo.net

_________________

simei(imei)
.获取用户机器号

t()
{
s b=imei
hs(&quot;http://1294858802.wodemo.net&quot;,null,null,a)
f(a?b)
{
tw(&quot;已注册，欢迎使用！&quot;)
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw(&quot;未注册，请注册后使用！&quot;)
}
}

.通过网页的返回判断是否有该机器号，存在就成功注册，不存在就失败。

__________________


.注：有些手机的机器号带有字母，使用第一种办法需要判断字母后再计算，否则会出错，第二种办法就不用计算，任何机器号都可以。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=108');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文本保存、读取、查找</div></div></div><div class="mdui-card-content mdui-text-truncate">保存:
1、
fw(&quot;abc.txt&quot;,&quot;这里是内容&quot;)

2、
s a=&quot;这里是内容&quot;
fw(&quot;abc.txt&quot;,a)

3、
s a=&quot;iapp/abc.txt&quot;
s b=&quot;这里是内容&quot;
fw(a,b)

.iapp为文件夹，abc.txt为文件

________________


读取:
1、
fr(&quot;abc.txt&quot;,a)
tw(a)

2、
s a=&quot;iapp/abc.txt&quot;
fr(a,b)
us(id,&quot;text&quot;,b)

.iapp为文件夹，abc.txt为文件，id为控件id须修改

________________


查找:

s a=&quot;这里是要找的内容，我们来找这里有几个”找”字&quot;
s b=&quot;找&quot;

s c=0
s d=0
s e=0
slg(a,g)
t()
{
w(e==0)
{
siof(a,b,c,f)
f(f==-1)
{
s e=1
ss(&quot;查找完成，共&quot;+d+&quot;个&quot;,h)
tw(h)
}
else
{
s(f+1,f)
ssg(a,f,g,a)
slg(a,g)
s(d+1,d)
}
}
}

________________

.注：.a是要查找内容，b是要找的字，如果要查找的内容是读出文本那就加一个读出涵数，然后把上面s a=&quot;xxx&quot;那句删除掉，如：

s a=&quot;这里是要找的内容，我们来找这里有几个”找”字&quot;

改成:

fr(&quot;abc.txt&quot;,a)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=109');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">密码登录实例</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(1,&quot;text&quot;,u)

f(u==&quot;&quot;)
{
tw(&quot;密码不能为空&quot;)
}
else f(u==&quot;123456&quot;)

.这是密码
{

tw(&quot;登录成功&quot;)

uigo(&quot;a&quot;)

.这是密码正确后登录的页面
}

else

{

tw(&quot;密码错了&quot;)

}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=110');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">随机字体颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=这里是文本控件id

t()
{
s a=1
.变色暂停的时间
s sj=100
.w无限循环
w(a==1)
{
.随机字体颜色数值
sran(100000,800000,sjs)
ss(&quot;-&quot;+sjs,sjs)
us(id, &quot;textcolor&quot;, sjs)
stop(sj)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=111');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">字体转换语音实例代码</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(id,&quot;text&quot;,a)

 .输入编辑框ID
f(a==&quot;&quot;)

{

tw(&quot;请输入文字&quot;)

}

else

{

stobm(a,&quot;utf-8&quot;,a)

sr(a,&quot; &quot;,&quot;&quot;,a)

t()

{

ss(&quot;http://tts.baidu.com/text2audio?ie=UTF-8&amp;lan=zh&amp;text=&quot;+a,a)



ufnsui()

{

tw(&quot;下载中...&quot;,0)

}



hd(a,&quot;%iappsj/转语音/转换后.mp3&quot;,true,b)



f(b==0)

{



ufnsui()

{

tw(&quot;已保存到根目录的%iappsj/转换后目录里面&quot;,0)

}

bfm(&quot;%iappsj/转语音/转换后.mp3&quot;,c)

bfms(c,&quot;st&quot;)

}



}



}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=112');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">字体无限变色</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=这里是文本控件id

t()
{
s a=1
.变色暂停的时间
s sj=100
.w无限循环
w(a==1)
{
.随机字体颜色数值
sran(100000,800000,sjs)
ss(&quot;-&quot;+sjs,sjs)
ufnsui()
{
us(id, &quot;textcolor&quot;, sjs)
}
stop(sj)






}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=113');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">时长转时间</div></div></div><div class="mdui-card-content mdui-text-truncate">fn time(a)
s/(1000,a)
s(a/60/60,h)
s(a/60%60,m)
f(m&amp;lt;10)
{
  ss(&quot;0&quot;+m,m)

}
s(a%60,s)
f(s&amp;lt;10)
{
  ss(&quot;0&quot;+s,s)
}
ss(h+&quot;:&quot;+m+&quot;:&quot;+s,ss.time)
end fn
//以上代码放到模块中

调用方法：
s a=4567
fn 模块名.time(a)
tw(ss.time)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=114');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取手机信息</div></div></div><div class="mdui-card-content mdui-text-truncate">sjxx(xt)
sgsz(xt,2,xtb)
sj(xtb,&quot;\n&quot;,null,xtb)
sj(xtb,&quot;\n&quot;,null,apk)
f(apk&amp;gt;=19)
{
tw(&quot;你的系统低于安卓4.4&quot;)
}

别问我19是怎么来的，关于系统版本对应的SDK可百度查阅。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=115');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">远程更新教程</div></div></div><div class="mdui-card-content mdui-text-truncate">今天为大家带来个利用我的磨作为更新服务器进行软件更新的实例，好进入正题吧：
首先配置我的磨，登录wodemo.net注册用户并登录，点底部管理，进入管理页点撰文，在撰文里你可以添加各类附件或文字，而且发布后也可随时编辑撰文。
我的示例网址 http://1294858802.wodemo.net/;，其中（） 里填你的更新软件的版本，[]里填写更新内容，｛｝里填写新软件下载地址，注意这些符号都是大写字符，避免与代码混淆
如何获取下载地址呢？撰文里添加附件后点提交，会再网页显示  *.……创建成功  点此链接即可进入文章页，然后用浏览器复制附件下载地址，点文章下面的“管理与编辑”把复制好的网址粘贴到｛｝里即可
接下来让我们修改软件代码，以下代码写在按钮点击事件或菜单点击事件中：




 t()
{
s a = &quot;http://1294858802.wodemo.net/&quot;
.这是我的磨更新网址，没磨盘的请登录wodemo.net注册
hs(a, null, null, b)
.获取网页数据并赋值给b
sj(b,&quot;（&quot;,&quot;）&quot;,ver)
.截取括号内容为版本号，这里的括号为大写字符，防止与代码混淆
f(ver&amp;gt;1)
.这里的1为该软件版本号，如果获取的版本号ver大于软件版本则更新
{
 sj(b,&quot;[&quot;,&quot;]&quot;,content) 
 sj(b,&quot;｛&quot;,&quot;｝&quot;,url) 
strim(url,url)
ss(&quot;http://&quot;+url,url)
.获取[]内容作为介绍获取｛｝内网址作为新软件下载网址
 ss(&quot;有&quot;+ver+&quot;版本更新&quot;,title)
.带版本号的title作为对话框标题
uigo(&quot;gx.iyu&quot;)
.跳转到对话框界面
}
else
{
tw(&quot;已是最新版本&quot;)
}
}
以下代码写在gx.iyu文件的界面载入事件里：
utw( title,content ,&quot;立即更新&quot;,&quot;以后再更&quot;)
{
t()
{
tw(&quot;正在下载中……&quot;)
hd(url,&quot;app.apk&quot;,io)
.下载文件并命名为app.apk，你可以自己定义文件名
f(io==0)
{
uigo(&quot;mian.iyu&quot;)
end() 
tw(&quot;下载成功&quot;)
fo(&quot;app.apk&quot;)
.点立即更新时下载文件并完成后打开
}
}

}
else
{
tw(&quot;已取消&quot;)
uigo(&quot;mian.iyu&quot;)
.取消更新时返回程序首页并结束更新界面
end()
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=116');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文本取值与赋值</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=这里是文本或编辑框控件id


ug(id,&quot;text&quot;,a)

.获取内容并赋值变量给a
._______________

s a=&quot;你好&quot;
us(id,&quot;text&quot;,a)

.将变量a赋值给控件</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=117');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">全局循环背景音乐</div></div></div><div class="mdui-card-content mdui-text-truncate">.这是全局的任何页面都可以播放哦

.设置音乐文件路径并播放，将播放组件对象设为全局
s miusic = &quot;文件路径&quot;
bfm(miusic, sss.mp3)
.设置循环播放
bfms(sss.mp3, &quot;sl&quot;, true)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=118');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">在侧滑和滑动窗体显示列表的方法</div></div></div><div class="mdui-card-content mdui-text-truncate">.很多小伙伴用原始方法都不行因为这里是侧滑和滑动窗体的主页</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=119');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文字逐渐向左无限移动</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
  s id=控件id
  swh(&quot;pxw&quot;,w)
  s s=w
  ufnsui()
  {
    us(id,&quot;layout_marginleft&quot;,s)
  }
  w(1==1)
  {
    f(s&amp;gt;0)
    {
      s(s-5,s)
      ufnsui()
      {
        us(id,&quot;layout_marginleft&quot;,s)
      }
      stop(10)
      .循环间隔
    }
    else
    {
      s s=w
    }
  }
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=120');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文字逐渐缩小</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
  s id=文本控件ID
  s t=150
  .设置文本字体初始大小
  w(t&amp;gt;15)
  .启用循环，当字体大小小于5时停止循环
  {
    s(t-2,t)
    ufnsui()
    {
      us(id,&quot;textsize&quot;,t)
    }
    stop(20)
    .设置停顿间隔
  }
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=121');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">远程弹窗公告</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
  hs(&quot;这里是网址&quot;,a)
  sj(a,&quot;获取符&quot;,&quot;获取符&quot;,b)
  ufnsui()
  {
    utw(null,&quot;公告&quot;,b,&quot;知道了&quot;,true,sb)
    {
    }
  }
  
  
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=122');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">一建清除文件夹所有文件</div></div></div><div class="mdui-card-content mdui-text-truncate">fn del(path)
t()
{
  f(ss.path0==null)
  {
    fi(path,f)
    f(f==false)
    {
      ufnsui()
      {
        tw(&quot;文件夹路径错误！&quot;)
      }
      ss path0=null
      endcode
      //判断是否为文件夹，否就停止运行
    }
    ss path0=path
    //把实时要删的文件夹存到变量path0中
  }
  
  f(path?ss.path0)
  {
    //判断原要删的文件夹路径中是否包含有实时要删的文件夹路径，如果包含则执行下面的代码，否就表示原要删的文件夹已删除
    fd(path,f)
    //尝试删除该文件夹，返值到f
    f(f==true)
    {
      //如果删除path文件夹成功则
      ss(&quot;删除：&quot;+path+&quot;  成功1！&quot;,k)
      syso(k)
      //打印删除的文件（夹）路径详情
      slg(path,l)
      slof(path,&quot;/&quot;,l,l1)
      //取路径path的倒数第一个字符&quot;/&quot;的位置
      ssg(path,0,l1,path1)
      //截取路径path的父目录
      fn a.del(path1)
      //开始新一轮的删除，以path1为叁数
      endcode
    }
    //如果删除文件夹path失败，则表示path是一个非空文件夹，执行下面的循环删除里面的文件（夹）
    fl(path,a)
    for(b;a)
    {
      ss(path+&quot;/&quot;+b,path2)
      fd(path2,f)
      f(f==false)
      {
        fn a.del(path2)
        //如果删除文件夹path2失败则重新以path2为叁数重新删除
        endcode
      }
      ss(&quot;删除：&quot;+path2+&quot;  成功！&quot;,k)
      .syso(k)
      //打印删除成功的文件（夹）路径
    }
    fn a.del(path)
    endcode
    //文件夹path里面的所有文件（夹）全删完后重新开始删除，传入叁数path
  }
  ss path0=null
  ufnsui()
  {
    tw(&quot;删除完毕！&quot;)
  }
}
end fn

//以上代码请放到模块a.myu里，如果你要改模块名称，请将上面代码里的3个a.del改一下

//以下代码放到按钮点击事件中,传入要删的文件夹调用上面的模块一键删除
s lj=&quot;/sdcard/abc&quot;
.模块会自动判断路径的正确性以及是否是文件夹
fn a.del(lj)
.调用模块开始删除</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=123');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">防止打开软件输入法</div></div></div><div class="mdui-card-content mdui-text-truncate">在编辑框的父控件属性里添加：
focusable=true
focusableintouchmode=true
即可</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=124');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">深度解析sss全局变量</div></div></div><div class="mdui-card-content mdui-text-truncate">iAPP2.0最棒的改变莫过于全局变量了。因为全局变量的存在我们可以把很多原来需要写很多都东西最简化。但很多小白并不懂全局变量的使用。全局变量能做什么呢？比如视频播放器，点击一个视频就跳转到界面播放该视频！在很多方面都必须用的到的东西。

首先来看看s变量：
s ok=&quot;小白&quot;
再看看全局变量：
sss ok=&quot;小白&quot;

全局变量的作用是传递数据，比如有些小白不会使用的。点击一个列表跳转一个界面他可能会 新建若干个界面，然后跳转到指定的界面，非常麻烦鸡肋。

首先新建一个按钮，按钮点击事件如下：
sss ok=&quot;小白&quot;
uigo(&quot;m.iyu&quot;)

再新建一个界面m.iyu，该界面载入事件如下：
tw(sss.ok)

当点击按钮后，全局变量ok就变成小白了。m.iyu界面载入事件就是提示这个全局变量，也就成小白了！也就说点击按钮后sss.ok这个变量就变成“小白”，所以m.iyu这个界面也会提示小白！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=125');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">post提交深度解析小白必看</div></div></div><div class="mdui-card-content mdui-text-truncate">post在下面的内容我们就讲过，现在更彻底了讲一遍，保证你学会post提交数据！

post的是什么呢？post就是提交数据，提交内容给网站处理，然后获取返回的结果。类似登录功能，同理！

一般我们需要从网站获取源代码后才能知道该提交什么，接口是什么。
举个例子：我从某网站源代码中得出下列代码：

&lt;form action=&quot;http://flmle.com/so.php&quot;&quot;&gt;
&lt;input type=&quot;hidden&quot; name=&quot;siteid&quot; value=&quot;1000&quot;&gt;
&lt;input type=&quot;text&quot; name=&quot;key&quot; placeholder=&quot;输入关键字&quot;&gt;
&lt;input type=&quot;submit&quot; value=&quot;搜索&quot;&gt;
&lt;/form&gt;

这是一个搜索表单（表单从form开头form结尾）

第一行：&lt;form action=&quot;http://flmle.com/so.php&quot;&gt;
其中action的这个地址就是提交的接口

第二行：&lt;input type=&quot;hidden&quot; name=&quot;id&quot; value=&quot;1000&quot;&gt;
表示这是一个隐藏的输入框 为什么要隐藏呢？因为不需要用户输入，但必须要提交。他的属性是id=1000
那就得出一个提交的内容

第三行： &lt;input type=&quot;text&quot; name=&quot;key&quot; placeholder=&quot;输入关键字&quot;&gt;
这是一个需要输入内容的输入框，他的属性是key，得出一个提交的内容：key=搜索关键字

第四行： &lt;input type=&quot;submit&quot; value=&quot;搜索&quot;&gt;
这个完全不用管他，他是一个提交按钮，我们post的时候本身就是一个提交了，所以不需要他！

就这样得出post内容

hs(&quot;http://flmle.com/so.php&quot;,&quot;id=1000&amp;key=搜索关键字&quot;,&quot;utf-8&quot;,ok)

提交的内容是通过&amp;符号串联到一起的，不要写错！

ok就是返回的结果，你可以syso(ok)打印出来查看是否已经提交成功从而截取你需要的结果！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=126');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">$私有文件夹的使用</div></div></div><div class="mdui-card-content mdui-text-truncate">iAPP2.0中，有一个私有文件夹，但很多人都不知道有什么用。其实这个私有文件夹特别实用的，比如你要保存一些东西，但又不想让用户看到，可以保存到私有文件夹下哦。

私有文件夹的路径是：/data/data/安装包名/files

路径不用管，直接在保存文件加个$符号就行了。私有文件夹的好处是，用户没有Root权限是无法修改你保存的内容的。比如一些txt文件等，若你保存在%手机内存里，那么很可能被人修改或者看到哦！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=127');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给编辑框添加滚动条方法</div></div></div><div class="mdui-card-content mdui-text-truncate">在使用编辑框的时候难免会遇到一个有点蛋疼的问题，编辑框没有滚动条而且主要的是编辑框下滑速度不忍直视，但一个方法即可解决。

首先添加一个滚动控件，在滚动控件里添加编辑框就行了。具体效果可参考iApc的内容预览。非常好用哦</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=128');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">去除编辑框点击后有背景颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">默认编辑框只要设置颜色就会出现一个点击输入后颜色 浅蓝色的背景


比如设置编辑框白色，输入内容时编辑框背景颜色就会变成浅蓝色，非常影响美观。

解决办法非常简单，在编辑框的获得焦点事件写下代码：
us(编辑框id,&quot;background&quot;,&quot;&quot;)

即可去除默认的颜色当然也可以设置其他颜色。在后面的&quot;&quot;里输入颜色代码即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=129');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">编辑框的内容不垂直居中</div></div></div><div class="mdui-card-content mdui-text-truncate">当你设置编辑框高度后，默认的编辑框里的文字是垂直居中的，可在属性里设置：

gravity=top

即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=130');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给编辑框的文字设置颜色，语法高亮</div></div></div><div class="mdui-card-content mdui-text-truncate">可参考iAPP的编辑代码时语法高亮。具体过程就不说了

编辑框属性里内容：

text=(html)&lt;font color=#006000&gt;我是绿色&lt;font&gt;我不是绿色</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=131');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击发送QQ临时对话接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qq=1294858802
//你的QQ号
ss(&quot;mqqwpa://im/chat?chat_type=wpa&amp;uin=&quot;+qq+&quot;&amp;version=1&quot;,urlqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,urlqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=132');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击添加QQ群接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qun=584354327
//群号
ss(&quot;mqqapi://card/show_pslcard?src_type=internal&amp;version=1&amp;uin=&quot;+qun+&quot;&amp;card_type=group&amp;source=qrcode&quot;,joinqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,joinqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=133');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给控件加圆角的方法</div></div></div><div class="mdui-card-content mdui-text-truncate">需要在载入事件先赋值，代码如下：

ngde(5,&quot;#ffffff&quot;,ok)
us(1,&quot;background&quot;,ok)

设置id为1的控件圆角的角度是5，背景颜色是#ffffff，通过ok调用，可以多个控件一起调用，还有其他更多属性，可搜索  ngde 查看。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=134');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">列表点击颜色的设置</div></div></div><div class="mdui-card-content mdui-text-truncate">列表点击颜色有两种，一种是项目点击事件。

还有一种我比较推荐，就是在列表界面，给线性布局加点击事件，把背景设置为透明就有点击效果了，参考iApc的列表点击效果！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=135');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">滑动窗体滑动界面切换</div></div></div><div class="mdui-card-content mdui-text-truncate">道理很简单，代码太长说下原理就行了。


在滑动窗体切换界面事件写下代码

f(st_pN==0)
{
tw(&quot;你现在是第一个界面&quot;)
}
else f(st_pN==1)
{
tw(&quot;你滑动到了第二个界面&quot;)
}

注意的是st_pN获取当前界面是从0开始的，也就是第一个界面是0第二个是1，以此类推。

既然得出了当前界面那还不简单？us设置颜色啊，比如获取界面是第二个就把某个控件变成黄色或者换个图片。代码要写很多。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=136');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">在侧滑或者滑动窗体显示列表方法</div></div></div><div class="mdui-card-content mdui-text-truncate">若没有滑动窗体或者侧滑窗体，那么添加列表的代码就是这样的

ula(ula,1=&quot;测试&quot;)
uls(id,ula,&quot;list.iyu&quot;,-2,-2)

加了滑动窗体后，就应该这样写

t()
{
ula(ula,1=&quot;测试&quot;)
ufnsui()
{
uls(界面名.id,ula,&quot;list.iyu&quot;,-2,-2)
}
}

加在mian载入事件！不同的只是需要加线程和滑动窗体里的界面名。ufnsui也是必须加的，线程内更新界面都要加，开源项目里有示例工程，网格视图同理。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=137');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取手机系统版本的方法</div></div></div><div class="mdui-card-content mdui-text-truncate">sjxx(xt)
sgsz(xt,2,xtb)
sj(xtb,&quot;\n&quot;,null,xtb)
sj(xtb,&quot;\n&quot;,null,apk)
f(apk&gt;=19)
{
tw(&quot;你的系统低于安卓4.4&quot;)
}

别问我19是怎么来的，关于系统版本对应的SDK可百度查阅。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=138');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">隐藏列表滚动条与隐藏列表分割线</div></div></div><div class="mdui-card-content mdui-text-truncate">iAPP默认的列表分割线并不好看，当然你完全可以重新定义分割线，可参考iApc的列表分割线（分割线距离左边有一段距离）

属性添加：
scrollbars=none
//隐藏滚动条
dividerheight=0dp
//设置分割线高度为0

隐藏分割线后怎么添加分割线呢？答案很简单，在你的列表显示界面，添加一条线性布局高度为1即可

隐藏滚动条不仅在列表有效，在滚动控件和水平滚动控件一样有效哦！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=139');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hs获取网页后编码错误解决办法</div></div></div><div class="mdui-card-content mdui-text-truncate">在用hs获取网页后难免会遇到中文编码错误的问题，原因就是该网页使用gb2313中文编码，安卓是使用utf-8中文编码的，解决办法就是转换下。

示例
hs(&quot;http://baidu.com&quot;,by)
sutf8to(by, b)
tw(b)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=140');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">退出软件动画效果</div></div></div><div class="mdui-card-content mdui-text-truncate">原理很简单，通过st_kC获取用户按的是哪个按键，判断是不是等于4（4是退出），是就退出并显示跳转动画，其中lan(4)可设置1-11，可查询跳转动画代码。


f(st_kC==4)
{
end()
lan(4)

}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=141');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">关于弹窗载入界面的教程</div></div></div><div class="mdui-card-content mdui-text-truncate">2.0的新功能弹窗可以载入另一个界面，我们可以在弹窗里加图片，加进度条，加视频，加一切控件，这使得弹窗变得很好用，但是弹窗基本大家都会了，有几个人会做获取或者设置弹窗界面的内容呢？

示例
utw(null,&quot;弹窗标题&quot;,&quot;m.iyu&quot;,&quot;确定&quot;,false,v)
{
gvs(v,1,ok)
//通过gvs获取v变量界面里控件为1的对象
ug(ok,&quot;text&quot;,yes)
//再获取ok对象的文本内容
tw(yes)
}

道理很简单，通过gvs获取弹窗界面里的控件，再通过us获取或者us设置。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=142');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">论启动图的正确做法</div></div></div><div class="mdui-card-content mdui-text-truncate">首先搞清楚为什么要启动图？启动图不是为了让软件高大上一些，他是为了让软件打开后加载数据时不让用户看到。我非常抵制和排斥跳转界面，low到家了！

比如iApc的启动图，iApc打开后会加载4个列表，也就是示例，代码，控件，更多，加载这四个个列表大约需要一秒钟时间，如果iApc没有启动图，那么打开iApc后所有列表会是空，也要等到一秒后列表才会加载出来，影响体验。

目前iApc的启动图是列表加载完毕后隐藏图片控件，我自认为这是最好的做法了，当然也欢迎吐槽。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=143');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">软件第一次使用弹窗提示</div></div></div><div class="mdui-card-content mdui-text-truncate">这个比较简单，代码如下：

fe(&quot;$dyc.txt&quot;,dyc)
//获取文件是否存在
f(dyc==&quot;false&quot;)
//判断是否存在
{
utw(null,&quot;提示&quot;,&quot;你是第一次使用本软件哦&quot;,&quot;确定&quot;,false,dycs)
{
}
fw(&quot;$dyc.txt&quot;,&quot;yes&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=144');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">模块的使用说明</div></div></div><div class="mdui-card-content mdui-text-truncate">模块的使用说明：模块的作用只是为了节约你的写代码时间，其实和载入事件没什么区别。

比如新建一个模块：m.myu
在模块里写以下代码：

fn ok(sb)
tw(&quot;我是模块&quot;)
end fn

在其他界面的载入事件调用：
代码如下：

fn m.ok(sb)

界面打开后就会执行m.myu模块里 fn ok(sb) 以内的事件。
当然你也可以在这个模块里加不同的调用代码，比如：

fn ok(sb)
tw(&quot;我是模块&quot;)
end fn

fn yes(no)
tw(&quot;我是模块&quot;)
end fn

通过fn m.yes(no)调用模块fn yes(no)部分的代码！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=145');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击两次退出软件</div></div></div><div class="mdui-card-content mdui-text-truncate">将下列代码复制到“按键按下事件”&quot;或者按键释放事件&quot; ：

 f(st_kC==4)
{
f(ss.end==null)
{
ss end=0
tw(&quot;再按一次退出iApc&quot;,0)
t()
{
stop(1000)
ss end=null
}
}
else
{
end()
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=146');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">分享软件代码</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)
sit(a, &quot;type&quot;, &quot;text/plain&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.SUBJECT&quot;, &quot;分享软件&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.TEXT&quot;, &quot;iapp代码助手是一款iApp辅助工具，手册源码，示例工程，你需要的我都有，你确定不来试试？</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=147');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文字跑马灯</div></div></div><div class="mdui-card-content mdui-text-truncate">//文本跑马灯显示
//设置在文本属性里面

width=-1
height=-2
//文本控件宽高
text=iApc是一款特别不错的iAPP学习手册哦，你确定不要来试试吗？
//显示文本
textsize=16dp
//字体大小
singleline=true
//内容显示在同一行
ellipsize=marquee
//文本超出宽度后显示跑马灯
marqueerepeatlimit=marquee_forever
//跑马灯无限重复
focusableintouchmode=true
//获取焦点（必须设置）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=148');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">控件背景图片</div></div></div><div class="mdui-card-content mdui-text-truncate">可设置在线性布局，文本控件，按钮控件，图片按钮控件，相对布局控件，帧布局控件等

直接在控件属性里输入background=图片路径
线性为例：
width=-1
height=-1
orientation=vertical
background=@bj.jpg</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=149');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">软件自动检测更新</div></div></div><div class="mdui-card-content mdui-text-truncate">//以下代码放在载入事件
t()
{
s link=&quot;网址&quot;
hs(link,new)
sj(new,&quot;&lt;bb&gt;&quot;,&quot;&lt;/bb&gt;&quot;,bb)
.截取源码中&lt;bb&gt;到&lt;/bb&gt;中间的版本号
sj(new,&quot;&lt;url&gt;&quot;,&quot;&lt;/url&gt;&quot;,url)
//截取新版本下载地址

f(bb&gt;1)
{
hws(url)
//有新版本直接调用系统浏览器下载
}
else
{
ufnsui()
{
tw(&quot;已经是最新版&quot;)
}
}
}

以下是你在网页中的代码示例

&lt;bb&gt;2&lt;/bb&gt;&lt;url&gt;http://flmle.com/down.apk&lt;/url&gt;</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=150');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断输入框是否包含中文</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(id,&quot;text&quot;,a)
stobm(a,&quot;utf-8&quot;,b)
f(a==b)
{
tw(&quot;输入中文不包含&quot;)
}
else
{
tw(&quot;输入含有中文及中文标点&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=151');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断文件是否存在</div></div></div><div class="mdui-card-content mdui-text-truncate">//abc.txt是文件名
fe(&quot;abc.txt&quot;,bbb)
f(bbb == &quot;true&quot;)
{
tw(&quot;存在&quot;)
}
else
{
tw(&quot;不存在&quot;)
}
用前必看！】
此教程仅对iApp2.0使用有效！2.0的大部分代码不适用于1.6.8！

此教程仅对iApp2.0使用有效！2.0的大部分代码不适用于1.6.8！

此教程仅对iApp2.0使用有效！2.0的大部分代码不适用于1.6.8！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=152');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">属性标识对照表</div></div></div><div class="mdui-card-content mdui-text-truncate">text=内容
background=背景
width=宽度、
height=高度、
paddingleft=左内边距、
paddingtop=顶内边距、
paddingright右内边距、
paddingbottom=底内边距、
layout_marginleft=左外边距、
layout_margintop=顶外边距、
layout_marginright=右外边距、
layout_marginbottom=底外边距、
hint=提示字符、
imeoptions=虚拟键盘按键状态、
visibility=控件可视状态、
checked=选项是否被选中、
title=浏览器网页标题、
url=浏览器网址、
lastvisibleposition=列表滑动到项目位置的序号、@
count=列表项目总数、
selecteditem=获取下拉框选值、
rating=评分当前数值、
progress=控件当前进度数值、
date=日期控件选值、
time=时间控件选值、
currentitem=获得滑动窗体界面序号、
isdraweropen=侧滑是否界面展开状态、
selectionstart=获取文本框光标开始位置、
selectionend=获取文本框光标结束位置、
cangoback=是否存在可返回的网页、
cangoforward=是否存在可前进的网页、
collapsecolumns=表格布局获取指定列是否折叠、
shrinkcolumns=表格布局获取指定的列是否可收缩、
stretchcolumns=表格布局获取指定的列是否可拉伸、
shrinkcolumnsall=表格布局获取指示是否所有的列都是可收缩的、
stretchcolumnsall=表格布局获取指示是否所有的列都是可拉伸的
属性visibility，显/隐0/8或，visible/gone，其他显隐在控件属性中输入visibility查看</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=153');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">侧划</div></div></div><div class="mdui-card-content mdui-text-truncate">废话不说，开始正解 
首先我们要创建几个界面比如我要他侧划的是“v”界面那么
第一步：在mian添加个线性布局布局长宽为-1
第二步：添加一个控制侧划的控件
第三步：添加一个侧划控件长宽自己设定哦
第四步：就是写代码了，我们在载入事件里写代码  addv(5,&quot;v.iyu&quot;) 
addv就是合并界面的意思，而这个5就是侧划窗体的id 然后这个v.iyu就是侧划出来的界面啦 当然在mian里还没有完接下来就是第五步了
第五步：我们在需要点击出现侧划窗体里写代码，在单击触屏事件里写
ug(5,&quot;isdraweropen&quot;,&quot;start&quot;,yq)
f(yq==false)
{
us(5,&quot;opendrawer&quot;,&quot;start&quot;)
us(3,&quot;src&quot;,&quot;@bai271.png&quot;)
}
else
{
us(5,&quot;closedrawer&quot;,&quot;start&quot;)
us(3,&quot;src&quot;,&quot;@more-v3.png&quot;)
}

当然这个5还是侧划窗体的id而这个3则是点击出现侧划窗体的id当然这个不重要，不过可以更改点击时换图片
接下来就是侧划哪一个界面了
第六步：在v界面添加一个布局在控件属性里添加
width=-1
height=-1
layout_gravity=start
orientation=vertical
background=white
其他都不重要只有
layout_gravity=start
重要为什么Start呢？
第五步没忘吧里面也有Start 所以要配合，因为Start是开始意思，所以会出现在左侧，如果第五步和第六步的Start都改为end就会出现在右侧

岳少手写qq：2696059423</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=154');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">无限变色</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
w(1==1)
{
.随机字体颜色数值
sran(100000,800000,sjs)
ss(&quot;-&quot;+sjs,sjs)
stop(200)
ufnsui()
{
us(2, &quot;textcolor&quot;, sjs)
//文本id
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=155');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">qq收藏等链接做远程公告</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{hs(&quot;qq收藏链接&quot;,a)
sj(a,&quot;〔&quot;,&quot;〕&quot;,b)
sr(b,&quot;&lt;br/ &gt;&quot;,&quot;\n&quot;,c)
f(b==)
{
ufnsui()
{
tw(&quot;你是进入了没有网络的二次元世界了吗&quot;)
}
}
else
{
ufnsui()
{
utw(17301651,&quot;公告&quot;,c,&quot;确定&quot;,&quot;取消&quot;,true,v)
{
}
else
{
}
}
}
}



//qq收藏内容格式比如:
〔内容xxxx〕
一定加〔〕

作者:薄荷终究是个心凉
qq2784469747</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=156');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">QQ临时对话接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qq=2696059423
//你的QQ号
ss(&quot;mqqwpa://im/chat?chat_type=wpa&amp;uin=&quot;+qq+&quot;&amp;version=1&quot;,urlqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,urlqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)

//作者:岳少 2696059423</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=157');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">添加QQ群接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qun=190188162
//群号
ss(&quot;mqqapi://card/show_pslcard?src_type=internal&amp;version=1&amp;uin=&quot;+qun+&quot;&amp;card_type=group&amp;source=qrcode&quot;,joinqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,joinqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)

//iApp代码开扩者:我是笨蛋  2696059423</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=158');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">进度条的使用方法</div></div></div><div class="mdui-card-content mdui-text-truncate">进度条，也可以是拖动条，这两个都是差不多的，以进度条为例子就行了。

首页我们做一个倒计时，代码如下：
t()
{
s a=120
for(1;120)
{
stop(1000)
s(a-1,a)
ufnsui()
{
us(进度条id,&quot;progress&quot;,a)
}
}
}


到这里基本就好了，但是细心一点你会发现，进度条只到100就完了，没错！进度条默认最大值是100，也就是他只跑到100就完了，怎么设置呢？

只需要在属性里加：
max=120
也就是最大值是120就可以了！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=159');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">滑动窗体滑动界面切换类似iApc</div></div></div><div class="mdui-card-content mdui-text-truncate">道理很简单，代码太长说下原理就行了。


在滑动窗体切换界面事件写下代码

f(st_pN==0)
{
tw(&quot;你现在是第一个界面&quot;)
}
else f(st_pN==1)
{
tw(&quot;你滑动到了第二个界面&quot;)
}

注意的是st_pN获取当前界面是从0开始的，也就是第一个界面是0第二个是1，以此类推。

既然得出了当前界面那还不简单？us设置颜色啊，比如获取界面是第二个就把某个控件变成黄色或者换个图片，这个教程就是这样。代码要写很多。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=160');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">在侧滑或者滑动窗体显示列表方法</div></div></div><div class="mdui-card-content mdui-text-truncate">若没有滑动窗体或者侧滑窗体，那么添加列表的代码就是这样的

ula(ula,1=&quot;测试&quot;)
uls(id,ula,&quot;list.iyu&quot;,-2,-2)

加了滑动窗体后，就应该这样写

t()
{
ula(ula,1=&quot;测试&quot;)
ufnsui()
{
uls(界面名.id,ula,&quot;list.iyu&quot;,-2,-2)
}
}

加在mian载入事件！不同的只是需要加线程和滑动窗体里的界面名。ufnsui也是必须加的，线程内更新界面都要加，开源项目里有示例工程，网格视图同理。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=161');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取手机系统版本的方法</div></div></div><div class="mdui-card-content mdui-text-truncate">sjxx(xt)
sgsz(xt,2,xtb)
sj(xtb,&quot;\n&quot;,null,xtb)
sj(xtb,&quot;\n&quot;,null,apk)
f(apk&gt;=19)
{
tw(&quot;你的系统低于安卓4.4&quot;)
}

别问我19是怎么来的，关于系统版本对应的SDK可百度查阅。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=162');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hs获取网页后编码错误解决办法</div></div></div><div class="mdui-card-content mdui-text-truncate">在用hs获取网页后难免会遇到中文编码错误的问题，原因就是该网页使用gb2313中文编码，安卓是使用utf-8中文编码的，解决办法就是转换下。

示例
hs(&quot;http://baidu.com&quot;,by)
sutf8to(by, b)
tw(b)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=163');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">退出软件动画效果</div></div></div><div class="mdui-card-content mdui-text-truncate">原理很简单，通过st_kC获取用户按的是哪个按键，判断是不是等于4（4是退出），是就退出并显示跳转动画，其中lan(4)可设置1-11，可查询跳转动画代码。


f(st_kC==4)
{
end()
lan(4)

}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=164');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">关于弹窗载入界面的教程</div></div></div><div class="mdui-card-content mdui-text-truncate">2.0的新功能弹窗可以载入另一个界面，我们可以在弹窗里加图片，加进度条，加视频，加一切控件，这使得弹窗变得很好用，但是弹窗基本大家都会了，有几个人会做获取或者设置弹窗界面的内容呢？

示例
utw(null,&quot;弹窗标题&quot;,&quot;m.iyu&quot;,&quot;确定&quot;,false,v)
{
gvs(v,1,ok)
//通过gvs获取v变量界面里控件为1的对象
ug(ok,&quot;text&quot;,yes)
//再获取ok对象的文本内容
tw(yes)
}

道理很简单，通过gvs获取弹窗界面里的控件，再通过us获取或者us设置。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=165');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">论启动图的正确做法</div></div></div><div class="mdui-card-content mdui-text-truncate">首先搞清楚为什么要启动图？启动图不是为了让软件高大上一些，他是为了让软件打开后加载数据时不让用户看到。我非常抵制和排斥跳转界面，low到家了！

比如iApc的启动图，iApc打开后会加载4个列表，也就是示例，代码，控件，更多，加载这四个个列表大约需要一秒钟时间，如果iApc没有启动图，那么打开iApc后所有列表会是空，也要等到一秒后列表才会加载出来，影响体验。

目前iApc的启动图是列表加载完毕后隐藏图片控件，我自认为这是最好的做法了，当然也欢迎吐槽。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=166');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">软件第一次使用弹窗提示</div></div></div><div class="mdui-card-content mdui-text-truncate">这个比较简单，代码如下：

fe(&quot;$dyc.txt&quot;,dyc)
//获取文件是否存在
f(dyc==&quot;false&quot;)
//判断是否存在
{
utw(null,&quot;提示&quot;,&quot;你是第一次使用本软件哦&quot;,&quot;确定&quot;,false,dycs)
{
}
fw(&quot;$dyc.txt&quot;,&quot;yes&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=167');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">post提交示例</div></div></div><div class="mdui-card-content mdui-text-truncate">post提交（可参考本软件的反馈信息）。学会post提交后你可以做一些联网软件，比如像QQ微信这样的，当然工程量比较大，但做个论坛还是没问题的！

以下是jkniu.com截取的搜索表单；
   &lt;form id=&quot;search-form&quot; name=&quot;g&quot; method=&quot;get&quot; action=&quot;/bbs/book_list.aspx&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;siteid&quot; value=&quot;1000&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;classid&quot; value=&quot;0&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;action&quot; value=&quot;search&quot;&gt;
        &lt;input type=&quot;hidden&quot; name=&quot;type&quot; value=&quot;title&quot;&gt;
          &lt;input type=&quot;text&quot; name=&quot;key&quot; placeholder=&quot;请输入关键字&quot;&gt;
      &lt;/form&gt;

通常表单都是form开头form结尾！截取这部分就行了。
第一个form的action=表示提交的网站接口就是/bbs/book_list.aspx 当然他没有网址就表示是本网站也就是http://jkniu.com/bbs/book_list.aspx

接下来看第二行input，input的意思是输入框他的属性是hidden表示这个输入框是隐藏的，我们看他的name=siteid 只需要截取siteid就行了，还有一个是value=1000表示这个输入框的输入内容是1000

这样得出第一个post提交内容：siteid=1000

第二、第三、第四同理，分别得出：classid=0、action=search、type=title

重点来了，最后一个input也就是输入框，他不是隐藏的，而是要输入的，也就是key=输入的搜索内容。

得出：key=搜索关键字

接下来开始提交，当然必须加线程：

hs(&quot;http://jkniu.com/bbs/book_list.aspx&quot;,&quot;site=1000&amp;classid=0&amp;action=search&amp;type=title&amp;key=搜索关键字&quot;,&quot;utf-8&quot;,ok)

其中ok就是返回的搜索结果，你可以通过截取搜索出来的内容添加到你的列表控件或者文本控件。注意如果软件做论坛之类的内容，需要登录的，就需要记录cookie，过程比较麻烦就不说了。看下手册你就懂！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=168');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">分享软件代码</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)
sit(a, &quot;type&quot;, &quot;text/plain&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.SUBJECT&quot;, &quot;分享软件&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.TEXT&quot;, &quot;iApc是一款iApp辅助工具，手册源码，示例工程，你需要的我都有，你确定不来试试？</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=169');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文字跑马灯</div></div></div><div class="mdui-card-content mdui-text-truncate">//文本跑马灯显示
//设置在文本属性里面

width=-1
height=-2
//文本控件宽高
text=iApc是一款特别不错的iAPP学习手册哦，你确定不要来试试吗？
//显示文本
textsize=16dp
//字体大小
singleline=true
//内容显示在同一行
ellipsize=marquee
//文本超出宽度后显示跑马灯
marqueerepeatlimit=marquee_forever
//跑马灯无限重复
focusableintouchmode=true
//获取焦点（必须设置）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=170');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">控件背景图片</div></div></div><div class="mdui-card-content mdui-text-truncate">可设置在线性布局，文本控件，按钮控件，图片按钮控件，相对布局控件，帧布局控件等

直接在控件属性里输入background=图片路径
线性为例：
width=-1
height=-1
orientation=vertical
background=@bj.jpg</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=171');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">软件自动检测更新</div></div></div><div class="mdui-card-content mdui-text-truncate">//以下代码放在载入事件
t()
{
s link=&quot;网址&quot;
hs(link,new)
sj(new,&quot;&lt;bb&gt;&quot;,&quot;&lt;/bb&gt;&quot;,bb)
.截取源码中&lt;bb&gt;到&lt;/bb&gt;中间的版本号
sj(new,&quot;&lt;url&gt;&quot;,&quot;&lt;/url&gt;&quot;,url)
//截取新版本下载地址

f(bb&gt;1)
{
hws(url)
//有新版本直接调用系统浏览器下载
}
else
{
ufnsui()
{
tw(&quot;已经是最新版&quot;)
}
}
}

以下是你在网页中的代码示例

&lt;bb&gt;2&lt;/bb&gt;&lt;url&gt;http://flmle.com/down.apk&lt;/url&gt;</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=172');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断输入框是否包含中文</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(id,&quot;text&quot;,a)
stobm(a,&quot;utf-8&quot;,b)
f(a==b)
{
tw(&quot;输入中文不包含&quot;)
}
else
{
tw(&quot;输入含有中文及中文标点&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=173');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断文件是否存在</div></div></div><div class="mdui-card-content mdui-text-truncate">//abc.txt是文件名
fe(&quot;abc.txt&quot;,bbb)
f(bbb == &quot;true&quot;)
{
tw(&quot;存在&quot;)
}
else
{
tw(&quot;不存在&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=174');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">百度搜索示例</div></div></div><div class="mdui-card-content mdui-text-truncate">以下代码，需要个输入框和按钮，把代码加到按钮点击事件：

ug(输入框id,&quot;text&quot;,so)
ss(&quot;http://m.baidu.com/s?from=1000716a&amp;word=&quot;+so,link)
hw(link)
.iapp教程，小白请不要乱修改！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=175');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">最简单的远程公告</div></div></div><div class="mdui-card-content mdui-text-truncate">.公告里面写上弹窗代码，也可以做成远控。
.一些网站需uf-8转码，加上sutf8to(a,a)即可


t()
{
s gx2=&quot;链接地址&quot;
hs(gx2,null,null,gx1)
sj(gx1,&quot;《公告》&quot;,&quot;《公告》&quot;,gx3)
sr(ggg,&quot;&lt;br /&gt;&quot;,&quot;\n&quot;,gl)
//sutf8to(gl,gl)
.如果网站需uf-8转码，可删除上面的//，如果无需uf-8转码，请勿删除//，否则只会转换成乱码！
f(gl!=null)
{
ufnsui(gl)
}
else
{
tw(&quot;暂无公告&quot;)
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=176');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取网页源码</div></div></div><div class="mdui-card-content mdui-text-truncate">s a=&quot;网址&quot;
s b=编辑框id
t()
{
hs(a,null,null,ym)
stop(1500)
us(b,&quot;text&quot;,ym)
}

//网页源码获取</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=177');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">等待时循环图片</div></div></div><div class="mdui-card-content mdui-text-truncate">.很多人都想要那个等待的时候有一个圈子在转的代码，今天我就把代码发上来吧
.好像也可以结合循环代码使用
.7是图片控件
.记得修改控件id
.50是转动的速度
.如果觉得手动修改代码太麻烦可以去工具包界面
.下载920文本编辑器替换修改

.代码如下

s id=这里是图片控件id

t()
{
us(id,&quot;imgaf&quot;,&quot;1.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;2.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;3.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;4.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;5.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;6.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;7.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;8.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;9.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;10.png&quot;)
stop(50)
us(id,&quot;imgaf&quot;,&quot;11.png&quot;)
stop(50)

.这里可以添加圈圈转完之后执行的代码
.例如uigo(&quot;a&quot;)
}

.图片素材打包地址：
http://yunpan.cn/cHM2tFrtY4iIs

.记得把图片素材放进工程包</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=178');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">QQ空间更新实例</div></div></div><div class="mdui-card-content mdui-text-truncate">首先你要有个QQ。废话

在QQ空间随便发一条说说。说说像下面一样写↓

〖版本〗这里写版本〖版本〗

〖内容〗这是写更新内容〖内容〗

.版本里面写你当前时软件版本，且每次更新后都要比旧版本的数字大。比如旧版本的版本是1.0，那么你要更新了就在括号里面写上1.2，反正比原来的数字大就行了，内容里写上更新内容，比如说更新了什么什么的，也可以写上弹窗代码。这个示例你也可以改成运程公告什么的。。。

然后发布后，就要获取到它的链接，怎么获取呢？
点击说说把分享，把说说分享到群里，然后在群里点击刚才分享的说说，然后点右上角，选择复制链接就可以了。

获取链接后就在工程里的载入事件或点击事件加入以下代码。

t()
{
s gx2=&quot;填上你刚刚获取到的说说链接&quot;

hs(gx2,null,null,gx1)
.sutf8to(gx1,gx1)
sj(gx1,&quot;〖版本〗&quot;,&quot;〖版本〗&quot;,gx3)
sj(gx1,&quot;〖内容〗&quot;,&quot;〗内容〗&quot;,ggg)
sr(ggg,&quot;&lt;br /&gt;&quot;,&quot;\n&quot;,gl)
sr(gl,&quot;&amp;quot;&quot;,&quot;&quot;&quot;,gl)
f(gx3&gt;2.5)
.2.5就是你当前的软件版本
{
ufnsui(gl)
}
else
{
tw(&quot;已经是最新版本&quot;)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=179');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">用浏览器打开</div></div></div><div class="mdui-card-content mdui-text-truncate">s a=&quot;&quot;
s b=&quot;http://pan.baidu.com/&quot; 
s c=&quot;&quot;
s d=&quot;&quot;
s e=&quot;&quot;
ss(b+a+c+a+d+a+e, lianjie)
s r=&quot;asd.html&quot;
s rr=&quot;&lt;META HTTP-EQUIV=&quot;Refresh&quot; CONTENT=&quot;0;URL=&quot;
ss(rr+lianjie+&quot;&quot;&gt;&quot;, rt)
fw(r, rt)
fo(r)
tw(&quot;请选择浏览器打开下载\n建议设置浏览器为默认&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=180');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断上午下午</div></div></div><div class="mdui-card-content mdui-text-truncate">time(&quot;H&quot;,a)
f(a&lt;=09||a&lt;=11)
{
s a=&quot;上午&quot;
}
f(a==12)
{
s a=&quot;中午&quot;
}
f(a&lt;=13||a&lt;=16)
{
s a=&quot;下午&quot;
}
tw(a)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=181');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">避免列表内容重复</div></div></div><div class="mdui-card-content mdui-text-truncate">s c=&quot;&quot;
.就是把ula斌值的代码清空，即可达到不重复
ula(&quot;it32&quot;,nr;&quot;t.png&quot;;mz,c)
//添加的内容
uls(1,&quot;it32&quot;,c,k)

例如：


s i=&quot;&quot;
s ws=&quot;itt2&quot;
ula(ws, &quot;这里是点击列表发生的事&quot;; &quot;pk.png&quot;; &quot;标题&quot;; &quot;小标题&quot;, i)
uls(1,ws,i,kk)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=182');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">最全html文本</div></div></div><div class="mdui-card-content mdui-text-truncate">&lt;pre&gt;

开头都要加上(html)

字体红色:&amp;lt;LI&gt;&amp;lt;font color=red&amp;gt;输入文字&amp;lt;/font&amp;gt;&amp;lt;/LI&amp;gt;

字体蓝色:&amp;lt;LI&gt;&amp;lt;font color=blue&gt;输入文字&amp;lt;/font&amp;gt;
&amp;lt;/LI&amp;gt;

蓝色加下划线:&amp;lt;a href=&quot;&quot;&amp;gt;输入文字&amp;lt;/a&amp;gt;

加粗文字:&amp;lt;p&gt;&amp;lt;strong&amp;gt;强调&amp;lt;/strong&amp;gt;&amp;lt;/p&amp;gt;

&lt;pre&gt;</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=183');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">窗口无限振动特效</div></div></div><div class="mdui-card-content mdui-text-truncate">s fu=这是振动的幅度，建议在10-50之间
swh(&quot;h&quot;,h)
s(h-fu,hs)
swh(&quot;w&quot;,w)
s(w-fu,ws)
t()
{
//这是振动的间隔
s jg=100
w(1==1)
{
us(0,&quot;x&quot;,fu)
us(0,&quot;w&quot;,w)
stop(jg)
us(0,&quot;y&quot;,fu)
us(0,&quot;x&quot;,0)
stop(jg)
us(0,&quot;y&quot;,0)
us(0,&quot;h&quot;,hs)
stop(jg)
us(0,&quot;w&quot;,ws)
us(0,&quot;h&quot;,h)
stop(jg)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=184');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">通知栏进度示例</div></div></div><div class="mdui-card-content mdui-text-truncate">s a=0
//jg这是你的间隔
s jg=10
t()
{
//循环100次
for(1;100)
{
ss(a+&quot;%&quot;,b)
ftz(&quot;通知&quot;,&quot;任务已经完成&quot;,b,&quot;&quot;)
s(a+1,a)
stop(jg)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=185');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">使用密码进入软件</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(控件id,&quot;text&quot;,a)
f(a==&quot;你的密码&quot;)
{
tw(&quot;密码正确&quot;)
}
else
{
tw(&quot;密码错误&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=186');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">按钮侧滑栏的添加</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
//背景墙id，用来当侧滑栏
s id=1
swh(&quot;h&quot;,h)
us(id,&quot;x&quot;,0)
us(id,&quot;h&quot;,h)
us(id,&quot;w&quot;,0)
//设置默认侧滑栏不可视
us(id,&quot;show&quot;,8)
us(id,&quot;y&quot;,0)
//在侧滑栏里的控件id，多个用英文 YI 分割开
//注意:侧滑栏的控件一定要在背景墙之上才能显示
s Kong=&quot;3YI4&quot;
//侧滑栏宽度
s kuan=100
f(Kong?&quot;YI&quot;)
{
//设置控件x坐标为0
//设置控件宽度为侧滑栏宽度
sl(Kong,&quot;YI&quot;,ls)
for(ss;ls)
{
us(ss,&quot;w&quot;,kuan)
us(ss,&quot;x&quot;,0)
us(ss,&quot;show&quot;,8)
}
}
else
{
us(Kong,&quot;w&quot;,kuan)
us(Kong,&quot;x&quot;,0)
us(Kong,&quot;show&quot;,8)
}
}

//按钮事件
t()
{
//背景墙id
s id=1
ug(id,&quot;w&quot;,w)
ug(id,&quot;show&quot;,a)
//侧滑栏弹出速度，越大越快
s su=10
s(kuan+su,js)
//加入判断，防止用户快速点击导致出错
f(w==0||w==js)
{
f(a==8)
{
us(id,&quot;show&quot;,0)
w(w&lt;=kuan)
{
ug(id,&quot;w&quot;,w)
s(w+su,w)
us(id,&quot;w&quot;,w)
}

f(Kong?&quot;YI&quot;)
{
sl(Kong,&quot;YI&quot;,ls)
for(ss;ls)
{
us(ss,&quot;show&quot;,0)
}
}
else
{
us(Kong,&quot;show&quot;,0)
}


}
else
{

f(Kong?&quot;YI&quot;)
{
sl(Kong,&quot;YI&quot;,ls)
for(ss;ls)
{
us(ss,&quot;show&quot;,8)
}
}
else
{
us(Kong,&quot;show&quot;,8)
}


w(w&gt;0)
{
ug(id,&quot;w&quot;,w)
s(w-su,w)
us(id,&quot;w&quot;,w)
}
us(id,&quot;show&quot;,8)
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=187');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">软件注册与登录</div></div></div><div class="mdui-card-content mdui-text-truncate">//放入注册按钮
s id=帐号输入框
s ids=密码输入框
s wen=保存帐号密码的文件
ug(id,&quot;text&quot;,a)
ug(id,&quot;text&quot;,b)
f(a==&quot;&quot;||b==&quot;&quot;)
{
tw(&quot;请先完善内容！&quot;)
}
else
{
tw(&quot;注册成功！&quot;)
ss(&quot;帐号:&quot;+a+&quot;密码:&quot;+b,YI)
fw(wen,YI)
}

//登录按钮
s id=帐号输入框
s ids=密码输入框
s wen=保存帐号密码的文件
fr(wen,YI)
sj(YI,&quot;帐号:&quot;,&quot;密码&quot;,zh)
sj(YI,&quot;密码:&quot;,null,mm)
ug(id,&quot;text&quot;,a)
ug(ids,&quot;text&quot;,b)
f(zh==a&amp;&amp;b==mm)
{
tw(&quot;登录成功！&quot;)
}
else
{
f(zh==null||mm==null)
{
tw(&quot;请先注册！&quot;)
}
else
{
tw(&quot;登录失败！密码错误！&quot;)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=188');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">产生随机验证码</div></div></div><div class="mdui-card-content mdui-text-truncate">s a=&quot;这是你的验证码，支持汉字，字母，数字，符号等&quot;
s cs=5
//cs变量是你验证码的长度
s SVIP=&quot;&quot;
slg(a,YI)
for(1;cs)
{
sran(1,YI,sui)
s(sui-1,pp)
ssg(a,pp,sui,shi)
ss(shi+SVIP,SVIP)
}
//这里输出SVIP</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=189');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">手机验证码注册示例</div></div></div><div class="mdui-card-content mdui-text-truncate">//放入启动事件
s shou=手机号输入框id
s zc=按钮id
ssj(zc)
{
ug(zc,&quot;text&quot;,zct)
f(zct==&quot;验证&quot;)
{
ug(shou,&quot;text&quot;,a)
f(a==&quot;&quot;)
{
tw(&quot;请输入你的验证码！&quot;)
}
else
{
f(a==yz)
{
tw(&quot;注册成功！&quot;)
}
else
{
tw(&quot;验证码错误！&quot;)
}
}
}
else
{
ug(shou,&quot;text&quot;,sou)
f(sou==&quot;&quot;)
{
tw(&quot;请输入你的手机号！&quot;)
}
else
{
slg(sou,sj)
f(sj!=11)
{
tw(&quot;请输入11位手机号！&quot;)
}
else
{
sran(11111,99999,yz)
ss(&quot;某某软件注册码:&quot;+yz+&quot;请妥善保管！&quot;,yzs)
usmsgo(sou,yzs)
tw(&quot;验证码已经发送到你的手机，请注意查收！&quot;)
us(shou,&quot;text&quot;,&quot;&quot;)
us(zc,&quot;text&quot;,&quot;验证&quot;)
}
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=190');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断正版</div></div></div><div class="mdui-card-content mdui-text-truncate">s bb=&quot;你的包名&quot;
s bb=&quot;com.iapp&quot;
//这里用IApp为例子
t()
{
uapplist(true, b)
s c=0
t()
{
for(a;b)
{
f(a?bb)
{
s(c+1,c)
}
}
f(c==0)
{
tw(&quot;请勿使用盗版软件！&quot;)
end()
}
else
{
tw(&quot;欢迎使用正版软件！&quot;)
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=191');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取网页图片</div></div></div><div class="mdui-card-content mdui-text-truncate">//获取远程图片，并显示
s id=你图片控件的id
s wz=“http://svipyi.wap8y.com/UploadFiles/7969/2015/07/15/7969_1154380.png”
t()
{
hd(wz,&quot;ss.png&quot;,a)
us(id,&quot;sdf&quot;,&quot;ss.png&quot;)
}
.可用于远程更换启动图</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=192');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击加入群</div></div></div><div class="mdui-card-content mdui-text-truncate">//和加QQ好友的方法差不多
//群连接可以通过手机QQ里的分享群
//选择需要验证，就可以复制群连接

t()
{
tw(&quot;请用浏览器打开！&quot;)
s uu=&quot;这里是你的群连接&quot;
s r=&quot;.加群文件.html&quot;
s rr=&quot;&amp;lt;META HTTP-EQUIV=&quot;Refresh&quot; CONTENT=&quot;0;URL=&quot;
ss(rr+uu+&quot;&quot;&amp;gt;&quot;,rt)
fw(r,rt)
fo(r)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=193');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文字逐一清除</div></div></div><div class="mdui-card-content mdui-text-truncate">//代码写入按钮中,点击一次将从后向前清除一个字


s id=1

//这里填编辑框ID

ug(id,&quot;text&quot;,a)

slg(a,b)

s(b-1,c)

ssg(a,c,b,d)

ss(a+&quot;&quot;,a)

ss(d+&quot;&quot;,b)

sr(a,b,&quot;&quot;,c)

us(id,&quot;text&quot;,c)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=194');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取手机信息</div></div></div><div class="mdui-card-content mdui-text-truncate">s lb=列表id
//获取手机信息
sjxx(a)
//循环
for(c;a)
{
ula(&quot;t&quot;,c;c,m)
uls(lb,&quot;t&quot;,m,n)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=195');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">发送编辑框内容到指定号码</div></div></div><div class="mdui-card-content mdui-text-truncate">s hm=要发送的号码
s id=编辑框id
//获取内容
ug(id,&quot;text&quot;,a)
//判断是否输入
f(a==&quot;&quot;)
{
tw(&quot;请输入内容！&quot;)
}
else
{
//发送
usmsgo(hm,a)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=196');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">倒计时后执行</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=文本控件id
s s=倒计时的秒数
us(id,&quot;text&quot;,s)
t()
{
for(1;s)
{
ug(id,&quot;text&quot;,sm)
s(sm-1,sm)
us(id,&quot;text&quot;,sm)
stop(1000)
}
tw(&quot;倒计时完成！&quot;)
}
//倒计时示例</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=197');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">标题特效</div></div></div><div class="mdui-card-content mdui-text-truncate">s she14=&quot;(html)&lt;b&gt;&lt;FONT color=#ff0000&gt;软&lt;/FONT&gt;&lt;FONT color=#ab5400&gt;件&lt;/FONT&gt;&lt;FONT color=#817e00&gt;设&lt;/FONT&gt;&lt;FONT color=#57a800&gt;置&lt;/FONT&gt;&lt;/b&gt;&quot;
us(文本框ID,&quot;text&quot;,she14)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=198');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">加载中...特效</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
s zo=0
s ugi4=&quot;加载中...&quot;
s ugi2=3

w(zo==0)
{

f(ugi2==6)
{
s ugi2=3
}
else
{
s(ugi2+1,ugi2)
}
ssg(ugi1,0,ugi2,ugi3)
us(4,&quot;text&quot;,ugi3)
stop(300)
}


}
//加载中…文字特效后面三个省略号，循环一个个蹦出来</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=199');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">图片旋转</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
s dyf=1
w(dyf==1)
{
tot(图片控件ID,ahui)
stop(100)
tzz(ahui,90,cdnm)
us(图片控件ID,&quot;bf&quot;,cdnm)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=200');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用其他浏览器打开网址</div></div></div><div class="mdui-card-content mdui-text-truncate">s url=&quot;www.Baidu.com&quot;
s biaoti=&quot;正在跳转到百度搜索&quot;
//网址及标题

f(url ? &quot;http://&quot;)
{
}
else
{
ss(&quot;http:/&quot;+&quot;/&quot;+url,url)
}
sr(url,&quot; &quot;,&quot;&quot;,url)
ss(url,ssn1)
s oq1=&quot; &lt;html&gt;&lt;meta http-equiv=&quot;Content-Language&quot; content=&quot;zh-CN&quot;&gt;&lt;meta HTTP-EQUIV=&quot;Content-Type&quot; CONTENT=&quot;text/html; charset=utf-8&quot;&gt; &lt;meta http-equiv=&quot;refresh&quot; content=&quot;0.1;url=&quot;
s oq2=&quot;&quot;&gt;&lt;title&gt;&quot;
s oq4=&quot;&lt;/title&gt;&lt;/html&gt;&quot;
ss(oq1+ssn1+oq2+biaoti+oq4,oq3)
fw(&quot;a.html&quot;,oq3)
fo(&quot;a.html&quot;)
tw(&quot;请用浏览器打开\n建议将常用浏览器设为默认&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=201');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取源码以html方式显示</div></div></div><div class="mdui-card-content mdui-text-truncate">s a = &quot;这里输入网址&quot;
s id=这里是显示文本id
t()
{
hs(a, null, null, b)
s o = &quot;这里是截取html代码前&quot;
s c = &quot;这里是截取html代码后&quot;
sj(b, o, c, d)
s g=&quot;(html)&quot;
ss(g + d,cv)
us(id,&quot;text&quot;,cv)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=202');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">自动检测更新实例</div></div></div><div class="mdui-card-content mdui-text-truncate">f(acu!=&quot;false&quot;)
.判断是否允许检查更新，可以省略
{
t()
{
.tw(&quot;正在检查更新，请稍后……&quot;)
 s ver=&quot;2.0.5&quot;
.设置当前版本号
 hs(&quot;http://bbs.itxtech.ga/software/v/nver.txt&quot;,null,null,getdata)
.获取更新数据
sutf8to(getdata,getdata)
.进行utf8转码
f(getdata!=&quot;&quot;)
{
syso(getdata)
.以;为标志进行文本分割
sl(getdata,&quot;;&quot;,getdata)
sgsz(getdata,0,nver)
.得到最新版本
sgsz(getdata,1,dl)
.得到下载地址
sgsz(getdata,2,rz)
.得到更新日志
sgsz(getdata,3,size)
.得到文件大小
syso(nver)
syso(dl)
syso(rz)
syso(size)
f(nver!=&quot;null&quot;)
{
f(nver!=ver)
{
uigo(&quot;ug.iyu&quot;)
.载入更新窗口
.进行窗口初始化
}
.else
.{
.tw(&quot;当前已是最新版！&quot;)
.}
}
.else
.{
.tw(&quot;检查失败！&quot;)
.}
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=203');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断文本是否包含中文</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(id,&quot;text&quot;,a)

stobm(a,&quot;utf-8&quot;,b)

f(a==b)

{

tw(&quot;输入中文不包含&quot;)

}

else

{

tw(&quot;输入含有中文及中文标点&quot;)

}



__________________</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=204');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">每天限时体验一次</div></div></div><div class="mdui-card-content mdui-text-truncate">s mm=&quot;abc.txt&quot;
.这里设置保存路径，越隐蔽越好
s sj=60000
.这里是倒计时一分钟

t()
{
hs(&quot;http://cwayer.com&quot;,null,null,mao)
f(mao?&quot;四维&quot;)
{
sj(mao,&quot;报时: 现在是&quot;,&quot;日&quot;,gou)
ss(gou+&quot;日&quot;,gou)
}
else
{
time(&quot;m&quot;,m)
time(&quot;d&quot;,d)
ss(m+&quot;月&quot;+d+&quot;日&quot;,gou)
}
fr(mm,lai)
f(lai==gou)
{
tw(&quot;今天已体验过了&quot;)
end()
}
else
{
stop(sj)
fw(mm,gou)
tw(&quot;体验时间已到&quot;)
end()
}
}f(url3?&quot;成功&quot;)
{
tw(&quot;发表成功&quot;)
}
else
{
tw(&quot;发表失败&quot;)
}
}


注：sid是腾讯通用身份码，可以理解为有时效性可变动的密码，切勿泄漏自己的sid。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=205');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">状态栏推送通知</div></div></div><div class="mdui-card-content mdui-text-truncate">ftz(a,b,c,d)

.a为栏态栏显示的即时提醒
.b为通知栏的标题
.c为通知栏的内容
.d为点击后的连接地址

如：

t()
{
ftz(&quot;百度&quot;,&quot;百度&quot;,&quot;有新内容&quot;,&quot;http//:wap.baidu.com&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=206');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">密码登录实例</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(1,&quot;text&quot;,u)

f(u==&quot;&quot;)
{
tw(&quot;密码不能为空&quot;)
}
else f(u==&quot;123456&quot;)
.这是密码
{
tw(&quot;正确&quot;)
}
else
{
tw(&quot;密码错了&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=207');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">下拉菜单的实例</div></div></div><div class="mdui-card-content mdui-text-truncate">.以本软件为例，字体颜色更换
s wa=&quot;黑;红;绿;蓝&quot;
sl(wa,&quot;;&quot;,c)
uls(30,c)
.注：30是下拉菜单ID，以上放载入事件。

ug(30,&quot;selecteditem&quot;,b)
.获取下拉框参数

f(b==&quot;红&quot;)
.判断是否红色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ffff0a00&quot;)
}
else f(b==&quot;蓝&quot;)
.判断是否蓝色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ff001eff&quot;)
}
else f(b==&quot;黑&quot;)
.判断是否黑色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#f8000000&quot;)
}
else f(b==&quot;绿&quot;)
.判断是否绿色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ff00cc22&quot;)
}
.注：15是编辑框ID，以上放到下拉菜单事件选择项目事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=208');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">列表的写法</div></div></div><div class="mdui-card-content mdui-text-truncate">ula(a, 10=&quot;@1.png&quot;,5=&quot;你好&quot;,6=&quot;个人签名&quot;,-1=&quot;1&quot;,8=null)
ula(a, 10=&quot;@1.png&quot;,5=&quot;你好&quot;,6=&quot;个人签名&quot;,-1=&quot;1&quot;,8=null)
ula(a, 10=&quot;@1.png&quot;,5=&quot;你好&quot;,6=&quot;个人签名&quot;,-1=&quot;1&quot;,8=null)
ula(a, 10=&quot;@1.png&quot;,5=&quot;你好&quot;,6=&quot;个人签名&quot;,-1=&quot;1&quot;,8=null)
uls(1,a,&quot;a.iyu&quot;,-1,-2)
注：以上在载入事件
ulag(st_vW, -1, h)
注：以上是在列表点击按钮里写</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=209');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取SD卡根目录并显示在列表中</div></div></div><div class="mdui-card-content mdui-text-truncate">s ss=&quot;&quot;
.这是根目录
fl(ss,true,b)
for(c;b)
{
ula(a,2=&quot;@60a85caf970cd853ebf9529f4a46f42c.png&quot;,3=c)
}
fl(ss,false,b)
for(c;b)
{
ula(a,2=&quot;@79.png&quot;,3=c)
}
uls(8,a,&quot;a.iyu&quot;,&quot;100dp&quot;,-2)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=210');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">按返回键带弹窗实例</div></div></div><div class="mdui-card-content mdui-text-truncate">f(st_kC==4)
{
ufnsui()
{
s a=&quot;17301646&quot;

.这里是弹窗图片

s b=&quot;提示&quot;

.这里是弹窗标题

s nr=&quot;是否确认退出？&quot;

.这里是弹窗的内容，可以输入界面名直接弹出界面

s button=&quot;取消&quot;

s c=&quot;确认退出&quot;
utw(a,b,nr,c,button,false,a)

{

end()
}
else
{
}
}
}
else
{
}

//以上代码请放入：界面事件→按键按下事件</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=211');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">html标签大全</div></div></div><div class="mdui-card-content mdui-text-truncate">s a =&quot;(html)&lt;font color=&quot;red&quot;&gt;嘻&lt;/font&gt;&lt;font color=&quot;#FFA500&quot;&gt;嘻&lt;/font&gt;&lt;font color=&quot;yellow&quot;&gt;哈&lt;/font&gt;&lt;font color=&quot;green&quot;&gt;哈&lt;/font&gt;&lt;font color=&quot;blue&quot;&gt;走&lt;/font&gt;&lt;font color=&quot;123104238&quot;&gt;过&lt;/font&gt;&lt;font color=&quot;purple&quot;&gt;去&lt;/font&gt;&quot;
us(id,&quot;text&quot;,a)
us(id2,&quot;text&quot;,a)

//颜色表： 
//black
//gray
//blue
//green
//aqua
//red
//yellow
//white

//或者使用16进制颜色码或者10进制代码

蓝色下划线
 
s a =&quot;(html)嘻嘻&lt;a href=&quot;&quot;&gt;哈哈&lt;/a&gt;走过去&quot;
us(id,&quot;text&quot;,a)
us(id2,&quot;text&quot;,a)
//注：下划线的标签属于超链接，必须加上标签后面的href才行，否则显示不出来

字体放大

s a =&quot;(html)嘻嘻&lt;big&gt;哈哈&lt;/big&gt;走过去&quot;
us(id,&quot;text&quot;,a)
us(id2,&quot;text&quot;,a)

字体缩小

s a =&quot;(html)嘻嘻&lt;small&gt;哈哈&lt;/small&gt;走过去&quot;
us(id,&quot;text&quot;,a)
us(id2,&quot;text&quot;,a)

颜色名称及色样表

颜色输入blue等(蓝色)  
&lt;font color=&quot;blue&quot;&gt;嘻嘻&lt;/font&gt;
有的不可用，只能用16进制或10进制

颜色输入16进制(浅粉红)
 &lt;font color=&quot;#FFB6C1&quot;&gt;嘻嘻&lt;/font&gt;
 
参照下表：

颜色输入十进制(浅粉红) 
 &lt;font color=&quot;2696059423&quot;&gt;嘻嘻&lt;/font&gt;
注意要去掉下表里的逗号

 	颜色名	中文名称	

 	Hex RGB	十进制 Decimal	 

 	LightPink	浅粉红	#FFB6C1	255,182,193	 

 	Pink	粉红	#FFC0CB	255,192,203	 

 	Crimson	深红(猩红)	#DC143C	220,20,60	 

 	LavenderBlush	淡紫红	#FFF0F5	255,240,245	 

 	PaleVioletRed	弱紫罗兰红	#DB7093	219,112,147	 

 	HotPink	热情的粉红	#FF69B4	255,105,180	 

 	DeepPink	深粉红	#FF1493	255,20,147
	 
 	MediumVioletRed	中紫罗兰红	#C71585	199,21,133	 

 	Orchid	暗紫色(兰花紫)	#DA70D6	218,112,214	 

 	Thistle	蓟色	#D8BFD8	216,191,216	 
 	Plum	洋李色(李子紫)	#DDA0DD	221,160,221	 

 	Violet	紫罗兰	#EE82EE	238,130,238	 
 	Magenta	洋红(玫瑰红)	#FF00FF	255,0,255	 

 	Fuchsia	紫红(灯笼海棠)	#FF00FF	255,0,255	 

 	DarkMagenta	深洋红	#8B008B	139,0,139	 

 	Purple	紫色	#800080	128,0,128	
 
 	MediumOrchid	中兰花紫	#BA55D3	186,85,211	 

 	DarkViolet	暗紫罗兰	#9400D3	148,0,211	 

 	DarkOrchid	暗兰花紫	#9932CC	153,50,204	 

 	Indigo	靛青/紫兰色	#4B0082	75,0,130	 
 	BlueViolet	蓝紫罗兰	#8A2BE2	138,43,226	
 
 	MediumPurple	中紫色	#9370DB	147,112,219	 

 	MediumSlateBlue	中暗蓝色(中板岩蓝)	#7B68EE	123,104,238	 

 	SlateBlue	石蓝色(板岩蓝)	#6A5ACD	106,90,205

 	DarkSlateBlue	暗灰蓝色(暗板岩蓝)	#483D8B	72,61,139	 

 	Lavender	淡紫色(熏衣草淡紫)	#E6E6FA	230,230,250	 

 	GhostWhite	幽灵白	#F8F8FF	248,248,255	 

 	Blue	纯蓝	#0000FF	0,0,255	 

 	MediumBlue	中蓝色	#0000CD	0,0,205	
 
 	MidnightBlue	午夜蓝	#191970	25,25,112	 

 	DarkBlue	暗蓝色	#00008B  0,0,139	 

 	Navy	海军蓝	#000080	0,0,128	
 
 	RoyalBlue	皇家蓝/宝蓝	#4169E1	65,105,225	 

 	CornflowerBlue	矢车菊蓝	#6495ED
	100,149,237	 

 	LightSteelBlue	亮钢蓝	#B0C4DE	176,196,222	 

 	LightSlateGray	亮蓝灰(亮石板灰)	#778899	119,136,153	 

 	SlateGray	灰石色(石板灰)	#708090	112,128,144	 

 	DodgerBlue	闪兰色(道奇蓝)	#1E90FF	30,144,255	 

 	AliceBlue	爱丽丝蓝	#F0F8FF	240,248,255	 

 	SteelBlue	钢蓝/铁青	#4682B4	70,130,180	 

 	LightSkyBlue	亮天蓝色	#87CEFA	135,206,250	 

 	SkyBlue	天蓝色	#87CEEB	135,206,235	
 
 	DeepSkyBlue	深天蓝	#00BFFF	0,191,255	 

 	LightBlue	亮蓝	#ADD8E6	173,216,230	
 
 	PowderBlue	粉蓝色(火药青)	#B0E0E6	176,224,230	 

 	CadetBlue	军兰色(军服蓝)	#5F9EA0	95,158,160	 

 	Azure	蔚蓝色	#F0FFFF	240,255,255	
 
 	LightCyan	淡青色	#E0FFFF	224,255,255	 

 	PaleTurquoise	弱绿宝石	#AFEEEE	175,238,238	 

 	Cyan	青色	#00FFFF	0,255,255	 

 	Aqua	浅绿色(水色)	#00FFFF	0,255,255	
 
 	DarkTurquoise	暗绿宝石	#00CED1	0,206,209	 

 	DarkSlateGray	暗瓦灰色(暗石板灰)	#2F4F4F	47,79,79	 

 	DarkCyan	暗青色	#008B8B	0,139,139	 

 	Teal	水鸭色	#008080	0,128,128	 

 	MediumTurquoise	中绿宝石	#48D1CC	72,209,204	 

 	LightSeaGreen	浅海洋绿	#20B2AA	32,178,170	 

 	Turquoise	绿宝石	#40E0D0	64,224,208	 

 	Aquamarine	宝石碧绿	#7FFFD4	127,255,212	 

 	MediumAquamarine	中宝石碧绿	#66CDAA	102,205,170	 

 	MediumSpringGreen	中春绿色	#00FA9A	0,250,154	 

 	MintCream	薄荷奶油	#F5FFFA	245,255,250	 

 	SpringGreen	春绿色	#00FF7F	0,255,127	 

 	MediumSeaGreen	中海洋绿	#3CB371	60,179,113	 

 	SeaGreen	海洋绿	#2E8B57	46,139,87
	 
 	Honeydew	蜜色(蜜瓜色)	#F0FFF0	240,255,240	 

 	LightGreen	淡绿色	#90EE90	144,238,144	
 
 	PaleGreen	弱绿色	#98FB98	152,251,152	
 
 	DarkSeaGreen	暗海洋绿	#8FBC8F	143,188,143	
 
 	LimeGreen	闪光深绿	#32CD32	50,205,50	 

 	Lime	闪光绿	#00FF00	0,255,0	 
 	ForestGreen	森林绿	#228B22	34,139,34	 

 	Green	纯绿	#008000	0,128,0	
 
 	DarkGreen	暗绿色	#006400	0,100,0
	 
 	Chartreuse	黄绿色(查特酒绿)	#7FFF00	127,255,0	 

 	LawnGreen	草绿色(草坪绿_	#7CFC00	124,252,0	 

 	GreenYellow	绿黄色	#ADFF2F	173,255,47	
 
 	DarkOliveGreen	暗橄榄绿	#556B2F	85,107,47	
 
 	YellowGreen	黄绿色	#9ACD32	154,205,50
	 
 	OliveDrab	橄榄褐色	#6B8E23	107,142,35	
 
 	Beige	米色/灰棕色	#F5F5DC	245,245,220	
 
 	LightGoldenrodYellow	亮菊黄	#FAFAD2	250,250,210	 

 	Ivory	象牙色	#FFFFF0	255,255,240	
 
 	LightYellow	浅黄色	#FFFFE0	255,255,224	 

 	Yellow	纯黄	#FFFF00	255,255,0	
 
 	Olive	橄榄	#808000	128,128,0	
 
 	DarkKhaki	暗黄褐色(深卡叽布)	#BDB76B	189,183,107	 

 	LemonChiffon	柠檬绸	#FFFACD	255,250,205	 

 	PaleGoldenrod	灰菊黄(苍麒麟色)	#EEE8AA	238,232,170	 

 	Khaki	黄褐色(卡叽布)	#F0E68C	240,230,140	 

 	Gold	金色	#FFD700	255,215,0	 

 	Cornsilk	玉米丝色	#FFF8DC	255,248,220	 

 	Goldenrod	金菊黄	#DAA520	218,165,32	 

 	DarkGoldenrod	暗金菊黄	#B8860B	184,134,11	 

 	FloralWhite	花的白色	#FFFAF0	255,250,240	 

 	OldLace	老花色(旧蕾丝)	#FDF5E6	253,245,230	 

 	Wheat	浅黄色(小麦色)	#F5DEB3	245,222,179	

 	Moccasin	鹿皮色(鹿皮靴)	#FFE4B5	255,228,181

 	Orange	橙色	#FFA500	255,165,0
	 
 	PapayaWhip	番木色(番木瓜)	#FFEFD5	255,239,213	 

 	BlanchedAlmond	白杏色	#FFEBCD	255,235,205</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=212');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit调用浏览器打开网页</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a,&quot;ACTION&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,&quot;http://appv.pw/s/?u=2441807818&amp;m=Dr.anybaby.xkgzs&quot;)
uit(a, &quot;chooser&quot;, &quot;选择浏览器&quot;)

调用浏览器打开网页（支持自带浏览器，支持所有浏览器），比hws好用多了。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=213');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit调用应用市场给本软件评分</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a,&quot;ACTION&quot;, &quot;Intent.ACTION_VIEW&quot;)
sit(a,&quot;data&quot;,&quot;market://details?id=Dr.ibook.xkgzs&quot;)
uit(a, &quot;chooser&quot;, &quot;选择操作方式&quot;)
必须在应用市场有你的软件，否则会提示没有该应用。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=214');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">图片无限旋转动画</div></div></div><div class="mdui-card-content mdui-text-truncate">dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, &quot;duration&quot;, 3000)
us(图片id, &quot;dh&quot;, dh)
dhon(dh)
{
us(图片id, &quot;dh&quot;, dh)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=215');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hs获取网页的新功能——代理ip</div></div></div><div class="mdui-card-content mdui-text-truncate">//带自动设置cookie方式获取网页，并记录当前网页的Cookie，并设置Header头:（可设置多条，以“||”隔开）文件头包括了Cookie，User-Agent设备型号，设置连接超时，设置接收超时，设置代理IP。
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = &quot;http://wap.baidu.com/&quot;
hs(a, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, null, true, &quot;User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||accept=*/*||accept-language=zh-CN&quot;, 20000, 20000, &quot;10.0.0.172:80&quot;, b)
syso(b)
}

效果不明觉厉。简单点说就是。如果你有很多代理IP，你就能做一个cc攻击（效率低下），但做一个网页刷访问还是不错的，都是模拟真实用户访问的。

比如这样的，20000是访问超时时间也就是20秒，最好设置10000-20000左右最好，怎么无限更换代理IP呢？你只需要把很多IP分割为数组，如：

sl(&quot;109.22.33.58:80#36.69.52.33:80&quot;,&quot;#&quot;,ok)
然后for循环读取ok，再循环hs访问即可（不要做坏事哈）

t()
{
hs(&quot;网址&quot;,null, &quot;utf-8&quot;, null, true, null, 20000, 20000, &quot;10.0.0.172:80&quot;, b)
syso(b)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=216');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取imei进行计算密码</div></div></div><div class="mdui-card-content mdui-text-truncate">通常如果获取imei来计算一些密码，直接simei(imei)即可，但如果出现因为字母，那么计算就会出问题了。（有部分手机imei是有英文字符的）

比如
simei(imei)
s(imei/2,ok)
tw(ok)

如果imei有英文字母，这个计算就不成立了，也就出错！怎么办呢？很简单，用正则表达式替换下字符即可，示例：

simei(imei)
sr(imei,&quot;[a-z]&quot;,&quot;9&quot;,imei)
s(imei/2,ok)
tw(ok)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=217');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">搜索列表关键字的实现方法</div></div></div><div class="mdui-card-content mdui-text-truncate">sl(&quot;蛋疼;鸡肋;鸡蛋;鸡皮疙瘩;蛋糕&quot;,&quot;;&quot;,so)
//分割一段内容为数组
for(k;so)
{
//循环判断是否包含需要搜索的内容
f(k?&quot;蛋&quot;)
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(k)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=218');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit调用其他程序分享文件</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)
sit(a, &quot;type&quot;, &quot;*/*&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.STREAM&quot;,&quot;/sdcard/iApp/Userimg/icon_iapp.png&quot;)
uit(a, &quot;chooser&quot;, &quot;分享&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=219');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit调用点击添加qq群</div></div></div><div class="mdui-card-content mdui-text-truncate">s qun=517494446
//群号
ss(&quot;mqqapi://card/show_pslcard?src_type=internal&amp;version=1&amp;uin=&quot;+qun+&quot;&amp;card_type=group&amp;source=qrcode&quot;,joinqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,joinqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=220');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">二维码生成</div></div></div><div class="mdui-card-content mdui-text-truncate">.......将以下代码放到按钮控件的点击事件中
s bi=3
.这个是编辑框ID，用于输入内容
s ti=2
.这个是图像控件ID，用于显示二维码
us(ti,&quot;height&quot;,&quot;125dp&quot;)
us(ti,&quot;width&quot;,&quot;125dp&quot;)
ug(bi,&quot;text&quot;,ug)
f(ug!=&quot;&quot;)
{
us(ti,&quot;visibility&quot;,&quot;0&quot;)
uqr(ug,400,ss.uqr)
us(ti,&quot;src&quot;,ss.uqr)
.生成二维码
tw(&quot;点击二维码可保存&quot;)
}
else
{
tw(&quot;请不要留空&quot;)
us(ti,&quot;visibility&quot;,&quot;8&quot;)
}



.......将以下代码放到二维码图像的点击事件中
f(ss.uqr==null)
{
tw(&quot;亲，你还没有生成二维码哦~&quot;)
}
else
{
time(4,tm)
ss(&quot;yingzi&quot;+tm+&quot;.png&quot;,jg)
ss(&quot;图像已保存至根目录！\n\n名称：&quot;+jg,utw)
bfs(ss.uqr,jg)
utw(&quot;&quot;,&quot;保存成功&quot;,utw,&quot;知道了&quot;,false,v)
{
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=221');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">特殊字体生成</div></div></div><div class="mdui-card-content mdui-text-truncate">s i=1
.编辑框ID

s nr1=&quot;[??&quot;
s nr2=&quot;??????&quot;
s nr3=&quot;????]&quot;
.以上分别是开头字符，中间循环符，结尾字符
ug(i,&quot;text&quot;,ug)
slg(ug,slg)
.获取内容及长度
s w=0
s j=&quot;&quot;
.循环初始值
f(ug==&quot;&quot;)
{
tw(&quot;先说点什么吧...&quot;)
}
else
{
t()
{
w(1==1)
{
s(w+1,s)
ssg(ug,w,s,ssg)
.截取字符
ss(j+ssg+nr2,j)
f(s==slg)
{
ss(nr1+j+nr3,end)
.变量相加
ufnsui()
{
utw(null,&quot;生成结果&quot;,end,&quot;复制&quot;,&quot;不&quot;,false,v)
{
sxb(j)
tw(&quot;内容已复制&quot;)
}
else
{
}
}
endcode
}
s(s+0,w)
.重新初始化循环值
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=222');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">随机语录</div></div></div><div class="mdui-card-content mdui-text-truncate">.把代码放到载入事件中

s nr=&quot;昨天永远是历史，明天永远是未知，今天就在脚下|影子是最忠诚的陪伴，没有背叛，没有谎言|趁年轻，做自己想做的事|爱笑的人，运气不会太差&quot;
.随机语录内容
sl(nr,&quot;|&quot;,sl)
.分割语录
sran(0,3,sran)
sgsz(sl,sran,sgsz)
.随机访问0～3的语录内容
us(3,&quot;text&quot;,sgsz)
.写入文本控件</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=223');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">退出软件随机动画</div></div></div><div class="mdui-card-content mdui-text-truncate">.把代码放到『按键按下事件』或者『按键释放事件』里

f(st_kC==4)
{
sran(0,11,sran)
.生产随机范围数
utw(null,&quot;注意&quot;,&quot;是否退出软件？&quot;,&quot;退出&quot;,&quot;不&quot;,false,v)
{
end()
lan(sran)
endcode
.结束执行
}
else
{
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=224');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">早晚换图片</div></div></div><div class="mdui-card-content mdui-text-truncate">.将代码放到载入事件中

s id=1
.线性布局ID
s a=&quot;白天的图片&quot;
s b=&quot;晚上的图片&quot;
us(id,&quot;width&quot;,&quot;-1&quot;)
us(id,&quot;height&quot;,&quot;-1&quot;)
.设置全局背景，当然可以直接在属性里设置。
time(3,time)
ssg(time,0,2,ssg)
.截取时间
f(ssg&gt;=7&amp;&amp;ssg&lt;=18)
{
.判断小时是否大于7且小于18
us(id,&quot;background&quot;,a)
}
else
{
.反向执行
us(id,&quot;background&quot;,b)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=225');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">表白打字特效</div></div></div><div class="mdui-card-content mdui-text-truncate">s q2=&quot;可能遇见你，对我来说是最大的幸福。有了你，我的生涯变的无穷广阔，有了你，世界变得如斯迷人。你是世界，世界是你。我乐意用本人的心，好好的陪着你，爱着你。陪你到你想去的处所，居心走完咱们人生的余下的旅程。在将来的日子里，兴许什么都无奈断定，但独一能够肯定的是，我爱的人是你，无论当初仍是未来，我想我这里都会是你最暖和的港湾，都是为你遮风避雨的城墙。&quot;

s id=这里填写编辑框或者文本控件的ID
slg(q2,q3)
s+(1,q3)

t()
{
s q=1
s q1=w
s q4=1
s q6=0
w(q==1)
{
ssg(q2,q6,q4,q5)
ufnsui()
{
ss(q5+&quot;_&quot;,q5)

us(id,&quot;text&quot;,q5)
}
s(q4+1,q4)
f(q4==q3)

{

s q=0

ufnsui()

{

.这里写打完后的执行代码

}

}

stop(200)
.调整打印速度
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=226');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">列表利用for循环显示内容</div></div></div><div class="mdui-card-content mdui-text-truncate">s a=&quot;小白；小黑；小龙；哈啊；是是是；嘻嘻嘻&quot;

//a是要循环的内容用特殊符号&quot;；&quot;隔开

s b=&quot;；&quot;
sl(a,b,c)
for(cc;c)
{
ula(v,1=null,2=c)

}
uls(1,v,&quot;l.iyu&quot;,-2,-2)
// 1是列表的ID
//不懂可以看看视频教程</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=227');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">倒计时</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=2
t()
{
ss(&quot;正在倒计时60秒&quot;,b)
us(id,&quot;text&quot;,b)
s a=60
.60秒
for(1;60)
{
f(a==1)
.a倒计时到1时执行的代码
{
.这里还可以加其代码
.可以加倒计时完执行的代码
ufnsui()
{
us(id,&quot;text&quot;,&quot;倒计时完成&quot;)
}
endcode
}
s(a-1,a)
.每循环一次a减1
ss(&quot;正在倒计时&quot;+a+&quot;秒&quot;,c)
ufnsui()
{
us(id,&quot;text&quot;,c)
}
stop(1000)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=228');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">远程更新示例</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
hs(&quot;http://网站&quot;,a)
syso(a)
sj(a,&quot;@&quot;,&quot;@&quot;,b)
.截取版本号
sj(a,&quot;『&quot;,&quot;』&quot;,nr)
.截取更新内容
sj(a,&quot;下载地址《&quot;,&quot;》&quot;,xz)
.截取下载地址（直链）
sj(xz,&quot;htt&quot;,&quot;apk&quot;,xz)
.防止截取出错，
ss(&quot;htt&quot;+xz+&quot;apk&quot;,xz)
syso(xz)

f(b!=1.0)
.判断版本是否有更新（比如：网站上是1.1，提示有更新）
{
ufnsui()
{
utw(&quot;@iapp6673.png&quot;,&quot;更新内容&quot;,nr,&quot;下载更新&quot;,&quot;取消&quot;,true,f)
{
t()
{
hd(xz,&quot;%文件夹/asb.apk&quot;,true,b)
.下载到指定文件夹并重名
f(b==0)
{
ufnsui()
{
tw(&quot;下载完成&quot;)
fo(&quot;%文件夹/asb.apk&quot;)
.下载完成后打开安装
}
}

}
}
else
{

}
}
}
else
{

}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=229');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">模仿打字和跑马灯特效</div></div></div><div class="mdui-card-content mdui-text-truncate">s q2=&quot;这里输入文字东方vv高给个红包v该好好v刚刚好v哈哈哈该sgggh风风光光滚滚滚还好还好哈哈哈哈哈哈喝喝&quot;
s id=这里输入文本ID

us(id,&quot;singleline&quot;,&quot;true&quot;)
swh(&quot;w&quot;,w)
slg(q2,q3)
t()
{
s q=1
s q1=w
s q4=1
s q6=0
ufnsui()
{
us(id,&quot;x&quot;,w)
}
w(q==1)
{
ssg(q2,q6,q4,q5)
ufnsui()
{
us(id,&quot;text&quot;,q5)
us(id,&quot;x&quot;,q1)
}

f(q4==q3)
{
s q4=q3
}
else
{
s(q4+1,q4)
}


s(q1-15,q1)
.15是调跳出速度，使用全中文数值调大，全英文调小


stop(200)
f(q1&lt;10)
{
s q=0
w(q==0)
{
ssg(q2,q6,q3,q7)
ufnsui()
{
us(id,&quot;text&quot;,q7)
}

s(q6+1,q6)
f(q6==q3)
{
ufnsui()
{
us(id,&quot;text&quot;,&quot;&quot;)
s q1=w
s q4=1
s q6=0
us(id,&quot;x&quot;,w)
s q=1
}
}
stop(200)
}
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=230');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断是否有网</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
hs(&quot;http://m.baidu.com&quot;,a)
f(a==null)
{
ufnsui()
{
tw(&quot;无网络或网络不稳&quot;)
}
}
else
{
.这里写有网时执行的代码
}

}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=231');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">qq获取头像、名称等接口</div></div></div><div class="mdui-card-content mdui-text-truncate">获取QQ头像的地址：
http://q2.qlogo.cn/headimg_dl?bs=qq&amp;dst_uin=474581976&amp;spec=100

例如QQ号474581976的空间头像的地址是：
http://qlogo1.store.qq.com/qzone/474581976/474581976/100

获取QQ秀图片地址：
http://qqshow-user.tencent.com/474581976/22/00/1.gif?fr=mobileqq

强制聊天链接：
http://wpa.qq.com/msgrd?v=3&amp;uin=474581976&amp;site=qq&amp;menu=yes

获取QQ网名和QQ空间头像的接口
http://users.qzone.qq.com/fcg-bin/cgi_get_portrait.fcg?uins=474581976

获取QQ昵称
http://r.pengyou.com/fcg-bin/cgi_get_portrait.fcg?uins=834897931</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=232');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">按钮点击调用侧滑</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(2,&quot;isdraweropen&quot;,b)
.2是侧滑的ID
f(b==true)
{
us(2,&quot;closedrawer&quot;,&quot;start&quot;)

}
else
{
us(2,&quot;opendrawer&quot;,&quot;start&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=233');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit跳转淘宝搜索</div></div></div><div class="mdui-card-content mdui-text-truncate">s pay=&quot;taobao://s.taobao.com/search?&quot;
sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,pay)
uit(a, &quot;chooser&quot;, &quot;跳转淘宝搜索&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=234');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit调用发短信</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;,&quot;android.intent.action.SENDTO&quot;) 


sit(a,&quot;type&quot;,&quot;vnd.android-dir/mms-sms&quot;)


sit(a, &quot;data&quot;, &quot;smsto:10086&quot;) 


sit(a,&quot;extra&quot;,&quot;sms_body&quot;,&quot;短信内容&quot;)


uit(a, &quot;chooser&quot;, &quot;发短信&quot;)
直接发短信&lt;由于防止恶意发短信不提供直接发短信方法&gt;</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=235');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit直接调用QQ分享图片</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)

sit(a, &quot;type&quot;, &quot;image/jpeg&quot;)

sit(a,&quot;classname&quot;,&quot;com.tencent.mobileqq&quot;, &quot;com.tencent.mobileqq.activity.JumpActivity&quot;)

sit(a, &quot;extra&quot;, &quot;android.intent.extra.STREAM&quot;,&quot;/sdcard/lunbo.png&quot;)

uit(a, &quot;chooser&quot;, &quot;分享图片&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=236');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit保存图片到QQ收藏</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)

sit(a, &quot;type&quot;, &quot;image/jpeg&quot;)

sit(a,&quot;classname&quot;,&quot;com.tencent.mobileqq&quot;, &quot;cooperation.qqfav.widget.QfavJumpActivity&quot;)

sit(a, &quot;extra&quot;, &quot;android.intent.extra.STREAM&quot;,&quot;/sdcard/lunbo.png&quot;)

uit(a, &quot;chooser&quot;, &quot;收藏图片&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=237');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit调用支付宝</div></div></div><div class="mdui-card-content mdui-text-truncate">s zfb=&quot;alipayqr://platformapi/startapp?saId=10000007&amp;clientVersion=3.7.0.0718&amp;qrcode=&quot;

ss(zfb+&quot;https://qr.alipay.com/fkx08372xrgzmjxuveshx6f&quot;,bao)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)

sit(a,&quot;data&quot;,bao)
uit(a, &quot;chooser&quot;, &quot;支付宝捐款&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=238');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit调用系统软件分享图片实例</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)

sit(a, &quot;type&quot;, &quot;*/*&quot;)

sit(a, &quot;extra&quot;, &quot;android.intent.extra.STREAM&quot;,&quot;/sdcard/iApp/Userimg/icon_iapp.png&quot;)

.这是图片路径
uit(a, &quot;chooser&quot;, &quot;分享&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=239');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit调用系统软件分享软件实例</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)
sit(a, &quot;type&quot;, &quot;application/vnd.android.package-archive&quot;)

sit(a, &quot;extra&quot;, &quot;android.intent.extra.STREAM&quot;,&quot;/sdcard/iapp.apk&quot;)

.这个是软件路径&quot;/sdcard/iapp.apk&quot;，
uit(a, &quot;chooser&quot;, &quot;分享软件&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=240');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">字体无限变色</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=这里是文本控件id

t()
{
s a=1
.变色暂停的时间
s sj=100
.w无限循环
w(a==1)
{
.随机字体颜色数值
sran(100000,800000,sjs)
ss(&quot;-&quot;+sjs,sjs)
ufnsui()
{
us(id, &quot;textcolor&quot;, sjs)
}
stop(sj)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=241');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit跳转个人名片</div></div></div><div class="mdui-card-content mdui-text-truncate">s url=&quot;mqqapi://card/show_pslcard?src_type=internal&amp;source=sharecard&amp;version=1&amp;uin=834897931&quot;

sit(a, &quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a, &quot;data&quot;, url)
uit(a, &quot;chooser&quot;, &quot;跳转名片&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=242');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit跳转到加好友</div></div></div><div class="mdui-card-content mdui-text-truncate">s url = &quot;mqqapi://card/show_pslcard?src_type=internal&amp;source=sharecard&amp;version=1&amp;uin=&quot;
ss(url+&quot;834897931&quot;,url)
.改成好友QQ号
sit(a, &quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a, &quot;data&quot;, url)
uit(a, &quot;chooser&quot;, &quot;跳转到加好友&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=243');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit跳转到聊天</div></div></div><div class="mdui-card-content mdui-text-truncate">s url = &quot;mqqwpa://im/chat?chat_type=wpa&amp;version=1&amp;uin=&quot;
ss(url+&quot;834897931&quot;,url)
.改成聊天QQ号
sit(a, &quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a, &quot;data&quot;, url)
uit(a, &quot;chooser&quot;, &quot;跳转到聊天&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=244');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit跳转到群</div></div></div><div class="mdui-card-content mdui-text-truncate">s url = &quot;mqqapi://card/show_pslcard?src_type=internal&amp;version=1&amp;card_type=group&amp;source=qrcode&amp;uin=&quot;
ss(url+&quot;&quot;,url)
.&quot;&quot;加上QQ群号
sit(a, &quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a, &quot;data&quot;, url)
uit(a, &quot;chooser&quot;, &quot;跳转到群&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=245');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">弹窗</div></div></div><div class="mdui-card-content mdui-text-truncate">s a=&quot;@icon.png&quot;
.这里是弹窗图片
s b=&quot;登陆&quot;
.这里是弹窗标题
s nr=&quot;mian.iyu&quot;
.这里是弹窗的内容，可以输入界面名直接弹出界面
s button=&quot;取消&quot;
utw(a,b,nr,button,false,v)
{
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=246');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">特殊字体转换代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s p=&quot;&quot;
ug(6,&quot;text&quot;,text)
.获取编辑框内容
slg(text,l)
s i=0
f(l!=0)
{
t()
{
w(i&lt;l)
{
s(i+1,o)
ssg(text,i,o,txt)
s(i+1,i)
ss(p+txt+&quot; ????????? ?? ??&quot;,p)
.可以修改你喜欢的特殊符号
ufnsui()
{
us(7,&quot;text&quot;,p)
.写入编辑框或文本控件
stop(300)
}
}
}
}
else
{
tw(&quot;请输入文本&quot;)
}
效果：i ????????? ?? ??a ????????? ?? ??p ????????? ?? ??p ????????? ?? ??学 ????????? ?? ??习 ????????? ?? ??助 ????????? ?? ??手 ????????? ?? ??</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=247');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">弹窗2</div></div></div><div class="mdui-card-content mdui-text-truncate">s a=&quot;17301646&quot;
.这里是弹窗图片
s b=&quot;提示&quot;
.这里是弹窗标题
s nr=&quot;是否确认退出？&quot;
.这里是弹窗的内容，可以输入界面名直接弹出界面
s button=&quot;取消&quot;
s c=&quot;确认退出&quot;
utw(a,b,nr,c,button,false,a)
{
end()
}
else
{
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=248');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">密码登录实例</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(1,&quot;text&quot;,u)

f(u==&quot;&quot;)
{
tw(&quot;密码不能为空&quot;)
}
else f(u==&quot;123456&quot;)

.这是密码
{

tw(&quot;登录成功&quot;)

uigo(&quot;a&quot;)

.这是密码正确后登录的页面
}

else

{

tw(&quot;密码错了&quot;)

}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=249');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">下拉菜单的实例</div></div></div><div class="mdui-card-content mdui-text-truncate">.以本软件为例，字体颜色更换
s wa=&quot;黑;红;绿;蓝&quot;
sl(wa,&quot;;&quot;,c)
uls(30,c)
.注：30是下拉菜单ID，以上放载入事件。


ug(30,&quot;*editem&quot;,b)
.获取下拉框参数

f(b==&quot;红&quot;)
.判断是否红色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ffff0a00&quot;)
}
else f(b==&quot;蓝&quot;)
.判断是否蓝色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ff001eff&quot;)
}
else f(b==&quot;黑&quot;)
.判断是否黑色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#f8000000&quot;)
}
else f(b==&quot;绿&quot;)
.判断是否绿色执行以下代码
{
us(15,&quot;textcolor&quot;,&quot;#ff00cc22&quot;)
}
.注：15是编辑框ID，以上放到下拉菜单事件选择项目事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=250');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">更新实例</div></div></div><div class="mdui-card-content mdui-text-truncate">t()

{

stop(1000)

s wzb=&quot;https://我的磨地址&quot;
.这个是我的磨地址
hs(wzb,n)

f(n==null)

{

ufnsui()

{

tw(&quot;无网络或网络不稳定&quot;)

}

}

else

{

sj(n,&quot;更新《&quot;,&quot;》更新&quot;,g)

.截取版本号，比如：1.5
sj(n,&quot;公告@《&quot;,&quot;》@公告&quot;,w)
.这是截取公告内容

sr(w,&quot;&lt;br /&gt;&quot;,&quot;\n&quot;,ww)

sj(n,&quot;下载@@《&quot;,&quot;》@@下载&quot;,xz)
sj(xz,&quot;&lt;a href=&quot;&quot;,&quot;&quot;&gt;&quot;,xzzz)

.截取下载地址，我的磨下载地址要加这个
s x=&quot;1.5&quot;

f(x&lt;g)

{


ufnsui()

{

.下面是弹窗
s a=&quot;17301646&quot;

.这里是弹窗图片

s b=&quot;更新提示&quot;

.这里是弹窗标题

s nr=ww

.这里是弹窗的内容，可以输入界面名直接弹出界面

s button=&quot;取消&quot;

s c=&quot;确认更新&quot;

utw(a,b,nr,c,button,false,a)

{

hws(xzzz)

.下载
}

else

{
}

}

}

else

{

}

}

}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=251');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">列表的写法</div></div></div><div class="mdui-card-content mdui-text-truncate">ula(a, 10=&quot;@1.png&quot;,5=&quot;你好&quot;,6=&quot;个人签名&quot;,-1=&quot;1&quot;,8=null)
ula(a, 10=&quot;@1.png&quot;,5=&quot;你好&quot;,6=&quot;个人签名&quot;,-1=&quot;1&quot;,8=null)
ula(a, 10=&quot;@1.png&quot;,5=&quot;你好&quot;,6=&quot;个人签名&quot;,-1=&quot;1&quot;,8=null)
ula(a, 10=&quot;@1.png&quot;,5=&quot;你好&quot;,6=&quot;个人签名&quot;,-1=&quot;1&quot;,8=null)
uls(1,a,&quot;a.iyu&quot;,-1,-2)
注：以上在载入事件
ulag(st_vW, -1, h)
注：以上是在列表点击按钮里写</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=252');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取SD卡根目录并显示在列表中</div></div></div><div class="mdui-card-content mdui-text-truncate">s ss=&quot;&quot;
.这是根目录
fl(ss,true,b)
for(c;b)
{
ula(a,2=&quot;@60a85caf970cd853ebf9529f4a46f42c.png&quot;,3=c)
}
fl(ss,false,b)
for(c;b)
{
ula(a,2=&quot;@79.png&quot;,3=c)
}
uls(8,a,&quot;a.iyu&quot;,&quot;100dp&quot;,-2)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=253');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">随机字体颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">s id=这里是文本控件id

t()
{
s a=1
.变色暂停的时间
s sj=100
.w无限循环
w(a==1)
{
.随机字体颜色数值
sran(100000,800000,sjs)
ss(&quot;-&quot;+sjs,sjs)
us(id, &quot;textcolor&quot;, sjs)
stop(sj)
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=254');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">进度的参数</div></div></div><div class="mdui-card-content mdui-text-truncate">s jd=&quot;progress&quot;

.这是进度的参数

s id=.这里是进度条ID
t()
{
us(id,jd,1)
s a=1

s b=100

w(100&gt;0)

{

ug(id,jd,pp)
s+(pp,1,ppk)

f(pp==99)

{

uigo(&quot;a1.iyu&quot;)

end()
}
us(id,jd,ppk)
stop(20)

}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=255');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">按返回键带弹窗实例</div></div></div><div class="mdui-card-content mdui-text-truncate">.放在按键按下事件
f(st_kC==4)
{
ufnsui()
{
s a=&quot;17301646&quot;

.这里是弹窗图片

s b=&quot;提示&quot;

.这里是弹窗标题

s nr=&quot;是否确认退出？&quot;

.这里是弹窗的内容，可以输入界面名直接弹出界面

s button=&quot;取消&quot;

s c=&quot;确认退出&quot;
utw(a,b,nr,c,button,false,a)

{

end()
}
else
{
}
}
}
else
{
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=256');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">按两次返回键退出</div></div></div><div class="mdui-card-content mdui-text-truncate">f(st_kC==4)
{
f(sss.exit==null)
{
sss exit=0
tw(&quot;再按一次退出程序&quot;,0)
t()
{
stop(600)
sss exit=null
}
}
else
{
end()
}
}
//以上代码请放入：界面事件→按键按下事</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=257');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">字体转换语音实例代码</div></div></div><div class="mdui-card-content mdui-text-truncate">ug(id,&quot;text&quot;,a)

.输入编辑框ID
f(a==&quot;&quot;)

{

tw(&quot;请输入文字&quot;)

}

else

{

stobm(a,&quot;utf-8&quot;,a)

sr(a,&quot; &quot;,&quot;&quot;,a)

t()

{

ss(&quot;http://tts.baidu.com/text2audio?ie=UTF-8&amp;lan=zh&amp;text=&quot;+a,a)



ufnsui()

{

tw(&quot;下载中...&quot;,0)

}



hd(a,&quot;%iappsj/转语音/转换后.mp3&quot;,true,b)



f(b==0)

{



ufnsui()

{

tw(&quot;已保存到根目录的%iappsj/转换后目录里面&quot;,0)

}

bfm(&quot;%iappsj/转语音/转换后.mp3&quot;,c)

bfms(c,&quot;st&quot;)

}



}



}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=258');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">浏览器进度</div></div></div><div class="mdui-card-content mdui-text-truncate">.放到浏览器事件的加载过程进度改变中
f(st_nS == 100)
{
ug(10,&quot;title&quot;,a)
//10为浏览器id
us(7,&quot;text&quot;,a)
//7为文本id
}
else
{
ss(&quot;正在加载网页..(&quot;+ st_nS +&quot;)&quot;,a)
us(7,&quot;text&quot;,a)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=259');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">判断列表是否滑动到底部</div></div></div><div class="mdui-card-content mdui-text-truncate">f(st_vT==0)

{

endcode

}

//列表可见项目为0时停止执行

f(ss.gd==&quot;true&quot;)

{

endcode

}

//判断是否以提醒过

s(st_bT-st_vT,kj)

f(st_fM==kj)

{

//以滚动到底部执行的事件

ss gd=&quot;true&quot;

tw(&quot;已经到底了，没有更多啦！&quot;,0)

}



//以上代码放到列表的 控件事件→触屏滚动事件→滚动</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=260');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用浏览器打开页（非hws）</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a,&quot;ACTION&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,&quot;http://appv.pw&quot;)
uit(a, &quot;chooser&quot;, &quot;选择浏览器&quot;)

调用浏览器打开网页（支持自带浏览器，支持所有浏览器），比hws好用多了。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=261');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用应用市场给本软件评分</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a,&quot;ACTION&quot;, &quot;Intent.ACTION_VIEW&quot;)
sit(a,&quot;data&quot;,&quot;market://details?id=com.iapr&quot;)
uit(a, &quot;chooser&quot;, &quot;选择操作方式&quot;)

必须在应用市场有你的软件，否则会提示没有该应用。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=262');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">图片无限旋转动画</div></div></div><div class="mdui-card-content mdui-text-truncate">dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, &quot;duration&quot;, 3000)
us(图片id, &quot;dh&quot;, dh)
dhon(dh)
{
us(图片id, &quot;dh&quot;, dh)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=263');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hs获取网页的新功能-代理IP</div></div></div><div class="mdui-card-content mdui-text-truncate">来看看 手册的介绍
//带自动设置cookie方式获取网页，并记录当前网页的Cookie，并设置Header头:（可设置多条，以“||”隔开）文件头包括了Cookie，User-Agent设备型号，设置连接超时，设置接收超时，设置代理IP。
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = &quot;http://wap.baidu.com/&quot;
hs(a, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, null, true, &quot;User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||accept=*/*||accept-language=zh-CN&quot;, 20000, 20000, &quot;10.0.0.172:80&quot;, b)
syso(b)
}

效果不明觉厉。简单点说就是。如果你有很多代理IP，你就能做一个cc攻击（效率低下），但做一个网页刷访问还是不错的，都是模拟真实用户访问的。

比如这样的，20000是访问超时时间也就是20秒，最好设置10000-20000左右最好，怎么无限更换代理IP呢？你只需要把很多IP分割为数组，如：

sl(&quot;109.22.33.58:80#36.69.52.33:80&quot;,&quot;#&quot;,ok)
然后for循环读取ok，再循环hs访问即可（不要做坏事哈）

t()
{
hs(&quot;网址&quot;,null, &quot;utf-8&quot;, null, true, null, 20000, 20000, &quot;10.0.0.172:80&quot;, b)
syso(b)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=264');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给按钮加触摸时的深色 方法</div></div></div><div class="mdui-card-content mdui-text-truncate">按钮控件又或者是文本控件，线性布局等，只要设置了背景颜色不是白色透明，比如绿色，那么点击时的深色颜色就没有了。

其实特别简单的做法就是，先给按钮套一个线性布局，设置线性布局背景为绿色，按钮背景为透明。再给按钮加个点击事件试试看！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=265');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获取imei进行计算密码</div></div></div><div class="mdui-card-content mdui-text-truncate">通常如果获取imei来计算一些密码，直接simei(imei)即可，但如果出现因为字母，那么计算就会出问题了。（有部分手机imei是有英文字符的）

比如
simei(imei)
s(imei/2,ok)
tw(ok)

如果imei有英文字母，这个计算就不成立了，也就出错！怎么办呢？很简单，用正则表达式替换下字符即可，示例：

simei(imei)
sr(imei,&quot;[a-z]&quot;,&quot;9&quot;,imei)
s(imei/2,ok)
tw(ok)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=266');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">搜索列表关键字的实现方法</div></div></div><div class="mdui-card-content mdui-text-truncate">sl(&quot;蛋疼;鸡肋;鸡蛋;鸡皮疙瘩;蛋糕&quot;,&quot;;&quot;,so)
//分割一段内容为数组
for(k;so)
{
//循环判断是否包含需要搜索的内容
f(k?&quot;蛋&quot;)
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(k)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=267');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">调用其他程序分享文件代码</div></div></div><div class="mdui-card-content mdui-text-truncate">sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)
sit(a, &quot;type&quot;, &quot;*/*&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.STREAM&quot;,&quot;/sdcard/iApp/Userimg/icon_iapp.png&quot;)
uit(a, &quot;chooser&quot;, &quot;分享&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=268');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">us设置滑动侧滑窗体里控件属性</div></div></div><div class="mdui-card-content mdui-text-truncate">在有滑动窗体或者侧滑窗体的时候需要加个判断什么的，比如判断网络是否连接，需要通过us设置文字来显示，但是直接在mian界面载入事件，比如这样：

us(a.2,&quot;text&quot;,&quot;有网络&quot;)

你会发现没有任何效果，因为界面无法交互，但你只需要把代码放在 “界面载入完毕事件” 就行了。因为这个事件界面可以交互。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=269');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击取消编辑框获得焦点</div></div></div><div class="mdui-card-content mdui-text-truncate">编辑框获得焦点就是编辑框点击后的光标效果，默认只要点击了编辑框，除非退出再进，否则是无法取消掉光标的，这时候就需要代码来设置一下。

us(2,&quot;focusable&quot;,false)
//设置id为2编辑框不获得焦点

可以放在返回事件等等，按一次返回取消掉获得焦点，不过这样后编辑框就无法点击了，怎么办呢？很简单，让编辑框再可以获得焦点即可。代码如下

us(2,&quot;focusable&quot;,true)
us(2,&quot;focusableintouchmode&quot;,true)

注意的是；必须放在编辑框的触屏监听事件！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=270');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">添加点击菜单时的选项</div></div></div><div class="mdui-card-content mdui-text-truncate">代码如下：

case 选择A:
tw(&quot;A&quot;)
break
case 选择B:
tw(&quot;B&quot;)
break
case 选择C:
tw(&quot;C&quot;)
break
default:
tw(&quot;载入成功&quot;)
break

其中，选择A等是标题，tw是点击后的事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=271');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">列表里设置背景圆角参考iApc</div></div></div><div class="mdui-card-content mdui-text-truncate">参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,&quot;background&quot;,&quot;#336699&quot;)

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,&quot;#336699&quot;,yes)
us(ok,&quot;background&quot;,yes)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=272');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">下载文件简单代码</div></div></div><div class="mdui-card-content mdui-text-truncate">t()
{
hd(&quot;http://flmle.com/ok.apk&quot;,&quot;iApp/ok.apk&quot;,true,ok)
//iApp/ok是保存路径，true是如果存在则覆盖

f(ok==&quot;0&quot;)
{
ufnsui()
{
tw(&quot;下载成功&quot;)
}
}
else
{
ufnsui()
{
tw(&quot;下载失败&quot;)
}
}
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=273');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">深度解析sss全局变量</div></div></div><div class="mdui-card-content mdui-text-truncate">iAPP2.0最棒的改变莫过于全局变量了。因为全局变量的存在我们可以把很多原来需要写很多都东西最简化。但很多小白并不懂全局变量的使用。全局变量能做什么呢？比如视频播放器，点击一个视频就跳转到界面播放该视频！在很多方面都必须用的到的东西。

首先来看看s变量：
s ok=&quot;小白&quot;
再看看全局变量：
sss ok=&quot;小白&quot;

全局变量的作用是传递数据，比如有些小白不会使用的。点击一个列表跳转一个界面他可能会 新建若干个界面，然后跳转到指定的界面，非常麻烦鸡肋。

首先新建一个按钮，按钮点击事件如下：
sss ok=&quot;小白&quot;
uigo(&quot;m.iyu&quot;)

再新建一个界面m.iyu，该界面载入事件如下：
tw(sss.ok)

当点击按钮后，全局变量ok就变成小白了。m.iyu界面载入事件就是提示这个全局变量，也就成小白了！也就说点击按钮后sss.ok这个变量就变成“小白”，所以m.iyu这个界面也会提示小白！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=274');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">post提交深度解析小白必看</div></div></div><div class="mdui-card-content mdui-text-truncate">post在下面的内容我们就讲过，现在更彻底了讲一遍，保证你学会post提交数据！

post的是什么呢？post就是提交数据，提交内容给网站处理，然后获取返回的结果。类似登录功能，同理！

一般我们需要从网站获取源代码后才能知道该提交什么，接口是什么。
举个例子：我从某网站源代码中得出下列代码：

&lt;form action=&quot;http://flmle.com/so.php&quot;&quot;&gt;
&lt;input type=&quot;hidden&quot; name=&quot;siteid&quot; value=&quot;1000&quot;&gt;
&lt;input type=&quot;text&quot; name=&quot;key&quot; placeholder=&quot;输入关键字&quot;&gt;
&lt;input type=&quot;submit&quot; value=&quot;搜索&quot;&gt;
&lt;/form&gt;

这是一个搜索表单（表单从form开头form结尾）

第一行：&lt;form action=&quot;http://flmle.com/so.php&quot;&gt;
其中action的这个地址就是提交的接口

第二行：&lt;input type=&quot;hidden&quot; name=&quot;id&quot; value=&quot;1000&quot;&gt;
表示这是一个隐藏的输入框 为什么要隐藏呢？因为不需要用户输入，但必须要提交。他的属性是id=1000
那就得出一个提交的内容

第三行： &lt;input type=&quot;text&quot; name=&quot;key&quot; placeholder=&quot;输入关键字&quot;&gt;
这是一个需要输入内容的输入框，他的属性是key，得出一个提交的内容：key=搜索关键字

第四行： &lt;input type=&quot;submit&quot; value=&quot;搜索&quot;&gt;
这个完全不用管他，他是一个提交按钮，我们post的时候本身就是一个提交了，所以不需要他！

就这样得出post内容

hs(&quot;http://flmle.com/so.php&quot;,&quot;id=1000&amp;key=搜索关键字&quot;,&quot;utf-8&quot;,ok)

提交的内容是通过&amp;符号串联到一起的，不要写错！

ok就是返回的结果，你可以syso(ok)打印出来查看是否已经提交成功从而截取你需要的结果！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=275');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">随机启动语录</div></div></div><div class="mdui-card-content mdui-text-truncate">sl(&quot;你爹|你大爷|你二爷|你大舅|你二舅|你大侄子&quot;,&quot;|&quot;,ok)
//分割为数组

sran(0,5,sj)
//生产1-6的随机数

sgsz(ok,sj,yes)
//随机访问语录

tw(yes)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=276');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">$私有文件夹的使用</div></div></div><div class="mdui-card-content mdui-text-truncate">iAPP2.0以上，有一个私有文件夹，但很多人都不知道有什么用。其实这个私有文件夹特别实用的，比如你要保存一些东西，但又不想让用户看到，可以保存到私有文件夹下哦。

私有文件夹的路径是：/data/data/安装包名/files

路径不用管，直接在保存文件加个$符号就行了。私有文件夹的好处是，用户没有Root权限是无法修改你保存的内容的。比如一些txt文件等，若你保存在%手机内存里，那么很可能被人修改或者看到哦！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=277');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给编辑框添加滚动条方法</div></div></div><div class="mdui-card-content mdui-text-truncate">在使用编辑框的时候难免会遇到一个有点蛋疼的问题，编辑框没有滚动条而且主要的是编辑框下滑速度不忍直视，但一个方法即可解决。

首先添加一个滚动控件，在滚动控件里添加编辑框就行了。具体效果可参考iApc的内容预览。非常好用哦</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=278');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">去除编辑框点击后有背景颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">默认编辑框只要设置颜色就会出现一个点击输入后颜色 浅蓝色的背景


比如设置编辑框白色，输入内容时编辑框背景颜色就会变成浅蓝色，非常影响美观。

解决办法非常简单，在编辑框的获得焦点事件写下代码：
us(编辑框id,&quot;background&quot;,&quot;&quot;)

即可去除默认的颜色当然也可以设置其他颜色。在后面的&quot;&quot;里输入颜色代码即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=279');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">编辑框的内容不垂直居中</div></div></div><div class="mdui-card-content mdui-text-truncate">当你设置编辑框高度后，默认的编辑框里的文字是垂直居中的，可在属性里设置：

gravity=top

即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=280');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给编辑框的文字设置颜色，语法高亮</div></div></div><div class="mdui-card-content mdui-text-truncate">可参考iAPP的编辑代码时语法高亮。具体过程就不说了

编辑框属性里内容：

text=(html)&lt;font color=#006000&gt;我是绿色&lt;font&gt;我不是绿色</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=281');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击发送QQ临时对话接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qq=2279499274
//你的QQ号
ss(&quot;mqqwpa://im/chat?chat_type=wpa&amp;uin=&quot;+qq+&quot;&amp;version=1&quot;,urlqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,urlqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=282');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">点击添加QQ群接口代码</div></div></div><div class="mdui-card-content mdui-text-truncate">s qun=333797002
//群号
ss(&quot;mqqapi://card/show_pslcard?src_type=internal&amp;version=1&amp;uin=&quot;+qun+&quot;&amp;card_type=group&amp;source=qrcode&quot;,joinqq)

sit(a,&quot;action&quot;, &quot;android.intent.action.VIEW&quot;)
sit(a,&quot;data&quot;,joinqq)
uit(a, &quot;chooser&quot;, &quot;选择QQ&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=283');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">进度条的使用方法</div></div></div><div class="mdui-card-content mdui-text-truncate">进度条，也可以是拖动条，这两个都是差不多的，以进度条为例子就行了。

首页我们做一个倒计时，代码如下：
t()
{
s a=120
for(1;120)
{
stop(1000)
s(a-1,a)
ufnsui()
{
us(进度条id,&quot;progress&quot;,a)
}
}
}


到这里基本就好了，但是细心一点你会发现，进度条只到100就完了，没错！进度条默认最大值是100，也就是他只跑到100就完了，怎么设置呢？

只需要在属性里加：
max=120
也就是最大值是120就可以了！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=284');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">给控件加圆角的方法</div></div></div><div class="mdui-card-content mdui-text-truncate">需要在载入事件先赋值，代码如下：

ngde(5,&quot;#ffffff&quot;,ok)
us(1,&quot;background&quot;,ok)

设置id为1的控件圆角的角度是5，背景颜色是#ffffff，通过ok调用，可以多个控件一起调用，还有其他更多属性，可搜索  ngde 查看。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=285');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">列表点击颜色的设置</div></div></div><div class="mdui-card-content mdui-text-truncate">列表点击颜色有两种，一种是项目点击事件。

还有一种我比较推荐，就是在列表界面，给线性布局加点击事件，把背景设置为透明就</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=course&id=286');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">Hello,World！你好，世界</div></div></div><div class="mdui-card-content mdui-text-truncate">当您看到这句话时，这便意味着您的手册程序已经部署完成。
同时也意味着 空梦框架 已经成功的在您的设备上正常运行。
感谢您的使用！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=0');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">Rcraft公告</div></div></div><div class="mdui-card-content mdui-text-truncate">点击查看公告</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=1');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">标题</div></div></div><div class="mdui-card-content mdui-text-truncate">﻿《裕语言》速成开发手册3.0

官方用户交流：
iApp开发交流（1） 239547050
iApp开发交流（2） 103540883
iApp开发交流（3） 216954373
iApp开发交流（4） 334267540
iApp开发交流（5） 207037477
iApp游戏开发交流  375679257
iApp官方开源交流  323924434


《裕语言》是一基于java的扩展性脚本语言，丰富的类库定置简单快速开发你的应用程序，让开发过程变得娱乐化大众化。《裕语言》是由游改乐计算编程工程师 黄裕先生、宇恒先生 定制以及实现成型代码功能，其代码简单方便的编写体验是一大亮点，目前还会有更多强大的功能完善中。iApp是基于裕语言平台上运行的应用程序，全面向公众开放开放平台，任何有兴趣的人都可以参与开放设计自己的程序。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=2');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">3.0 iyu升级简介</div></div></div><div class="mdui-card-content mdui-text-truncate">1. uigo代码必须加文件后缀，如 uigo(&quot;a.iyu&quot;) 或 uigo(&quot;a.ilua&quot;)。 否则将会闪退等。
2. uls必须正确的 输入界面宽度，输入界面高度。 否则界面列表可能异常。
3. 代码中双引号需进行转义，如 fw(&quot;%a.txt&quot;, &quot;ab&quot;cd&quot;) 修改成 fw(&quot;%a.txt&quot;, &quot;ab\&quot;cd&quot;)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=3');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">// 或 /. ./ 注释语句</div></div></div><div class="mdui-card-content mdui-text-truncate">用法
//这个是变量“a”它的值等于“1”
s a = 1
//这个是变量“b”它的值等于“2”
s b = 2

/.
大量代码注释方法
s c = 3
s d = 4

./


说明：
注释语句符号可以用“//”，以注释符号开头的正行，将会被代码执行器无视。通常用于给自己标示代码的含义

提示：
此注释语句可用于属性。

提示：
不支持代码尾部使用注释语句，注释行必须开头为注释符，举错误的例：

s a = 1 //这个是变量“a”它的值等于“1”
//这个是变量“b”它的值等于“2” s b = 2</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=4');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">syso 打印</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
syso(&quot;1314&quot;)
可以打印出数据，代码同等于 System.out.println(&quot;1314&quot;)，可以在测试时，选择 调试日志查看打印数据。

说明：
打包后，安装运行可以通过 Log Tag：iapp 进行监听数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=5');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">f 判断语句</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = 2
f(a == 1)
{
	syso(&quot;等于1&quot;)
}
else f(a == 2)
{
	syso(&quot;等于2&quot;)
}
else
{
	syso(&quot;等于其他&quot;)
}

s a = 1
s b = 1
f(a == b)
{
	syso(&quot;等于&quot;)
}
else
{
	syso(&quot;不等于&quot;)
}

s a = &quot;nimei&quot;
s b = &quot;nimei&quot;
f(a == b)
{
	syso(&quot;等于&quot;)
}
else
{
	syso(&quot;不等于&quot;)
}

s a = 1
s b = 2
f(!a == b)
{
	syso(&quot;等于&quot;)
}
else
{
	syso(&quot;不等于&quot;)
}

s a = 1
s b = 2
s c = 3
f(a &lt; b &amp;&amp; b &lt; c)
{
	syso(&quot;等于&quot;)
}
else
{
	syso(&quot;不等于&quot;)
}

s a = 1
s b = 2
s c = 2
f(a == b || b == c)
{
	syso(&quot;等于&quot;)
}
else
{
	syso(&quot;不等于&quot;)
}

说明：
条件判断语句，用于两个值的比较，常用于判断值是否对等与数值的大小，判断数据需要同类型数据对比。表达式返回的“是”，那么将执行 { 代码 } 里面的代码。“否”将执行else后面的代码（不支持运算表达式，例：a+b=2）

支持运算符（返回 是 与 否）：
== 是否对等
!= 是否不等于
&gt;= 是否大于或等于
&lt;= 是否小于或等于
&gt; 是否大于
&lt; 是否小于
?* 字符串开通是否相同
*? 字符串结尾是否相同
? 字符串是否被包含
上面三个举例：
s a = &quot;abcdef&quot;
f(a ?* &quot;abc&quot;) 返回“是”
f(a *? &quot;def&quot;) 返回“是”
f(a ? &quot;cde&quot;) 返回“是”

支持逻辑运算符：
|| 或者
&amp;&amp; 并且
! 反意</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=6');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">w 循环</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//这将循环99次
s a = 99
w(a &gt; 0)
{
syso(a)
s(a - 1, a)
}

说明：
条件循环语句，比较值的变化，然后进行循环执行 { 代码 } 里面的代码。当条件为“否”的时候会停止循环，条件“是”的话，将一直循环执行。
支持运算符（返回 是 与 否）：（跟 f 语句 一样，请参考）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=7');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">for 循环</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
for(1; 20)
{
	syso(&quot;循环20次&quot;)
}

s a = 1
s b = 10
for(a; b)
{
	syso(&quot;循环10次&quot;)
}

说明：
参数可以给予另个参数，一个为初始循环的值，一个是最大循环值。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=8');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">t 新线程</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
t()
{
	syso(&quot;新线程里执行代码&quot;)
}

说明：
启用新线程，去执行一些需要执行很久的代码。比如把下载文件，获取网页源码，大量的文件操作，可以放入新线里执行。这里线程的概念，启用新的线程帮你处理代码，这样不会影响到主线程。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=9');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ssj 设置或修改控件事件代码</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s id = 3
ssj(id, &quot;clicki&quot;)
{
tw(&quot;ok&quot;)
}

说明：
输入控件Id，输入事件类型，并将事件代码填写在 { 中 }，动态控件将触发该事件代码。

事件类型：
clicki=单击事件
touchmonitor=触屏监听事件
press=触屏长按事件
keyboard=键盘触发事件
pressmenu=触屏长按菜单事件
editormonitor=框编辑监听事件
ontextchanged=文本内容已改变
beforetextchanged=文本内容改变之前
aftertextchanged=文本内容改变之后
focuschange=获得焦点事件
onscrollstatechanged=滚动状态已改变
onscroll=滚动
clickitem=单击项目事件
onprogresschanged=加载过程进度改变
shouldoverrideurlloading=加载网址之前
ondownloadstart=文件下载事件
onpageselected=滑动切换界面事件
onpagescrolled=滑动切换界面过程
onpagescrollstatechanged=滑动操作过程
ondrawerclosed=侧滑关闭事件
ondraweropened=侧滑展示事件
onoptionsitemselected=项目选择
onitemselected=选择项目事件</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=10');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">tw 提示</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
tw(&quot;你好&quot;)

//设置参数1：显示的时间长久；0：显示的时间短暂；\n为换行的意思，其他地方通用
tw(&quot;你好\n吗？&quot;, 1)

说明：
用于提醒用户，界面显示时长大约为 2秒钟。弹出代码中的文字，来提醒用户。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=11');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fd 删除文件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(将删除SD卡根目录的abc.zip文件)
s a = &quot;%abc.zip&quot;
fd(a, b)
tw(b)

说明：
用于删除指定的文件，是否成功返回数据：true或 false

提示：同时将创建变量“b”，作为记录返回的值。（通用于下咧）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=12');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fe 文件是否存在</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(将判断SD卡根目录的abc.zip文件是否存在)
s a = &quot;%abc.zip&quot;
fe(a, b)
tw(b)

说明：
用于判断指定的文件存在，是否存在返回数据：true或 false</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=13');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fs 文件大小</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(将获取SD卡根目录的abc.zip文件占用的大小)
s a = &quot;%abc.zip&quot;
fs(a, b)
tw(b)

说明：
用于判断指定的文件存在，是否存在返回数值单位(字节)，若获取失败将返回 “-1”。
转换为KB：
s a = &quot;%abc.zip&quot;
fs(a, b)
s(b/1024, b)
tw(b)

转换为MB：
s2(b/1024/1024, b)
//保留所有小数
sn(b/1024/1024, b2)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=14');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fr 读取文本</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(将读取SD卡根目录的abc.txt文件里面的内容)
s a = &quot;%abc.txt&quot;
fr(a, b)
tw(b)

s a = &quot;%abc.txt&quot;
s b = &quot;utf-8&quot;
fr(a, b, c)
tw(c)

说明：
用于读取文本文件的数据内容。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=15');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fc 复制文件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（在SD卡根目录abc.txt文件拷贝一个新的副本至abc2.txt）
s a = &quot;%abc.txt&quot;
s b = &quot;%abc2.txt&quot;
fc(a, b, c)

//设置重复不覆盖
s c = false
fc(a, b, c, d)

说明：
用于复制文件，创建一个新的副本文件。是否成功返回数据：true或 false</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=16');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fw 写入文本</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(将文本数据写入至SD卡根目录的abc.txt文件里面)
s a = &quot;%abc.txt&quot;
s b = &quot;我是一个txt文件的内容&quot;
fw(a, b)

s a = &quot;%abc.txt&quot;
s b = &quot;我是一个txt文件的内容&quot;
s c = &quot;utf-8&quot;
fw(a, b, c)

说明：
用于写入文件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=17');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fl 文件列表</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（获取一个目录的文件列表）
s a = &quot;%dir&quot;
fl(a, b)
for(c; b)
{
	syso(c)
}

//仅获取文件夹
s a = &quot;%dir&quot;
fl(a, true, b)
for(c; b)
{
	syso(c)
}

//仅获取文件
s a = &quot;%dir&quot;
fl(a, false, b)
for(c; b)
{
	syso(c)
}

说明：上面例子是获取sd卡根目录文件夹“dir”里面的所有子目录以及文件，并获取结果传入变量“b”，并用for循环，来读取变量“b”里面的列表数据，并把列表数据复制给变量“c”，其中代码会自动创建并赋值好变量：b、c

提示：
看似有些复杂，理解了就简单了， 这里的变量“b”类型是一个数组，里面包含了一个数据列表。通过for循环可以顺序读取这个列表。并每次循环把每列的数据赋值给变量“c”</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=18');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ft 转移文件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（将SD卡根目录的abc.txt转移至abc3.txt）
s a = &quot;%abc.txt&quot;
s b = &quot;%abc3.txt&quot;
ft(a, b, c)
tw(c)

说明：
用于转移文件。是否成功返回数据：true或 false</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=19');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fdir 获取SD卡根目录路径</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（获取根目录路径并赋值至变量“a”）
//获取根目录
fdir(a)
tw(a)

//获取目录的绝对路径
s a = &quot;%dir&quot;
fdir(a, b)
tw(b)

说明：
通过获取根目录路径，就可以计算文件的绝对路径。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=20');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fuz 解压zip部分文件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（将根目录文件abc.apk压缩包里的AndroidManifest.xml文件，解压到根目录AndroidManifest2.xml）
s a = &quot;%abc.apk&quot;
s b = &quot;AndroidManifest.xml&quot;
s c = &quot;%AndroidManifest2.xml&quot;
fuz(a, b, c, d)
tw(d)

//解压文件遇到重复不覆盖
s a = &quot;%abc.apk&quot;
s b = &quot;AndroidManifest.xml&quot;
s c = &quot;%AndroidManifest2.xml&quot;
s d = false
fuz(a, b, c, d, e)
tw(e)

说明：
通过上面代码可以实现压缩包解压部分的文件，并返回赋值至变量“d”解压文件的数量。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=21');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fuzs 解压整个zip</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(将根目录文件abc.apk压缩包解压至根目录文件夹abcdir，会自动创建)
s a = &quot;%abc.apk&quot;
s b = &quot;%abcdir&quot;
fuzs(a, b, c)
tw(c)

//解压文件遇到重复不覆盖
s a = &quot;%abc.apk&quot;
s b = &quot;%abcdir&quot;
s c = false
fuzs(a, b, c, d)
tw(d)

说明：
通过上面代码将解压整个压缩包至指定文件，并赋值至变量“c”，是否成功返回数据：true或 false</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=22');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fj 压缩文件或文件夹至zip</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;%adc.txt&quot;
s b = &quot;%abc.zip&quot;
fj(a, b, c)
tw(c)

//不去除根目录
s a = &quot;%adc.txt&quot;
s b = &quot;%abc.zip&quot;
s c = false
fj(a, b, c, d)
tw(d)

说明：
压缩文件。返回赋值数据：true 或 false</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=23');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fo 打开文件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（将根目录打开安装abc.apk文件）
s a = &quot;%abc.apk&quot;
fo(a)

说明：
可以调用系统工具打开不同的文件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=24');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">s+-*/% 运算方式</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = 2

//加法例子赋值a=4
s+(2, a)
//减法例子赋值a=3
s-(5, a)
//乘法例子赋值a=6
s*(3, a)
//除法例子赋值a=4
s/(8, a)
//求余例子赋值a=2
s%(5, a)

//其他用法

//加法例子赋值a=7
s+(2, 5, a)

//乘法例子赋值b=8，保留小数
s*(4, a, true, b)


说明：
此方法的效率高于 s计算表达式、sb计算表达式。 在循环数据运行时，是受到推荐的用法。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=25');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">s 计算表达式</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（用于计算表达式）
s a = 12
s b = 13
s(a + b, c)
//将提示：25
tw(c)

s a = 60
s b = 14
s(a / (b + 12), c)
//将提示：2 （自动去除了小数）
tw(c)

说明：
用于计算数据表达式，不支持逻辑表达式计算。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=26');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">s2 计算表达式</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
功能跟上面的一样，但这个会保留2位小数。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=27');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sn 计算表达式</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
功能跟上面的一样，但保留所有小数。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=28');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ss 变量相加</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;123&quot;
s b = &quot;789&quot;
ss(a + &quot;456&quot; + b, c)
//将提示：123456789
tw(c)

说明：
将字符串数据相连，并赋值至变量“c”。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=29');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sr 替换字符</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;123456789&quot;
s b = &quot;456&quot;
s c = &quot;.&quot;
sr(a, b, c, d)

//将提示：123.789
tw(d)

//支持正则表达式
//sr(a, b, c, true, d)

说明：
用于替换字符</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=30');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sj 截取字符</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;123456789&quot;
s b = &quot;34&quot;
s c = &quot;8&quot;
sj(a, b, c, d)
//将提示：567
tw(d)

//从头部开始截取
sj(a, null, c, d)
tw(d)

//截取到尾部
sj(a, b, null, d)
tw(d)


说明：
用于截取数据部分字符</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=31');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sl 数据数组</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;12;12;12;12;12&quot;
s b = &quot;;&quot;
sl(a, b, c)

//可以支持正则表达式；例子看（注意说明）
//sl(a, b, true, c)

for(d; c)
{
//将打印5次：12
	syso(d)
}

说明：
将把变量“a”的字符串，切割成一个数组，以字符“.”为分割字符。并用循环顺序打印出数据。

注意：
如果支持正则表达式数据数组，上例子的 s b = &quot;;&quot; 其内的值。需要转义的特殊字符 “$()*+.[]?\^{},|”

支持正则的特殊字符转义方法：
如：
s a = &quot;12|a$12|a$12|a$12|a$12&quot;

//关键分割字符串如果包含特殊字符，需要在每个特殊字符前面增加“\”
s b = &quot;\\|a\\$&quot;
sl(a, b, true, c)

for(d; c)
{
//将打印5次：12
	syso(d)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=32');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">siof 获取字符位置</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;123456789&quot;
s b = &quot;3&quot;
s c = 0
siof(a, b, c, d)
//将提示：2
tw(d)

s a = &quot;123456789&quot;
s b = &quot;3&quot;
siof(a, b, c)
//将提示：2
tw(c)
说明：
从前面向后面进行匹配。字符位置以0计算，若无数据找到将返回 -1</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=33');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">slof 获取字符位置</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;123456789&quot;
s b = &quot;4&quot;
s c = 8
slof(a, b, c, d)
//将提示：3
tw(d)

s a = &quot;123456789&quot;
s b = &quot;4&quot;
slof(a, b, c)
//将提示：3
tw(c)

说明：
从后面向前面进行匹配。字符位置以0计算，若无数据找到将返回 -1</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=34');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ssg 截取字符</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;abcdefghijk&quot;
ssg(a, 2, 6, b)
//将提示：cdef
tw(b)

s a = &quot;abcdefghijk&quot;
ssg(a, 6, b)
//将提示：ghijk
tw(b)

说明：
根据字符的位置进行截取字符，若失败将变量“b”赋值 null</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=35');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">slg 获取字符长度</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;123456789&quot;
slg(a, b)
//将提示：9
tw(b)

说明：
顾名思义。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=36');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">strim 去除头尾空格</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;   123456789 &quot;
strim(a, b)
//将提示:123456789
tw(b)

说明：
常用于去除后进行判断头尾字符。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=37');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">slower 转换为小写</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;AiufSUscN&quot;
slower(a, b)
//将提示:aiufsuscn
tw(b)

说明：
常用于转换为小写后进行判断。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=38');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">supper 转换为大写</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;AiufSUscN&quot;
supper(a, b)
//将提示:AIUFSUSCN
tw(b)

说明：
常用于转换为大写后进行判断。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=39');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">stop 暂停代码</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
t()
{
syso(&quot;1&quot;)

stop(1000)
syso(&quot;2&quot;)

stop(1000)
syso(&quot;3&quot;)

stop(1000)
syso(&quot;4&quot;)
}

说明：
每次执行 stop(1000) 将暂停1秒后，再执行下面代码。单位为毫秒：1000毫秒 = 1秒</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=40');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sran 生产范围随机数</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（生产一个 100 至 1000的随机数）
sran(100, 1000, a)
tw(a)

说明：
有时候需要利用到随机机制，可以利用这个来开发！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=41');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">nsz 创建数组</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = 6
nsz(a, b)

或

//指定数组数据类型
s a = 6
nsz(a, &quot;String&quot;, b)

说明：
申明一个数组。并且舍子数组总行数为6</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=42');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sgsz 指定访问数组维数</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（根据序号访问数组）
s a = &quot;12;34;56;78;90&quot;
s b = &quot;;&quot;
sl(a, b, c)
sgsz(c, 2, d)
tw(d)

说明：
数组可以进行列表形式存储数据，常用于数据列表。注意的是序号是从0开始的。数组总行数如果是5，那序号最大为4</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=43');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sssz 设置数组数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = 6
nsz(a, b)
s c = 1
s d = &quot;数据&quot;
sssz(b, c, d)

说明：
指定数组序号设置数组的数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=44');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sgszl 访问数组总行数</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;12;34;56;78;90&quot;
s b = &quot;;&quot;
sl(a, b, c)
sgszl(c, d)
tw(d)

说明：
可以获取到长度，更准确的访问数组</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=45');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hs 获取网页源码</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
t()
{
s a = &quot;https://m.baidu.com/&quot;
hs(a, b)
syso(b)
}

2，提交post数据:
如果参数包含 &amp; 为普通字符，可以进行转义 \&amp; 如提交数据:&amp;text=abc\&amp;def
输入说明：地址，post数据提交，目标网页编码，赋值变量
t()
{
s a = &quot;https://m.baidu.com/&quot;
hs(a, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, b)
syso(b)
}

3，带自定义cookie方式获取网页:
//传递cookie项值，格式为nama=value 下例： uid=112;name=nihao;sb=123456789;

t()
{
s a = &quot;https://m.baidu.com/&quot;
hs(a, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, &quot;uid=112;name=nihao;sb=123456789;&quot;, b)
syso(b)
}

4，带自动设置cookie方式获取网页，并记录当前网页的Cookie:
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = &quot;https://m.baidu.com/&quot;
hs(a, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, null, true, b)
syso(b)
}

5，带自动设置cookie方式获取网页，并记录当前网页的Cookie，并设置Header头:（可设置多条，以“||”隔开）文件头包括了Cookie，User-Agent设备型号。
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = &quot;https://m.baidu.com/&quot;
hs(a, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, null, true, &quot;User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||accept=*/*||accept-language=zh-CN&quot;, b)
syso(b)
}

6，带自动设置cookie方式获取网页，并记录当前网页的Cookie，并设置Header头:（可设置多条，以“||”隔开）文件头包括了Cookie，User-Agent设备型号，设置连接超时，设置接收超时，设置代理IP。
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = &quot;https://m.baidu.com/&quot;
hs(a, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, null, true, &quot;User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||accept=*/*||accept-language=zh-CN&quot;, 20000, 20000, &quot;10.0.0.172:80&quot;, b)
syso(b)
}

7，应用系统存储Cookie的浏览查看，返回赋值变量为字符串
hs(&quot;cookie&quot;, b)

8，应用系统存储Cookie的清空，无赋值变量
hs(&quot;del cookie&quot;)

9，应用系统存储Cookie的浏览查看指定网址，返回赋值变量为字符串
hs(&quot;cookie:https://m.baidu.com&quot;, b)

说明：
这里先开了一个线程，然后在线程里执行获取网页源码的工作，开线程是担心有些主线程界面。大部分网页都需要使用cookie登陆，可使用工具查询所需cookie然后进行操作。
设置cookie有说明作用？
1.登陆用户名
2.获取验证码图片并发送验证码
....</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=46');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hd 下载文件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（下载文件至SD卡根目录 abc.apk）

1，下载文件，默认不覆盖重复
t()
{
s a = &quot;http://abc.com/abc.apk&quot;
s b = &quot;abc.apk&quot;
hd(a, b, c)
syso(c)
}

2，设置重复是否覆盖
t()
{
s a = &quot;http://abc.com/abc.apk&quot;
s b = &quot;abc.apk&quot;
hd(a, b, true, c)
syso(c)
}


3，带自动设置cookie方式下载网页形式文件（如图片形式验证码，论坛的附件等），支持post数据，自定义Cookie或系统设置Cookie，并记录当前网页的Cookie，并设置重复是否覆盖。可参考hs获取网页，并设置Header头:（可设置多条，以“||”隔开，也可留空为null）
输入说明：下载地址，保存文件位置，是否重复覆盖，post数据提交，目标网页编码，自定义Cookie，是否系统自动设置Cookie，设置Header头，赋值变量
t()
{
s a = &quot;http://abc.com/abc.apk&quot;
s b = &quot;abc.apk&quot;
hd(a, b, true, &quot;title=你好&amp;text=你好吗？&quot;, &quot;utf-8&quot;, null, true, null, b)
syso(b)
}

说明：
开个线程，然后在里面下载一个文件。并存到SD卡。下载结果将赋值到变量“c”
返回的赋值：
1 文件已经存在
0 下载成功
-1 下载失败</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=47');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hw 访问网页</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;https://m.baidu.com/&quot;
hw(a)

说明：
使用内置浏览器访问网页。
可用于下载文件：
s a = &quot;http://abc.com/abc.apk&quot;
hw(a)


//跳转访问网页，并且自定义标题栏颜色
//主体颜色
s b = &quot;#387bd6&quot;
//底部横杠颜色
s c = &quot;#255eab&quot;
hw(&quot;https://m.baidu.com/&quot;, b, c)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=48');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hws 系统浏览器访问网页</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;https://m.baidu.com/&quot;
hws(a)

说明：
使用内置浏览器访问网页。
可用于下载文件：
s a = &quot;http://abc.com/abc.apk&quot;
hws(a)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=49');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ug 获取控件属性</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(1为：控件ID，第二个参数为控件属性标识，然后赋值到变量)
//
ug(1, &quot;text&quot;, c)

//获取侧滑控件 左边的侧滑是否展开状态
ug(1, &quot;isdraweropen&quot;, &quot;start&quot;, c)

说明：
输入属性标示来返回不同的控件数据。注意：有些控件没有指定属性，将返回null。下面有属性介绍，可参考。

可用属性标识：
text=内容、background=背景、width=宽度、height=高度、x=X轴、y=Y轴、paddingleft=左内边距、paddingtop=顶内边距、paddingright右内边距、paddingbottom=底内边距、layout_marginleft=左外边距、layout_margintop=顶外边距、layout_marginright=右外边距、layout_marginbottom=底外边距、
hint=提示字符、imeoptions=虚拟键盘按键状态、visibility=控件可视状态、checked=选项是否被选中、title=浏览器网页标题、url=浏览器网址、lastvisibleposition=列表滑动到项目位置的序号、count=列表项目总数、
selecteditem=获取下拉框选值、rating=评分当前数值、progress=控件当前进度数值、date=日期控件选值、time=时间控件选值、currentitem=获得滑动窗体界面序号、isdraweropen=侧滑是否界面展开状态、selectionstart=获取文本框光标开始位置、selectionend=获取文本框光标结束位置、
cangoback=是否存在可返回的网页、cangoforward=是否存在可前进的网页、collapsecolumns=表格布局获取指定列是否折叠、shrinkcolumns=表格布局获取指定的列是否可收缩、stretchcolumns=表格布局获取指定的列是否可拉伸、shrinkcolumnsall=表格布局获取指示是否所有的列都是可收缩的、
stretchcolumnsall=表格布局获取指示是否所有的列都是可拉伸的</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=50');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">us 设置控件属性</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(1为：控件ID，第二个参数为控件属性标识，第三个是需要设置的数据或变量)

//设置文本控件内容
s c = &quot;文本内容&quot;
us(1, &quot;text&quot;, c)


//关闭下拉刷新加载图标
us(1, &quot;refreshing&quot;, false)


//设置浏览器的连接url
s c = &quot;https://m.baidu.com/&quot;
us(2, &quot;url&quot;, c)
//提示：如果浏览器正在播放视频或音乐，直接关闭浏览器可能还会有声音，建议关闭浏览器时先跳转成另一个网页。
//提示：如果需要加载本地的文件，可以 us(2, &quot;url&quot;, &quot;file:///android_asset/res/web.html&quot;) 加载安装包内assets/res/web.html文件


//设置浏览器显示的html文件或文本
s c = &quot;&lt;html&gt;&lt;p&gt;html内容&lt;/&gt;&lt;/html&gt;&quot;
s d = &quot;utf-8&quot;
s e = &quot;text/html&quot;
us(2, &quot;url&quot;, c, d, e, f)
tw(f)


//设置控件阴影（部分控件有效果如文本、文本框、按钮）
s radius = 5
s dx = 0
s dy = 0
s color = &quot;#000000&quot;
us(2, &quot;shadow&quot;, radius, dx, dy, color, f)
tw(f)


//带有赋值变量，变量d将返回数据是否设置成功 true 或 false
s c = &quot;文本内容&quot;
us(1, &quot;text&quot;, c, d)

//设置文本框控件光标
us(1, &quot;selection&quot;, 1, d)

//选中文本框部分内容
us(1, &quot;selection&quot;, 1, 3, d)

//浏览器前进1个网页
us(1, &quot;gobackorforward&quot;, 1)

//浏览器后退1个网页
us(1, &quot;gobackorforward&quot;, -1)

//设置控件点击波纹效果颜色；需系统5.0以及以上才有效果；部分控件还需要设置 clickable=true 才有效果。
us(1, &quot;backgroundripple&quot;, &quot;#888888&quot;)

//设置编辑框光标颜色
us(1, &quot;textcursordrawable&quot;, &quot;#000000&quot;)

//自定义文本控件字体
us(1, &quot;typeface&quot;, &quot;@ttf.ttf&quot;)

说明：
输入控件标示设置控件数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=51');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">可参照控件属性，所有属性标识通用</div></div></div><div class="mdui-card-content mdui-text-truncate">更多属性标识：
currentitem=设置滑动窗体界面序号、closedrawer=关闭指定侧滑、opendrawer=展开指定侧滑、drawerlockmode=设置手势滑动、selection=设置文本框光标位置、gobackorforward=浏览器的前进或推后、backgroundripple=波纹效果、dh=执行动画（非队列动画）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=52');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uigo 跳转界面</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（输入界面文件名，跳转指定的界面）
uigo(&quot;abc.iyu&quot;)

//带参数的跳转
uigo(&quot;abc.iyu&quot;, 536870912)


说明：
可以界面之间的转换，扩展新的界面。

参数：
67108864：如果在内存中发现存在该界面，则清空这个界面之上的所有其他界面，使其处于栈顶。
268435456：系统会寻找或创建一个新的内存来放置该界面
1073741824：跳转到的界面，不排在内存中
536870912：当内存中存在该界面并且位手机的显示状态时，不再创建一个新的，直接利用这个界面。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=53');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">utw 弹出界面</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（在原有的界面弹出界面）
s a = null
s b = &quot;界面标题&quot;
s c = &quot;界面内容&quot;
s d = &quot;退出&quot;
s e = &quot;保存&quot;
s f = &quot;取消&quot;

//三个按钮
//输入图标，输入标题，输入内容，输入按钮名称，输入按钮名称，输入按钮名称，输入是否点击弹窗以外界面是否关闭弹窗，输入赋值变量
utw(a, b, c, d, e, f, false, v)
{
syso(&quot;点击了确定&quot;)
}
else
{
syso(&quot;点击了保存&quot;)
}
else
{
syso(&quot;点击了取消&quot;)
}

//两个按钮
utw(a, b, c, d, e, false, v)
{
syso(&quot;点击了确定&quot;)
}
else
{
syso(&quot;点击了取消&quot;)
}

//一个按钮
utw(a, b, c, d, false, v)
{
syso(&quot;点击了确定&quot;)
}

//没有按钮
utw(a, b, c, false, v)


//将界面添加到弹窗界面上，直接将界面内容设为一个界面文件
s a = &quot;界面标题&quot;
s b = &quot;a.iyu&quot;
s c = &quot;取消&quot;
utw(null, a, b, c, false, v)
{
syso(&quot;点击了确定&quot;)
}

说明：
常用于询问用户当前的操作，弹窗展示内容。

赋值变量说明：
弹出界面需要设置一个赋值变量，用于自定义界面弹窗的操作。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=54');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">endutw 关闭弹出界面</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
endutw()

说明：
用于关闭当前打开的弹窗界面</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=55');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">end 结束界面</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
end()

说明：
调用后，将结束当前的界面。 并返回原来的界面。如果原来没有界面，将退出应用。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=56');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ends 显示桌面</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
ends()

说明：
跳转到手机的桌面，程序将后台运行。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=57');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">bfm 播放音频</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;%abc.mp3&quot;
bfm(a)

s a = &quot;http://www.abc.com/abc.mp3&quot;
bfm(a)

s a = &quot;%abc.mp3&quot;
bfm(a, b)
//播放
//bfms(b, &quot;st&quot;)
//暂停
//bfms(b, &quot;pe&quot;)
//停止
//bfms(b, &quot;sp&quot;)
//结束播放组件
//bfms(b, &quot;re&quot;)
//是否在播放
//bfms(b, &quot;ip&quot;, c)
//tw(c)

//获取音频时长（毫秒）
//bfms(b, &quot;dn&quot;, c)
//tw(c)
//获取当前播放时长（毫秒）
//bfms(b, &quot;cn&quot;, c)
//tw(c)

//指定播放的位置（毫秒）
//bfms(b, &quot;seekto&quot;, 2000)

//设置音量（0-100）
//bfms(b, &quot;volume&quot;, 100, 100)

//一直循环播放
//bfms(b, &quot;sl&quot;, true)

说明：
可以直接访问安装包里面的音频文件，也可以访问sd卡上的。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=58');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">html标签支持</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;(html)&lt;a href=&quot;https://m.baidu.com&quot;&gt;百度&lt;/a&gt;&quot;
us(1, &quot;text&quot;, a)

说明：
text属性：设置支持html代码！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=59');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ula 列表操作内容</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//输入数据列表对象，输入数据项...不限制数量。
ula(a, 1=&quot;abc&quot;, 2=&quot;bac&quot;, 3=&quot;bbc&quot;)

//刷新列表显示内容，常用增加数据后的刷新。
ula(a)

//清空列表对象
ula(a, null)
//ula(a, &quot;clear&quot;)

//获得列表对象，赋值返回v变量为列表对象
ula(a, &quot;list&quot;, v)

说明：
根据数据列表，进行增加数据。

提示：
1=abc，其中1为控件id，abc为设置控件值
其中所谓的控件，为a.iyu界面中的控件。
增加标识数据，不作为设置控件数据，可在标识处设负数。如下：
-1=abc

提示：
如果需要设置 单选控件、多选控件 的选择状态，可设值为 true 或 false

注意：
将要执行事件的控件，必须在此设置值。如你有一个按钮控件无需设置值，但需要使用事件，可设置 1=null
不设置值的控件，将无法获取列表内容数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=60');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uls 列表显示内容</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
ula(a, 1=&quot;abc&quot;, 2=&quot;bac&quot;, 3=&quot;bbc&quot;)
s c = &quot;a.iyu&quot;
s d = -1
s e = -2
//列表项目界面高度 建议输入 -2 ，如果高度输入 -1 v7列表单项会填充整个界面。项目界面的宽度建议输入 -1
//输入控件id或控件对象，输入数据列表，输入列表项界面文件名，输入项目界面宽度，输入项目界面高度
uls(1, a, c, d, e)

//设置下拉选择列表
s a = &quot;a;b;c&quot;
s b = &quot;;&quot;
sl(a, b, c)
//输入控件id或控件对象，输入数据列表或数组数据
uls(1, c)


//自定义标签布局 的子项
ula(a, 1=&quot;abc&quot;, 2=&quot;bac&quot;, 3=&quot;bbc&quot;)
//输入控件id或控件对象，输入数据列表，输入列表项界面文件名，输入界面宽度，输入界面高度
uls(1, a, &quot;a.iyu&quot;, -2, -2)


说明：
设置列表控件、视图控件、下拉列表、标签布局 的数据。

注意：
列表控件、视图控件 设置的界面 a.iyu 其中的载入事件是允许被调用。
可以通过列表控件、视图控件 设置的界面 a.iyu 的载入事件，进行每项列表布局的个性化设计。
每当显示到每项列表内容就会调用一次此载入事件，并且将该项的布局控件赋值给 st_vW 变量对象，
然后可以通过 gvs(st_vW, a.2, b) 获取其中的子控件对象，然后进行操作子控件即可。
还可以通过 st_pN 获取当前的视图中的序号，方便判断目前操作的是那一个视图。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=61');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ulag 获取列表内容数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//输入当前的控件对象，输入获取控件ID 1的数据参数，输入赋值变量
ulag(a, 1, b)

//输入当前的控件对象，输入获取标识为 -1的数据参数，输入赋值变量
ulag(a, -1, b)

//通过 数据列表对象 或 列表控件对象 获取数据
//输入数据列表对象 或 列表控件对象，输入视图中的位置序号，输入获取标识为 -1的数据参数，输入赋值变量
ulag(a, 1, -1, b)

//如v7列表、滑动窗体控制 的加载界面中的 载入事件里可使用此方法获取数据内容
ulag(st_vW, 1, b)


说明：
常用与在列表控件的事件中，获取参数数据与用户进行互动。获取失败将赋值变量为 null

注意：
使用此方法在uls中设置控件参数后，有设置参数的控件，在事件中可使用此方法。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=62');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ulas 更新列表内容数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//输入当前的控件对象，输入获取控件ID 1的数据参数，输入新的数据
ulas(a, 1, b)

//输入当前的控件对象，输入获取标识为 -1的数据参数，输入新的数据
ulas(a, -1, b)

//通过 数据列表对象 或 列表控件对象 获取数据
//输入数据列表对象 或 列表控件对象，输入视图中的位置序号，输入获取标识为 -1的数据参数，输入新的数据
ulas(a, 1, -1, b)

//刷新列表显示内容，常用增加数据后的刷新。
ula(a)

//如v7列表、滑动窗体控制 的加载界面中的 载入事件里可使用此方法获取数据内容
ulas(st_vW, 1, b)


说明：
常用与更新修改列表内容数据。修改数据后，别忘记刷新列表。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=63');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">usms 发送短信</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;10086&quot;
s b = &quot;0&quot;
usms(a, b)

注意:测试时只显示syso日志，不直接 发送短信，打包即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=64');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ucall 拨打电话</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;10086&quot;
ucall(a)

注意:测试时只显示syso日志，不直接 拨出号码，打包即可。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=65');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">time 当前时间</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = 0
time(a, b)
tw(b)

说明：
第一个参数为时间类型，第二个赋值变量

[数字类型]
0：2014-07-07 09:10:08
1：2014/07/07 09:10:08
2：2014-07-07
3：09:10:08
4：18144133553151
5：2014年07月07日 09:10:08
[字符类型，输入字符形式需引号概括]
Y 年
m 月
d 日
H 时
M 分
S 秒
a/A 星期几</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=66');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fi 判断路径是否文件夹</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;abc&quot;
fi(a, b)
tw(b)

说明：
指定路径，判断是否为目录文件夹，返回：true 或 false</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=67');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">swh 获取屏幕分辨率</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;w&quot;
//获取屏幕宽度的dp
swh(a, w)
s a = &quot;h&quot;
//获取屏幕高度的dp
swh(a, h)
s a = &quot;hh&quot;
//获取屏幕真实高度的dp
swh(a, hh)

s a = &quot;pxw&quot;
//获取屏幕宽度的px像素
swh(a, w)
s a = &quot;pxh&quot;
//获取屏幕高度的px像素
swh(a, h)
s a = &quot;pxhh&quot;
//获取屏幕真实高度的px像素
swh(a, hh)

s a = &quot;pxztl&quot;
//获取屏幕状态栏高度的px像素
swh(a, h)

s a = &quot;pxbvk&quot;
//获取屏幕底部虚拟键盘的高度的px像素
swh(a, h)

说明：
常用于获取屏幕的大小。

真实高度：不去除其他系统界面所占用（如状态栏）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=68');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">stobm 汉子转换编码字符</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：（你 转换 %E4%BD%A0）
stobm(&quot;你&quot;, &quot;utf-8&quot;, b)
tw(b)

//转换网址中的汉字
stobm(&quot;你&quot;, &quot;utf-8&quot;, true, b)
tw(b)

说明：
有些时候网络操作的时候，网址需要带有字符参数，就可以把这个汉字转换下。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=69');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sutf8to 将UTF-8编码字符转换中文</div></div></div><div class="mdui-card-content mdui-text-truncate">sutf8to(&quot;%E4%BD%A0&quot;, b)
tw(b)

//网址中的汉字
sutf8to(&quot;%E4%BD%A0&quot;, &quot;utf-8&quot;, true, b)
tw(b)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=70');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uycl 隐藏状态栏</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//隐藏
uycl(true)
//不隐藏
uycl(false)

说明：
隐藏手机顶部的状态栏</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=71');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uycl 修改状态栏颜色</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//输入更变颜色，并且保留状态栏空间，并默认设置软键盘
uycl(&quot;#50c4e5&quot;, true)

//输入更变颜色，并且不保留状态栏空间，并默认设置软键盘
uycl(&quot;#50c4e5&quot;, false)


//输入更变颜色，并且保留状态栏空间，只设置状态栏，不设置软键盘
uycl(&quot;#50c4e5&quot;, true, 0)

//输入更变颜色，并且不保留状态栏空间，只设置软键盘，不设置状态栏
uycl(&quot;#50c4e5&quot;, false, 1)


说明：
常用与设置一体化颜色，以及更变不同的状态栏颜色。

ps:如果不保留状态栏空间的话，你的底部控件可能会与底部软键盘重叠，你可以使用 swh 获取底部虚拟键盘的高度，然后可以增加一个底部外边距。

注意：
仅系统android 4.4以及以上才有效果，系统android 5.0以及以上效果更佳！
android 4.4以下的系统，无效果！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=72');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ushsp 设置横屏或竖屏</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//横屏
ushsp(true)
//竖屏
ushsp(false)

说明：
设置屏幕的显示方式，注意的是设置后载入事件将重新执行</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=73');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">bfv 播放视频</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：(播放SD卡上的视频文件)
s a = &quot;%abcd.mp4&quot;
bfv(a)

//并且横屏
s a = &quot;%abcd.mp4&quot;
s b = true
bfv(a, b)


//并且横屏
s a = &quot;http://m.baidu.com/abcd.mp4&quot;
s b = true
bfv(a, b)
说明：
此方法将全屏播放SD卡上的视频文件。调用自带的播放器。

注意：
不支持加载assets文件。支持SD卡文件、应用私有文件、（http）远程网络文件！

支持格式：
3gp、MP4、avi</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=74');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">endcode 结束执行</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = 1
s b = 1
f(a == b)
{
tw(&quot;会提示&quot;)
//结束执行代码
endcode
}
tw(&quot;不会提示&quot;)

说明：
可用于提前结束执行代码，也可以用于模块的函数结束。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=75');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">break 跳出循环以及代码块</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
w(1 == 1)
{
syso(&quot;1&quot;)
break
syso(&quot;2&quot;)
}
f(1 == 1)
{
syso(&quot;1&quot;)
break
syso(&quot;2&quot;)
}

说明：
代码块当执行 break 语句后，将跳出。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=76');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">fn 模块与函数</div></div></div><div class="mdui-card-content mdui-text-truncate">1.创建一个模块：
在程序文件列表，新建一个模块名“mokuai”

2.在模块mokuai.myu里定义各种函数：
fn hanshu(a, b)
ss(a + b, c)
tw(c)
end fn
fn hanshu(a)
tw(a)
end fn

3.在事件里根据模块对象来调用函数：
s a = &quot;abc&quot;
s b = &quot;def&quot;
fn mokuai.hanshu(a, b)
fn mokuai.hanshu(a)

说明：
常用与将重复性的代码，放入模块中执行。

注意：
模块的调用过程将不共享使用 调用事件的局部变量；

例：
//(m.myu模块代码)
fn abc()
s bb = &quot;456&quot;
sss cc = &quot;789&quot;
end fn

//（mian.iyu载入事件代码）
s bb = &quot;123&quot;
fn abc()

//将提示 123，因为模块代码与事件代码的局部变量是不共享的；
tw(bb)

//将提示 789，可以通过全局变量进行共享数据
tw(sss.cc)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=77');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ftz 发送通知栏</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

ftz(&quot;提醒标题&quot;, &quot;标题&quot;, &quot;内容&quot;, null)
{
tw(&quot;点击了&quot;)
}

//设置显示图标
ftz(&quot;提醒标题&quot;, &quot;标题&quot;, &quot;内容&quot;, &quot;%abc.png&quot;)
{
tw(&quot;点击了&quot;)
}

说明：
可以用于通知用户。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=78');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uapp 打开App应用或游戏</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
uapp(&quot;com.iapp&quot;, c)

//或 带有指定类名的启动
uapp(&quot;com.iapp&quot;, &quot;com.yougaile.MakeiApp.logoActivity&quot;, c)

说明：
输入应用包名，赋值变量； 赋值变量返回启动结果：true 或 false</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=79');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uapplist 获取App列表</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
uapplist(true, b)
sgsz(b, 1, d)
tw(d)

说明：
输入 是否包括获取系统App，返回一个列表数组 至变量 “b”，每列数据将存储一个应用的信息，并且以 “\n”隔开。

其中列内容格式：
应用包名，启动类，应用标题，应用版本</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=80');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uapplistgo 获取正在运行的App列表</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
uapplistgo(b)
sgsz(b, 1, d)
tw(d)

说明：
输入 返回一个列表数组 至变量 “b”，每列数据将存储一个应用的信息，并且以 “\n”隔开。

其中列内容格式：
应用包名，pid, uid</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=81');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uninapp 卸载应用</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
uninapp(&quot;com.iapp&quot;)

说明：
输入应用包名</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=82');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">huf 上传文件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
t()
{
s a = &quot;http://abc.com/upfile.php&quot;
s b = &quot;filename=iApp我的应用.apk&amp;test=一款非常好的应用哦&quot;
s c = &quot;%abc/iApp.apk&quot;
s d = &quot;utf-8&quot;
huf(a, b, c, d, e)
tw(e)
}

2.设置 header文件头，文件头包括了Cookie，User-Agent设备型号。。
t()
{
s a = &quot;http://abc.com/upfile.php&quot;
s b = &quot;filename=iApp我的应用.apk&amp;test=一款非常好的应用哦&quot;
s c = &quot;%abc/iApp.apk&quot;
s d = &quot;utf-8&quot;
s e = &quot;User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||Cookie=aa:123;bb:456;||accept-language=zh-CN&quot;
huf(a, b, c, d, e, e)
tw(e)
}

说明：
输入 http接口，表单内容，手机内存选择文件，接口的网页编码， 赋值变量。 返回网页内容将赋值给变量 “e”</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=83');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">nvw 创建动态控件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//将控件添加至指定的控件作为子控件
//输入要添加的控件ID或控件对象，输入添加至指定控件ID或控件对象
nvw(id, did)

//输入要添加的控件ID或控件对象，输入添加至指定控件ID或控件对象，输入插入指定序号
nvw(id, did, 0)

//创建文本控件
//输入控件ID，输入添加至指定控件ID或控件对象，输入控件类型，输入控件属性
s id = 123456
s did = 1
nvw(id, did, &quot;文本&quot;, &quot;width=-2\nheight=-2\ntext=内容&quot;)

//创建文本控件
//输入控件ID，输入添加至指定控件ID或控件对象（若不添加则输入null），输入控件类型，输入控件属性，赋值变量为创建控件的对象
s id = 123456
s did = 1
nvw(id, did, &quot;文本&quot;, &quot;width=-2\nheight=-2\ntext=内容&quot;, b)

说明：
输入创建的控件ID，输入将新控件添加至指定控件ID或控件对象，创建控件的类型，创建控件的属性，可带有赋值变量</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=84');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uall 获取子控件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//输入控件ID或控件对象，输入false时将赋值子控件ID，输入赋值变量将返回一个数据列表
uall(1, false, a)

//输入控件ID或控件对象，输入true时将赋值子控件对象，输入赋值变量将返回一个数据列表
uall(1, true, a)

s b = 1
gslist(a, b，c)
tw(c)

说明：
获取一个包含子控件的，控件中所有的子控件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=85');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">urvw 移除控件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
urvw(3)

说明：
输入需要移除的控件ID或控件对象</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=86');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sbp 图像分割</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//载入一个图像变量，并赋值到图像变量“b”
sbp(&quot;%1.png&quot;, b)

//载入一个用户图标，{裁剪图像区域（像素）：x坐标:80，y坐标:90，裁剪宽度:50，裁剪高度:60}
//并将裁剪好的赋值到图像变量“b”
sbp(&quot;%1.png&quot;, 80, 90, 50, 60, b)

//载入一个SD卡上的图标，{裁剪图像区域（像素）：x坐标:80，y坐标:90，裁剪宽度:50，裁剪高度:60}，图像旋转图像:180度
//并将裁剪好的赋值到图像变量“b”
sbp(&quot;%1.png&quot;, 80, 90, 50, 60, 180, b)

说明：
三种方式载入图像，从图像变量，从用户图标，从SD上图标；并可设置裁剪图片；可设置图像旋转； 并赋值到新的图像变量；</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=87');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">bfs 保存图像</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
bfs(b, &quot;%1.jpg&quot;)

//或 压缩比例（1至100）
bfs(b, 70, &quot;%1.jpg&quot;)

说明：
输入图像变量，输入压缩比例（1至100），输入保存图像的路径，图像将保存至该路径。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=88');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sdeg 启动调试模式</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
sdeg(0)
sdeg(1)
sdeg(2)

说明：
提示日志方式。0打包后没有任何提示，1打包后可任然打印错误，2打包后记录日志保存至文件 iApp/Log</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=89');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">tot 获取控件图标</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s id = 4
tot(id, b)

说明：
输入控件ID或控件对象，返回将赋值“b”图像变量。注：此方法仅限于 图片控件，图标按钮控件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=90');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">tzz 图像旋转</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
sbp(&quot;%1.png&quot;, a)
s b = 90
tzz(a, b, c)

说明：
输入被旋转图像变量，输入旋转度数（逆向旋转数为负数），返回将赋值“c”图像变量。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=91');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">tsf 图像缩放</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
sbp(&quot;%1.png&quot;, a)

//按照倍增缩放，值小于则为缩小，否则为放大
s b = 2
tsf(a, b, c)

//指定高度与宽度缩放
s w = 100
s h = 200
tsf(a, w, h, c)

说明：
输入被缩放图像变量，输入缩放倍数 或 指定图像高度与宽度缩放，返回将赋值“c”图像变量。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=92');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">tfz 图像反转</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
sbp(&quot;%1.png&quot;, a)
//水平反转
s b = &quot;x&quot;
tfz(a, b, c)

//垂直反转
s b = &quot;y&quot;
tfz(a, b, c)

说明：
输入被反转图像变量，输入反转方式 x为水平 y为垂直，返回将赋值“c”图像变量。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=93');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">tcc 获取图像变量尺寸</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
sbp(&quot;%1.png&quot;, a)
s b = &quot;w&quot;
tcc(a, b, c)
tw(c)

s b = &quot;h&quot;
tcc(a, b, c)
tw(c)

说明：
获取图像变量的 w宽度 和 h高度。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=94');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sxb 写入剪切板</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s a = &quot;nihao&quot;
sxb(a)

说明：
可用于复制到剪切板，其他应用可获取到此数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=95');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">shb 获取剪切板</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
shb(a)
tw(a)

说明：
可获取剪切板数据，得到其他地方写入的剪切板数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=96');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">usjxm 手机休眠</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
usjxm(false)

说明：
设置后手机将不休眠，不锁屏。默认为 true 需要休眠。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=97');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">bfvs 播放视频</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//设置SD卡视频文件
bfvs(1, &quot;%a.mp4&quot;)

//设置网络远程视频文件
bfvs(1, &quot;http://abc.com/a.mp4&quot;)

//增加控制器，c为赋值变量
bfvss(1, &quot;media&quot;, c)
//开始播放
bfvss(1, &quot;st&quot;)

说明：
自定义视频播放控件进行播放视频。

注意：
不支持加载assets文件。支持SD卡文件、（http）远程网络文件！

支持格式：
3gp、MP4、avi</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=98');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">bfvss 播放视频控制</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//开始播放
bfvss(1, &quot;st&quot;)

//暂停播放
bfvss(1, &quot;pe&quot;)

//停止播放
bfvss(1, &quot;sp&quot;)

//定位到指定帧
bfvss(1, &quot;seekto&quot;, 300)

//增加控制器，c为赋值变量
bfvss(1, &quot;media&quot;, c)

//是否在播放
bfvss(1, &quot;ip&quot;, c)
tw(c)

//获取视频时长（毫秒）
bfvss(1, &quot;dn&quot;, c)
tw(c)

//获取当前播放时长（毫秒）
bfvss(1, &quot;cn&quot;, c)
tw(c)</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=99');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">addv 加载界面</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//界面中载入其他界面
s id = 1
addv(id, &quot;a.iyu&quot;)
addv(id, &quot;b.iyu&quot;)

//侧滑窗体
s id = 1
addv(id, &quot;a.iyu|b.iyu&quot;)

//滑动窗体，将带有赋值变量。此处变量“b”赋值为根控件列表，先通过 gslist 访问指定序号的根控件。通过 gvs 指定的根控件访问指定ID的控件。
s id = 1
addv(id, &quot;a.iyu|b.iyu&quot;, b)



说明：
输入控件ID，输入界面名，输入辅助参数。可用将一个界面的控件，载入到指定控件作为子控件。

如何设置或获取属性上例 a.iyu 中的控件呢？
通过文件名作为对象，进行访问，如：

//注意：此对象的使用方式。
ug(a.2, &quot;text&quot;, b)
us(a.3, &quot;text&quot;, &quot;你好&quot;)

注意：
如果载入事件中使用 addv 滑动窗体进行绑定， 如果还需要给滑动窗体内的界面中的控件设置数据，需要将设置控件的代码写在 载入完毕事件 中。否将将可能设置数据失败。

注意：
若增加 侧滑窗体 与 滑动窗体 的子控件，需要在被载入的界面设计中，自设一个根目录，作为界面唯一根目录。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=100');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">gvs 获取控件对象</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//根据当前界面，来获取控件
//输入要获取的控件ID，输入赋值变量
gvs(1, c)

//根据控件对象，来获取内部的子控件
//输入控件ID或控件对象，输入要获取的控件ID，输入赋值变量
gvs(1, 2, c)

说明：
常用与于利用根控件获取内部的子控件 或 获取控件对象。获取失败将赋值返回 null</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=101');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">aslist 添加数据列表</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s b = &quot;你好&quot;
aslist(a, b)
s c = &quot;你好2&quot;
aslist(a, c)

//可插入数据到指定序号
s c = &quot;你好3&quot;
s b = 1
aslist(a, c, b)

说明：
输入列表对象，输入要添加的数据，输入插入指定序号。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=102');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sslist 数据列表设置数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s b = 1
s c = &quot;数据&quot;
sslist(a, b，c)


说明：
输入列表对象，输入指定数据序号，输入设置的数据</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=103');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">gslist 数据列表访问数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s b = 1
gslist(a, b，c)
tw(c)

说明：
输入列表对象，输入指定数据序号，输入赋值变量</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=104');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">gslistl 数据列表访问数据总数</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
gslistl(a, b)
tw(b)

说明：
输入列表对象，输入赋值变量</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=105');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dslist 数据列表删除指定数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s b = 1
dslist(a, b)

//清空所有数据
s b = -1
dslist(a, b)

说明：
输入列表对象，输入指定数据序号

提示：
如果需要清空所有数据，[输入指定数据序号]可输入 -1 即会删除当前数据列表所有数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=106');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">gslistsz 列表数据转化为数组</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
gslistsz(a, b)

说明：
输入列表对象，输入赋值变量</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=107');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">gslistis 列表数据检查是否存在指定数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s b = &quot;数据&quot;
gslistis(a, b, c)

说明：
输入列表对象，被判断的数据，输入赋值变量。赋值数据：true 或 false</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=108');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">gslistiof 列表数据从头开始检查是否包含该数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s b = &quot;数据&quot;
gslistiof(a, b, c)

说明：
输入列表对象，被判断的数据，输入赋值变量</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=109');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">gslistlof 列表数据从尾开始检查是否包含该数据</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s b = &quot;数据&quot;
gslistlof(a, b, c)

说明：
输入列表对象，被判断的数据，输入赋值变量</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=110');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">nuibs 背景选择器</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//使用颜色作为背景
s pressed = &quot;#333333&quot;
s selected = &quot;#333333&quot;
s normal = &quot;#888888&quot;
nuibs(pressed, selected, normal, b)


//使用图像作为背景
s pressed = &quot;%a.png&quot;
s selected = &quot;%a.png&quot;
s normal = &quot;%b.png&quot;
nuibs(pressed, selected, normal, b)


//使用渐变颜色作为背景
.配置选中状态背景
s a = 0
s b = 0
s c = &quot;#255779|#3e7492|#a6c0cd&quot;
s d = &quot;0&quot;
s e = &quot;topbottom&quot;
ngde(a, b, c, d, e, pressed)

.配置正常状态背景
s a = 0
s b = 0
s c = &quot;#255779|#3e7492|#a6c0cd&quot;
s d = &quot;0&quot;
s e = &quot;rightleft&quot;
ngde(a, b, c, d, e, normal)

s selected = pressed

nuibs(pressed, selected, normal, b)

说明：
输入按下背景，输入选中背景，正常状态背景，输入赋值变量。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=111');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ngde 背景调控器</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//输入圆角半径，输入背景填充色，输入赋值变量
s a = 15
s b = &quot;#888888&quot;
ngde(a, b, c)

//输入边框宽度，输入背景填充色，输入边框颜色，输入赋值变量
s a = 5
s b = &quot;#888888&quot;
s c = &quot;#333333&quot;
ngde(a, b, c, d)

//输入边框宽度，输入圆角半径，输入背景填充色，输入边框颜色，输入赋值变量
s a = 5
s b = 15
s c = &quot;#888888&quot;
s d = &quot;#333333&quot;
ngde(a, b, c, d, e)

//颜色渐变。输入边框宽度，输入圆角半径，输入背景填充渐变色组，输入边框颜色，输入颜色渐变方向，输入赋值变量
s a = 5
s b = 15
s c = &quot;#255779|#3e7492|#a6c0cd&quot;
s d = &quot;#333333&quot;
s e = &quot;topbottom&quot;
ngde(a, b, c, d, e, f)

说明：
背景空调生成的赋值变量，可配合背景选择器进行应用。

注意：
ngde 代码将赋值返回一个背景对象，此背景对象如果被多个不同大小的控件引用为背景。因为控件的大小不同，会导致此背景对象大小被修改。从而影响其他引用者控件。

提示：
边框与圆角半径 若不想调整，可设值为0 。适用于颜色渐变，不需要调节圆角半径和边框。

颜色渐变方向说明：
	topbottom：绘制从顶部梯度至底部
	trbl：借鉴右上角渐变左下角
	rightleft：绘制从右侧的梯度向左
	brtl：借鉴右下角渐变左上角
	bottomtop：绘制从底部梯度顶端
	bltr：借鉴渐变左下角到右上角
	leftright：绘制从左侧的梯度向右
	TL_BR：从绘制渐变的左上角到右下角</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=112');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sit 目标的设置</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//如，分享软件
//输入对象，输入属性标识，输入属性值
sit(a, &quot;action&quot;, &quot;android.intent.action.SEND&quot;)
sit(a, &quot;type&quot;, &quot;text/plain&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.SUBJECT&quot;, &quot;共享软件&quot;)
sit(a, &quot;extra&quot;, &quot;android.intent.extra.TEXT&quot;, &quot;共享内容文本&quot;)
sit(a, &quot;flags&quot;, 268435456)
uit(a, &quot;chooser&quot;, &quot;标题&quot;)

说明：
常用于调用系统程序以及功能 或 第三方程序功能。

可属性标识：action、type、extra、flags、data、classname、component</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=113');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uit 目标的执行</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//输入目标对象，输入属性，输入属性值
uit(a, &quot;chooser&quot;, &quot;标题&quot;)

//输入目标对象，输入属性，输入请求数值
uit(a, &quot;result&quot;, 1)

//输入目标对象
uit(a)

说明：
常用于调用系统程序以及功能 或 第三方程序功能。

属性支持：chooser、result</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=114');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">git 目标获取参数</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//输入目标对象，输入属性标识，输入赋值变量
git(a, &quot;action&quot;, c)
git(a, &quot;type&quot;, c)
git(a, &quot;extra&quot;, &quot;title&quot;, c)
git(a, &quot;flags&quot;, c)

说明：
获取目标的属性。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=115');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uqr 二维码扫描</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//扫描二维码
uqr()

//扫描结果，需要在 回调结果事件 写代码
f(st_sC == 1102)
{
git(st_iT, &quot;extra&quot;, &quot;result&quot;, c)
tw(c)
}


//生成二维码图像
s a = &quot;https://m.baidu.com&quot;
//输入字符串数据，输入图像长宽像素，输入赋值变量；将返回一个图像变量
uqr(a, 400, c)


//识别二维码图像
//输入图像变量或图片路径，输入赋值变量；将返回一个字符串
uqr(a, c)

说明：
常用于网络通用二维码扫描。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=116');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">zdp  dip转换px</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s dp = 10
//输入dp数值，输入赋值变量
zdp(dp, c)

说明：
用于常用数据转换。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=117');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">zpd  px转换dip</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s px = 10
//输入px数值，输入赋值变量
zpd(px, c)

说明：
用于常用数据转换。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=118');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">zps  px转换sp</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s px = 10
//输入px数值，输入赋值变量
zps(px, c)

说明：
用于常用数据转换。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=119');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">zsp  sp转换px</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s sp = 10
//输入sp数值，输入赋值变量
zsp(sp, c)

说明：
用于常用数据转换。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=120');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">lan 跳转界面动画</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
uigo(&quot;abc.iyu&quot;)
//输入跳转界面动画的序号；6 右往左推出效果
lan(6)

说明：
用于跳转界面时候进行的动画效果

提示：
0.淡入淡出效果 1.放大淡出效果 2.转动淡出效果1 3.转动淡出效果2 4.左上角展开淡出效果 5.压缩变小淡出效果 6.右往左推出效果 7.下往上推出效果 8.左右交错效果 9.放大淡出效果 10.缩小效果 11.上下交错效果</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=121');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sjxx 获取设备信息</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
sjxx(a)
sgsz(a, 0, d)
tw(d)

说明：
获取手机基本信息，将返回一个数组到赋值变量“a”，数组格式如下：

数据格式：（真实数据 \n 旁边将不没有空格）

CPU型号 \n CPU频率
屏幕宽度 \n 屏幕高度 \n 分辨率宽度 \n 分辨率高度
手机型号 \n 手机品牌 \n 手机SDK</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=122');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">simsi 获取设备imsi</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
simsi(a)
tw(a)

说明：
常用于识别用户的手段。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=123');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">simei 获取设备imei</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
simei(a)
tw(a)

说明：
常用于识别用户的手段。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=124');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">endkeyboard 强制隐藏虚拟键盘</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
endkeyboard()

说明：
常用于需要隐藏安卓弹出的虚拟键盘。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=125');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hdfl 文件下载器</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//两个参数的方法设置
s savedir = &quot;%SaveDir&quot;
//输入下载保存目录，输入赋值变量返回一个下载器对象
hdfl(savedir, a)
{
//每当下载完一个执行
//系统赋值 st_drD 文件下载项的序号
//系统赋值 st_drI 文件下载项的状态

//获取下载的URL
ulag(a, st_drD, &quot;url&quot;, b1)
syso(b1)

//获取自定义整数标识
ulag(a, st_drD, &quot;type&quot;, b2)
syso(b2)

//获取自定义参数任意数据
ulag(a, st_drD, &quot;text&quot;, b3)
syso(b3)

//获取下载文件保存的路径
ulag(a, st_drD, &quot;filename&quot;, b4)
syso(b4)

}
else
{
//当下载完目前所有执行
//系统赋值 st_drJ 本次文件下载完成总数
ufnsui()
{
tw(st_drJ)
}
}

//三个参数的方法设置
s tempdir = &quot;%TempDir&quot;
s savedir = &quot;%SaveDir&quot;
//输入下载临时文件保存目录，输入下载保存目录，输入赋值变量返回一个下载器对象
hdfl(tempdir, savedir, a)
{
ufnsui()
{
tw(st_drD)
}
}
else
{
ufnsui()
{
tw(st_drJ)
}
}

//六个参数的方法设置
s tempdir = &quot;%TempDir&quot;
s savedir = &quot;%SaveDir&quot;
//输入下载临时文件保存目录，输入下载保存目录, 下载线程数量，连接网络超时时间（25秒的意思），文件重复是否覆盖，输入赋值变量返回一个下载器对象
hdfl(tempdir, savedir, 3, 25000, true, a)
{
ufnsui()
{
tw(st_drD)
}
}
else
{
ufnsui()
{
tw(st_drJ)
}
}

说明：
常用与单个或多个的文件下载。推荐图片列表下载或小文件下载。

提示：
代码{ 区域中 }属于线程内执行。在其中更新界面控件属性需要使用ufnsui代码
上例子使用tw代码，并且用了ufnsui代码。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=126');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hdfla 文件下载器 增加文件下载项</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//创建一个文件下载器
hdfl(tempdir, a)
{
ufnsui()
{
tw(st_drD)
}
}
else
{
ufnsui()
{
tw(st_drJ)
}
}

//增加下载项
//输入下载器对象，输入下载连接URL，输入自定义整数标识，输入自定义参数任意数据
hdfla(a, &quot;http://abc.com/1.jpg&quot;, 1, &quot;abcd123&quot;)


//增加下载项，并且自定义保存目录
//输入下载器对象，输入下载连接URL，输入自定义整数标识，输入自定义参数任意数据，输入自定义保存路径
hdfla(a, &quot;http://abc.com/2.jpg&quot;, 1, &quot;abcd123&quot;, &quot;%abc.jpg&quot;)

说明：
调用下载器增加下载项，并且立刻进行下载。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=127');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hdd 配置下载管理器</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//下载产生的临时文件目录
s a = &quot;%tempdir&quot;
//下载至保存的目录
s b = &quot;%filedir&quot;
//允许同时下载任务数量
s c = 3
//每个任务开启线程数量
s d = 3
//连接失败重试次数
s e = 2
//连接超时时间，25秒的意思
s f = 25000
//是否显示下载进度通知
s g = true
hdd(a, b, c, d, e, f, g)

说明：
如果不使用此代码进行配置，那么系统将使用默认配置。下载配置器可以很方便的制作下载文件，并且方便管理。

默认目录属性：
临时文件目录：iApp/DownloadFileDir/TempDefaultDownFile
保存文件目录：iApp/DownloadFileDir/DefaultDownFile</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=128');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hdda 下载管理器 增加文件下载项</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//===========方法一
//下载的链接
s url = &quot;http://abc.com/abc.apk&quot;

//保存的文件名（仅输入文件名,请勿不包含目录）
s name = &quot;abc.apk&quot;

//输入自定义参数任意数据
s data = &quot;abcde123&quot;

//变量v为赋值变量，为下载对象
hdda(url, name, data, v)

//===========方法二
//下载的链接
s url = &quot;http://abc.com/abc.apk&quot;

//保存的文件名（仅输入文件名,请勿不包含目录）
s name = &quot;abc.apk&quot;

//下载任务的标题
s title = &quot;abc.apk最新版&quot;

//输入自定义参数任意数据
s data = &quot;abcde123&quot;

//变量v为赋值变量，为下载对象
hdda(url, name, title, data, v)

//===========方法三
//下载的链接
s url = &quot;http://abc.com/abc.apk&quot;

//保存的文件名（仅输入文件名,请勿不包含目录）
s name = &quot;abc.apk&quot;

//下载任务的标题
s title = &quot;abc.apk最新版&quot;

//下载任务的图标
s icon = &quot;@abc.png&quot;

//输入自定义参数任意数据
s data = &quot;abcde123&quot;

//变量v为赋值变量，为下载对象
hdda(url, name, title, icon, data, v)

//===========方法四
//下载的链接
s url = &quot;http://abc.com/abc.apk&quot;

//保存至目录
s dir = &quot;%filedir&quot;

//保存的文件名（仅输入文件名,请勿不包含目录）
s name = &quot;abc.apk&quot;

//下载任务的标题
s title = &quot;abc.apk最新版&quot;

//下载任务的图标
s icon = &quot;@abc.png&quot;

//是否显示下载进度通知
s notsohw = true

//输入自定义参数任意数据
s data = &quot;abcde123&quot;

//变量v为赋值变量，为下载对象
hdda(url, dir, name, title, icon, notsohw, data, v)

说明：
增加常用的网络文件进行下载。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=129');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hddgl 获取下载管理器下载列表</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//输入赋值变量返回下载列表
hddgl(list)

//使用for循环下载列表
for(b; list)
{
hddg(b, &quot;url&quot;, c)
syso(c)
}

说明：
获取下载管理器所有的下载列表。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=130');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hddg 获取下载管理器获取下载项属性</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//下载的链接
s url = &quot;http://abc.com/abc.apk&quot;
//保存的文件名（仅输入文件名,请勿不包含目录）
s name = &quot;abc.apk&quot;
//输入自定义参数任意数据
s data = &quot;abcde123&quot;
//变量v为赋值变量，为下载对象
hdda(url, name, data, v)

//===========获取下载项的属性
//获取下载项的 ID
hddg(v, &quot;id&quot;, b)

//获取下载项的 下载链接
hddg(v, &quot;url&quot;, b)

//获取下载项的 保存的绝对路径
hddg(v, &quot;dirfilename&quot;, b)

//获取下载项的 下载链接的md5
hddg(v, &quot;urlmd5&quot;, b)

//获取下载项的 保存的目录
hddg(v, &quot;dir&quot;, b)

//获取下载项的 保存的文件名
hddg(v, &quot;filename&quot;, b)

//获取下载项的 下载文件的大小（字节）
hddg(v, &quot;contentlength&quot;, b)

//获取下载项的 已下载的数据（字节）
hddg(v, &quot;equivalent&quot;, b)

//获取下载项的 当前下载速度（字节）
hddg(v, &quot;downloadspeed&quot;, b)

//获取下载项的 当前下载进度百分比
hddg(v, &quot;downloadpercentage&quot;, b)

//获取下载项的 下载状态；（0为等待下载；1为正在下载；2为下载完成；3下载已经暂停或停止；-1下载失败；-2已删除）
hddg(v, &quot;status&quot;, b)

//获取下载项的 是否显示下载通知
hddg(v, &quot;notificationshow&quot;, b)

//获取下载项的 自定义的数据
hddg(v, &quot;text&quot;, b)

//获取下载项的 通知标题
hddg(v, &quot;title&quot;, b)

//获取下载项的 通知图标
hddg(v, &quot;icon&quot;, b)

说明：
可获取详细的下载项目状态属性。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=131');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hdds 设置下载管理器下载项的属性</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//下载的链接
s url = &quot;http://abc.com/abc.apk&quot;
//保存的文件名（仅输入文件名,请勿不包含目录）
s name = &quot;abc.apk&quot;
//输入自定义参数任意数据
s data = &quot;abcde123&quot;
//变量v为赋值变量，为下载对象
hdda(url, name, data, v)

//===========可设置的下载项属性

//设置下载项的 下载状态；（0为等待下载；1为正在下载；2为下载完成；3下载已经暂停或停止；-1下载失败；-2已删除）
hdds(v, &quot;status&quot;, 0)

//设置下载项的 是否显示下载通知
hdds(v, &quot;notificationshow&quot;, true)

//设置下载项的 自定义的数据
hdds(v, &quot;text&quot;, &quot;abcd123&quot;)

//设置下载项的 通知标题
hdds(v, &quot;title&quot;, &quot;abc.apk最新版本&quot;)

//设置下载项的 通知图标
hdds(v, &quot;icon&quot;, &quot;@abc.png&quot;)

说明：
设置下载项目的属性。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=132');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hdduigo 跳转至下载管理器</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//跳转至下载管理器
hdduigo()

//跳转至下载管理器，并且自定义标题栏颜色
//主体颜色
s a = &quot;#387bd6&quot;
//底部横杠颜色
s b = &quot;#255eab&quot;
hdduigo(a, b)

说明：
跳转至文件下载的管理器。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=133');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ufnsui 线程更新界面</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
ufnsui()
{
tw(a)
us(1, &quot;text&quot;, &quot;内容&quot;)
}

说明：
线程中直接修改界面或修改设置控件属性，出错。
需要使用ufnsui模块进行更新或设置控件属性。

提示：
线程中获取控件数据不会出错。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=134');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">se 正则表达式操作</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//===========例子1；所有属性展示
//字符串
s a = &quot;qqqq123456eee&quot;
//正则表达式
s b = &quot;([a-z]+)(\d+)&quot;
//更多参数
s c = 0
se(a, b, c, d)

//替换成，将替换全部
se(d, &quot;sral&quot;, &quot;1:$1, 2:$2&quot;, e)
syso(e)
//替换成，只替换第一个
se(d, &quot;srft&quot;, &quot;1:$1, 2:$2&quot;, e)
syso(e)

//返回是否匹配成功，需字符串被完全匹配，赋值返回true或 false
.se(d, &quot;ms&quot;, e)

//开始匹配 或 匹配下一个，赋值返回true或 false
.se(d, &quot;find&quot;, e)

//给定位置序号进行匹配，赋值返回true或 false
.se(d, &quot;find&quot;, 1, e)

//获取匹配组的数量，当前为2组：([a-z]+)、(\d+)
.se(d, &quot;gl&quot;, e)

//获取第1组匹配到的子字符串在字符串中的开头位置 
.se(d, &quot;start&quot;, 1, e)

//获取第1组匹配到的子字符串在字符串中的结尾位置 
.se(d, &quot;end&quot;, 1, e)

//获取第1组匹配到的子字符串
.se(d, &quot;group&quot;, 1, e)
//获取第2组匹配到的子字符串
.se(d, &quot;group&quot;, 2, e)


//===========例子2；获取所有手机号

//字符串
s a = &quot;我的号码 13612345678 , 你的号码 13412345678&quot;
//正则表达式
s b = &quot;[1][3-8]\d{9}&quot;
//更多参数
s c = 0
se(a, b, c, d)

//开始匹配 或 匹配下一个
se(d, &quot;find&quot;, e)

//循环判断是否匹配成功
w(e == true)
{
//因为 [1][3-8]\d{9} 没有组，所以这里我们输入 0
se(d, &quot;group&quot;, 0, e)

//打印出匹配到的子字符串
syso(e)

//开始匹配 或 匹配下一个
se(d, &quot;find&quot;, e)
}

//===========例子3；判断是否为手机号

//字符串
s a = &quot;13612345678&quot;
//正则表达式
s b = &quot;^[1][3-8]\d{9}$&quot;
//更多参数
s c = 0
se(a, b, c, d)

se(d, &quot;ms&quot;, e)
f(e == true)
{
syso(&quot;手机号格式正确&quot;)
}
else
{
syso(&quot;手机号格式错误&quot;)
}


说明：
常用与字符串处理，高效的处理字符串，以及检测字符串类型等。使用此方法，需要对正则表达式有部分知识。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=135');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">usg 闪光灯操作</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//开启闪光灯
//输入闪光灯变量对象，输入是否开启闪光灯
usg(sss.sgd, true)

//关闭闪光灯
//输入闪光灯变量对象，输入是否开启闪光灯
usg(sss.sgd, false)

说明：
开启或关闭 设备闪光灯！

说明：
常用照明。

注意：
此方法调用将无法与摄像头同时调用。如启动摄像头需要使用闪光灯，可在摄像头操作中开启闪光灯。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=136');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uzd 震动器操作</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//震动1秒时长
//输入振动器变量对象，输入震动时长
uzd(sss.zdq, 1000)

//静止1秒，震动1秒，静止1秒，震动1秒，静止1秒，震动1秒，静止1秒，..， 并且不重复
//输入振动器变量对象，输入震动规则，输入是否重复循环执行
uzd(sss.zdq, &quot;1000 1000 1000 1000 1000 1000 1000 1000&quot;, false)

//强制停止震动器
uzd(sss.zdq, &quot;sp&quot;)

//检查硬件是否具有振动器
uzd(sss.zdq, &quot;ip&quot;, b)
syso(b)

说明：
常用提示用户。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=137');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">usxq 开启前置摄像头</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//开启摄像头
//输入摄像头变量对象，输入面控件的对象或ID，摄像头旋转角度
usxq(sss.ps, 1, 90)

//输入摄像头变量对象，输入面控件的对象或ID，摄像头旋转角度，输入拍摄宽度像素，输入拍摄高度像素，输入图像品质1-100
usxq(sss.ps, 1, 90, 640, 480, 95)

//自动对焦拍摄
//输入摄像头变量对象，输入保存路径，输入图像旋转角度，输入拍摄是否停止预览
usx(sss.ps, &quot;shot&quot;, &quot;%abc.jpg&quot;, -90, false)

说明：
指定打开前置摄像头。

注意：
此功能需要与一个面控件进行绑定，你可以在面控件上面设置拍摄事件。

注意：
此代码仅限于载入事件调用。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=138');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">usxh 开启后置摄像头</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//开启摄像头
//输入摄像头变量对象，输入面控件的对象或ID，摄像头旋转角度
usxh(sss.ps, 1, 90)

//输入摄像头变量对象，输入面控件的对象或ID，摄像头旋转角度，输入拍摄宽度像素，输入拍摄高度像素，输入图像品质1-100
usxh(sss.ps, 1, 90, 1280, 960, 95)

//自动对焦拍摄
//输入摄像头变量对象，输入保存路径，输入图像旋转角度，输入拍摄是否停止预览
usx(sss.ps, &quot;shot&quot;, &quot;%abc.jpg&quot;, 90, false)

说明：
指定打开后置摄像头。

注意：
此功能需要与一个面控件进行绑定，你可以在面控件上面设置拍摄事件。

注意：
此代码仅限于载入事件调用。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=139');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">usx 摄像头操作</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//开启摄像头
usxh(sss.ps, 1, 90)

//自动对焦拍摄
//输入摄像头变量对象，输入保存路径，输入图像旋转角度，输入拍摄是否停止预览
usx(sss.ps, &quot;shot&quot;, &quot;%abc.jpg&quot;, 90, false)

//开始预览
usx(sss.ps, &quot;st&quot;)

//停止预览
usx(sss.ps, &quot;sp&quot;)

//旋转摄像头角度
usx(sss.ps, &quot;rotaing&quot;, 180)
//获取旋转摄像头角度
usx(sss.ps, &quot;getrotaing&quot;, b)
syso(b)

//启动摄像头闪光灯
usx(sss.ps, &quot;usg&quot;, true)

//结束摄像头组件变量对象
usx(sss.ps, &quot;re&quot;)

说明：
摄像头的控制。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=140');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">bly 录制音频</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//开始录制
//输入录音变量对象，输入保存文件路径
bly(sss.ly, &quot;%abcd.amr&quot;)

//停止录音
bly(sss.ly, &quot;sp&quot;)

说明：
常用于录制音频。

说明：
可使用 bfm 代码来播放录制好的音频。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=141');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">ujp 截取屏幕</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//输入保存路径，输入图像品质（1-100）
ujp(&quot;%123.jpg&quot;, 70)

说明：
常用于截取当前界面。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=142');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sqlite 数据库操作</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//连接一个私有数据库，如果不存在将自动新建
//输入数据库对象变量，输入数据库文件名
sqlite(sss.data, &quot;iapp.db&quot;)

//连接一个公共数据库，如果不存在将自动新建
//输入数据库对象变量，输入数据库文件名
sqlite(sss.data, &quot;%iapp.db&quot;)

//判断数据库是否存在
sqlite(&quot;iapp.db&quot;, &quot;ip&quot;, b)
syso(b)

//删除数据库
sqlite(&quot;iapp.db&quot;, &quot;del&quot;, b)
syso(b)

//释放数据库
sqlite(sss.data, &quot;re&quot;)

说明：
进行数据库的操作。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=143');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sqlsele 查询数据操作</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//获取光标对象的第一列数据
sqlsele(data, 0, e)

//获取光标对象有多少列
sqlsele(data, &quot;columncount&quot;, e)
syso(e)

//获取总共查询到多少条数据
sqlsele(data, &quot;count&quot;, e)
syso(e)

//光标对象移到下一条数据
sqlsele(data, &quot;next&quot;, e)

//光标对象移到上一条数据
sqlsele(data, &quot;previous&quot;, e)

//光标对象移到第一条数据
sqlsele(data, &quot;first&quot;, e)

//光标对象移到最后第一条数据
sqlsele(data, &quot;last&quot;, e)

//光标对象移到指定第2条数据
sqlsele(data, &quot;position&quot;, 2)

//获取光标对象当前位置
sqlsele(data, &quot;getposition&quot;, e)
syso(e)

//释放数据查询
sqlite(data, &quot;re&quot;)

说明：
数据查询的操作。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=144');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dha 渐变透明度动画</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//创建一个渐变透明度动画，开始显示，然后渐变消失
//输入动画开始是否透明，输入动画结束是否透明
dha(dh, true, false)
dh(dh, &quot;duration&quot;, 2000)
us(2, &quot;dh&quot;, dh)

说明：
常用于控件透明度动画。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=145');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dhs 渐变尺寸伸缩动画</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//创建一个渐变尺寸伸缩动画
//0为没有，2.5为原始2.5倍

//输入X开始尺寸比例，输入X结束尺寸比例，输入Y开始尺寸比例，输入Y结束尺寸比例
dhs(dh, 0.5, 2.5, 0.5, 2.5)
dh(dh, &quot;duration&quot;, 2000)
us(2, &quot;dh&quot;, dh)

//输入X开始尺寸比例，输入X结束尺寸比例，输入Y开始尺寸比例，输入Y结束尺寸比例，输入X位置类型，输入X坐标的开始位置，输入Y位置类型，输入Y坐标的开始位置
dhs(dh, 0.5, 2.5, 0.5, 2.5, 1, 0.5, 1, 0.5)
dh(dh, &quot;duration&quot;, 2000)
us(2, &quot;dh&quot;, dh)

说明：
常用于控件伸缩动画。

位置类型：
0 默认
1 以对象本身为基准位置类型
2 以父控件为基准位置类型</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=146');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dht 画面位置移动动画</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//创建一个画面位置移动动画
//输入开始X坐标上的移动位置，结束X坐标上的移动位置，开始Y坐标上的移动位置，结束Y坐标上的移动位置
dht(dh, 30, 80, 30, 80)
dh(dh, &quot;duration&quot;, 2000)
us(2, &quot;dh&quot;, dh)

说明：
常用于控件移动动画。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=147');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dhr 画面旋转动画</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//创建一个画面旋转动画
//输入动画开始的旋转角度，输入动画旋转到的角度
dhr(dh, 0, 180)
dh(dh, &quot;duration&quot;, 2000)
us(2, &quot;dh&quot;, dh)

//输入动画开始的旋转角度，输入动画旋转到的角度，输入X位置类型，输入X坐标的开始位置，输入Y位置类型，输入Y坐标的开始位置
dhr(dh, 0, 180, 1, 0.5, 1, 0.5)
dh(dh, &quot;duration&quot;, 2000)
us(2, &quot;dh&quot;, dh)

说明：
常用于控件旋转动画。

位置类型：
0 默认
1 以对象本身为基准位置类型
2 以父控件为基准位置类型</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=148');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dhset 动画集合</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//渐变尺寸伸缩动画
dhs(dh1, 0.5, 2.5, 0.5, 2.5)
dh(dh1, &quot;duration&quot;, 2000)

//画面位置移动动画
dht(dh2, 30, 80, 30, 80)
dh(dh2, &quot;duration&quot;, 2000)

//画面旋转动画
dhr(dh3, 0, 180)
dh(dh3, &quot;duration&quot;, 2000)

//创建一个动画集合
//输入动画集合变量对象，输入是否使用动画集合的interpolator，输入动画...（可输入N个参数）
dhset(dhlist, false, dh1, dh2, dh3, dh4)
us(2, &quot;dh&quot;, dhlist)
	
说明：
常用于动画集合执行。

提示：
动画集合允许被其他动画集合添加成为子动画。

提示：
动画集合如果设置了动画控制属性，同时也会重置所有子控件的属性。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=149');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dhas 队列动画执行</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//旋转动画
//输入动画变量对象，输入控件ID或控件对象，输入动画类型，输入旋转角度...（可输入N个参数）
dhas(dh, 2, &quot;rotation&quot;, 60, 180)
//dhas(dh, 2, &quot;rotationX&quot;, 30, 80, 60, 20, 60)
//dhas(dh, 2, &quot;rotationY&quot;, 30, 80)
dh(dh, &quot;duration&quot;, 2000)
dh(dh, &quot;start&quot;)

//伸缩动画
//输入动画变量对象，输入控件ID或控件对象，输入动画类型，输入伸缩尺寸比例...（可输入N个参数）
dhas(dh, 2, &quot;scaleX&quot;, 1.5, 2.5)
//dhas(dh, 2, &quot;scaleY&quot;, 1.5, 2.5, 1.2, 2.6, 1.3)
dh(dh, &quot;duration&quot;, 2000)
dh(dh, &quot;start&quot;)

//移动动画
//输入动画变量对象，输入控件ID或控件对象，输入动画类型，输入移动到位置...（可输入N个参数）
dhas(dh, 2, &quot;translationX&quot;, 0, 60)
//dhas(dh, 2, &quot;translationY&quot;, 0, 60, 30, 10, 60)
dh(dh, &quot;duration&quot;, 2000)
dh(dh, &quot;start&quot;)

//透明度
//输入动画变量对象，输入控件ID或控件对象，输入动画类型，可见度比例(0.0至1.0)...（可输入N个参数）
dhas(dh, 2, &quot;alpha&quot;, 1, 0.3, 1, 0.2, 1)
dh(dh, &quot;duration&quot;, 2000)
dh(dh, &quot;start&quot;)

说明：
自定义队列动画执行。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=150');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dhast 队列动画集合</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//旋转动画
dhas(dh1, 2, &quot;rotation&quot;, 60, 180)
dh(dh1, &quot;duration&quot;, 2000)

//伸缩动画
dhas(dh2, 2, &quot;scaleX&quot;, 1.5, 2.5)
dh(dh2, &quot;duration&quot;, 2000)

//移动动画
dhas(dh3, 2, &quot;translationX&quot;, 0, 60)
dh(dh3, &quot;duration&quot;, 2000)

//透明度
dhas(dh4, 2, &quot;alpha&quot;, 1, 0.3, 1, 0.2, 1)
dh(dh4, &quot;duration&quot;, 2000)

//顺序执行
dhast(dhlist, &quot;sequen&quot;, dh1, dh2, dh3, dh4)

//同时执行
//dhast(dhlist, &quot;together&quot;, dh1, dh2, dh3, dh4)
dh(dhlist, &quot;start&quot;)

说明：
常用于动画集合执行。

提示：
队列动画集合允许被其他队列动画集合添加成为子动画。

提示：
动画集合如果设置了动画控制属性，同时也会重置所有子控件的属性。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=151');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dh 动画控制</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//========动画的属性（非队列动画）设置========================

//取消动画，取消后若需要重新播放，需要先执行 reset 然后再执行 start 进行播放
dh(dh, &quot;cancel&quot;)

//重置动画属性
dh(dh, &quot;reset&quot;)

//启动动画
dh(dh, &quot;start&quot;)

//动画持续时长
dh(dh, &quot;duration&quot;, 2000)

//延迟执行，延迟指定时长后才执行动画
dh(dh, &quot;delay&quot;, 2000)

//启动动画结束填充效果（如果设false 那么 after 与 before将无效）
dh(dh, &quot;enabled&quot;, true)

//动画执行后，控件停留执行结束状态
dh(dh, &quot;after&quot;, true)

//动画执行后，控件停留执行开始状态
dh(dh, &quot;before&quot;, true)

//动画重复执行的次数
dh(dh, &quot;repeat&quot;, 20)

dhas(dh2, 2, &quot;rotation&quot;, 60, 180)
//动画集合添加动画，仅用于 dhset 动画集合追加更多的动画
dh(dh, &quot;add&quot;, dh2)

//========队列动画的属性设置========================

//取消动画
dh(dh, &quot;cancel&quot;)

//播放动画
dh(dh, &quot;start&quot;)

//动画持续时长
dh(dh, &quot;duration&quot;, 2000)

//延迟执行，延迟指定时长后才执行动画
dh(dh, &quot;delay&quot;, 2000)

//动画是否正在运行
dh(dh, &quot;running&quot;, b)
syso(b)

//设置动画执行的控件ID或控件对象
dh(dh, &quot;target&quot;, 2)

//克隆动画
dh(dh, &quot;clone&quot;, dh2)

说明：
常用于动画的控制管理。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=152');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dhon 动画监听事件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//========动画（非队列动画）设置监听事件========================
dhon(dh)
{
//当结束动画时
syso(&quot;End&quot;)
}

//或

dhon(dh)
{
//当结束动画时
syso(&quot;End&quot;)
}
else
{
//当重复动画时
syso(&quot;Repeat&quot;)
}
else
{
//当启动动画时
syso(&quot;Start&quot;)
}

//========队列动画设置监听事件========================

dhon(dh)
{
//当结束动画时
syso(&quot;End&quot;)
}

//或

dhon(dh)
{
//当结束动画时
syso(&quot;End&quot;)
}
else
{
//当重复动画时
syso(&quot;Repeat&quot;)
}
else
{
//当启动动画时
syso(&quot;Start&quot;)
}
else
{
//当取消动画时
syso(&quot;Cancel&quot;)
}

说明：
常用于动画状态的监听。

提示：
该事件使用的选择性，可顺序选择性保留。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=153');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">dhb 动画背景</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//创建动画背景
//输入动画背景变量对象，输入是否重复执行
dhb(dh, true)

//添加元素
//输入动画背景变量对象，输入背景图像或图片变量或背景对象，输入显示时长
dhb(dh, &quot;@t1.png&quot;, 1000)
dhb(dh, &quot;@t2.png&quot;, 1000)
dhb(dh, &quot;@t3.png&quot;, 1000)

//设为指定控件背景
us(2, &quot;background&quot;, dh)

//启动动画
dhb(dh, &quot;start&quot;)

//停止动画
//dhb(dh, &quot;stop&quot;)

//是否在运行
dhb(dh, &quot;running&quot;, b)
syso(b)

说明：
常用于组合一个背景动画。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=154');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">hsas 开启浏览器控件交互(裕语言+js+html5)</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//开启浏览器控件支持iapp交互
//输入浏览器控件ID或对象，输入是否开启
hsas(1, true)

//hsas(1, false)

说明：
常用于浏览器中的JavaScript代码于iapp代码的互相调用。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=155');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uxf 显示悬浮窗</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//输入界面名，输入宽度，输入高度，输入对其方式，输入赋值变量
s w = -1
s h = -1
s gravity = &quot;top|right&quot;
uxf(&quot;a.iyu&quot;, w, h, gravity, sss.v)


//输入界面名，输入X显示位置，输入Y显示位置，输入宽度，输入高度，输入类型的窗口，输入对其方式，输入flags，输入format，输入赋值变量
s x = 0
s y = 0
s w = -1
s h = -1
s type = 0
s gravity = &quot;top|right&quot;
s flags = 0
s format = 0
uxf(&quot;a.iyu&quot;, x, y, w, h, type, gravity, flags, format, sss.v)


//刷新悬浮窗口的布局，常用于通过us设置后的刷新
//输入界面根控件的控件对象
uxf(sss.v)


//移除悬浮窗口
//输入界面根控件的控件对象，输入标识
uxf(sss.v, &quot;del&quot;)


//重置悬浮窗的属性
//输入界面根控件的控件对象，输入标识，输入X显示位置，输入Y显示位置，输入宽度，输入高度，输入对其方式
s x = 0
s y = 0
s w = -2
s h = -2
s gravity = &quot;top|right&quot;
uxf(sss.v, &quot;set&quot;, x, y, w, h, gravity)

//重置悬浮窗的属性
//输入界面根控件的控件对象，输入标识，输入X显示位置，输入Y显示位置，输入宽度，输入高度，输入对其方式
s x = 0
s y = 0
s w = -1
s h = -1
s type = 0
s gravity = &quot;top|right&quot;
s flags = 0
s format = 0
uxf(sss.v, &quot;set&quot;, x, y, w, h, type, gravity, flags, format)

说明：
常用于显示悬浮窗窗口。

提示：
可通过 gvs(sss.v, a.1, b) 代码进行获取悬浮窗内的子控件，然后对其进行操作。

提示：
可通过下例代码，控制窗口位置的移动
//更新窗口位置
us(sss.v, &quot;x&quot;, 100)
us(sss.v, &quot;y&quot;, 100)

//获取窗口位置
ug(sss.v, &quot;x&quot;, xx)
ug(sss.v, &quot;y&quot;, yy)

//通过us 更新后， 需要刷新悬浮窗口的布局
uxf(sss.v)


对齐方式：
center：居中
top：顶
bottom：底
left：左
right：右
center_vertical：垂直居中
center_horizontal：水平居中

输入flags：
0 不许获得焦点（编辑框输入法将无法弹出）
1 可以获得焦点，返回键将不可用</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=156');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">tts 文本转换语音</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//创建一个TTS对象
//输入赋值对象
tts(a)


//创建一个TTS对象；并且直接设置播放
//输入赋值对象，输入语言代码，输入语速率，输入音高率，输入播放文字（可传入null）
tts(a, &quot;en&quot;, &quot;I love you&quot;, 1, 1)


//获取TTS对象初始化状态；赋值变量返回 0未完成初始化 1初始化成功 -1初始化失败 -2初始化语言失败 -3当前TTS对象不可用
//输入TTS对象，输入标识，输入赋值变量
tts(a, &quot;zt&quot;, b)
syso(b)


//播放文字；模式 0替换以前的任务 1队列追加至后面
//输入TTS对象，输入标识，输入播放文字，输入模式，输入赋值变量
tts(a, &quot;st&quot;, &quot;I love you&quot;, 0, b)
syso(b)


//文字转换音频文件
//输入TTS对象，输入标识，输入文字，输入保存路径，输入赋值变量
tts(a, &quot;ft&quot;, &quot;I love you&quot;, &quot;123.wav&quot;, b)
syso(b)


//设置语言
//输入TTS对象，输入标识，输入语言代码
tts(a, &quot;lg&quot;, &quot;en&quot;)


//设置语音播放速率。1为正常，值越低语速越慢（0.5是正常的一半），值越大语速越快（2是正常的两倍）
//输入TTS对象，输入标识，输入小数
tts(a, &quot;se&quot;, 1)


//设置音高率，值越大声音越高音，值越小声音越低音，正常为1.0
//输入TTS对象，输入标识，输入小数
tts(a, &quot;ph&quot;, 1)


//检查是否TTS正在播放
//输入TTS对象，输入标识
tts(a, &quot;ip&quot;, b)
syso(b)


//释放TTS使用的资源
//输入TTS对象，输入标识
tts(a, &quot;re&quot;)


//停止所有任务
//输入TTS对象，输入标识，输入赋值变量
tts(a, &quot;sp&quot;, b)
syso(b)


//检查是否一个可用的TTS对象
//输入TTS对象，输入标识，输入赋值变量
tts(a, &quot;is&quot;, b)
syso(b)


说明：
常用于文本转化为音频，并且播放。


语言代码：
- 系统默认支持语言
美国    en
德国    de
意大利  it
法国    fr

- 需安装第三方语言包（讯飞语音TTS），并且设置语言
日本    ja
韩国    ko
中国    zh


安装与设置中文语言：

下载其中一个 
(4.0系统)讯飞语音TTS http://m.yx93.com/app.aspx?id=28515  
(2.2系统)讯飞语音TTS http://m.yx93.com/app.aspx?id=28513

安装 讯飞语音TTS

安卓手机》设置》语言和输入法》文本转语音输入》选择 讯飞语音合成 ,默认引擎 讯飞语音合成 , 语言 中文
（设置因为各品牌细节不同，但是都大同小异）


注意事项：
单独TTS对象创建后，需要有一个异步初始化过程，如果创建TTS对象然后直接播放文本将无法成功。需要先完成初始化后，然后播放文本。

注意事项：
文字转语音TTS输出；默认语言状态：完全支持 中文</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=157');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">blp 录制屏幕</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
s b = &quot;123.mp4&quot;
//输入储存录制文件路径，输入视频宽度，输入视频高度，输入视频码率，输入视频帧率
blp(b, 1280, 720, 1024000, 30)

//开始录制
blp(&quot;st&quot;, b)
syso(b)

//停止录制
blp(&quot;sp&quot;, b)
syso(b)

//释放资源
blp(&quot;re&quot;, b)
syso(b)

//判断是否正在录制
blp(&quot;ip&quot;, b)
syso(b)

说明：
用于手机屏幕录制。

注意：
仅支持系统Android 5.0以及以上才有效果！
Android 5.0以下的系统，无效果！</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=158');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">otob 转换为字节组</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//将文件转换为字节组，字节组将为字符串形式返回赋值给“b”
otob(&quot;%abc.txt&quot;, b)
syso(b)

//将字符串转换为字节组
otob(&quot;utf-8&quot;, &quot;nihao&quot;, b)
syso(b)
//不设置编码
otob(null, &quot;nihao&quot;, b)

//将文件转换成 byte[] 字节数组对象
otob(&quot;file&quot;, null, &quot;%abc.txt&quot;, b)
syso(b)

//将字符串转换成 byte[] 字节数组对象
otob(&quot;str&quot;, &quot;utf-8&quot;, &quot;nihao&quot;, b)
syso(b)


说明：
将字符或文件转换为字节组</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=159');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">btoo 字节组还原</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
otob(&quot;%abc.txt&quot;, b)
//将字节组转换为文件，变量 b 可为byte[] 字节数组对象
btoo(b, &quot;%abc2.txt&quot;)


otob(&quot;utf-8&quot;, &quot;nihao&quot;, b)
//字节组转换为字符串，变量 b 可为byte[] 字节数组对象
btoo(&quot;utf-8&quot;, b, c)
syso(c)

//不设置编码，变量 b 可为byte[] 字节数组对象
btoo(null, b, c)

说明：
将字节组转换为字符或文件</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=160');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sot Socket网络通信</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//服务端
//服务端口，临时文件目录，接受客户超时，客户连接超时，是否覆盖文件
sot(8668, &quot;%iApp/tempSocket&quot;, 0, 0, false, b)
{
//消息内容
syso(st_msG)
//连接对象
syso(st_ssR)

}

//客户端
//服务地址，服务端口，服务连接超时，是否覆盖文件
sot(&quot;192.168.1.100&quot;, 8668, 0, false, b)
{
//消息内容
syso(st_msG)
//连接对象
syso(st_ssR)

}

//发送字符串，必须放在线程内
sot(b, &quot;str&quot;, &quot;nihao&quot;)

//发送文件，必须放在线程内
sot(b, &quot;file&quot;, &quot;%abc.txt&quot;)

//发送字节组，必须放在线程内
otob(&quot;utf-8&quot;, &quot;nihao&quot;, c)
sot(b, &quot;bt&quot;, c)

//发送不带信息头 byte[]字节组，必须放在线程内
sot(b, &quot;bt2&quot;, bytes)

//关闭释放sot
sot(b, &quot;re&quot;)

//获取sot是否已释放
sot(b, &quot;ip&quot;, c)

//获取ID总数
sot(b, &quot;id&quot;, c)

//获取连接对象列表
sot(b, &quot;list&quot;, c)

//获取连接对象列表的第一位
sot(b, &quot;list&quot;, 0, c)

//获取连接总数
sot(b, &quot;size&quot;, c)

//是否允许接受新连接
sot(b, &quot;new&quot;, true)


说明：
Socket 管理操作。服务端发送消息将批量发送给所有连接。

服务端说明：
要求：
1.能连接公共网络 或 内网
2.拥有固定IP作为客户端连接的目标
3.电脑、手机、平板电脑等设备上运行服务端。
4.可使用iapp在自己的手机上面开发服务端，并运行服务端。

客户端说明：
要求：
1.能连接公共网络 或 内网
2.可使用iapp在自己的手机上面开发客户端，并连接服务端。

常见开发：
使用手机或电脑作为服务端，手机客户端与服务端相互传递文件、数据等。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=161');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">sota 单个Socket通信操作</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//获取连接对象列表的第一位，变量“c”属于单个Socket通信
sot(b, &quot;sl&quot;, 0, c)

//获取通信对方的IP
sota(c, &quot;ht&quot;, d)

//获取sota是否已释放
sota(c, &quot;ip&quot;, d)

//关闭释放sota
sota(c, &quot;re&quot;)

//获取socket对象
sota(c, &quot;socket&quot;, d)

//获取连接对象ID
sota(c, &quot;id&quot;, d)

//发送字符串，必须放在线程内
sota(c, &quot;str&quot;, &quot;nihao&quot;)

//发送文件，必须放在线程内
sota(c, &quot;file&quot;, &quot;%abc.txt&quot;)

//发送字节组，必须放在线程内
otob(&quot;utf-8&quot;, &quot;nihao&quot;, d)
sota(c, &quot;bt&quot;, d)

//发送不带信息头 byte[]字节组，必须放在线程内
sota(c, &quot;bt2&quot;, bytes)

说明：
常用于单个Socket通信的操作管理</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=162');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">loadso 加载动态库</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//比如加载 libabc.so
loadso(&quot;abc&quot;)

说明：
加载SO动态链接库。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=163');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">loadjar 加载jar库</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//比如加载 abc.jar
//赋值变量 库对象
loadjar(&quot;abc.jar&quot;, b)
syso(b)

//比如加载 abc.apk
//包含Activity需要传入true，赋值变量 库对象
loadjar(&quot;abc.apk&quot;, true, b)
syso(b)

说明：
用于加载一些jar，dex，apk 的 sdk。需要把jar文件载入至项目资源，加载过程将联网校验。
如果附带SO动态链接库，需要把SO文件载入至项目资源。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=164');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">cls 获取完整接口类</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//获取一个类，输入完整类名如 java.lang.Math
//赋值变量 类对象
cls(&quot;java.lang.Math&quot;, a)
syso(a)

//获取一个字符串类，常用类型可直接输入类名如 String
cls(&quot;String&quot;, b)
syso(b)

//加载SDK abc.jar，并获取SDK里一个类 输入完整类名 com.sdk.abc
loadjar(&quot;abc.jar&quot;, a)
cls(a, &quot;com.sdk.ceshi&quot;, c)
syso(c)

用法：
获取一个类；或从 jar SDK包获取类；

注意：完整类名区分大小写</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=165');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">clssm 获取类的所有接口</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
cls(&quot;String&quot;, b)

//获取所有构造函数
clssm(b, &quot;init&quot;, c)

//获取所有函数方法
clssm(b, &quot;method&quot;, c)

//获取所有变量
clssm(b, &quot;field&quot;, c)


说明：
返回一个数组。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=166');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">java 调用java代码方法</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//调用java api java.lang.String.indexOf(String string) 查询字符56 在123456789 中位置
cls(&quot;String&quot;, c)
javax(a, &quot;123456789&quot;, c, &quot;indexOf&quot;, &quot;String&quot;, &quot;56&quot;)
syso(a)

//初始化一个StringBuilderd
javanew(a, &quot;java.lang.StringBuilder&quot;, &quot;String&quot;, &quot;12345&quot;)
java(b, a, &quot;java.lang.StringBuilder.append&quot;, &quot;String&quot;, &quot;6789&quot;)
java(c, a, &quot;java.lang.StringBuilder.toString&quot;)
syso(c)


loadjar(&quot;test.jar&quot;, jar)
cls(jar, &quot;com.sdk.ceshi&quot;, c1)
//调用静态方法 com.sdk.ceshi类 c 方法
javax(c, null, c1, &quot;c&quot;, &quot;int&quot;, 123)
syso(c)

//调用静态变量 com.sdk.ceshi类 a 变量
javags(c, null, c1, &quot;a&quot;)
syso(c)

//初始化com.sdk.ceshi类
//输入赋值对象变量，输入完整类名或 cls方法的赋值变量
javanew(a, c1)

//访问变量，com.sdk.ceshi类 b变量
javags(c, a, c1, &quot;b&quot;)
syso(c)

//设置变量，com.sdk.ceshi类 b变量
javass(c, a, c1, &quot;b&quot;, &quot;123456&quot;)
syso(c)


//设置回调方法
javanew(a, &quot;android.widget.TextView&quot;, &quot;android.content.Context&quot;, activity)
java(b, a, &quot;android.widget.TextView.setText&quot;, &quot;CharSequence&quot;, &quot;我是文本控件&quot;)
//注意回调接口类名前面需要加一个“.”，如.android.view.View.OnClickListener
java(b, a, &quot;android.view.View.setOnClickListener&quot;, &quot;.android.view.View$OnClickListener&quot;, null)
{
//系统赋值
syso(st_mD)
syso(st_aS)

}


说明：
支持 android 所有的api；以及 自加载的jar SDK 的 api 

注意：完整类名或 方法名 或 变量名 区分大小写

activity：默认变量 Activity组件

javax 与 java 方法区别：
javax：第3位参数完整类名，第4位参数方法名。类名可传入 cls方法的赋值变量；
java：第3位参数 完整类名和方法名。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=167');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">javax 调用java代码方法</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
loadjar(&quot;test.jar&quot;, jar)
cls(jar, &quot;com.sdk.ceshi&quot;, c1)
//调用静态方法 com.sdk.ceshi类 c 方法
javax(c, null, c1, &quot;c&quot;, &quot;int&quot;, 123)
syso(c)

//调用静态变量 com.sdk.ceshi类 a 变量
javags(c, null, c1, &quot;a&quot;)
syso(c)

//初始化com.sdk.ceshi类
//输入赋值对象变量，输入完整类名或 cls方法的赋值变量
javanew(a, c1)

//访问变量，com.sdk.ceshi类 b变量
javags(c, a, c1, &quot;b&quot;)
syso(c)

//设置变量，com.sdk.ceshi类 b变量
javass(c, a, c1, &quot;b&quot;, &quot;123456&quot;)
syso(c)

说明：
常用于自定义SDK加载后的操作。

javax：第3位参数完整类名，第4位参数方法名。类名可传入 cls方法的赋值变量；</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=168');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">javacb 自定义回调</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

loadjar(&quot;test.jar&quot;, jar)
cls(jar, &quot;com.ceshi.dex.main&quot;, c1)
javanew(o, c1)
cls(jar, &quot;com.ceshi.dex.main$huidiao&quot;, c2)

javacb(hd, c2)
{
//系统赋值
syso(st_mD)
syso(st_aS)

}

//设置回调
javax(a, o, c1, &quot;sethuidiao&quot;, c2, hd)
//调用回调方法
javax(a, o, c1, &quot;get&quot;, &quot;String&quot;, &quot;666&quot;)

说明：
常用于设置自定义SDK的回调方法。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=169');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">res 安装包资源管理器</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//获取应用自己的对象
res(a)

//获取其他apk安装包内的资源对象，只支持加载SD卡上的apk
res(&quot;%abc.apk&quot;, a)

//获取资源
//输入资源对象，输入资源标识或文件名(没后缀)，输入资源类型，输入赋值变量
res(a, &quot;ic_launcher&quot;, &quot;drawable&quot;, b)

//获取资源ID，打包测试才有效
res(a, &quot;ic_launcher&quot;, &quot;drawable&quot;, false, b)

//获取 AssetManager 或 Resources 对象
res(a, &quot;asset&quot;, b)
res(a, &quot;resources&quot;, b)

说明：
可获取的资源类型 drawable、string、color、stringarray、layout</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=170');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">call 交互式语言调用</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//输入赋值变量，语言类型，模块m的abc方法，输入参数1，输入参数2
call(null, &quot;myu&quot;, &quot;m.abc&quot;, &quot;nihao&quot;, 66)


//输入赋值变量，语言类型，模块mk的abc方法，输入参数1
call(a, &quot;mlua&quot;, &quot;mk.abcd&quot;, 123)

//输入赋值变量，语言类型，模块mk的abc方法，，输入参数1，输入参数2，输入参数3
call(a, &quot;mjava&quot;, &quot;mk.abcd&quot;, 123, 456, 789 )


//没有参数的
//输入赋值变量，语言类型，模块mk的abc方法
call(null, &quot;mjs&quot;, &quot;mk.abcdf&quot;)

说明：
用于多语言的代码交互。

注意：
此方法只能调用模块方法，输入是字符串如 m.abc 模块m 的abc方法

注意：
参数数量要与实际模块方法的参数的数量一致。

注意：
三种语言，只有 mlua 可以返回赋值变量，裕语言可以通过设置全局变量变相返回变量， mjs设置赋值变量无效。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=171');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">json json数据解析</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//解析json数据
s text = &quot;{&quot;id&quot;:1, &quot;name&quot;:&quot;xiaobai&quot;, &quot;age&quot;:16}&quot;
json(text, jo)
//获取id
json(jo, &quot;get&quot;, &quot;id&quot;, a)
syso(a)
//获取name
json(jo, &quot;get&quot;, &quot;name&quot;, b)
syso(b)
//获取age
json(jo, &quot;get&quot;, &quot;age&quot;, c)
syso(c)

//修改age数据
json(jo, &quot;set&quot;, &quot;age&quot;, 20)

//删除id数据
json(jo, &quot;del&quot;, &quot;id&quot;)

//打印json数据
json(jo, &quot;json&quot;, text)
syso(text)



//解析json列表数据
s text = &quot;{&quot;userlist&quot;:[{&quot;id&quot;:1, &quot;name&quot;:&quot;niubi&quot;, &quot;age&quot;:16},{&quot;id&quot;:2, &quot;name&quot;:&quot;wangba&quot;, &quot;age&quot;:18},{&quot;id&quot;:3, &quot;name&quot;:&quot;goudan&quot;, &quot;age&quot;:17}]}&quot;
json(text, jo)

//打印json数据
json(jo, &quot;list&quot;, &quot;userlist&quot;, list)
json(list, &quot;size&quot;, size)
w(size &gt; 0)
{
s-(1, size)
json(list, &quot;data&quot;, size, item)

//获取id
json(item, &quot;get&quot;, &quot;id&quot;, a)
syso(a)
//获取name
json(item, &quot;get&quot;, &quot;name&quot;, b)
syso(b)
//获取age
json(item, &quot;get&quot;, &quot;age&quot;, c)
syso(c)

}

说明：
常用于解析服务器反馈的数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=172');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">utb Toolbar工具栏设置</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//设置自定义的工具栏 为当前界面的工具栏
//输入Toolbar工具栏的 控件id或控件对象
s id = 3
utb(id)


//绑定侧滑控件，侧滑控件内需要包含左侧滑，绑定后可以在Toolbar工具栏的左图标 控制左边侧滑
//输入Toolbar工具栏的 控件id或控件对象，输入侧滑的 控件id或控件对象
utb(3, 2)


//设置参数

s id = 3
utb(&quot;set&quot;, &quot;dshe&quot;, true)

//设置左图标，可以设置事件监听
utb(&quot;left&quot;, id, &quot;@a.png&quot;)

//设置左图标的点击事件，注意此代码需在 utb(id) 后，否则事件将无效。
utb(&quot;set&quot;, &quot;leftck&quot;, id)
{
syso(&quot;lefticon&quot;)
}

//设置右菜单图标，无事件。可使用界面菜单事件
utb(&quot;right&quot;, id, &quot;@b.png&quot;)


//标题
utb(&quot;set&quot;, &quot;title&quot;, &quot;apptitle&quot;)

//子标题
utb(&quot;set&quot;, &quot;subtitle&quot;, &quot;appsubtitle&quot;)

//自定义布局可输入View类型布局
utb(&quot;set&quot;, &quot;cv&quot;, v)

//显示选项
utb(&quot;set&quot;, &quot;do&quot;, 0)

//显示或隐藏 标题
utb(&quot;set&quot;, &quot;dste&quot;, true)

//显示或隐藏 自定义布局
utb(&quot;set&quot;, &quot;dsce&quot;, true)

//显示或隐藏 主页图标
utb(&quot;set&quot;, &quot;dshe&quot;, true)


//获取参数

//标题
utb(&quot;get&quot;, &quot;title&quot;, c)

//子标题
utb(&quot;get&quot;, &quot;subtitle&quot;, c)

//自定义布局可输入View类型布局
utb(&quot;get&quot;, &quot;cv&quot;, c)

//显示选项
utb(&quot;get&quot;, &quot;do&quot;, c)

//动作栏布局高度
utb(&quot;get&quot;, &quot;height&quot;, c)


说明：
常用于设计应用顶部工具栏。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=173');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">tws 弹窗提醒</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//获取展示的控件对象，提醒将在这个控件里展示
gvs(1, v)

//无按钮弹出提醒
//输入控件对象可设置null，输入字符，输入显示时长（值0 -1 -2）
tws(v, &quot;ni hao!&quot;, 0)


//有按钮弹出提醒
//输入控件对象可设置null，输入字符，输入显示时长（值0 -1 -2），输入按钮标题
tws(v, &quot;ni hao ma?&quot;, 0, &quot;hao&quot;)
{
syso(&quot;go&quot;)
}</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=174');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">uht 滑动窗体控制</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//添加新的页面，设置的界面会执行载入事件里的代码
//输入滑动窗体的 控件id或控件对象，输入标识，输入插入序号 如-1为尾部 0为头部，输入标题，输入界面名，输入控件对应的数据项...不限制数量可参考代码ula
uht(2, &quot;add&quot;, -1, &quot;标题&quot;, &quot;a.iyu&quot;, 1=&quot;abc&quot;, 2=&quot;bac&quot;, 3=&quot;bbc&quot;)

//删除界面
//输入滑动窗体的 控件id或控件对象，输入标识，输入界面序号 序号以0开始 -1为尾部
uht(2, &quot;del&quot;, 0)

//修改界面标题
//输入滑动窗体的 控件id或控件对象，输入标识，输入界面序号 序号以0开始 -1为尾部
uht(2, &quot;title&quot;, 0, &quot;标题2&quot;)

//获取页面总数
uht(2, &quot;size&quot;, b)
syso(b)

//释放内存
uht(2, &quot;close&quot;)


//绑定标签布局，绑定后滑动界面时标签布局会跟随运动，需要注意 标签布局 和 滑动窗体 的子项数量应一致，新增子项时也需要同时增加
//输入滑动窗体的 控件id或控件对象，输入标识，输入标签布局的 控件id或控件对象，是否应刷新其内容
uht(2, &quot;bd&quot;, 3, true)
//注意：如果绑定前 标签布局 如有设置子项，绑定时会被清空。绑定后直接添加滑动窗体 的子项并设置 标题


//增加标签布局 的子项
us(3, &quot;app_tabadd&quot;, &quot;选项&quot;)

//添加滑动窗体 的子项
uht(2, &quot;add&quot;, -1, &quot;标题&quot;, &quot;a.iyu&quot;, 1=&quot;abc&quot;, 2=&quot;bac&quot;, 3=&quot;bbc&quot;)


说明：
用于动态管理控制滑动窗体和垂直滑动窗体的 新增页面、删除页面、绑定标签布局等。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=175');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">cast 强制转换数据类型</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

s a = 123
//转换数据类型并直接赋值
//输入完整类名 或 类对象，输入需要转换的数据变量
cast(&quot;String&quot;, a)
syso(a)

//获取类对象
cls(&quot;java.lang.Math&quot;, a)
//输入完整类名 或 类对象，输入需要转换的数据变量，输入赋值变量
cast(a, b, c)
syso(c)

说明：
常用于数据强制转换。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=176');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">yul 加载yul布局</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：

//将布局加载展示到指定的布局控件里
//输入控件id或控件对象（比如输入线性布局ID），输入 yul 布局文件名
yul(1, &quot;a.yul&quot;)


//返回布局对象
//输入 yul 布局文件名，输入赋值变量返回一个View对象
yul(&quot;a.yul&quot;, a)
syso(a)


说明：
yul布局是以 android 的 xml布局为基础，用于动态加载布局到应用界面。和安卓xml布局用法和代码都是一致的。

在设计 yul布局 时需要自定义控件ID，如设置控件ID:123 编写代码 android:id=&quot;123&quot; 或 android:id=&quot;@+id/s123&quot; 两种写法都可以，效果都是ID为 123</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=177');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">zj 组件控制</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
//如有米广告组件，首先下载有米的组件，并且设置好组件。

//初始化有米SDK，放在第一个界面的载入事件里
//输入赋值变量，标识，发布 ID，密钥，是否开启有米的Log输出（需要换自己的渠道信息）
zj(a, &quot;init&quot;, &quot;String&quot;, &quot;85aa56a59eac8b3d&quot;, &quot;String&quot;, &quot;a14006f66f58d5d7&quot;, &quot;boolean&quot;, true)

//初始化积分墙
//输入赋值变量，标识
zj(a, &quot;initjfq&quot;)

//展示积分墙
zj(a, &quot;jfqgo&quot;)


说明：
用于控制组件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=178');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">无障碍服务</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
固定模块名为 ays_service 可创建模块 ays_service.myu，代码如下：

//事件方法 on 实时回调变化事件
fn on(e)
//获取事件类型
java(b, ays, &quot;com.iapp.app.ays.gtype&quot;, &quot;android.view.accessibility.AccessibilityEvent&quot;, e)
//如果事件类型
f(b == 32 || b == 2048){
  //获取事件源的对象节点列表
  java(node, ays, &quot;com.iapp.app.ays.gall&quot;, &quot;AccessibilityEvent&quot;, e)
  //判断事件来源是不是包名为com.iapp.app的应用
  java(gpn, ays, &quot;com.iapp.app.ays.gpn&quot;, &quot;AccessibilityEvent&quot;, e)
  f(&quot;com.iapp.app&quot; == gpn)
  {
     //判断类名，根据指定的类名进行不同的操作
     java(gcn, ays, &quot;com.iapp.app.ays.gcn&quot;, &quot;AccessibilityEvent&quot;, e)
     f(&quot;com.iapp.app.HomeMian&quot; == gcn)
     {
        //从对象列表搜索文本为“创建”的对象，并点击该对象
        java(b, ays, &quot;com.iapp.app.ays.cktext&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 16, &quot;String&quot;, &quot;创建&quot;)
     }
     else f(&quot;com.iapp.app.HomeAdd&quot; == gcn)
     {
        //根据ID获取指定的节点
        java(b, ays, &quot;com.iapp.app.ays.id&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;String&quot;, &quot;com.iapp.app:id/ui_home_add_title&quot;)
	//设置节点的文本框输入指定字符
        java(c, ays, &quot;com.iapp.app.ays.enter&quot;, &quot;java.util.List&quot;, b, &quot;String&quot;, &quot;name&quot;)
        //根据ID获取指定的节点
        java(b, ays, &quot;com.iapp.app.ays.id&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;String&quot;, &quot;com.iapp.app:id/ui_home_add_remark&quot;)
	//设置节点的文本框输入指定字符
        java(c, ays, &quot;com.iapp.app.ays.enter&quot;, &quot;java.util.List&quot;, b, &quot;String&quot;, &quot;remark&quot;)
        //从对象列表搜索指定ID的对象，并点击该节点对象
        java(b, ays, &quot;com.iapp.app.ays.ckid&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 16, &quot;String&quot;, &quot;com.iapp.app:id/ui_home_add_go&quot;)
     }
  }
  //释放根源节点
  java(b, ays, &quot;com.iapp.app.ays.re&quot;, &quot;AccessibilityNodeInfo&quot;, node)

}

end fn

//初始化事件方法 onsc 启动时回调一次
fn onsc()
s pns = &quot;com.iapp.app&quot;
//设置监听指定的包名，可以设置多个包名用逗号隔开如&quot;com.xxx.a,com.xxx.b&quot;
javass(a, null, &quot;com.iapp.app.ays.pns&quot;, pns)
//设置相应时间
javass(a, null, &quot;com.iapp.app.ays.nt&quot;, 1000)
end fn


然后 权限配置管理》application配置 将下面的配置粘贴进去：
	&lt;service
            android:name=&quot;com.iapp.app.ays&quot;
            android:label=&quot;iapp开发工具无障碍辅助功能&quot;
            android:permission=&quot;android.permission.BIND_ACCESSIBILITY_SERVICE&quot;&gt;
            &lt;intent-filter&gt;
                &lt;action android:name=&quot;android.accessibilityservice.AccessibilityService&quot;/&gt;
            &lt;/intent-filter&gt;
            &lt;meta-data
                android:name=&quot;android.accessibilityservice&quot;
                android:resource=&quot;@xml/aya_config&quot;/&gt;
        &lt;/service&gt;

最后，</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=179');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">正式打包发布</div></div></div><div class="mdui-card-content mdui-text-truncate">打包完成后，安装测试。记得自行去设置》辅助功能》打开我们的服务《iapp开发工具无障碍辅助功能》。
注意：直接在iapp里测试无效。


更多代码示范：

//------静态调用
//获取无障碍功能是否已经授权
java(a, null, &quot;com.iapp.app.ays.isas&quot;, &quot;Context&quot;, activity)

//如果没有授权，可跳转设置界面
java(a, null, &quot;com.iapp.app.ays.goset&quot;, &quot;Context&quot;, activity)


//------事件源操作
//获取Context功能类
java(a, ays, &quot;com.iapp.app.ays.gbc&quot;)

//获取无障碍功能配置信息
java(a, ays, &quot;com.iapp.app.ays.gsi&quot;)

//设置无障碍功能配置信息
java(b, ays, &quot;com.iapp.app.ays.ssi&quot;, &quot;AccessibilityServiceInfo&quot;, a)

//调用全局事件
//输入值：1. 返回键 2. HOME键 3. 最近打开应用列表 4. 打开通知栏 5. 设置 6. 锁屏
java(a, ays, &quot;com.iapp.app.ays.pga&quot;, &quot;int&quot;, 1)

//获取事件类型
//值：32 打开PopupWindow，Menu，Dialog等的事件  64 显示通知的事件  2048 更改窗口内容的事件  4194304 屏幕上显示的窗口中的事件更改
java(a, ays, &quot;com.iapp.app.ays.gtype&quot;, &quot;AccessibilityEvent&quot;, e)

//获取事件源类的类型
java(a, ays, &quot;com.iapp.app.ays.gcn&quot;, &quot;AccessibilityEvent&quot;, e)

//获取事件源的包名
java(a, ays, &quot;com.iapp.app.ays.gpn&quot;, &quot;AccessibilityEvent&quot;, e)

//获取事件源的是否可用
java(a, ays, &quot;com.iapp.app.ays.ised&quot;, &quot;AccessibilityEvent&quot;, e)

//获取事件源的节点总数
java(a, ays, &quot;com.iapp.app.ays.gsl&quot;, &quot;AccessibilityEvent&quot;, e)

//获取事件源的整数ID
java(a, ays, &quot;com.iapp.app.ays.gwid&quot;, &quot;AccessibilityEvent&quot;, e)

//获取事件源的时间
java(a, ays, &quot;com.iapp.app.ays.gtime&quot;, &quot;AccessibilityEvent&quot;, e)

//释放资源
java(a, ays, &quot;com.iapp.app.ays.re&quot;, &quot;AccessibilityEvent&quot;, e)


//------节点的操作
//获取事件源的节点对象列表
java(a, ays, &quot;com.iapp.app.ays.gall&quot;, &quot;AccessibilityEvent&quot;, e)

//获取窗口的对象节点列表，需要Android 4.1及以上才可调用
java(a, ays, &quot;com.iapp.app.ays.gall&quot;)

//根据序号；获取对象的子节点
java(a, ays, &quot;com.iapp.app.ays.gi&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 0)

//获取对象的子节点总数
java(a, ays, &quot;com.iapp.app.ays.gi&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//根据当前焦点向某个方向进行搜索可以获得输入焦点的最近控件
//输入值：33 向上  130 向下  17 向左  66 向右
java(a, ays, &quot;com.iapp.app.ays.focussearch&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 130)

//根据文本查询控件，返回节点列表
java(nodelist, ays, &quot;com.iapp.app.ays.text&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;String&quot;, &quot;创建&quot;)

//根据id查询控件，返回节点列表
java(nodelist, ays, &quot;com.iapp.app.ays.id&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;String&quot;, &quot;com.iapp.app:id/ui_home_add_go&quot;)

//根据焦点查询
//输入值：1 输入焦点  2 可访问性焦点
java(a, ays, &quot;com.iapp.app.ays.focus&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 1)

//获取节点文本
java(a, ays, &quot;com.iapp.app.ays.gt&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取节点类的类型
java(a, ays, &quot;com.iapp.app.ays.gcn&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取节点整数ID
java(a, ays, &quot;com.iapp.app.ays.gwid&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取节点ID
java(a, ays, &quot;com.iapp.app.ays.gid&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取可以在节点上执行的操作
java(a, ays, &quot;com.iapp.app.ays.gal&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取节点在屏幕上坐标
java(a, ays, &quot;com.iapp.app.ays.gbis&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取父节点在屏幕上坐标
java(a, ays, &quot;com.iapp.app.ays.gbip&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取节点的包名
java(a, ays, &quot;com.iapp.app.ays.gpn&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取节点的父节点
java(a, ays, &quot;com.iapp.app.ays.gp&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取此节点是否可点击
java(a, ays, &quot;com.iapp.app.ays.isck&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取此节点是否已启用
java(a, ays, &quot;com.iapp.app.ays.ised&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取此节点是否已选中
java(a, ays, &quot;com.iapp.app.ays.iscd&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取这个节点是否被聚焦
java(a, ays, &quot;com.iapp.app.ays.isfd&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取此节点是否可以长时间点击
java(a, ays, &quot;com.iapp.app.ays.islck&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取此节点是否是密码
java(a, ays, &quot;com.iapp.app.ays.ispd&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取节点是否可滚动
java(a, ays, &quot;com.iapp.app.ays.isse&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//获取是否选择此节点
java(a, ays, &quot;com.iapp.app.ays.issd&quot;, &quot;AccessibilityNodeInfo&quot;, node)



//根据文本查询；模拟控件点击控件
java(a, ays, &quot;com.iapp.app.ays.cktext&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 16, &quot;String&quot;, &quot;创建&quot;)

//根据ID查询；模拟控件点击控件
java(a, ays, &quot;com.iapp.app.ays.ckid&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 16, &quot;String&quot;, &quot;com.iapp.app:id/ui_home_add_go&quot;)

//根据焦点查询；模拟控件点击控件
//输入值：1 输入焦点  2 可访问性焦点
java(a, ays, &quot;com.iapp.app.ays.ckfocus&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 16, &quot;int&quot;, 1)


	/.
	  模拟执行操作
	  1 将输入焦点输入到节点的操作
	  16 点击节点信息的动作
	  32 长时间点击节点的动作
	  32768 操作来粘贴当前的剪贴板内容
	 ./
//开始模拟控件点击
//输入节点列表
java(b, ays, &quot;com.iapp.app.ays.ck&quot;, &quot;java.util.List&quot;, nodelist, &quot;int&quot;, 16)

//开始模拟控件点击
//输入节点列表，输入自定义的Bundle
java(b, ays, &quot;com.iapp.app.ays.ck&quot;, &quot;java.util.List&quot;, nodelist, &quot;int&quot;, 16, &quot;android.os.Bundle&quot;, be)

//对单项模拟控件点击
//输入节点列表
java(b, ays, &quot;com.iapp.app.ays.ck&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 16)

//对单项模拟控件点击
//输入节点列表，输入自定义的Bundle
java(b, ays, &quot;com.iapp.app.ays.ck&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;int&quot;, 16, &quot;android.os.Bundle&quot;, be)

//对单项模拟执行输入文本,Android 4.3 版本及以上
java(b, ays, &quot;com.iapp.app.ays.enter&quot;, &quot;AccessibilityNodeInfo&quot;, node, &quot;String&quot;, &quot;nihao&quot;)

//开始模拟执行输入文本,Android 4.3 版本及以上
java(b, ays, &quot;com.iapp.app.ays.enter&quot;, &quot;java.util.List&quot;, nodelist, &quot;String&quot;, &quot;nihao&quot;)

//获取节点所有子节点列表
java(nodelist, ays, &quot;com.iapp.app.ays.ganiall&quot;, &quot;AccessibilityNodeInfo&quot;, node)

//释放节点资源
java(b, ays, &quot;com.iapp.app.ays.re&quot;, &quot;AccessibilityNodeInfo&quot;, node)

说明：
无障碍功能（辅助功能）常用于简化操作，使应用或 系统的变得更智能、简便。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=180');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">自定义代码提示</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
iapp允许开发者自定义代码提示，这样可以最大程度保留开发者的个人习惯，可以定义成你自己熟悉的关键词。

格式：
代码\说明
如：
abcde\变量名
abc()\方法名


配置对应文件：/data/data/com.iapp.app/files/config/srctonew.xml</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=181');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">HTML5项目</div></div></div><div class="mdui-card-content mdui-text-truncate">例子：
//输入浏览器控件ID或对象，输入标识，输入项目网页路径
us(1, &quot;url&quot;, &quot;@html5/index.html&quot;)
//us(1, &quot;url&quot;, &quot;%html5/index.html&quot;)

说明：
常用与运行一个HTML5项目，包括HTML5应用、HTML5游戏等。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=182');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">上传项目</div></div></div><div class="mdui-card-content mdui-text-truncate">项目内导入覆盖规则：

	综合：一个完整应用项目的导入；先清空当前项目源码与资源后，导入源码与资源 以及根据需求导入项目信息与图标

	其他分类通用：
	1. 项目中mian.iyu启动界面，只导入其中有备注的控件，导入至当前项目打开的界面里；
	2. 不清空当前项目文件，直接覆盖除了mian.iyu以外的其他所有界面与资源；
	3. 覆盖过程如有模块文件重复，将以追加方式模块增加，不覆盖；
	4. 建议复杂命名界面名，复杂命名模块方法名；

项目外导入覆盖规则：
	1. 遇本地重复项目，不覆盖。
	2. 导入为完整项目。

说明：
分享技术，享受乐趣。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=183');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">代码规范</div></div></div><div class="mdui-card-content mdui-text-truncate">例子：
//下面的判断语句，使用了字符串；存在规范问题，会出错；
f(&quot;1?2(3}4,5==6&quot; == &quot;1?2(3}4,5==6&quot;)
{
f(&quot;a&quot;!=sb&quot; != &quot;a&quot;!=sb6&quot;)
{
tw(&quot;{1},(2)&quot;)
}
}

转义关键符号，需修正为：
f(&quot;1\?2(3}4\,5\=\=6&quot; == &quot;1\?2(3}4\,5\=\=6&quot;)
{
f(&quot;a&quot;\!\=sb&quot; != &quot;a&quot;\!\=sb6&quot;)
{
tw(&quot;{1}\,(2)&quot;)
}
}

//下面判断读取文本文件，
fr(&quot;%ab,c.txt&quot;, &quot;utf-8&quot;, c)
tw(c)

转义关键符号，需修正为：
fr(&quot;%ab\,c.txt&quot;, &quot;utf-8&quot;, c)
tw(c)

以上为规范异常，系统关键符号需要进行转义，转义在符号前增加“\”。

系统关键符号(小写符号)：( ) , = ! &gt; &lt; ? * + { } | &amp;

注意：
“\”作为转义符号需注意例子：

.例子1
tw(&quot;ni\nhao&quot;)
/.
输出：
ni
hao
./

.例子2
tw(&quot;ni\\nhao&quot;)
/.
输出：
ni\nhao
./

.例子3
tw(&quot;ni\\hao&quot;)
/.
输出：
ni\hao
./

.例子4
tw(&quot;ni\hao&quot;)
/.
输出：
ni\hao
./

.例子5
tw(&quot;ni\\\\hao&quot;)
/.
输出：
ni\\hao
./

.例子6
tw(&quot;ni\,hao&quot;)
/.
输出：
ni,hao
./</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=184');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">单击触屏事件</div></div></div><div class="mdui-card-content mdui-text-truncate">系统赋值：
st_vId：控件id
st_vW：控件对象

说明：
该事件无返回值，当用户完成单击触屏即执行事件代码。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=185');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">触屏监听事件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
[true]
tw(&quot;将返回值为true&quot;)

系统赋值：
st_vId：控件id
st_vW：控件对象
st_eA：执行的动作
st_eX：触屏位置X坐标
st_eY：触屏位置Y坐标
st_rX：原始位置X坐标
st_rY：原始位置Y坐标

说明：
该事件有返回值，不设置返回值将默认为false。当用户触屏屏幕即执行事件代码。

返回值说明：
在事件代码编辑框顶部一行填写 “[true]”，即设置为返回true
当返回true值时，说明已完成该事件的执行，将不在执行此事件。
当返回false值时，将持续执行当前事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=186');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">触屏长按事件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
[true]
tw(&quot;将返回值为true&quot;)

系统赋值：
st_vId：控件id
st_vW：控件对象

说明：
该事件有返回值，不设置返回值将默认为false。当用户长久触屏屏幕即执行事件代码。

返回值说明：
在事件代码编辑框顶部一行填写 “[true]”，即设置为返回true
当返回true值时，说明已完成该事件的执行，将不在执行此事件。
当返回false值时，将持续执行当前事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=187');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">键盘触发事件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
[true]
tw(&quot;将返回值为true&quot;)

系统赋值：
st_vId：控件id
st_vW：控件对象
st_kC：按下的物理按键对应的数值
st_eA：执行的动作
st_eR：

说明：
该事件有返回值，不设置返回值将默认为false。当用户按下物理按键即执行事件代码。

返回值说明：
在事件代码编辑框顶部一行填写 “[true]”，即设置为返回true
当返回true值时，说明已完成该事件的执行，将不在执行此事件。
当返回false值时，将持续执行当前事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=188');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">触屏长按菜单事件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
title:操作
case 选择A:
tw(&quot;A&quot;)
break
case 选择B:
tw(&quot;B&quot;)
break
case 选择C:
tw(&quot;C&quot;)
break
default:
tw(&quot;载入成功&quot;)
break

系统赋值：
st_vId：控件id
st_vW：控件对象

说明：
常用于需要多操作选项。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=189');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">框编辑监听事件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
[true]
tw(&quot;将返回值为true&quot;)

系统赋值：
st_vId：控件id
st_vW：控件对象
st_aI：动作的标识数值
st_eA：执行的动作
st_eR：
st_eK：键值

说明：
该事件有返回值，不设置返回值将默认为false。当用户按下动作键即执行事件代码。

注意：
需要编辑框设置相应的控件 imeoptions 属性

事件例子：
f(st_aI != 0)
{
//动作的标识数值
syso(st_aI)
}

返回值说明：
在事件代码编辑框顶部一行填写 “[true]”，即设置为返回true
当返回true值时，说明已完成该事件的执行，将不在执行此事件。
当返回false值时，将持续执行当前事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=190');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">文本更新监听事件</div></div></div><div class="mdui-card-content mdui-text-truncate">系统赋值：
st_vId：控件id
st_vW：控件对象
st_sS：文本内容
st_sT：
st_bE：
st_cT：
st_aR：

说明：
该事件无返回值。常用于监听文本即时更新。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=191');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">获得焦点事件</div></div></div><div class="mdui-card-content mdui-text-truncate">系统赋值：
st_vId：控件id
st_vW：控件对象
st_hF：是否获得焦点

说明：
该事件无返回值，当控件获得/失去焦点即执行事件代码。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=192');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">触屏滑动事件</div></div></div><div class="mdui-card-content mdui-text-truncate">系统赋值：
st_vId：控件id
st_vW：控件对象
st_sE：
st_fM：
st_vT：
st_bT：

说明：
常用于滑动控件的滑动监听。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=193');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">单击项目事件</div></div></div><div class="mdui-card-content mdui-text-truncate">系统赋值：
st_vId：控件id
st_vW：控件对象
st_pN：被点击视图中的位置
st_iD：被点击的项目

说明：
常用于列表项点击监听。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=194');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">浏览器事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
常用于浏览器的互动。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=195');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">滑动窗体事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
常用于滑动窗体的互动。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=196');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">侧滑窗体事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
常用于侧滑窗体的互动。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=197');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">下拉菜单事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
常用于下拉菜单的互动。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=198');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">摄像头拍摄事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
常用于摄像头拍摄事件的互动。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=199');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">载入事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
将于界面加载完毕后执行。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=200');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">载入完毕事件（界面可交互）</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
将于界面加载完毕后，并且用户可于界面交互时执行。常用需要在载入事件中设置控件属性。

如：
使用 addv 添加将界面后，如果设置控件属性，请将设置属性的代码写入 载入完毕事件中。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=201');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">菜单事件</div></div></div><div class="mdui-card-content mdui-text-truncate">用法：
case 选择A:
tw(&quot;A&quot;)
break
case 选择B:
tw(&quot;B&quot;)
break
case 选择C:
tw(&quot;C&quot;)
break
default:
tw(&quot;载入成功&quot;)
break


//参数为多个并以“|”隔开
//参数1为选项标题|参数2为图标|参数3为显示动作值分别为0 1 2 4 8|参数4为次序根据数值大小
带图标的
case 选择A|@a.png|1|1:
tw(&quot;A&quot;)
break
case 选择B|@b.png|0|2:
tw(&quot;B&quot;)
break
case 选择C|@c.png|0|3:
tw(&quot;C&quot;)
break
default:
tw(&quot;载入成功&quot;)
break


说明：
当用户触屏菜单事件。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=202');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">按键按下事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
用户设备物理按键按下将执行。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=203');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">按键释放事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
用户设备物理按键按下然后释放触屏，将执行。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=204');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">销毁界面事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
当用户销毁当前界面时将执行。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=205');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">停止事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明:
界面处于停止或暂停事将执行。（如：用户切出到其他应用）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=206');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">重新开始事件</div></div></div><div class="mdui-card-content mdui-text-truncate">说明：
界面重新获得焦点，可视时将执行。（如：用户从其他应用切换回来了）</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=207');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">回调结果事件</div></div></div><div class="mdui-card-content mdui-text-truncate">系统赋值：
st_sC：请求标识数值
st_lC：结果状态数值
st_iT：结果目标对象

说明：
常用于界面或功能回调返回的结果或传递的数据。</div></div><br><br><div class="mdui-card mdui-hoverable"  onclick="window.open('./xksc_show?class=basic&id=208');"><div class="mdui-card-primary"><div class="mdui-card-primary-title" > <div class="mdui-text-color-blue-accent">重力感应事件</div></div></div><div class="mdui-card-content mdui-text-truncate">系统赋值：
st_x：X轴
st_y：Y轴
st_z：Z轴

说明：
获取手机的即时动作。

参考：
　　手机屏幕向上(z轴朝天)水平放置的时侯，(x，y，z)的值分别为(0，0，10);
　　手机屏幕向下(z轴朝地)水平放置的时侯，(x，y，z)的值分别为(0，0，-10);
　　手机屏幕向左侧放(x轴朝天)的时候，(x，y，z)的值分别为(10，0，0);
　　手机竖直(y轴朝天)向上的时候，(x，y，z)的值分别为(0，10，0);</div></div><br><br>