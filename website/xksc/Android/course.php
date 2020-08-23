【晓空blog】
http://blog.moeworld.tech/


【关于】
内容声明

此处的示列代码大多数来自于互联网，来自于互联网的示列代码与手册作者无关，如果您认为我们侵犯了您的权益，请联系我们进行删除
如果您需要转载本手册的内容，请加入官方Q群联系我们，或者在保留原作者以及注明来源的情况下遵循GPL v3开源协议

内容以及转载来源
百度贴吧、小A教程、iApn等
感谢@残页和、@lincannm以及@EB级内存卡提供的大量优质内容
完整的关于页内容详情请见http://blog.rcraft.ml/index.php/about/
谢谢大家的支持！

官方网站

<Rcraft官方站>
http://bbs.rcraft.ml/
<晓空blog>
http://blog.rcraft.ml/


历史网址

PS.以下网址均为废弃的旧网站，无法打开
<Rcraft论坛 - 为Rcraft用户和iApp开发者提供的免费交流场所>
http://rcraft.88448.com/wap/
<Rcraft官网>
http://rcraft.ccaeo.com
http://rcraft.xszz.gq
<iApr官网>
http://iapr0.waphx.com/wapindex.aspx?siteid=71807&classid=0


【关于重力感应事件的说明】

//@EB级内存卡
首先，把手机平铺在水平面上，作平面直角坐标系(x,y轴),再垂直于该平面作z轴

当z轴垂直于水平面时
        屏幕在上 st_z=10
        屏幕在下 st_z=-10
当x轴垂直于水平面时
        手机右侧在上 st_x=-10
        手机左侧在上 st_x=10
当y轴垂直于水平面时
        手机上侧在上 st_y=10
        手机下侧在上 st_y=-10
        
注意，因为xyz轴很少能完全垂直水平面，建议判断赋值是否在某一取值范围内


重力感应事件可以判断手机的放置状态
在这个事件里写代码，相当于在 无限循环 里写代码





【简易闹钟】
//@EB级储存卡
//年、月、日、时、分、秒的id为1、2、3、4、5、6
fr("%abc/闹钟.txt",l)
sss l=l
f(sss.l==null)
{
  time("Y",a1)
  time("m",b1)
  time("d",c1)
  time("H",d1)
  time("M",e1)
  time("S",f1)
  s(a1*31536000+b1*2592000+c1*86400+d1*3600+e1*60+f1,g1)
  ug(1,"text",a)
  ug(2,"text",b)
  ug(3,"text",c)
  ug(4,"text",d)
  ug(5,"text",e)
  ug(6,"text",f)
  s(a*31536000+b*2592000+c*86400+d*3600+e*60+f,g)
  fw("%abc/闹钟.txt"g)
  s-(g,g1,g2)
  ss(g2+"000",v)
  f(v<=0)
  {
    tw("时间已过")
    }
  else
  {
    stop(v)
    ufnsui()
    {
      bfm("abc.mp3")
      }
    }
  }
else
{
  stop(sss.l)
  ufnsui()
  {
    bfm("abc.mp4")
    }
  }


【导入自定义字体】
//把ttf字体文件放入@fonts/fonttitle.ttf里面就好了，注意文本id
fc("@fonts/Bauhaus93.TTF", "%B93.TTF", false, copy)
fe("%B93.TTF",exist)
//字体文件不存在或者字体文件过大会出现各种错误，字体文件应该只支持TTF格式
f(exist==true){
fdir("%B93.TTF",path)
//获取控件ID 3   view对象
gvs(3,tv3)
//通过本地文件创建Typeface
javax(ttf,null,"android.graphics.Typeface","createFromFile","String",path)
//设置字体给tv3对象
javax(t,tv3,"android.widget.TextView","setTypeface","android.graphics.Typeface",ttf)
//设置标题，查看文件路径是否正常
us(2,"text",path)
}else{
tw("字体文件不存在")
}

//936537504 使用本源码可以不注释版权，但是请不要厚颜无耻的说是你做的！谢谢！


【三星/LG设置应用角标】
s count = 88
//显示的数字

java(packageName,activity,"android.content.Context.getPackageName")
//获取包名
java(pm,activity,"android.content.Context.getPackageManager")
java(launchIntent,pm,"android.content.pm.PackageManager.getLaunchIntentForPackage","String",packageName)
java(component,launchIntent,"android.content.Intent.getComponent")
java(launchActivityName,component,"android.content.ComponentName.getClassName")
//获取启动类名

sit(intent,"action","android.intent.action.BADGE_COUNT_UPDATE")
sit(intent,"extra","badge_count",count)
sit(intent,"extra","badge_count_package_name",packageName)
sit(intent,"extra","badge_count_class_name",launchActivityName)

java(null,activity,"android.content.Context.sendBroadcast","android.content.Intent",intent)

//仅支持三星和LG手机，其他无效果。
//其他机型正在适配中～
//残页QQ1582270018


【滚动式sran随机数 修正版】
//@EB级储存卡
s a=1
w(a>0)
{
  s(a+1,b)
  syso(b)
  sran(10000,1000000,c)
  s g="@abc.png"
  s(c-1,d)
  s(c-2,e)
  s(c-3,f)
 ftz(d, e, f, g)
 {
 }
}


【倒计时】
//@EB级储存卡
//文本的id为1
t()
{
  s a="正在倒计时10秒"
  ufnsui()
  {
    us(1,"text",a)
    }
  s a=10
  for(1;10)
  {
    f(a==1)
    {
      ufnsui()
      {
        us(1,"text","倒计时完成")
        }
      endcode
      }
    s(a-1,a)
    ss("正在倒计时"+a+"秒",c)
    ufnsui()
    {
      us(1,"text",c)
      }
    stop(1000)
    //设置更新的间隔为一秒
    //如果设为500，则一秒后会提示正在倒计时8秒
    }
  }


【点击两次返回】
//@EB级储存卡
//在按键按下事件中运行
f(st_kC==4)
//判断是否点击返回键
{
  f(sss a==null)
  {
    sss a=0
    tw("再按一次返回键退出")
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
  }


【在文件夹中循环创建无用文件】
//@EB级储存卡
//注意，此类代码仅供测试，出现文件丢失等情况本手册概不负责
t()
{
  s a=1
  w(a>0)
  {
    s(a+1,a)
    syso(a)
    sran(1,100000,b)
    ss("%abc/"+b+".txt",c)
    //赋予c以"%abc/b.txt/的文件名
    //因为b是随机数，所以文件名不会重复(很小概率)，可以循环创建无用文件
    fw(c,b)
  }
}
//也可以把"fw(c,b)"改为:
//fr("%abc.txt",d)
//fw(c.d)
//使用指定%abc.txt文件内容


【扩大文件内存占用】
//@EB级储存卡
//注意，此类代码仅供测试，出现文件丢失等情况本手册概不负责
//扩大文件n倍内存
s a="%abc.txt"
fr(a,b)
ss(b+b,c)
//赋予c以两个"%abc.txt"的内容
//如果是s(b+b+b,c)，则是三倍，以比类推
fw(a,c)
//把n个"%abc.txt"的内容写入"%abc.txt"中
//如果运行2次，则会使"%abc.txt"扩大n^2倍


//增加文件n倍内存
t()
{
s a="%abc.txt"
fr(a,b)
ss(b+b,c)
//赋予c以两个"%abc.txt"的内容
//如果是s(b+b+b,c)，则是三倍，以比类推
fw(a,c)
//把n个"%abc.txt"的内容写入"%abc.txt"中
//如果运行2次，则会使"abc.txt"增大2n倍
}

//注:"增加文件n倍内存"与"扩大文件n倍内存"不同
//"增加文件n倍内存"指在当前文件上加上自己(原文件)    扩大文件n倍内存"指在当前文件的基础上加上自己(当前文件)
//例:假设"%abc.txt"文件为"123456"，扩大后变更为"123456123456"


【人工解决无编程经验初学者的问题】
//@EB级储存卡
/.
温馨提醒，这是这个人开发出来的一个没什么乱用的代码，
在s qun=k的这行前面几乎都没什么用，使用前请自行修改
./
fw("3.txt","1")
fw("4.txt","2")
fw("5.txt","4")
fw("1.txt","6")
fw("2.txt","6")
fw("6.txt","6")
fw("8.txt","6")
fw("7.txt","8")
fw("9.txt","8")
fr("%1.txt",a1)
fr("%2.txt",a2)
fr("%3.txt",a3)
fr("%4.txt",a4)
fr("%5.txt",a5)
fr("%6.txt",a6)
fr("%7.txt",a7)
fr("%8.txt",a8)
fr("%9.txt",a9)
s(a1*100000000+a2*10000000+a3*1000000+a4*100000+a5*10000+a6*1000+a7*100+a8*10+a9,k)
s qun=k
ss("mqqapi://card/show_pslcard?src_type=internal&version=1&uin="+qun+"&card_type=group&source=qrcode",joinqq)
sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",joinqq)
uit(a, "chooser", "QQ群窗口")


【Java 获取电量信息】
//@残页
javanew(intentFilter,"android.content.IntentFilter","String","android.intent.action.BATTERY_CHANGED")
java(batteryStatus,activity,"android.content.Context.registerReceiver","android.content.BroadcastReceiver",null,"android.content.IntentFilter",intentFilter)
//BATTERY_CHANGED是一个粘性广播，所以传null值就能拿到当前状态

java(status,batteryStatus,"android.content.Intent.getIntExtra","String","status","int",-1)
f(status == 2) {
  tw("充电中")
  } else f(status == 3 || status == 4) {
  tw("放电中")
  } else f(status == 5) {
  tw("已充满")
  }

java(plug,batteryStatus,"android.content.Intent.getIntExtra","String","plugged","int",-1)
f(plug == 1) {
  tw("AC充电中")
  } else f(plug == 2) {
  tw("USB充电中")
  } else f(plug == 4) {
  tw("无线充电中")
  }

java(level,batteryStatus,"android.content.Intent.getIntExtra","String","level","int",-1)
//当前电池电量
java(scale,batteryStatus,"android.content.Intent.getIntExtra","String","scale","int",-1)
//最大电池电量
ss("当前电池电量：" + level + "
最大电池电量：" + scale,msg)
tw(msg)

//参考资料：https://developer.android.google.cn/training/monitoring-device-state/battery-monitoring.html 等


【输入法显示控制】
@膨胀到底  @我是哔小将  
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
java(window,activity,"android.app.Activity.getWindow")
java(null,window,"android.view.Window.setSoftInputMode","int",flag)


【浏览器控制】
//这两个用其中一个就好
//第一个
gvs(浏览器控件ID,wv)
java(ws,wv,"android.webkit.WebView.getSettings")
//设置WebView是否支持使用屏幕控件或手势进行缩放，默认是true，支持缩放。
java(null,ws,"android.webkit.WebSettings.setSupportZoom","boolean",false)
//第二个
//隐藏浏览器放大缩小按钮
s id=浏览器控件
gvs(id,wv)
java(ws,wv,"android.webkit.WebView.getSettings")
java(null,ws,"android.webkit.WebSettings.setBuiltInZoomControls","boolean",true)
java(null,ws,"android.webkit.WebSettings.setDisplayZoomControls","boolean",false)
转载自@俺村俺最帅


【调用支付宝支付】
s url="HTTPS://QR.ALIPAY.COM/FKX0326118CZPOZQQRXH4D"
//以上链接改为你的支付宝二维码链接

s pay="alipayqr://platformapi/startapp?saId=10000007&clientVersion=3.7.0.0718&qrcode="
ss(pay+url,pay)
sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",pay)
uit(a, "chooser", "支付宝捐款")

说明：需要已安装支付宝，此代码将打开支付宝指定转账界面。


【调用支付宝手机充值】
s zfb="alipayqr://platformapi/startapp?saId=10000003"
//跳转支付宝手机充值页面
sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",zfb)
uit(a, "chooser", "支付宝手机充值")

说明：需要已安装支付宝才能起效，此代码可以跳转到支付宝话费充值界面。


【调用支付宝扫一扫】
s zfb="alipayqr://platformapi/startapp?saId=10000007"
sit(a,"action", "android.intent.action.VIEW")

sit(a,"data",zfb)
uit(a, "chooser", "支付宝扫一扫")

说明：需要以安装支付宝才能起效。


【音乐播放代码】
s m="音乐路径"
bfm(m,sss.sth)
bfms(sss.sth,"sl",true)


如果要播放网页音乐请输入以下代码：
t()
{
s m="音乐直链"
bfm(m,sss.sth)
bfms(sss.sth,"sl",true)
}


【获取根目录文件显示在列表上】
s ss=""
.这是根目录
fl(ss,true,b)
for(c;b)
{
ula(a,2="@60a85caf970cd853ebf9529f4a46f42c.png",3=c)
}
fl(ss,false,b)
for(c;b)
{
ula(a,2="@79.png",3=c)
}
uls(8,a,"a.iyu","100dp",-2)


【图片全屏显示】
width=-1
height=-1
src=@2016211.png
.这是图片路径
scaletype=fitxy
.以上放到图片控件属性里


【点击调用侧滑】
ug(2,"isdraweropen",b)
.2是侧滑的ID
f(b==true)
{
us(2,"closedrawer","start")

}
else
{
us(2,"opendrawer","start")
}


【下拉菜单改变字体颜色】
.以本软件为例，字体颜色更换
s wa="黑;红;绿;蓝"
sl(wa,";",c)
uls(30,c)
.注：30是下拉菜单ID，以上放载入事件。


ug(30,"selecteditem",b)
.获取下拉框参数

f(b=="红")
.判断是否红色执行以下代码
{
us(15,"textcolor","#ffff0a00")
}
else f(b=="蓝")
.判断是否蓝色执行以下代码
{
us(15,"textcolor","#ff001eff")
}
else f(b=="黑")
.判断是否黑色执行以下代码
{
us(15,"textcolor","#f8000000")
}
else f(b=="绿")
.判断是否绿色执行以下代码
{
us(15,"textcolor","#ff00cc22")
}


【设置字体阴影】
.把以下代码放进控件属性里面

shadowradius=4
shadowcolor=#000000
shadowdx=0.5
shadowdy=-5


.iapp代码助手


【设置光标选中文字颜色】
s id=文本或者编辑框id
ug(id,"text",tx)
ug(id,"selectionstart",a)
ug(id,"selectionend",b)
ssg(tx,a,b,c)
s aa="<font color=#DC143C>"
s aaa="</font>"
ss(aa+c+aaa,hh)
sr(tx,c,hh,uuy)
sr(uuy,"\n","<br>",ui)
ss("(html)"+ui,uy)
us(id,"text",uy)
us(id,"selection",a)
.保留光标位置
.作者:youyou iapp代码助手原作开源，感谢嘻嘻哈哈走过去帮助


【简单闪动图】
dha(dh, true, false)
dh(dh, "duration", 50)
.每次执行的时间间隔
dh(dh, "repeat", 2000000000)
.重复的次数
us(1, "dh", dh)
.图片控件的ID


【远程更新软件写法】
s dq="1.5"
.当前版本号，每升级一次来这里改一个版本号
tw("检测中")
t()
{
hs("https://share.weiyun.com/d21af7ff8722fd49eb506f9a40814f55",wy)
sj(wy,"《","》",bb)
sj(wy,"★","★",gg)
sj(wy,"〖","〗",gx)
f(bb>dq)
{
ufnsui()
{
utw(null,"有新版本更新",gg,"更新","取消",false,v)
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
tw("没有更新版本")
}
}
}


【判断文件是否存在】
s a="%xinl/gg.xinl"
//a是文件路径
fe(a,b)
f(b=="true")
{
ufnsui()
{
tw("文件存在")
//这里还可以添加其他代码
}
}
else
{
ufnsui()
{
tw("文件不存在")
//这里还可以添加其他代码
}
}


【应用签到】
s lj="q/i/a/n/dao.txt"
s lj2="q/i/a/n/dsj.txt"

fr(lj2,time)
time(2,tt)
syso(tt)
syso(time)
f(time==tt)
{
tw("今天已经签到过了！")
}
else
{
fr(lj,jf)
s(jf+1,jff)
fw(lj,jff)
ss("积分:"+jff,jfff)
us(4,"text",jfff)
.4是积分显示控件ID

fw(lj2,tt)
tw("签到成功，积分+1")
}


【调用图库】
sit(a, "action", "android.intent.action.GET_CONTENT")
sit(a, "type", "image/*")
uit(a, "result",1)


【表白特效】
s q2="可能遇见你，对我来说是最大的幸福。有了你，我的生涯变的无穷广阔，有了你，世界变得如斯迷人。你是世界，世界是你。我乐意用本人的心，好好的陪着你，爱着你。陪你到你想去的处所，居心走完咱们人生的余下的旅程。在将来的日子里，兴许什么都无奈断定，但独一能够肯定的是，我爱的人是你，无论当初仍是未来，我想我这里都会是你最暖和的港湾，都是为你遮风避雨的城墙。"

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
ss(q5+"_",q5)

us(id,"text",q5)
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
}


【保存图片到QQ收藏】
sit(a, "action", "android.intent.action.SEND")

sit(a, "type", "image/jpeg")

sit(a,"classname","com.tencent.mobileqq", "cooperation.qqfav.widget.QfavJumpActivity")

sit(a, "extra", "android.intent.extra.STREAM","/sdcard/lunbo.png")

uit(a, "chooser", "收藏图片")


【分享5次进入软件】
ug(27,"text",a)
f(a==5)
{
.要进入的界面
uigo("ym")
end()
}
else
{
s+(1,a,b)
us(5,"text",b)
ss("已经分享了"+b+"次",g)
t()
{
stop(5000)
ufnsui()
{
tw(g)
}
}
sit(a, "action", "android.intent.action.SEND")

sit(a, "type", "text/plain")

sit(a, "extra", "android.intent.extra.SUBJECT", "分享软件")

sit(a, "extra", "android.intent.extra.TEXT", "内容")

sit(a, "flags", 2547391605)

uit(a, "chooser", "分享软件")

}
文本控件的text属性要为0


【搜索音乐文件】
tw("扫描音乐需要较长时间，请耐心等候∩_∩")
.文件夹
s yy1="mp1"
s yy2="mp2"
s yy3="mp3"
s yy4="wma"
s yy5="wav"
s yy6="mid"
s yy7="aac"
s yy8="mpg"
s yy9="mpeg"
s yy10="flac"
s yy11="m4a"
.音乐文件后缀名



fe("/storage/emulated/0",sf1)
f(sf1==true)
{
s lj="/storage/emulated/0;"
}
fe("/storage/sdcard1",sf2)
f(sf2==true)
{
s lj="/storage/sdcard1;"
}
f(sf1==true && sf2==true)
{

s lj="/storage/emulated/0;/storage/sdcard1"
}



sl(lj,";",a1)
.文件路径

t()
{
for(a3;a1)
{
.循环赋值文件路径
ufnsui()
.线程中更新界面
{
us(sss.smyy,"text",a3)
.设置控件2显示当前扫描的路径
}
.ss(lj1+"/"+a2,a3)
.循环拼接得出文件路径
f(a3 ?* ".")
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
f(a3 ? ".")
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
us(sss.smyy,"text",b2)
.设置控件2显示当前扫描的路径
}
ss(a3+"/"+b2,b3)
.循环拼接得出文件路径
f(b3 ?* ".")
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
f(b3 ? ".")
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
us(sss.smyy,"text",c2)
.设置控件2显示当前扫描的路径
}
ss(b3+"/"+c2,c3)
.循环拼接得出文件路径
f(c3 ?* ".")
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
f(c3 ? ".")
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
us(sss.smyy,"text",d2)
.设置控件2显示当前扫描的路径
}
ss(c3+"/"+d2,d3)
.循环拼接得出文件路径
f(d3 ?* ".")
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
f(d3 ? ".")
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
us(sss.smyy,"text",e2)
.设置控件2显示当前扫描的路径
}
ss(d3+"/"+e2,e3)
.循环拼接得出文件路径
f(e3 ?* ".")
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
f(e3 ? ".")
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
ss(sss.sz+e3+"\n",sss.sz)
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
ss(sss.sz+d3+"\n",sss.sz)
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
ss(sss.sz+c3+"\n",sss.sz)
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
ss(sss.sz+b3+"\n",sss.sz)
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
ss(sss.sz+a3+"\n",sss.sz)
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
fw("%捡破烂的小屁孩/欧欧音播/音乐列表",sss.sz)
.把音乐列表写入文件
.uls(1,yy,"smyyzt.iyu",-1,-2)
.设置列表显示内容
tw("音乐扫描完成")
endutw()
uigo("zjm.iyu")
}
}


【下载后导入iapp】
.把以下代码输入到列表的单击触屏项目中

ulag(st_vW,st_pN,软件链接文本ID,a)
ulag(st_vW,st_pN,软件名字文本ID,z)
ss("%IAPD源码/"+z+".iapp",m)
sss z=z
sss m=m


t()
{
ufnsui()
{
utw("","","jz.iyu",false,sss.utw)
{

}
}
ufnsui()
{
gvs(sss.utw,2,c)
}
dhr(dh,0,360,1,0.5,1,0.5)
dh(dh,"duration",2000)
ufnsui()
{
us(c,"dh",dh)
}
dh(dh, "repeat", 1000)
hd(a,m,true,kk)
fe(m,ll)
f(ll==true)
{
ufnsui()
{

endutw()
ufnsui()
{
utw("","","dr.iyu",false,jjj)
{

}
}
}
}
else
{
ufnsui()
{
tw("下载失败")
}
}
}



.把以下代码输入到导入按钮中


ss("%iApp/ProjectApp/"+sss.z+"/dh",h)
ss("%iApp/ProjectApp/"+sss.z,b)



t()
{

fw(h,"yes")
fd(h,kk)
fuzs(sss.m,b,m)
syso(b)
ufnsui()
{
tw("导入成功")
endutw()
}
}


【iapp提取视频链接】
<code>
t()
{

ug(编辑框id,"text",dz)
hs(dz,aa)
//获取网站地址，并hs获取网页内容
s se = ".*?(https?://(.*?\.mp4)).*?"
.s a = 0
se(aa,se,0,se)
se(se, "find", e)
w(e == true)
{
se(se, "group", 1, e)
sr(e,"&amp;amp;","",e)
sr(e,"&lt;a href="","",e)
sr(e,""","",e)

f(a == null)
{
s a =e
}
else
{
ss(a+"\n"+e,a)
}
se(se, "find", e)
ufnsui()
{
us(编辑框或文本id,"text","")
us(编辑框或文本id"text",a)
}
}
}
}
</code>


【获取调窗或不同界面控件内容】
utw(null,"弹窗标题","m.iyu","确定",false,v)
{
gvs(v,1,ok)
//通过gvs获取v变量界面里控件为1的对象
ug(ok,"text",yes)
//再获取ok对象的文本内容
tw(yes)
}

道理很简单，通过gvs获取弹窗界面里的控件，再通过us获取或者us设置。
如果是到不同同界面
ug(lb.1,"text",b)


【美化控钮或背景】
s a1 = 5
s b1 = 15
s c1 = "#ff059700|#ff059700|#ff059700"
s d1 = "#ff059700"
s e1 = "topbottom"
ngde(a1,b1,c1,d1,e1,f)
us(24,"background",f)


ーーーーーーーー

ngde("5","5","#ff00bdff","#ff00bdff", a)

us(6,"background",a)
us(6,"backgroundripple","#607D8B")


【设置列表背景为圆角】
参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,"background","#336699")

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,"#336699",yes)
us(ok,"background",yes)


【给列表载入各种动画效果】
//获取控件对象id1
gvs(st_vW,list.1,gvs_1)
//获取控件对象1


//.右往左滑动特效
swh("pxw",w)
dht(dh, w,0,150, 0)
dh(dh, "duration",450)
us(gvs_1, "dh", dh)






/.左往右动画
swh("pxw",w)
dht(dh,0,w,10, 0)
dh(dh, "duration",450)
us(gvs_1, "dh", dh)
./左往右动画

/.列表翻转动画
dhas(dh,gvs_1, "rotationY", 0,30,60,90,120,150,180,210,240,270,300,330,360)
dh(dh, "duration", 1500)
dh(dh, "start")
.//列表翻转动画


/.列表渐显动画

dha(dh,true, false)
dh(dh, "duration", 1000)
us(gvs_1, "dh", dh)

.//列表渐显动画


/.由小到大显示
dhs(dh, 0.4, 2.0, 0.4, 2.0, 1, 0.4, 1, 0.4)
dh(dh, "duration", 1500)
us(gvs_1, "dh", dh)
./由小到大显示
参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,"background","#336699")

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,"#336699",yes)
us(ok,"background",yes)
获取内容(界面名.控件id,控件属性,取值)


【仿iapp代码补全】
.需要自己布局，自己动脑
.下面是仿iapp代码补全辅助工具
ss gbwz0=0
.ug(xbx.19,"text",txjq2)
//xbx.19为编辑框的id
s txjq2=st_sS
sss txjq=txjq2
sr(txjq2,"\n","щ",txjq)
ug(xbx.19,"selectionstart",gbwz)
ss gbwz0=gbwz
ssg(txjq,0,gbwz,jq)
sss jq=jq
s zf=","={}><(); -*!|/:?&\#@$p[]_щ "
s zkh="("
s ykh=")"
sss gbwz=gbwz
t()
{
w(ss.gbwz0>0)
{
s-(ss.gbwz0,1,ss.gbwz0)
s-(ss.gbwz0,1,gbwz1)
ssg(jq,ss.gbwz0,gbwz,jq2)
ssg(jq,gbwz1,ss.gbwz0,jq3)
f(jq3==null)
{
s jq3=" "
}
sss jq2=jq2
f(zf?jq3&&zf!="")
{
sss gbwz0=ss.gbwz0
ss gbwz0=0
f(jq2!=zhk&&jq2!=ykh&&jq2!=" ")
{
fn ss.tx(jq2)
}
else f(jq2!=zhk||jq2!=ykh||jq2!=" ")
{
ufnsui()
{
us(xbx.87,"visibility","gone")
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
us(xbx.87,"visibility","gone")
}
ula(ssjg, "clear")
s sslj="@function/"
ss(sslj "fix.txt",ssnr1)
//要搜索的函数表
fr(ssnr1,nr1)
s fh="sl(nr1,fh,sc1)
s ssjg=null
s ssjl=0
t()
{
f(ssgj=="")
{
.tw("输入不能为空")
}
else
{
for(sd1;sc1)
{
sj(sd1,"「","」",hsj)
sj(sd1,"《","》",hsdm)
sj(sd1,"〖","〗",hsys)
f(hsdm?*ssgj)
{
s (ssjl,1,ssjl)
ula(ssjg,2=hsdm,3=hsys,-1=hsj)
}
}
f(ssjl>=5)
{
s w="200dp"
}
else
{
s h=-2
}
us(xbx.87,"height",h)
f(ssjl!=0)
{
ufnsui()
{
us(xbx.87,"visibility","visible")
uls(xbx.87,ssjg,"zdtxlb.iyu",-1,-2)
}
}
else
{
ufnsui()
{
us(xbx.87,"visibility","gone")
.tw("无匹配")
}
}
}
}


显示到右上角列表的单击项目事件
ulag(st_vW,st_pN,2,cr)
ulag(st_vW,st_pN,-1,ts)
s bjk=sss.bjk
ug(bjk,"selectionstart",dqgb)
f(sss.gbwz==dqgb)
{
sr(sss.jq2,"щ","\n",jq2x)
sr(sss.jq,"щ","\n",jqx)
slg(cr,jcd)
s (sss.gbwz0,jcd,szgb)
ss(jq2x "@jsmjq",jq2)
ss(jqx "@jsmjq",jq)
sr(sss.txjq,jqx,jq,zbcr)
sr(zbcr,jq2,cr,wccr)
us(bjk,"text",wccr)
us(bjk,"selection",szgb)
}
else
{
fn charu.cr(cr)
//这里是插入文本模块，前面貌似讲过
}
tw(ts)
us(st_vW,"visibility","gone")




.作者：嘻嘻哈哈走过去


【编辑框高亮】
.放进编辑框监听事件文本更新后

s id=编辑框id
ug(id,"text",nr)
ug(id,"selectionstart",wz)
.获取部分
s ss="这里面填你要高亮的内容♡→这货是分隔符，可以换掉。♡可以批量替换"
sl(ss,"♡",ss)
sgszl(ss,sb)
.设置数组
s xh=0
for(0;sb)
{
sgsz(ss,xh,ss2)
ss("<font color=#FFA500>"+ss2+"</font>",th)
.用于高亮的html
sr(nr,ss2,th,nr)
s(xh+1,xh)
}
.循环拼接为html
sr(nr,"\n","<br>",nr)
ss("(html)"+nr,nr)
us(id,"text",nr)
us(id,"selection",wz)
.这个用来保存光标位置
.作者:不详


【编辑框显示行号】
.放进编辑框监听事件文本更新后


t()
{
s bjk=编辑框id
s wb=用来显示行数的文本id
.先布局在弄
s hs=0
f(st_sS?"\n")
{
ug(bjk,"text",nr)
sr(nr,"\n","\nh%h",nr1)
//这里需要注意，2.08版本后添加了正则表达式，所以用的功能需要正则表达式才能正常，不过这里可以稍微改进下就可以了，不解释了，自己参悟
sl(nr1,"\n",nr2)
for(nr3;nr2)
{
s+(hs,1,hs)
ss(hs1+"\n"+hs,hs1)
}
sr(hs1,"\n1\n","1\n",hs2)
//这里是为了解决第一行显示的错误
ufnsui()
{
us(wb,"text",hs2)
}
}
}
sss hszkg=1


【光标位置插入内容】
ss tj="iapp代码助手"
s id="编框id"
slg(ss.tj,zfcd)
ug(id,"selectionstart",gbwz)
ug(id,"text",bjnr)
s(gbwz zfcd,gbwz2)
ssg(bjnr,0,gbwz,hq2)
ssg(bjnr,gbwz,hq3)
ss(hq2 ss.tj hq3,hq4)
us(id,"text",hq4)
us(id,"selection",gbwz2)

.作者：youyou


【图片无限旋转】
.放页面载入事件
dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, "duration", 3000)
us(图片id, "dh", dh)
dhon(dh)
{
us(图片id, "dh", dh)
}


【搜索列表关键词代码】
sl("iapp;youyou;iapp代码助手;i学习;无敌",";",po)
.分割一段内容为数组
for(a;po)
{
//循环判断是否包含需要搜索的内容
f(a?"iapp代码助手")
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(a)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！


【限制使用密码进入软件】
ug(密码输入编辑框id,"text",a)
f(a=="初始密码")
{
tw("密码正确")
.这里可以加上其他代码，比如，密码正确后跳转界面uigo(界面名)
}
else
{
tw("密码错误")
}


【注册码与注册机的原理】
有时候作者为了保留权利，特加入了注册码做为正版软件，使用方需要向作者购买或索爱激活码才能通过检测，但如何才能让每个人的激活不通用呢？那么就需要获取使用方的imei号，因为每部机器的imei都是不同的，下面就教大家如何去写。

1.有两种办法保存数据，一种为本地，一种为服务器，我们先说说第一种，首先要用一个本地文件做为保存记录，下次打开才不会再次要求输入激活码，我们以根目录abc.txt文件为例。

2.
________________

simei(imei)
s2(imei*2,imei1)
s(imei1*2,imei2)
.获取机器号并乘以2后赋值给imei2，可任意计算，假设有s2算法最后一步一定要用单s计算

s wj="abc.txt"
.这个是保存数据的文件路径，越隐蔽越好

fe(wj,a)
f(a=="true")
{
fr(wj,b)
f(b=="")
{
tw("注册文件异常！")
}
else
{
f(b==imei2)
{
tw("已注册，欢迎使用！")
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw("注册失败！")
}
}
}
else
{
tw("未注册，请注册后使用！")
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
hs("http://1294858802.wodemo.net",null,null,a)
f(a?b)
{
tw("已注册，欢迎使用！")
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw("未注册，请注册后使用！")
}
}

.通过网页的返回判断是否有该机器号，存在就成功注册，不存在就失败。

__________________


.注：有些手机的机器号带有字母，使用第一种办法需要判断字母后再计算，否则会出错，第二种办法就不用计算，任何机器号都可以。


【文本保存、读取、查找】
保存:
1、
fw("abc.txt","这里是内容")

2、
s a="这里是内容"
fw("abc.txt",a)

3、
s a="iapp/abc.txt"
s b="这里是内容"
fw(a,b)

.iapp为文件夹，abc.txt为文件

________________


读取:
1、
fr("abc.txt",a)
tw(a)

2、
s a="iapp/abc.txt"
fr(a,b)
us(id,"text",b)

.iapp为文件夹，abc.txt为文件，id为控件id须修改

________________


查找:

s a="这里是要找的内容，我们来找这里有几个”找”字"
s b="找"

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
ss("查找完成，共"+d+"个",h)
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

.注：.a是要查找内容，b是要找的字，如果要查找的内容是读出文本那就加一个读出涵数，然后把上面s a="xxx"那句删除掉，如：

s a="这里是要找的内容，我们来找这里有几个”找”字"

改成:

fr("abc.txt",a)


【文本取值与赋值】
s id=这里是文本或编辑框控件id


ug(id,"text",a)

.获取内容并赋值变量给a
._______________

s a="你好"
us(id,"text",a)

.将变量a赋值给控件


【全局循环背景音乐】
.这是全局的任何页面都可以播放哦

.设置音乐文件路径并播放，将播放组件对象设为全局
s miusic = "文件路径"
bfm(miusic, sss.mp3)
.设置循环播放
bfms(sss.mp3, "sl", true)


【在侧滑和滑动窗体显示列表的方法】
.很多小伙伴用原始方法都不行因为这里是侧滑和滑动窗体的主页


【文字逐渐向左无限移动】
t()
{
  s id=控件id
  swh("pxw",w)
  s s=w
  ufnsui()
  {
    us(id,"layout_marginleft",s)
  }
  w(1==1)
  {
    f(s&gt;0)
    {
      s(s-5,s)
      ufnsui()
      {
        us(id,"layout_marginleft",s)
      }
      stop(10)
      .循环间隔
    }
    else
    {
      s s=w
    }
  }
}


【文字逐渐缩小】
t()
{
  s id=文本控件ID
  s t=150
  .设置文本字体初始大小
  w(t&gt;15)
  .启用循环，当字体大小小于5时停止循环
  {
    s(t-2,t)
    ufnsui()
    {
      us(id,"textsize",t)
    }
    stop(20)
    .设置停顿间隔
  }
}


【远程弹窗公告】
t()
{
  hs("这里是网址",a)
  sj(a,"获取符","获取符",b)
  ufnsui()
  {
    utw(null,"公告",b,"知道了",true,sb)
    {
    }
  }
  
  
}


【一建清除文件夹所有文件】
fn del(path)
t()
{
  f(ss.path0==null)
  {
    fi(path,f)
    f(f==false)
    {
      ufnsui()
      {
        tw("文件夹路径错误！")
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
      ss("删除："+path+"  成功1！",k)
      syso(k)
      //打印删除的文件（夹）路径详情
      slg(path,l)
      slof(path,"/",l,l1)
      //取路径path的倒数第一个字符"/"的位置
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
      ss(path+"/"+b,path2)
      fd(path2,f)
      f(f==false)
      {
        fn a.del(path2)
        //如果删除文件夹path2失败则重新以path2为叁数重新删除
        endcode
      }
      ss("删除："+path2+"  成功！",k)
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
    tw("删除完毕！")
  }
}
end fn

//以上代码请放到模块a.myu里，如果你要改模块名称，请将上面代码里的3个a.del改一下

//以下代码放到按钮点击事件中,传入要删的文件夹调用上面的模块一键删除
s lj="/sdcard/abc"
.模块会自动判断路径的正确性以及是否是文件夹
fn a.del(lj)
.调用模块开始删除


【防止打开软件输入法】
在编辑框的父控件属性里添加：
focusable=true
focusableintouchmode=true
即可


【随机语录的启动语录】
sl("你爹|你大爷|你二爷|你大舅|你二舅|你大侄子","|",ok)
//分割为数组

sran(1,6,sj)
//生产1-6的随机数

sgsz(ok,sj,yes)
//随机访问语录

tw(yes)


【给编辑框添加滚动条方法】
在使用编辑框的时候难免会遇到一个有点蛋疼的问题，编辑框没有滚动条而且主要的是编辑框下滑速度不忍直视，但一个方法即可解决。

首先添加一个滚动控件，在滚动控件里添加编辑框就行了。具体效果可参考iApc的内容预览。非常好用哦


【去除编辑框点击后有背景颜色】
默认编辑框只要设置颜色就会出现一个点击输入后颜色 浅蓝色的背景


比如设置编辑框白色，输入内容时编辑框背景颜色就会变成浅蓝色，非常影响美观。

解决办法非常简单，在编辑框的获得焦点事件写下代码：
us(编辑框id,"background","")

即可去除默认的颜色当然也可以设置其他颜色。在后面的""里输入颜色代码即可。


【编辑框的内容不垂直居中】
当你设置编辑框高度后，默认的编辑框里的文字是垂直居中的，可在属性里设置：

gravity=top

即可。


【给编辑框的文字设置颜色，语法高亮】
可参考iAPP的编辑代码时语法高亮。具体过程就不说了

编辑框属性里内容：

text=(html)<font color=#006000>我是绿色<font>我不是绿色


【点击发送QQ临时对话接口代码】
s qq=1294858802
//你的QQ号
ss("mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&version=1",urlqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",urlqq)
uit(a, "chooser", "选择QQ")


【给控件加圆角的方法】
需要在载入事件先赋值，代码如下：

ngde(5,"#ffffff",ok)
us(1,"background",ok)

设置id为1的控件圆角的角度是5，背景颜色是#ffffff，通过ok调用，可以多个控件一起调用，还有其他更多属性，可搜索  ngde 查看。


【列表点击颜色的设置】
列表点击颜色有两种，一种是项目点击事件。

还有一种我比较推荐，就是在列表界面，给线性布局加点击事件，把背景设置为透明就有点击效果了，参考iApc的列表点击效果！


【滑动窗体滑动界面切换】
道理很简单，代码太长说下原理就行了。


在滑动窗体切换界面事件写下代码

f(st_pN==0)
{
tw("你现在是第一个界面")
}
else f(st_pN==1)
{
tw("你滑动到了第二个界面")
}

注意的是st_pN获取当前界面是从0开始的，也就是第一个界面是0第二个是1，以此类推。

既然得出了当前界面那还不简单？us设置颜色啊，比如获取界面是第二个就把某个控件变成黄色或者换个图片。代码要写很多。


【在侧滑或者滑动窗体显示列表方法】
若没有滑动窗体或者侧滑窗体，那么添加列表的代码就是这样的

ula(ula,1="测试")
uls(id,ula,"list.iyu",-2,-2)

加了滑动窗体后，就应该这样写

t()
{
ula(ula,1="测试")
ufnsui()
{
uls(界面名.id,ula,"list.iyu",-2,-2)
}
}

加在mian载入事件！不同的只是需要加线程和滑动窗体里的界面名。ufnsui也是必须加的，线程内更新界面都要加，开源项目里有示例工程，网格视图同理。


【获取手机系统版本的方法】
sjxx(xt)
sgsz(xt,2,xtb)
sj(xtb,"\n",null,xtb)
sj(xtb,"\n",null,apk)
f(apk>=19)
{
tw("你的系统低于安卓4.4")
}

别问我19是怎么来的，关于系统版本对应的SDK可百度查阅。


【隐藏列表滚动条与隐藏列表分割线】
iAPP默认的列表分割线并不好看，当然你完全可以重新定义分割线，可参考iApc的列表分割线（分割线距离左边有一段距离）

属性添加：
scrollbars=none
//隐藏滚动条
dividerheight=0dp
//设置分割线高度为0

隐藏分割线后怎么添加分割线呢？答案很简单，在你的列表显示界面，添加一条线性布局高度为1即可

隐藏滚动条不仅在列表有效，在滚动控件和水平滚动控件一样有效哦！


【hs获取网页后编码错误解决办法】
在用hs获取网页后难免会遇到中文编码错误的问题，原因就是该网页使用gb2313中文编码，安卓是使用utf-8中文编码的，解决办法就是转换下。

示例
hs("http://baidu.com",by)
sutf8to(by, b)
tw(b)


【退出软件动画效果】
原理很简单，通过st_kC获取用户按的是哪个按键，判断是不是等于4（4是退出），是就退出并显示跳转动画，其中lan(4)可设置1-11，可查询跳转动画代码。


f(st_kC==4)
{
end()
lan(4)

}


【关于弹窗载入界面的教程】
2.0的新功能弹窗可以载入另一个界面，我们可以在弹窗里加图片，加进度条，加视频，加一切控件，这使得弹窗变得很好用，但是弹窗基本大家都会了，有几个人会做获取或者设置弹窗界面的内容呢？

示例
utw(null,"弹窗标题","m.iyu","确定",false,v)
{
gvs(v,1,ok)
//通过gvs获取v变量界面里控件为1的对象
ug(ok,"text",yes)
//再获取ok对象的文本内容
tw(yes)
}

道理很简单，通过gvs获取弹窗界面里的控件，再通过us获取或者us设置。


【论启动图的正确做法】
首先搞清楚为什么要启动图？启动图不是为了让软件高大上一些，他是为了让软件打开后加载数据时不让用户看到。我非常抵制和排斥跳转界面，low到家了！

比如iApc的启动图，iApc打开后会加载4个列表，也就是示例，代码，控件，更多，加载这四个个列表大约需要一秒钟时间，如果iApc没有启动图，那么打开iApc后所有列表会是空，也要等到一秒后列表才会加载出来，影响体验。

目前iApc的启动图是列表加载完毕后隐藏图片控件，我自认为这是最好的做法了，当然也欢迎吐槽。


【软件第一次使用弹窗提示】
这个比较简单，代码如下：

fe("$dyc.txt",dyc)
//获取文件是否存在
f(dyc=="false")
//判断是否存在
{
utw(null,"提示","你是第一次使用本软件哦","确定",false,dycs)
{
}
fw("$dyc.txt","yes")
}


【post提交示例】
post提交（可参考本软件的反馈信息）。学会post提交后你可以做一些联网软件，比如像QQ微信这样的，当然工程量比较大，但做个论坛还是没问题的！

以下是jkniu.com截取的搜索表单；
   <form id="search-form" name="g" method="get" action="/bbs/book_list.aspx">
        <input type="hidden" name="siteid" value="1000">
        <input type="hidden" name="classid" value="0">
        <input type="hidden" name="action" value="search">
        <input type="hidden" name="type" value="title">
          <input type="text" name="key" placeholder="请输入关键字">
      </form>

通常表单都是form开头form结尾！截取这部分就行了。
第一个form的action=表示提交的网站接口就是/bbs/book_list.aspx 当然他没有网址就表示是本网站也就是http://jkniu.com/bbs/book_list.aspx

接下来看第二行input，input的意思是输入框他的属性是hidden表示这个输入框是隐藏的，我们看他的name=siteid 只需要截取siteid就行了，还有一个是value=1000表示这个输入框的输入内容是1000

这样得出第一个post提交内容：siteid=1000

第二、第三、第四同理，分别得出：classid=0、action=search、type=title

重点来了，最后一个input也就是输入框，他不是隐藏的，而是要输入的，也就是key=输入的搜索内容。

得出：key=搜索关键字

接下来开始提交，当然必须加线程：

hs("http://jkniu.com/bbs/book_list.aspx","site=1000&classid=0&action=search&type=title&key=搜索关键字","utf-8",ok)

其中ok就是返回的搜索结果，你可以通过截取搜索出来的内容添加到你的列表控件或者文本控件。注意如果软件做论坛之类的内容，需要登录的，就需要记录cookie，过程比较麻烦就不说了。看下手册你就懂！


【模块的使用说明】
模块的使用说明：模块的作用只是为了节约你的写代码时间，其实和载入事件没什么区别。

比如新建一个模块：m.myu
在模块里写以下代码：

fn ok(sb)
tw("我是模块")
end fn

在其他界面的载入事件调用：
代码如下：

fn m.ok(sb)

界面打开后就会执行m.myu模块里 fn ok(sb) 以内的事件。
当然你也可以在这个模块里加不同的调用代码，比如：

fn ok(sb)
tw("我是模块")
end fn

fn yes(no)
tw("我是模块")
end fn

通过fn m.yes(no)调用模块fn yes(no)部分的代码！


【点击两次退出软件】
将下列代码复制到“按键按下事件”"或者按键释放事件" ：

 f(st_kC==4)
{
f(ss.end==null)
{
ss end=0
tw("再按一次退出iApc",0)
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
}


【分享软件代码】
sit(a, "action", "android.intent.action.SEND")
sit(a, "type", "text/plain")
sit(a, "extra", "android.intent.extra.SUBJECT", "分享软件")
sit(a, "extra", "android.intent.extra.TEXT", "iapp代码助手是一款iApp辅助工具，手册源码，示例工程，你需要的我都有，你确定不来试试？


【文字跑马灯】
//文本跑马灯显示
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
//获取焦点（必须设置）


【控件背景图片】
可设置在线性布局，文本控件，按钮控件，图片按钮控件，相对布局控件，帧布局控件等

直接在控件属性里输入background=图片路径
线性为例：
width=-1
height=-1
orientation=vertical
background=@bj.jpg


【软件自动检测更新】
//以下代码放在载入事件
t()
{
s link="网址"
hs(link,new)
sj(new,"<bb>","</bb>",bb)
.截取源码中<bb>到</bb>中间的版本号
sj(new,"<url>","</url>",url)
//截取新版本下载地址

f(bb>1)
{
hws(url)
//有新版本直接调用系统浏览器下载
}
else
{
ufnsui()
{
tw("已经是最新版")
}
}
}

以下是你在网页中的代码示例

<bb>2</bb><url>http://flmle.com/down.apk</url>


【判断输入框是否包含中文】
ug(id,"text",a)
stobm(a,"utf-8",b)
f(a==b)
{
tw("输入中文不包含")
}
else
{
tw("输入含有中文及中文标点")
}


【判断文件是否存在】
//abc.txt是文件名
fe("abc.txt",bbb)
f(bbb == "true")
{
tw("存在")
}
else
{
tw("不存在")
}


【调用应用市场给本软件评分】
sit(a,"ACTION", "Intent.ACTION_VIEW")
sit(a,"data","market://details?id=com.iapc")
uit(a, "chooser", "选择操作方式")

必须在应用市场有你的软件，否则会提示没有该应用。


【图片无限旋转动画】
dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, "duration", 3000)
us(图片id, "dh", dh)
dhon(dh)
{
us(图片id, "dh", dh)
}


【hs获取网页的新功能-代理IP】
来看看 手册的介绍
//带自动设置cookie方式获取网页，并记录当前网页的Cookie，并设置Header头:（可设置多条，以“||”隔开）文件头包括了Cookie，User-Agent设备型号，设置连接超时，设置接收超时，设置代理IP。
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = "http://wap.baidu.com/"
hs(a, "title=你好&text=你好吗？", "utf-8", null, true, "User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||accept=*/*||accept-language=zh-CN", 20000, 20000, "10.0.0.172:80", b)
syso(b)
}

效果不明觉厉。简单点说就是。如果你有很多代理IP，你就能做一个cc攻击（效率低下），但做一个网页刷访问还是不错的，都是模拟真实用户访问的。

比如这样的，20000是访问超时时间也就是20秒，最好设置10000-20000左右最好，怎么无限更换代理IP呢？你只需要把很多IP分割为数组，如：

sl("109.22.33.58:80#36.69.52.33:80","#",ok)
然后for循环读取ok，再循环hs访问即可（不要做坏事哈）

t()
{
hs("网址",null, "utf-8", null, true, null, 20000, 20000, "10.0.0.172:80", b)
syso(b)
}


【给按钮加触摸时的深色 方法】
按钮控件又或者是文本控件，线性布局等，只要设置了背景颜色不是白色透明，比如绿色，那么点击时的深色颜色就没有了。

其实特别简单的做法就是，先给按钮套一个线性布局，设置线性布局背景为绿色，按钮背景为透明。再给按钮加个点击事件试试看！


【获取imei进行计算密码】
通常如果获取imei来计算一些密码，直接simei(imei)即可，但如果出现因为字母，那么计算就会出问题了。（有部分手机imei是有英文字符的）

比如
simei(imei)
s(imei/2,ok)
tw(ok)

如果imei有英文字母，这个计算就不成立了，也就出错！怎么办呢？很简单，用正则表达式替换下字符即可，示例：

simei(imei)
sr(imei,"[a-z]","9",imei)
s(imei/2,ok)
tw(ok)


【搜索列表关键字的实现方法】
sl("蛋疼;鸡肋;鸡蛋;鸡皮疙瘩;蛋糕",";",so)
//分割一段内容为数组
for(k;so)
{
//循环判断是否包含需要搜索的内容
f(k?"蛋")
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(k)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！


【调用其他程序分享文件代码】
sit(a, "action", "android.intent.action.SEND")
sit(a, "type", "*/*")
sit(a, "extra", "android.intent.extra.STREAM","/sdcard/iApp/Userimg/icon_iapp.png")
uit(a, "chooser", "分享")


【us设置滑动侧滑窗体里控件属性】
在有滑动窗体或者侧滑窗体的时候需要加个判断什么的，比如判断网络是否连接，需要通过us设置文字来显示，但是直接在mian界面载入事件，比如这样：

us(a.2,"text","有网络")

你会发现没有任何效果，因为界面无法交互，但你只需要把代码放在 “界面载入完毕事件” 就行了。因为这个事件界面可以交互。


【点击取消编辑框获得焦点】
编辑框获得焦点就是编辑框点击后的光标效果，默认只要点击了编辑框，除非退出再进，否则是无法取消掉光标的，这时候就需要代码来设置一下。

us(2,"focusable",false)
//设置id为2编辑框不获得焦点

可以放在返回事件等等，按一次返回取消掉获得焦点，不过这样后编辑框就无法点击了，怎么办呢？很简单，让编辑框再可以获得焦点即可。代码如下

us(2,"focusable",true)
us(2,"focusableintouchmode",true)

注意的是；必须放在编辑框的触屏监听事件！


【添加点击菜单时的选项】
代码如下：

case 选择A:
tw("A")
break
case 选择B:
tw("B")
break
case 选择C:
tw("C")
break
default:
tw("载入成功")
break

其中，选择A等是标题，tw是点击后的事件。


【列表里设置背景圆角参考iApc】
参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,"background","#336699")

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,"#336699",yes)
us(ok,"background",yes)


【下载文件简单代码】
t()
{
hd("http://flmle.com/ok.apk","iApp/ok.apk",true,ok)
//iApp/ok是保存路径，true是如果存在则覆盖

f(ok=="0")
{
ufnsui()
{
tw("下载成功")
}
}
else
{
ufnsui()
{
tw("下载失败")
}
}


【给编辑框添加滚动条方法】
在使用编辑框的时候难免会遇到一个有点蛋疼的问题，编辑框没有滚动条而且主要的是编辑框下滑速度不忍直视，但一个方法即可解决。

首先添加一个滚动控件，在滚动控件里添加编辑框就行了。具体效果可参考iApc的内容预览。非常好用哦


【去除编辑框点击后有背景颜色】
默认编辑框只要设置颜色就会出现一个点击输入后颜色 浅蓝色的背景


比如设置编辑框白色，输入内容时编辑框背景颜色就会变成浅蓝色，非常影响美观。

解决办法非常简单，在编辑框的获得焦点事件写下代码：
us(编辑框id,"background","")

即可去除默认的颜色当然也可以设置其他颜色。在后面的""里输入颜色代码即可。


【编辑框的内容不垂直居中】
当你设置编辑框高度后，默认的编辑框里的文字是垂直居中的，可在属性里设置：

gravity=top

即可。


【给编辑框的文字设置颜色，语法高亮】
可参考iAPP的编辑代码时语法高亮。具体过程就不说了

编辑框属性里内容：

text=(html)<font color=#006000>我是绿色<font>我不是绿色


【点击发送QQ临时对话接口代码】
s qq=2279499274
//你的QQ号
ss("mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&version=1",urlqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",urlqq)
uit(a, "chooser", "选择QQ")


【点击添加QQ群接口代码】
s qun=333797002
//群号
ss("mqqapi://card/show_pslcard?src_type=internal&version=1&uin="+qun+"&card_type=group&source=qrcode",joinqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",joinqq)
uit(a, "chooser", "选择QQ")


【设置字体阴影】
.把以下代码放进控件属性里面

shadowradius=4
shadowcolor=#000000
shadowdx=0.5
shadowdy=-5


.iapp代码助手


【编辑框显示行号】
.放进编辑框监听事件文本更新后


t()
{
s bjk=编辑框id
s wb=用来显示行数的文本id
.先布局在弄
s hs=0
f(st_sS?"\n")
{
ug(bjk,"text",nr)
sr(nr,"\n","\nh%h",nr1)
//这里需要注意，2.08版本后添加了正则表达式，所以用的功能需要正则表达式才能正常，不过这里可以稍微改进下就可以了，不解释了，自己参悟
sl(nr1,"\n",nr2)
for(nr3;nr2)
{
s+(hs,1,hs)
ss(hs1+"\n"+hs,hs1)
}
sr(hs1,"\n1\n","1\n",hs2)
//这里是为了解决第一行显示的错误
ufnsui()
{
us(wb,"text",hs2)
}
}
}
sss hszkg=1


【光标位置插入内容】
ss tj="iapp代码助手"
s id="编框id"
slg(ss.tj,zfcd)
ug(id,"selectionstart",gbwz)
ug(id,"text",bjnr)
s(gbwz zfcd,gbwz2)
ssg(bjnr,0,gbwz,hq2)
ssg(bjnr,gbwz,hq3)
ss(hq2 ss.tj hq3,hq4)
us(id,"text",hq4)
us(id,"selection",gbwz2)

.作者：youyou


【图片无限旋转】
.放页面载入事件
dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, "duration", 3000)
us(图片id, "dh", dh)
dhon(dh)
{
us(图片id, "dh", dh)
}


【搜索列表关键词代码】
sl("iapp;youyou;iapp代码助手;i学习;无敌",";",po)
.分割一段内容为数组
for(a;po)
{
//循环判断是否包含需要搜索的内容
f(a?"iapp代码助手")
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(a)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！


【限制使用密码进入软件】
ug(密码输入编辑框id,"text",a)
f(a=="初始密码")
{
tw("密码正确")
.这里可以加上其他代码，比如，密码正确后跳转界面uigo(界面名)
}
else
{
tw("密码错误")
}


【注册码与注册机的原理】
有时候作者为了保留权利，特加入了注册码做为正版软件，使用方需要向作者购买或索爱激活码才能通过检测，但如何才能让每个人的激活不通用呢？那么就需要获取使用方的imei号，因为每部机器的imei都是不同的，下面就教大家如何去写。

1.有两种办法保存数据，一种为本地，一种为服务器，我们先说说第一种，首先要用一个本地文件做为保存记录，下次打开才不会再次要求输入激活码，我们以根目录abc.txt文件为例。

2.
________________

simei(imei)
s2(imei*2,imei1)
s(imei1*2,imei2)
.获取机器号并乘以2后赋值给imei2，可任意计算，假设有s2算法最后一步一定要用单s计算

s wj="abc.txt"
.这个是保存数据的文件路径，越隐蔽越好

fe(wj,a)
f(a=="true")
{
fr(wj,b)
f(b=="")
{
tw("注册文件异常！")
}
else
{
f(b==imei2)
{
tw("已注册，欢迎使用！")
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw("注册失败！")
}
}
}
else
{
tw("未注册，请注册后使用！")
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
hs("http://1294858802.wodemo.net",null,null,a)
f(a?b)
{
tw("已注册，欢迎使用！")
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw("未注册，请注册后使用！")
}
}

.通过网页的返回判断是否有该机器号，存在就成功注册，不存在就失败。

__________________


.注：有些手机的机器号带有字母，使用第一种办法需要判断字母后再计算，否则会出错，第二种办法就不用计算，任何机器号都可以。


【文本保存、读取、查找】
保存:
1、
fw("abc.txt","这里是内容")

2、
s a="这里是内容"
fw("abc.txt",a)

3、
s a="iapp/abc.txt"
s b="这里是内容"
fw(a,b)

.iapp为文件夹，abc.txt为文件

________________


读取:
1、
fr("abc.txt",a)
tw(a)

2、
s a="iapp/abc.txt"
fr(a,b)
us(id,"text",b)

.iapp为文件夹，abc.txt为文件，id为控件id须修改

________________


查找:

s a="这里是要找的内容，我们来找这里有几个”找”字"
s b="找"

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
ss("查找完成，共"+d+"个",h)
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

.注：.a是要查找内容，b是要找的字，如果要查找的内容是读出文本那就加一个读出涵数，然后把上面s a="xxx"那句删除掉，如：

s a="这里是要找的内容，我们来找这里有几个”找”字"

改成:

fr("abc.txt",a)


【密码登录实例】
ug(1,"text",u)

f(u=="")
{
tw("密码不能为空")
}
else f(u=="123456")

.这是密码
{

tw("登录成功")

uigo("a")

.这是密码正确后登录的页面
}

else

{

tw("密码错了")

}


【随机字体颜色】
s id=这里是文本控件id

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
ss("-"+sjs,sjs)
us(id, "textcolor", sjs)
stop(sj)
}
}


【字体转换语音实例代码】
ug(id,"text",a)

 .输入编辑框ID
f(a=="")

{

tw("请输入文字")

}

else

{

stobm(a,"utf-8",a)

sr(a," ","",a)

t()

{

ss("http://tts.baidu.com/text2audio?ie=UTF-8&lan=zh&text="+a,a)



ufnsui()

{

tw("下载中...",0)

}



hd(a,"%iappsj/转语音/转换后.mp3",true,b)



f(b==0)

{



ufnsui()

{

tw("已保存到根目录的%iappsj/转换后目录里面",0)

}

bfm("%iappsj/转语音/转换后.mp3",c)

bfms(c,"st")

}



}



}


【字体无限变色】
s id=这里是文本控件id

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
ss("-"+sjs,sjs)
ufnsui()
{
us(id, "textcolor", sjs)
}
stop(sj)






}
}


【时长转时间】
fn time(a)
s/(1000,a)
s(a/60/60,h)
s(a/60%60,m)
f(m&lt;10)
{
  ss("0"+m,m)

}
s(a%60,s)
f(s&lt;10)
{
  ss("0"+s,s)
}
ss(h+":"+m+":"+s,ss.time)
end fn
//以上代码放到模块中

调用方法：
s a=4567
fn 模块名.time(a)
tw(ss.time)


【获取手机信息】
sjxx(xt)
sgsz(xt,2,xtb)
sj(xtb,"\n",null,xtb)
sj(xtb,"\n",null,apk)
f(apk&gt;=19)
{
tw("你的系统低于安卓4.4")
}

别问我19是怎么来的，关于系统版本对应的SDK可百度查阅。


【远程更新教程】
今天为大家带来个利用我的磨作为更新服务器进行软件更新的实例，好进入正题吧：
首先配置我的磨，登录wodemo.net注册用户并登录，点底部管理，进入管理页点撰文，在撰文里你可以添加各类附件或文字，而且发布后也可随时编辑撰文。
我的示例网址 http://1294858802.wodemo.net/;，其中（） 里填你的更新软件的版本，[]里填写更新内容，｛｝里填写新软件下载地址，注意这些符号都是大写字符，避免与代码混淆
如何获取下载地址呢？撰文里添加附件后点提交，会再网页显示  *.……创建成功  点此链接即可进入文章页，然后用浏览器复制附件下载地址，点文章下面的“管理与编辑”把复制好的网址粘贴到｛｝里即可
接下来让我们修改软件代码，以下代码写在按钮点击事件或菜单点击事件中：




 t()
{
s a = "http://1294858802.wodemo.net/"
.这是我的磨更新网址，没磨盘的请登录wodemo.net注册
hs(a, null, null, b)
.获取网页数据并赋值给b
sj(b,"（","）",ver)
.截取括号内容为版本号，这里的括号为大写字符，防止与代码混淆
f(ver&gt;1)
.这里的1为该软件版本号，如果获取的版本号ver大于软件版本则更新
{
 sj(b,"[","]",content) 
 sj(b,"｛","｝",url) 
strim(url,url)
ss("http://"+url,url)
.获取[]内容作为介绍获取｛｝内网址作为新软件下载网址
 ss("有"+ver+"版本更新",title)
.带版本号的title作为对话框标题
uigo("gx.iyu")
.跳转到对话框界面
}
else
{
tw("已是最新版本")
}
}
以下代码写在gx.iyu文件的界面载入事件里：
utw( title,content ,"立即更新","以后再更")
{
t()
{
tw("正在下载中……")
hd(url,"app.apk",io)
.下载文件并命名为app.apk，你可以自己定义文件名
f(io==0)
{
uigo("mian.iyu")
end() 
tw("下载成功")
fo("app.apk")
.点立即更新时下载文件并完成后打开
}
}

}
else
{
tw("已取消")
uigo("mian.iyu")
.取消更新时返回程序首页并结束更新界面
end()
}


【文本取值与赋值】
s id=这里是文本或编辑框控件id


ug(id,"text",a)

.获取内容并赋值变量给a
._______________

s a="你好"
us(id,"text",a)

.将变量a赋值给控件


【全局循环背景音乐】
.这是全局的任何页面都可以播放哦

.设置音乐文件路径并播放，将播放组件对象设为全局
s miusic = "文件路径"
bfm(miusic, sss.mp3)
.设置循环播放
bfms(sss.mp3, "sl", true)


【在侧滑和滑动窗体显示列表的方法】
.很多小伙伴用原始方法都不行因为这里是侧滑和滑动窗体的主页


【文字逐渐向左无限移动】
t()
{
  s id=控件id
  swh("pxw",w)
  s s=w
  ufnsui()
  {
    us(id,"layout_marginleft",s)
  }
  w(1==1)
  {
    f(s&gt;0)
    {
      s(s-5,s)
      ufnsui()
      {
        us(id,"layout_marginleft",s)
      }
      stop(10)
      .循环间隔
    }
    else
    {
      s s=w
    }
  }
}


【文字逐渐缩小】
t()
{
  s id=文本控件ID
  s t=150
  .设置文本字体初始大小
  w(t&gt;15)
  .启用循环，当字体大小小于5时停止循环
  {
    s(t-2,t)
    ufnsui()
    {
      us(id,"textsize",t)
    }
    stop(20)
    .设置停顿间隔
  }
}


【远程弹窗公告】
t()
{
  hs("这里是网址",a)
  sj(a,"获取符","获取符",b)
  ufnsui()
  {
    utw(null,"公告",b,"知道了",true,sb)
    {
    }
  }
  
  
}


【一建清除文件夹所有文件】
fn del(path)
t()
{
  f(ss.path0==null)
  {
    fi(path,f)
    f(f==false)
    {
      ufnsui()
      {
        tw("文件夹路径错误！")
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
      ss("删除："+path+"  成功1！",k)
      syso(k)
      //打印删除的文件（夹）路径详情
      slg(path,l)
      slof(path,"/",l,l1)
      //取路径path的倒数第一个字符"/"的位置
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
      ss(path+"/"+b,path2)
      fd(path2,f)
      f(f==false)
      {
        fn a.del(path2)
        //如果删除文件夹path2失败则重新以path2为叁数重新删除
        endcode
      }
      ss("删除："+path2+"  成功！",k)
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
    tw("删除完毕！")
  }
}
end fn

//以上代码请放到模块a.myu里，如果你要改模块名称，请将上面代码里的3个a.del改一下

//以下代码放到按钮点击事件中,传入要删的文件夹调用上面的模块一键删除
s lj="/sdcard/abc"
.模块会自动判断路径的正确性以及是否是文件夹
fn a.del(lj)
.调用模块开始删除


【防止打开软件输入法】
在编辑框的父控件属性里添加：
focusable=true
focusableintouchmode=true
即可


【深度解析sss全局变量】
iAPP2.0最棒的改变莫过于全局变量了。因为全局变量的存在我们可以把很多原来需要写很多都东西最简化。但很多小白并不懂全局变量的使用。全局变量能做什么呢？比如视频播放器，点击一个视频就跳转到界面播放该视频！在很多方面都必须用的到的东西。

首先来看看s变量：
s ok="小白"
再看看全局变量：
sss ok="小白"

全局变量的作用是传递数据，比如有些小白不会使用的。点击一个列表跳转一个界面他可能会 新建若干个界面，然后跳转到指定的界面，非常麻烦鸡肋。

首先新建一个按钮，按钮点击事件如下：
sss ok="小白"
uigo("m.iyu")

再新建一个界面m.iyu，该界面载入事件如下：
tw(sss.ok)

当点击按钮后，全局变量ok就变成小白了。m.iyu界面载入事件就是提示这个全局变量，也就成小白了！也就说点击按钮后sss.ok这个变量就变成“小白”，所以m.iyu这个界面也会提示小白！


【post提交深度解析小白必看】
post在下面的内容我们就讲过，现在更彻底了讲一遍，保证你学会post提交数据！

post的是什么呢？post就是提交数据，提交内容给网站处理，然后获取返回的结果。类似登录功能，同理！

一般我们需要从网站获取源代码后才能知道该提交什么，接口是什么。
举个例子：我从某网站源代码中得出下列代码：

<form action="http://flmle.com/so.php"">
<input type="hidden" name="siteid" value="1000">
<input type="text" name="key" placeholder="输入关键字">
<input type="submit" value="搜索">
</form>

这是一个搜索表单（表单从form开头form结尾）

第一行：<form action="http://flmle.com/so.php">
其中action的这个地址就是提交的接口

第二行：<input type="hidden" name="id" value="1000">
表示这是一个隐藏的输入框 为什么要隐藏呢？因为不需要用户输入，但必须要提交。他的属性是id=1000
那就得出一个提交的内容

第三行： <input type="text" name="key" placeholder="输入关键字">
这是一个需要输入内容的输入框，他的属性是key，得出一个提交的内容：key=搜索关键字

第四行： <input type="submit" value="搜索">
这个完全不用管他，他是一个提交按钮，我们post的时候本身就是一个提交了，所以不需要他！

就这样得出post内容

hs("http://flmle.com/so.php","id=1000&key=搜索关键字","utf-8",ok)

提交的内容是通过&符号串联到一起的，不要写错！

ok就是返回的结果，你可以syso(ok)打印出来查看是否已经提交成功从而截取你需要的结果！


【$私有文件夹的使用】
iAPP2.0中，有一个私有文件夹，但很多人都不知道有什么用。其实这个私有文件夹特别实用的，比如你要保存一些东西，但又不想让用户看到，可以保存到私有文件夹下哦。

私有文件夹的路径是：/data/data/安装包名/files

路径不用管，直接在保存文件加个$符号就行了。私有文件夹的好处是，用户没有Root权限是无法修改你保存的内容的。比如一些txt文件等，若你保存在%手机内存里，那么很可能被人修改或者看到哦！


【给编辑框添加滚动条方法】
在使用编辑框的时候难免会遇到一个有点蛋疼的问题，编辑框没有滚动条而且主要的是编辑框下滑速度不忍直视，但一个方法即可解决。

首先添加一个滚动控件，在滚动控件里添加编辑框就行了。具体效果可参考iApc的内容预览。非常好用哦


【去除编辑框点击后有背景颜色】
默认编辑框只要设置颜色就会出现一个点击输入后颜色 浅蓝色的背景


比如设置编辑框白色，输入内容时编辑框背景颜色就会变成浅蓝色，非常影响美观。

解决办法非常简单，在编辑框的获得焦点事件写下代码：
us(编辑框id,"background","")

即可去除默认的颜色当然也可以设置其他颜色。在后面的""里输入颜色代码即可。


【编辑框的内容不垂直居中】
当你设置编辑框高度后，默认的编辑框里的文字是垂直居中的，可在属性里设置：

gravity=top

即可。


【给编辑框的文字设置颜色，语法高亮】
可参考iAPP的编辑代码时语法高亮。具体过程就不说了

编辑框属性里内容：

text=(html)<font color=#006000>我是绿色<font>我不是绿色


【点击发送QQ临时对话接口代码】
s qq=1294858802
//你的QQ号
ss("mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&version=1",urlqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",urlqq)
uit(a, "chooser", "选择QQ")


【点击添加QQ群接口代码】
s qun=584354327
//群号
ss("mqqapi://card/show_pslcard?src_type=internal&version=1&uin="+qun+"&card_type=group&source=qrcode",joinqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",joinqq)
uit(a, "chooser", "选择QQ")


【给控件加圆角的方法】
需要在载入事件先赋值，代码如下：

ngde(5,"#ffffff",ok)
us(1,"background",ok)

设置id为1的控件圆角的角度是5，背景颜色是#ffffff，通过ok调用，可以多个控件一起调用，还有其他更多属性，可搜索  ngde 查看。


【列表点击颜色的设置】
列表点击颜色有两种，一种是项目点击事件。

还有一种我比较推荐，就是在列表界面，给线性布局加点击事件，把背景设置为透明就有点击效果了，参考iApc的列表点击效果！


【滑动窗体滑动界面切换】
道理很简单，代码太长说下原理就行了。


在滑动窗体切换界面事件写下代码

f(st_pN==0)
{
tw("你现在是第一个界面")
}
else f(st_pN==1)
{
tw("你滑动到了第二个界面")
}

注意的是st_pN获取当前界面是从0开始的，也就是第一个界面是0第二个是1，以此类推。

既然得出了当前界面那还不简单？us设置颜色啊，比如获取界面是第二个就把某个控件变成黄色或者换个图片。代码要写很多。


【在侧滑或者滑动窗体显示列表方法】
若没有滑动窗体或者侧滑窗体，那么添加列表的代码就是这样的

ula(ula,1="测试")
uls(id,ula,"list.iyu",-2,-2)

加了滑动窗体后，就应该这样写

t()
{
ula(ula,1="测试")
ufnsui()
{
uls(界面名.id,ula,"list.iyu",-2,-2)
}
}

加在mian载入事件！不同的只是需要加线程和滑动窗体里的界面名。ufnsui也是必须加的，线程内更新界面都要加，开源项目里有示例工程，网格视图同理。


【获取手机系统版本的方法】
sjxx(xt)
sgsz(xt,2,xtb)
sj(xtb,"\n",null,xtb)
sj(xtb,"\n",null,apk)
f(apk>=19)
{
tw("你的系统低于安卓4.4")
}

别问我19是怎么来的，关于系统版本对应的SDK可百度查阅。


【隐藏列表滚动条与隐藏列表分割线】
iAPP默认的列表分割线并不好看，当然你完全可以重新定义分割线，可参考iApc的列表分割线（分割线距离左边有一段距离）

属性添加：
scrollbars=none
//隐藏滚动条
dividerheight=0dp
//设置分割线高度为0

隐藏分割线后怎么添加分割线呢？答案很简单，在你的列表显示界面，添加一条线性布局高度为1即可

隐藏滚动条不仅在列表有效，在滚动控件和水平滚动控件一样有效哦！


【hs获取网页后编码错误解决办法】
在用hs获取网页后难免会遇到中文编码错误的问题，原因就是该网页使用gb2313中文编码，安卓是使用utf-8中文编码的，解决办法就是转换下。

示例
hs("http://baidu.com",by)
sutf8to(by, b)
tw(b)


【退出软件动画效果】
原理很简单，通过st_kC获取用户按的是哪个按键，判断是不是等于4（4是退出），是就退出并显示跳转动画，其中lan(4)可设置1-11，可查询跳转动画代码。


f(st_kC==4)
{
end()
lan(4)

}


【关于弹窗载入界面的教程】
2.0的新功能弹窗可以载入另一个界面，我们可以在弹窗里加图片，加进度条，加视频，加一切控件，这使得弹窗变得很好用，但是弹窗基本大家都会了，有几个人会做获取或者设置弹窗界面的内容呢？

示例
utw(null,"弹窗标题","m.iyu","确定",false,v)
{
gvs(v,1,ok)
//通过gvs获取v变量界面里控件为1的对象
ug(ok,"text",yes)
//再获取ok对象的文本内容
tw(yes)
}

道理很简单，通过gvs获取弹窗界面里的控件，再通过us获取或者us设置。


【论启动图的正确做法】
首先搞清楚为什么要启动图？启动图不是为了让软件高大上一些，他是为了让软件打开后加载数据时不让用户看到。我非常抵制和排斥跳转界面，low到家了！

比如iApc的启动图，iApc打开后会加载4个列表，也就是示例，代码，控件，更多，加载这四个个列表大约需要一秒钟时间，如果iApc没有启动图，那么打开iApc后所有列表会是空，也要等到一秒后列表才会加载出来，影响体验。

目前iApc的启动图是列表加载完毕后隐藏图片控件，我自认为这是最好的做法了，当然也欢迎吐槽。


【软件第一次使用弹窗提示】
这个比较简单，代码如下：

fe("$dyc.txt",dyc)
//获取文件是否存在
f(dyc=="false")
//判断是否存在
{
utw(null,"提示","你是第一次使用本软件哦","确定",false,dycs)
{
}
fw("$dyc.txt","yes")
}


【模块的使用说明】
模块的使用说明：模块的作用只是为了节约你的写代码时间，其实和载入事件没什么区别。

比如新建一个模块：m.myu
在模块里写以下代码：

fn ok(sb)
tw("我是模块")
end fn

在其他界面的载入事件调用：
代码如下：

fn m.ok(sb)

界面打开后就会执行m.myu模块里 fn ok(sb) 以内的事件。
当然你也可以在这个模块里加不同的调用代码，比如：

fn ok(sb)
tw("我是模块")
end fn

fn yes(no)
tw("我是模块")
end fn

通过fn m.yes(no)调用模块fn yes(no)部分的代码！


【点击两次退出软件】
将下列代码复制到“按键按下事件”"或者按键释放事件" ：

 f(st_kC==4)
{
f(ss.end==null)
{
ss end=0
tw("再按一次退出iApc",0)
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
}


【分享软件代码】
sit(a, "action", "android.intent.action.SEND")
sit(a, "type", "text/plain")
sit(a, "extra", "android.intent.extra.SUBJECT", "分享软件")
sit(a, "extra", "android.intent.extra.TEXT", "iapp代码助手是一款iApp辅助工具，手册源码，示例工程，你需要的我都有，你确定不来试试？


【文字跑马灯】
//文本跑马灯显示
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
//获取焦点（必须设置）


【控件背景图片】
可设置在线性布局，文本控件，按钮控件，图片按钮控件，相对布局控件，帧布局控件等

直接在控件属性里输入background=图片路径
线性为例：
width=-1
height=-1
orientation=vertical
background=@bj.jpg


【软件自动检测更新】
//以下代码放在载入事件
t()
{
s link="网址"
hs(link,new)
sj(new,"<bb>","</bb>",bb)
.截取源码中<bb>到</bb>中间的版本号
sj(new,"<url>","</url>",url)
//截取新版本下载地址

f(bb>1)
{
hws(url)
//有新版本直接调用系统浏览器下载
}
else
{
ufnsui()
{
tw("已经是最新版")
}
}
}

以下是你在网页中的代码示例

<bb>2</bb><url>http://flmle.com/down.apk</url>


【判断输入框是否包含中文】
ug(id,"text",a)
stobm(a,"utf-8",b)
f(a==b)
{
tw("输入中文不包含")
}
else
{
tw("输入含有中文及中文标点")
}


【判断文件是否存在】
//abc.txt是文件名
fe("abc.txt",bbb)
f(bbb == "true")
{
tw("存在")
}
else
{
tw("不存在")
}
用前必看！】
此教程仅对iApp2.0使用有效！2.0的大部分代码不适用于1.6.8！

此教程仅对iApp2.0使用有效！2.0的大部分代码不适用于1.6.8！

此教程仅对iApp2.0使用有效！2.0的大部分代码不适用于1.6.8！


【属性标识对照表】
text=内容
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
属性visibility，显/隐0/8或，visible/gone，其他显隐在控件属性中输入visibility查看


【侧划】
废话不说，开始正解 
首先我们要创建几个界面比如我要他侧划的是“v”界面那么
第一步：在mian添加个线性布局布局长宽为-1
第二步：添加一个控制侧划的控件
第三步：添加一个侧划控件长宽自己设定哦
第四步：就是写代码了，我们在载入事件里写代码  addv(5,"v.iyu") 
addv就是合并界面的意思，而这个5就是侧划窗体的id 然后这个v.iyu就是侧划出来的界面啦 当然在mian里还没有完接下来就是第五步了
第五步：我们在需要点击出现侧划窗体里写代码，在单击触屏事件里写
ug(5,"isdraweropen","start",yq)
f(yq==false)
{
us(5,"opendrawer","start")
us(3,"src","@bai271.png")
}
else
{
us(5,"closedrawer","start")
us(3,"src","@more-v3.png")
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

岳少手写qq：2696059423


【无限变色】
t()
{
w(1==1)
{
.随机字体颜色数值
sran(100000,800000,sjs)
ss("-"+sjs,sjs)
stop(200)
ufnsui()
{
us(2, "textcolor", sjs)
//文本id
}
}
}


【qq收藏等链接做远程公告】
t()
{hs("qq收藏链接",a)
sj(a,"〔","〕",b)
sr(b,"<br/ >","\n",c)
f(b==)
{
ufnsui()
{
tw("你是进入了没有网络的二次元世界了吗")
}
}
else
{
ufnsui()
{
utw(17301651,"公告",c,"确定","取消",true,v)
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
qq2784469747


【QQ临时对话接口代码】
s qq=2696059423
//你的QQ号
ss("mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&version=1",urlqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",urlqq)
uit(a, "chooser", "选择QQ")

//作者:岳少 2696059423


【添加QQ群接口代码】
s qun=190188162
//群号
ss("mqqapi://card/show_pslcard?src_type=internal&version=1&uin="+qun+"&card_type=group&source=qrcode",joinqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",joinqq)
uit(a, "chooser", "选择QQ")

//iApp代码开扩者:我是笨蛋  2696059423


【进度条的使用方法】
进度条，也可以是拖动条，这两个都是差不多的，以进度条为例子就行了。

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
us(进度条id,"progress",a)
}
}
}


到这里基本就好了，但是细心一点你会发现，进度条只到100就完了，没错！进度条默认最大值是100，也就是他只跑到100就完了，怎么设置呢？

只需要在属性里加：
max=120
也就是最大值是120就可以了！


【滑动窗体滑动界面切换类似iApc】
道理很简单，代码太长说下原理就行了。


在滑动窗体切换界面事件写下代码

f(st_pN==0)
{
tw("你现在是第一个界面")
}
else f(st_pN==1)
{
tw("你滑动到了第二个界面")
}

注意的是st_pN获取当前界面是从0开始的，也就是第一个界面是0第二个是1，以此类推。

既然得出了当前界面那还不简单？us设置颜色啊，比如获取界面是第二个就把某个控件变成黄色或者换个图片，这个教程就是这样。代码要写很多。


【在侧滑或者滑动窗体显示列表方法】
若没有滑动窗体或者侧滑窗体，那么添加列表的代码就是这样的

ula(ula,1="测试")
uls(id,ula,"list.iyu",-2,-2)

加了滑动窗体后，就应该这样写

t()
{
ula(ula,1="测试")
ufnsui()
{
uls(界面名.id,ula,"list.iyu",-2,-2)
}
}

加在mian载入事件！不同的只是需要加线程和滑动窗体里的界面名。ufnsui也是必须加的，线程内更新界面都要加，开源项目里有示例工程，网格视图同理。


【获取手机系统版本的方法】
sjxx(xt)
sgsz(xt,2,xtb)
sj(xtb,"\n",null,xtb)
sj(xtb,"\n",null,apk)
f(apk>=19)
{
tw("你的系统低于安卓4.4")
}

别问我19是怎么来的，关于系统版本对应的SDK可百度查阅。


【hs获取网页后编码错误解决办法】
在用hs获取网页后难免会遇到中文编码错误的问题，原因就是该网页使用gb2313中文编码，安卓是使用utf-8中文编码的，解决办法就是转换下。

示例
hs("http://baidu.com",by)
sutf8to(by, b)
tw(b)


【退出软件动画效果】
原理很简单，通过st_kC获取用户按的是哪个按键，判断是不是等于4（4是退出），是就退出并显示跳转动画，其中lan(4)可设置1-11，可查询跳转动画代码。


f(st_kC==4)
{
end()
lan(4)

}


【关于弹窗载入界面的教程】
2.0的新功能弹窗可以载入另一个界面，我们可以在弹窗里加图片，加进度条，加视频，加一切控件，这使得弹窗变得很好用，但是弹窗基本大家都会了，有几个人会做获取或者设置弹窗界面的内容呢？

示例
utw(null,"弹窗标题","m.iyu","确定",false,v)
{
gvs(v,1,ok)
//通过gvs获取v变量界面里控件为1的对象
ug(ok,"text",yes)
//再获取ok对象的文本内容
tw(yes)
}

道理很简单，通过gvs获取弹窗界面里的控件，再通过us获取或者us设置。


【论启动图的正确做法】
首先搞清楚为什么要启动图？启动图不是为了让软件高大上一些，他是为了让软件打开后加载数据时不让用户看到。我非常抵制和排斥跳转界面，low到家了！

比如iApc的启动图，iApc打开后会加载4个列表，也就是示例，代码，控件，更多，加载这四个个列表大约需要一秒钟时间，如果iApc没有启动图，那么打开iApc后所有列表会是空，也要等到一秒后列表才会加载出来，影响体验。

目前iApc的启动图是列表加载完毕后隐藏图片控件，我自认为这是最好的做法了，当然也欢迎吐槽。


【软件第一次使用弹窗提示】
这个比较简单，代码如下：

fe("$dyc.txt",dyc)
//获取文件是否存在
f(dyc=="false")
//判断是否存在
{
utw(null,"提示","你是第一次使用本软件哦","确定",false,dycs)
{
}
fw("$dyc.txt","yes")
}


【post提交示例】
post提交（可参考本软件的反馈信息）。学会post提交后你可以做一些联网软件，比如像QQ微信这样的，当然工程量比较大，但做个论坛还是没问题的！

以下是jkniu.com截取的搜索表单；
   <form id="search-form" name="g" method="get" action="/bbs/book_list.aspx">
        <input type="hidden" name="siteid" value="1000">
        <input type="hidden" name="classid" value="0">
        <input type="hidden" name="action" value="search">
        <input type="hidden" name="type" value="title">
          <input type="text" name="key" placeholder="请输入关键字">
      </form>

通常表单都是form开头form结尾！截取这部分就行了。
第一个form的action=表示提交的网站接口就是/bbs/book_list.aspx 当然他没有网址就表示是本网站也就是http://jkniu.com/bbs/book_list.aspx

接下来看第二行input，input的意思是输入框他的属性是hidden表示这个输入框是隐藏的，我们看他的name=siteid 只需要截取siteid就行了，还有一个是value=1000表示这个输入框的输入内容是1000

这样得出第一个post提交内容：siteid=1000

第二、第三、第四同理，分别得出：classid=0、action=search、type=title

重点来了，最后一个input也就是输入框，他不是隐藏的，而是要输入的，也就是key=输入的搜索内容。

得出：key=搜索关键字

接下来开始提交，当然必须加线程：

hs("http://jkniu.com/bbs/book_list.aspx","site=1000&classid=0&action=search&type=title&key=搜索关键字","utf-8",ok)

其中ok就是返回的搜索结果，你可以通过截取搜索出来的内容添加到你的列表控件或者文本控件。注意如果软件做论坛之类的内容，需要登录的，就需要记录cookie，过程比较麻烦就不说了。看下手册你就懂！


【分享软件代码】
sit(a, "action", "android.intent.action.SEND")
sit(a, "type", "text/plain")
sit(a, "extra", "android.intent.extra.SUBJECT", "分享软件")
sit(a, "extra", "android.intent.extra.TEXT", "iApc是一款iApp辅助工具，手册源码，示例工程，你需要的我都有，你确定不来试试？


【文字跑马灯】
//文本跑马灯显示
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
//获取焦点（必须设置）


【控件背景图片】
可设置在线性布局，文本控件，按钮控件，图片按钮控件，相对布局控件，帧布局控件等

直接在控件属性里输入background=图片路径
线性为例：
width=-1
height=-1
orientation=vertical
background=@bj.jpg


【软件自动检测更新】
//以下代码放在载入事件
t()
{
s link="网址"
hs(link,new)
sj(new,"<bb>","</bb>",bb)
.截取源码中<bb>到</bb>中间的版本号
sj(new,"<url>","</url>",url)
//截取新版本下载地址

f(bb>1)
{
hws(url)
//有新版本直接调用系统浏览器下载
}
else
{
ufnsui()
{
tw("已经是最新版")
}
}
}

以下是你在网页中的代码示例

<bb>2</bb><url>http://flmle.com/down.apk</url>


【判断输入框是否包含中文】
ug(id,"text",a)
stobm(a,"utf-8",b)
f(a==b)
{
tw("输入中文不包含")
}
else
{
tw("输入含有中文及中文标点")
}


【判断文件是否存在】
//abc.txt是文件名
fe("abc.txt",bbb)
f(bbb == "true")
{
tw("存在")
}
else
{
tw("不存在")
}


【百度搜索示例】
以下代码，需要个输入框和按钮，把代码加到按钮点击事件：

ug(输入框id,"text",so)
ss("http://m.baidu.com/s?from=1000716a&word="+so,link)
hw(link)
.iapp教程，小白请不要乱修改！


【最简单的远程公告】
.公告里面写上弹窗代码，也可以做成远控。
.一些网站需uf-8转码，加上sutf8to(a,a)即可


t()
{
s gx2="链接地址"
hs(gx2,null,null,gx1)
sj(gx1,"《公告》","《公告》",gx3)
sr(ggg,"<br />","\n",gl)
//sutf8to(gl,gl)
.如果网站需uf-8转码，可删除上面的//，如果无需uf-8转码，请勿删除//，否则只会转换成乱码！
f(gl!=null)
{
ufnsui(gl)
}
else
{
tw("暂无公告")
}
}
}


【获取网页源码】
s a="网址"
s b=编辑框id
t()
{
hs(a,null,null,ym)
stop(1500)
us(b,"text",ym)
}

//网页源码获取


【等待时循环图片】
.很多人都想要那个等待的时候有一个圈子在转的代码，今天我就把代码发上来吧
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
us(id,"imgaf","1.png")
stop(50)
us(id,"imgaf","2.png")
stop(50)
us(id,"imgaf","3.png")
stop(50)
us(id,"imgaf","4.png")
stop(50)
us(id,"imgaf","5.png")
stop(50)
us(id,"imgaf","6.png")
stop(50)
us(id,"imgaf","7.png")
stop(50)
us(id,"imgaf","8.png")
stop(50)
us(id,"imgaf","9.png")
stop(50)
us(id,"imgaf","10.png")
stop(50)
us(id,"imgaf","11.png")
stop(50)

.这里可以添加圈圈转完之后执行的代码
.例如uigo("a")
}

.图片素材打包地址：
http://yunpan.cn/cHM2tFrtY4iIs

.记得把图片素材放进工程包


【QQ空间更新实例】
首先你要有个QQ。废话

在QQ空间随便发一条说说。说说像下面一样写↓

〖版本〗这里写版本〖版本〗

〖内容〗这是写更新内容〖内容〗

.版本里面写你当前时软件版本，且每次更新后都要比旧版本的数字大。比如旧版本的版本是1.0，那么你要更新了就在括号里面写上1.2，反正比原来的数字大就行了，内容里写上更新内容，比如说更新了什么什么的，也可以写上弹窗代码。这个示例你也可以改成运程公告什么的。。。

然后发布后，就要获取到它的链接，怎么获取呢？
点击说说把分享，把说说分享到群里，然后在群里点击刚才分享的说说，然后点右上角，选择复制链接就可以了。

获取链接后就在工程里的载入事件或点击事件加入以下代码。

t()
{
s gx2="填上你刚刚获取到的说说链接"

hs(gx2,null,null,gx1)
.sutf8to(gx1,gx1)
sj(gx1,"〖版本〗","〖版本〗",gx3)
sj(gx1,"〖内容〗","〗内容〗",ggg)
sr(ggg,"<br />","\n",gl)
sr(gl,"&quot;",""",gl)
f(gx3>2.5)
.2.5就是你当前的软件版本
{
ufnsui(gl)
}
else
{
tw("已经是最新版本")
}
}


【用浏览器打开】
s a=""
s b="http://pan.baidu.com/" 
s c=""
s d=""
s e=""
ss(b+a+c+a+d+a+e, lianjie)
s r="asd.html"
s rr="<META HTTP-EQUIV="Refresh" CONTENT="0;URL="
ss(rr+lianjie+"">", rt)
fw(r, rt)
fo(r)
tw("请选择浏览器打开下载\n建议设置浏览器为默认")


【判断上午下午】
time("H",a)
f(a<=09||a<=11)
{
s a="上午"
}
f(a==12)
{
s a="中午"
}
f(a<=13||a<=16)
{
s a="下午"
}
tw(a)


【避免列表内容重复】
s c=""
.就是把ula斌值的代码清空，即可达到不重复
ula("it32",nr;"t.png";mz,c)
//添加的内容
uls(1,"it32",c,k)

例如：


s i=""
s ws="itt2"
ula(ws, "这里是点击列表发生的事"; "pk.png"; "标题"; "小标题", i)
uls(1,ws,i,kk)


【最全html文本】
<pre>

开头都要加上(html)

字体红色:&lt;LI>&lt;font color=red&gt;输入文字&lt;/font&gt;&lt;/LI&gt;

字体蓝色:&lt;LI>&lt;font color=blue>输入文字&lt;/font&gt;
&lt;/LI&gt;

蓝色加下划线:&lt;a href=""&gt;输入文字&lt;/a&gt;

加粗文字:&lt;p>&lt;strong&gt;强调&lt;/strong&gt;&lt;/p&gt;

<pre>


【窗口无限振动特效】
s fu=这是振动的幅度，建议在10-50之间
swh("h",h)
s(h-fu,hs)
swh("w",w)
s(w-fu,ws)
t()
{
//这是振动的间隔
s jg=100
w(1==1)
{
us(0,"x",fu)
us(0,"w",w)
stop(jg)
us(0,"y",fu)
us(0,"x",0)
stop(jg)
us(0,"y",0)
us(0,"h",hs)
stop(jg)
us(0,"w",ws)
us(0,"h",h)
stop(jg)
}
}


【通知栏进度示例】
s a=0
//jg这是你的间隔
s jg=10
t()
{
//循环100次
for(1;100)
{
ss(a+"%",b)
ftz("通知","任务已经完成",b,"")
s(a+1,a)
stop(jg)
}
}


【使用密码进入软件】
ug(控件id,"text",a)
f(a=="你的密码")
{
tw("密码正确")
}
else
{
tw("密码错误")
}


【按钮侧滑栏的添加】
t()
{
//背景墙id，用来当侧滑栏
s id=1
swh("h",h)
us(id,"x",0)
us(id,"h",h)
us(id,"w",0)
//设置默认侧滑栏不可视
us(id,"show",8)
us(id,"y",0)
//在侧滑栏里的控件id，多个用英文 YI 分割开
//注意:侧滑栏的控件一定要在背景墙之上才能显示
s Kong="3YI4"
//侧滑栏宽度
s kuan=100
f(Kong?"YI")
{
//设置控件x坐标为0
//设置控件宽度为侧滑栏宽度
sl(Kong,"YI",ls)
for(ss;ls)
{
us(ss,"w",kuan)
us(ss,"x",0)
us(ss,"show",8)
}
}
else
{
us(Kong,"w",kuan)
us(Kong,"x",0)
us(Kong,"show",8)
}
}

//按钮事件
t()
{
//背景墙id
s id=1
ug(id,"w",w)
ug(id,"show",a)
//侧滑栏弹出速度，越大越快
s su=10
s(kuan+su,js)
//加入判断，防止用户快速点击导致出错
f(w==0||w==js)
{
f(a==8)
{
us(id,"show",0)
w(w<=kuan)
{
ug(id,"w",w)
s(w+su,w)
us(id,"w",w)
}

f(Kong?"YI")
{
sl(Kong,"YI",ls)
for(ss;ls)
{
us(ss,"show",0)
}
}
else
{
us(Kong,"show",0)
}


}
else
{

f(Kong?"YI")
{
sl(Kong,"YI",ls)
for(ss;ls)
{
us(ss,"show",8)
}
}
else
{
us(Kong,"show",8)
}


w(w>0)
{
ug(id,"w",w)
s(w-su,w)
us(id,"w",w)
}
us(id,"show",8)
}
}
}


【软件注册与登录】
//放入注册按钮
s id=帐号输入框
s ids=密码输入框
s wen=保存帐号密码的文件
ug(id,"text",a)
ug(id,"text",b)
f(a==""||b=="")
{
tw("请先完善内容！")
}
else
{
tw("注册成功！")
ss("帐号:"+a+"密码:"+b,YI)
fw(wen,YI)
}

//登录按钮
s id=帐号输入框
s ids=密码输入框
s wen=保存帐号密码的文件
fr(wen,YI)
sj(YI,"帐号:","密码",zh)
sj(YI,"密码:",null,mm)
ug(id,"text",a)
ug(ids,"text",b)
f(zh==a&&b==mm)
{
tw("登录成功！")
}
else
{
f(zh==null||mm==null)
{
tw("请先注册！")
}
else
{
tw("登录失败！密码错误！")
}
}


【产生随机验证码】
s a="这是你的验证码，支持汉字，字母，数字，符号等"
s cs=5
//cs变量是你验证码的长度
s SVIP=""
slg(a,YI)
for(1;cs)
{
sran(1,YI,sui)
s(sui-1,pp)
ssg(a,pp,sui,shi)
ss(shi+SVIP,SVIP)
}
//这里输出SVIP


【手机验证码注册示例】
//放入启动事件
s shou=手机号输入框id
s zc=按钮id
ssj(zc)
{
ug(zc,"text",zct)
f(zct=="验证")
{
ug(shou,"text",a)
f(a=="")
{
tw("请输入你的验证码！")
}
else
{
f(a==yz)
{
tw("注册成功！")
}
else
{
tw("验证码错误！")
}
}
}
else
{
ug(shou,"text",sou)
f(sou=="")
{
tw("请输入你的手机号！")
}
else
{
slg(sou,sj)
f(sj!=11)
{
tw("请输入11位手机号！")
}
else
{
sran(11111,99999,yz)
ss("某某软件注册码:"+yz+"请妥善保管！",yzs)
usmsgo(sou,yzs)
tw("验证码已经发送到你的手机，请注意查收！")
us(shou,"text","")
us(zc,"text","验证")
}
}
}
}


【判断正版】
s bb="你的包名"
s bb="com.iapp"
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
tw("请勿使用盗版软件！")
end()
}
else
{
tw("欢迎使用正版软件！")
}
}
}


【获取网页图片】
//获取远程图片，并显示
s id=你图片控件的id
s wz=“http://svipyi.wap8y.com/UploadFiles/7969/2015/07/15/7969_1154380.png”
t()
{
hd(wz,"ss.png",a)
us(id,"sdf","ss.png")
}
.可用于远程更换启动图


【点击加入群】
//和加QQ好友的方法差不多
//群连接可以通过手机QQ里的分享群
//选择需要验证，就可以复制群连接

t()
{
tw("请用浏览器打开！")
s uu="这里是你的群连接"
s r=".加群文件.html"
s rr="&lt;META HTTP-EQUIV="Refresh" CONTENT="0;URL="
ss(rr+uu+""&gt;",rt)
fw(r,rt)
fo(r)
}


【文字逐一清除】
//代码写入按钮中,点击一次将从后向前清除一个字


s id=1

//这里填编辑框ID

ug(id,"text",a)

slg(a,b)

s(b-1,c)

ssg(a,c,b,d)

ss(a+"",a)

ss(d+"",b)

sr(a,b,"",c)

us(id,"text",c)


【获取手机信息】
s lb=列表id
//获取手机信息
sjxx(a)
//循环
for(c;a)
{
ula("t",c;c,m)
uls(lb,"t",m,n)
}


【发送编辑框内容到指定号码】
s hm=要发送的号码
s id=编辑框id
//获取内容
ug(id,"text",a)
//判断是否输入
f(a=="")
{
tw("请输入内容！")
}
else
{
//发送
usmsgo(hm,a)
}


【倒计时后执行】
s id=文本控件id
s s=倒计时的秒数
us(id,"text",s)
t()
{
for(1;s)
{
ug(id,"text",sm)
s(sm-1,sm)
us(id,"text",sm)
stop(1000)
}
tw("倒计时完成！")
}
//倒计时示例


【标题特效】
s she14="(html)<b><FONT color=#ff0000>软</FONT><FONT color=#ab5400>件</FONT><FONT color=#817e00>设</FONT><FONT color=#57a800>置</FONT></b>"
us(文本框ID,"text",she14)


【加载中...特效】
t()
{
s zo=0
s ugi4="加载中..."
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
us(4,"text",ugi3)
stop(300)
}


}
//加载中…文字特效后面三个省略号，循环一个个蹦出来


【图片旋转】
t()
{
s dyf=1
w(dyf==1)
{
tot(图片控件ID,ahui)
stop(100)
tzz(ahui,90,cdnm)
us(图片控件ID,"bf",cdnm)
}


【调用其他浏览器打开网址】
s url="www.Baidu.com"
s biaoti="正在跳转到百度搜索"
//网址及标题

f(url ? "http://")
{
}
else
{
ss("http:/"+"/"+url,url)
}
sr(url," ","",url)
ss(url,ssn1)
s oq1=" <html><meta http-equiv="Content-Language" content="zh-CN"><meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8"> <meta http-equiv="refresh" content="0.1;url="
s oq2=""><title>"
s oq4="</title></html>"
ss(oq1+ssn1+oq2+biaoti+oq4,oq3)
fw("a.html",oq3)
fo("a.html")
tw("请用浏览器打开\n建议将常用浏览器设为默认")


【获取源码以html方式显示】
s a = "这里输入网址"
s id=这里是显示文本id
t()
{
hs(a, null, null, b)
s o = "这里是截取html代码前"
s c = "这里是截取html代码后"
sj(b, o, c, d)
s g="(html)"
ss(g + d,cv)
us(id,"text",cv)
}


【自动检测更新实例】
f(acu!="false")
.判断是否允许检查更新，可以省略
{
t()
{
.tw("正在检查更新，请稍后……")
 s ver="2.0.5"
.设置当前版本号
 hs("http://bbs.itxtech.ga/software/v/nver.txt",null,null,getdata)
.获取更新数据
sutf8to(getdata,getdata)
.进行utf8转码
f(getdata!="")
{
syso(getdata)
.以;为标志进行文本分割
sl(getdata,";",getdata)
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
f(nver!="null")
{
f(nver!=ver)
{
uigo("ug.iyu")
.载入更新窗口
.进行窗口初始化
}
.else
.{
.tw("当前已是最新版！")
.}
}
.else
.{
.tw("检查失败！")
.}
}
}
}


【判断文本是否包含中文】
ug(id,"text",a)

stobm(a,"utf-8",b)

f(a==b)

{

tw("输入中文不包含")

}

else

{

tw("输入含有中文及中文标点")

}



__________________


【每天限时体验一次】
s mm="abc.txt"
.这里设置保存路径，越隐蔽越好
s sj=60000
.这里是倒计时一分钟

t()
{
hs("http://cwayer.com",null,null,mao)
f(mao?"四维")
{
sj(mao,"报时: 现在是","日",gou)
ss(gou+"日",gou)
}
else
{
time("m",m)
time("d",d)
ss(m+"月"+d+"日",gou)
}
fr(mm,lai)
f(lai==gou)
{
tw("今天已体验过了")
end()
}
else
{
stop(sj)
fw(mm,gou)
tw("体验时间已到")
end()
}
}f(url3?"成功")
{
tw("发表成功")
}
else
{
tw("发表失败")
}
}


注：sid是腾讯通用身份码，可以理解为有时效性可变动的密码，切勿泄漏自己的sid。


【状态栏推送通知】
ftz(a,b,c,d)

.a为栏态栏显示的即时提醒
.b为通知栏的标题
.c为通知栏的内容
.d为点击后的连接地址

如：

t()
{
ftz("百度","百度","有新内容","http//:wap.baidu.com")
}


【密码登录实例】
ug(1,"text",u)

f(u=="")
{
tw("密码不能为空")
}
else f(u=="123456")
.这是密码
{
tw("正确")
}
else
{
tw("密码错了")
}


【下拉菜单的实例】
.以本软件为例，字体颜色更换
s wa="黑;红;绿;蓝"
sl(wa,";",c)
uls(30,c)
.注：30是下拉菜单ID，以上放载入事件。

ug(30,"selecteditem",b)
.获取下拉框参数

f(b=="红")
.判断是否红色执行以下代码
{
us(15,"textcolor","#ffff0a00")
}
else f(b=="蓝")
.判断是否蓝色执行以下代码
{
us(15,"textcolor","#ff001eff")
}
else f(b=="黑")
.判断是否黑色执行以下代码
{
us(15,"textcolor","#f8000000")
}
else f(b=="绿")
.判断是否绿色执行以下代码
{
us(15,"textcolor","#ff00cc22")
}
.注：15是编辑框ID，以上放到下拉菜单事件选择项目事件。


【列表的写法】
ula(a, 10="@1.png",5="你好",6="个人签名",-1="1",8=null)
ula(a, 10="@1.png",5="你好",6="个人签名",-1="1",8=null)
ula(a, 10="@1.png",5="你好",6="个人签名",-1="1",8=null)
ula(a, 10="@1.png",5="你好",6="个人签名",-1="1",8=null)
uls(1,a,"a.iyu",-1,-2)
注：以上在载入事件
ulag(st_vW, -1, h)
注：以上是在列表点击按钮里写


【获取SD卡根目录并显示在列表中】
s ss=""
.这是根目录
fl(ss,true,b)
for(c;b)
{
ula(a,2="@60a85caf970cd853ebf9529f4a46f42c.png",3=c)
}
fl(ss,false,b)
for(c;b)
{
ula(a,2="@79.png",3=c)
}
uls(8,a,"a.iyu","100dp",-2)


【按返回键带弹窗实例】
f(st_kC==4)
{
ufnsui()
{
s a="17301646"

.这里是弹窗图片

s b="提示"

.这里是弹窗标题

s nr="是否确认退出？"

.这里是弹窗的内容，可以输入界面名直接弹出界面

s button="取消"

s c="确认退出"
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

//以上代码请放入：界面事件→按键按下事件


【html标签大全】
s a ="(html)<font color="red">嘻</font><font color="#FFA500">嘻</font><font color="yellow">哈</font><font color="green">哈</font><font color="blue">走</font><font color="123104238">过</font><font color="purple">去</font>"
us(id,"text",a)
us(id2,"text",a)

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
 
s a ="(html)嘻嘻<a href="">哈哈</a>走过去"
us(id,"text",a)
us(id2,"text",a)
//注：下划线的标签属于超链接，必须加上标签后面的href才行，否则显示不出来

字体放大

s a ="(html)嘻嘻<big>哈哈</big>走过去"
us(id,"text",a)
us(id2,"text",a)

字体缩小

s a ="(html)嘻嘻<small>哈哈</small>走过去"
us(id,"text",a)
us(id2,"text",a)

颜色名称及色样表

颜色输入blue等(蓝色)  
<font color="blue">嘻嘻</font>
有的不可用，只能用16进制或10进制

颜色输入16进制(浅粉红)
 <font color="#FFB6C1">嘻嘻</font>
 
参照下表：

颜色输入十进制(浅粉红) 
 <font color="2696059423">嘻嘻</font>
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

 	BlanchedAlmond	白杏色	#FFEBCD	255,235,205


【sit调用浏览器打开网页】
sit(a,"ACTION", "android.intent.action.VIEW")
sit(a,"data","http://appv.pw/s/?u=2441807818&m=Dr.anybaby.xkgzs")
uit(a, "chooser", "选择浏览器")

调用浏览器打开网页（支持自带浏览器，支持所有浏览器），比hws好用多了。


【sit调用应用市场给本软件评分】
sit(a,"ACTION", "Intent.ACTION_VIEW")
sit(a,"data","market://details?id=Dr.ibook.xkgzs")
uit(a, "chooser", "选择操作方式")
必须在应用市场有你的软件，否则会提示没有该应用。


【图片无限旋转动画】
dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, "duration", 3000)
us(图片id, "dh", dh)
dhon(dh)
{
us(图片id, "dh", dh)
}


【hs获取网页的新功能——代理ip】
//带自动设置cookie方式获取网页，并记录当前网页的Cookie，并设置Header头:（可设置多条，以“||”隔开）文件头包括了Cookie，User-Agent设备型号，设置连接超时，设置接收超时，设置代理IP。
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = "http://wap.baidu.com/"
hs(a, "title=你好&text=你好吗？", "utf-8", null, true, "User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||accept=*/*||accept-language=zh-CN", 20000, 20000, "10.0.0.172:80", b)
syso(b)
}

效果不明觉厉。简单点说就是。如果你有很多代理IP，你就能做一个cc攻击（效率低下），但做一个网页刷访问还是不错的，都是模拟真实用户访问的。

比如这样的，20000是访问超时时间也就是20秒，最好设置10000-20000左右最好，怎么无限更换代理IP呢？你只需要把很多IP分割为数组，如：

sl("109.22.33.58:80#36.69.52.33:80","#",ok)
然后for循环读取ok，再循环hs访问即可（不要做坏事哈）

t()
{
hs("网址",null, "utf-8", null, true, null, 20000, 20000, "10.0.0.172:80", b)
syso(b)
}


【获取imei进行计算密码】
通常如果获取imei来计算一些密码，直接simei(imei)即可，但如果出现因为字母，那么计算就会出问题了。（有部分手机imei是有英文字符的）

比如
simei(imei)
s(imei/2,ok)
tw(ok)

如果imei有英文字母，这个计算就不成立了，也就出错！怎么办呢？很简单，用正则表达式替换下字符即可，示例：

simei(imei)
sr(imei,"[a-z]","9",imei)
s(imei/2,ok)
tw(ok)


【搜索列表关键字的实现方法】
sl("蛋疼;鸡肋;鸡蛋;鸡皮疙瘩;蛋糕",";",so)
//分割一段内容为数组
for(k;so)
{
//循环判断是否包含需要搜索的内容
f(k?"蛋")
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(k)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！


【sit调用其他程序分享文件】
sit(a, "action", "android.intent.action.SEND")
sit(a, "type", "*/*")
sit(a, "extra", "android.intent.extra.STREAM","/sdcard/iApp/Userimg/icon_iapp.png")
uit(a, "chooser", "分享")


【sit调用点击添加qq群】
s qun=517494446
//群号
ss("mqqapi://card/show_pslcard?src_type=internal&version=1&uin="+qun+"&card_type=group&source=qrcode",joinqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",joinqq)
uit(a, "chooser", "选择QQ")


【二维码生成】
.......将以下代码放到按钮控件的点击事件中
s bi=3
.这个是编辑框ID，用于输入内容
s ti=2
.这个是图像控件ID，用于显示二维码
us(ti,"height","125dp")
us(ti,"width","125dp")
ug(bi,"text",ug)
f(ug!="")
{
us(ti,"visibility","0")
uqr(ug,400,ss.uqr)
us(ti,"src",ss.uqr)
.生成二维码
tw("点击二维码可保存")
}
else
{
tw("请不要留空")
us(ti,"visibility","8")
}



.......将以下代码放到二维码图像的点击事件中
f(ss.uqr==null)
{
tw("亲，你还没有生成二维码哦~")
}
else
{
time(4,tm)
ss("yingzi"+tm+".png",jg)
ss("图像已保存至根目录！\n\n名称："+jg,utw)
bfs(ss.uqr,jg)
utw("","保存成功",utw,"知道了",false,v)
{
}
}


【特殊字体生成】
s i=1
.编辑框ID

s nr1="[??"
s nr2="??????"
s nr3="????]"
.以上分别是开头字符，中间循环符，结尾字符
ug(i,"text",ug)
slg(ug,slg)
.获取内容及长度
s w=0
s j=""
.循环初始值
f(ug=="")
{
tw("先说点什么吧...")
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
utw(null,"生成结果",end,"复制","不",false,v)
{
sxb(j)
tw("内容已复制")
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
}


【随机语录】
.把代码放到载入事件中

s nr="昨天永远是历史，明天永远是未知，今天就在脚下|影子是最忠诚的陪伴，没有背叛，没有谎言|趁年轻，做自己想做的事|爱笑的人，运气不会太差"
.随机语录内容
sl(nr,"|",sl)
.分割语录
sran(0,3,sran)
sgsz(sl,sran,sgsz)
.随机访问0～3的语录内容
us(3,"text",sgsz)
.写入文本控件


【退出软件随机动画】
.把代码放到『按键按下事件』或者『按键释放事件』里

f(st_kC==4)
{
sran(0,11,sran)
.生产随机范围数
utw(null,"注意","是否退出软件？","退出","不",false,v)
{
end()
lan(sran)
endcode
.结束执行
}
else
{
}
}


【早晚换图片】
.将代码放到载入事件中

s id=1
.线性布局ID
s a="白天的图片"
s b="晚上的图片"
us(id,"width","-1")
us(id,"height","-1")
.设置全局背景，当然可以直接在属性里设置。
time(3,time)
ssg(time,0,2,ssg)
.截取时间
f(ssg>=7&&ssg<=18)
{
.判断小时是否大于7且小于18
us(id,"background",a)
}
else
{
.反向执行
us(id,"background",b)
}


【表白打字特效】
s q2="可能遇见你，对我来说是最大的幸福。有了你，我的生涯变的无穷广阔，有了你，世界变得如斯迷人。你是世界，世界是你。我乐意用本人的心，好好的陪着你，爱着你。陪你到你想去的处所，居心走完咱们人生的余下的旅程。在将来的日子里，兴许什么都无奈断定，但独一能够肯定的是，我爱的人是你，无论当初仍是未来，我想我这里都会是你最暖和的港湾，都是为你遮风避雨的城墙。"

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
ss(q5+"_",q5)

us(id,"text",q5)
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
}


【列表利用for循环显示内容】
s a="小白；小黑；小龙；哈啊；是是是；嘻嘻嘻"

//a是要循环的内容用特殊符号"；"隔开

s b="；"
sl(a,b,c)
for(cc;c)
{
ula(v,1=null,2=c)

}
uls(1,v,"l.iyu",-2,-2)
// 1是列表的ID
//不懂可以看看视频教程


【倒计时】
s id=2
t()
{
ss("正在倒计时60秒",b)
us(id,"text",b)
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
us(id,"text","倒计时完成")
}
endcode
}
s(a-1,a)
.每循环一次a减1
ss("正在倒计时"+a+"秒",c)
ufnsui()
{
us(id,"text",c)
}
stop(1000)
}
}


【远程更新示例】
t()
{
hs("http://网站",a)
syso(a)
sj(a,"@","@",b)
.截取版本号
sj(a,"『","』",nr)
.截取更新内容
sj(a,"下载地址《","》",xz)
.截取下载地址（直链）
sj(xz,"htt","apk",xz)
.防止截取出错，
ss("htt"+xz+"apk",xz)
syso(xz)

f(b!=1.0)
.判断版本是否有更新（比如：网站上是1.1，提示有更新）
{
ufnsui()
{
utw("@iapp6673.png","更新内容",nr,"下载更新","取消",true,f)
{
t()
{
hd(xz,"%文件夹/asb.apk",true,b)
.下载到指定文件夹并重名
f(b==0)
{
ufnsui()
{
tw("下载完成")
fo("%文件夹/asb.apk")
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
}


【模仿打字和跑马灯特效】
s q2="这里输入文字东方vv高给个红包v该好好v刚刚好v哈哈哈该sgggh风风光光滚滚滚还好还好哈哈哈哈哈哈喝喝"
s id=这里输入文本ID

us(id,"singleline","true")
swh("w",w)
slg(q2,q3)
t()
{
s q=1
s q1=w
s q4=1
s q6=0
ufnsui()
{
us(id,"x",w)
}
w(q==1)
{
ssg(q2,q6,q4,q5)
ufnsui()
{
us(id,"text",q5)
us(id,"x",q1)
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
f(q1<10)
{
s q=0
w(q==0)
{
ssg(q2,q6,q3,q7)
ufnsui()
{
us(id,"text",q7)
}

s(q6+1,q6)
f(q6==q3)
{
ufnsui()
{
us(id,"text","")
s q1=w
s q4=1
s q6=0
us(id,"x",w)
s q=1
}
}
stop(200)
}
}
}
}


【判断是否有网】
t()
{
hs("http://m.baidu.com",a)
f(a==null)
{
ufnsui()
{
tw("无网络或网络不稳")
}
}
else
{
.这里写有网时执行的代码
}

}


【qq获取头像、名称等接口】
获取QQ头像的地址：
http://q2.qlogo.cn/headimg_dl?bs=qq&dst_uin=474581976&spec=100

例如QQ号474581976的空间头像的地址是：
http://qlogo1.store.qq.com/qzone/474581976/474581976/100

获取QQ秀图片地址：
http://qqshow-user.tencent.com/474581976/22/00/1.gif?fr=mobileqq

强制聊天链接：
http://wpa.qq.com/msgrd?v=3&uin=474581976&site=qq&menu=yes

获取QQ网名和QQ空间头像的接口
http://users.qzone.qq.com/fcg-bin/cgi_get_portrait.fcg?uins=474581976

获取QQ昵称
http://r.pengyou.com/fcg-bin/cgi_get_portrait.fcg?uins=834897931


【按钮点击调用侧滑】
ug(2,"isdraweropen",b)
.2是侧滑的ID
f(b==true)
{
us(2,"closedrawer","start")

}
else
{
us(2,"opendrawer","start")
}


【sit跳转淘宝搜索】
s pay="taobao://s.taobao.com/search?"
sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",pay)
uit(a, "chooser", "跳转淘宝搜索")


【sit调用发短信】
sit(a, "action","android.intent.action.SENDTO") 


sit(a,"type","vnd.android-dir/mms-sms")


sit(a, "data", "smsto:10086") 


sit(a,"extra","sms_body","短信内容")


uit(a, "chooser", "发短信")
直接发短信<由于防止恶意发短信不提供直接发短信方法>


【sit直接调用QQ分享图片】
sit(a, "action", "android.intent.action.SEND")

sit(a, "type", "image/jpeg")

sit(a,"classname","com.tencent.mobileqq", "com.tencent.mobileqq.activity.JumpActivity")

sit(a, "extra", "android.intent.extra.STREAM","/sdcard/lunbo.png")

uit(a, "chooser", "分享图片")


【sit保存图片到QQ收藏】
sit(a, "action", "android.intent.action.SEND")

sit(a, "type", "image/jpeg")

sit(a,"classname","com.tencent.mobileqq", "cooperation.qqfav.widget.QfavJumpActivity")

sit(a, "extra", "android.intent.extra.STREAM","/sdcard/lunbo.png")

uit(a, "chooser", "收藏图片")


【sit调用支付宝】
s zfb="alipayqr://platformapi/startapp?saId=10000007&clientVersion=3.7.0.0718&qrcode="

ss(zfb+"https://qr.alipay.com/fkx08372xrgzmjxuveshx6f",bao)

sit(a,"action", "android.intent.action.VIEW")

sit(a,"data",bao)
uit(a, "chooser", "支付宝捐款")


【sit调用系统软件分享图片实例】
sit(a, "action", "android.intent.action.SEND")

sit(a, "type", "*/*")

sit(a, "extra", "android.intent.extra.STREAM","/sdcard/iApp/Userimg/icon_iapp.png")

.这是图片路径
uit(a, "chooser", "分享")


【sit调用系统软件分享软件实例】
sit(a, "action", "android.intent.action.SEND")
sit(a, "type", "application/vnd.android.package-archive")

sit(a, "extra", "android.intent.extra.STREAM","/sdcard/iapp.apk")

.这个是软件路径"/sdcard/iapp.apk"，
uit(a, "chooser", "分享软件")


【字体无限变色】
s id=这里是文本控件id

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
ss("-"+sjs,sjs)
ufnsui()
{
us(id, "textcolor", sjs)
}
stop(sj)
}
}


【sit跳转个人名片】
s url="mqqapi://card/show_pslcard?src_type=internal&source=sharecard&version=1&uin=834897931"

sit(a, "action", "android.intent.action.VIEW")
sit(a, "data", url)
uit(a, "chooser", "跳转名片")


【sit跳转到加好友】
s url = "mqqapi://card/show_pslcard?src_type=internal&source=sharecard&version=1&uin="
ss(url+"834897931",url)
.改成好友QQ号
sit(a, "action", "android.intent.action.VIEW")
sit(a, "data", url)
uit(a, "chooser", "跳转到加好友")


【sit跳转到聊天】
s url = "mqqwpa://im/chat?chat_type=wpa&version=1&uin="
ss(url+"834897931",url)
.改成聊天QQ号
sit(a, "action", "android.intent.action.VIEW")
sit(a, "data", url)
uit(a, "chooser", "跳转到聊天")


【sit跳转到群】
s url = "mqqapi://card/show_pslcard?src_type=internal&version=1&card_type=group&source=qrcode&uin="
ss(url+"",url)
.""加上QQ群号
sit(a, "action", "android.intent.action.VIEW")
sit(a, "data", url)
uit(a, "chooser", "跳转到群")


【弹窗】
s a="@icon.png"
.这里是弹窗图片
s b="登陆"
.这里是弹窗标题
s nr="mian.iyu"
.这里是弹窗的内容，可以输入界面名直接弹出界面
s button="取消"
utw(a,b,nr,button,false,v)
{
}


【特殊字体转换代码】
s p=""
ug(6,"text",text)
.获取编辑框内容
slg(text,l)
s i=0
f(l!=0)
{
t()
{
w(i<l)
{
s(i+1,o)
ssg(text,i,o,txt)
s(i+1,i)
ss(p+txt+" ????????? ?? ??",p)
.可以修改你喜欢的特殊符号
ufnsui()
{
us(7,"text",p)
.写入编辑框或文本控件
stop(300)
}
}
}
}
else
{
tw("请输入文本")
}
效果：i ????????? ?? ??a ????????? ?? ??p ????????? ?? ??p ????????? ?? ??学 ????????? ?? ??习 ????????? ?? ??助 ????????? ?? ??手 ????????? ?? ??


【弹窗2】
s a="17301646"
.这里是弹窗图片
s b="提示"
.这里是弹窗标题
s nr="是否确认退出？"
.这里是弹窗的内容，可以输入界面名直接弹出界面
s button="取消"
s c="确认退出"
utw(a,b,nr,c,button,false,a)
{
end()
}
else
{
}


【密码登录实例】
ug(1,"text",u)

f(u=="")
{
tw("密码不能为空")
}
else f(u=="123456")

.这是密码
{

tw("登录成功")

uigo("a")

.这是密码正确后登录的页面
}

else

{

tw("密码错了")

}


【下拉菜单的实例】
.以本软件为例，字体颜色更换
s wa="黑;红;绿;蓝"
sl(wa,";",c)
uls(30,c)
.注：30是下拉菜单ID，以上放载入事件。


ug(30,"*editem",b)
.获取下拉框参数

f(b=="红")
.判断是否红色执行以下代码
{
us(15,"textcolor","#ffff0a00")
}
else f(b=="蓝")
.判断是否蓝色执行以下代码
{
us(15,"textcolor","#ff001eff")
}
else f(b=="黑")
.判断是否黑色执行以下代码
{
us(15,"textcolor","#f8000000")
}
else f(b=="绿")
.判断是否绿色执行以下代码
{
us(15,"textcolor","#ff00cc22")
}
.注：15是编辑框ID，以上放到下拉菜单事件选择项目事件。


【更新实例】
t()

{

stop(1000)

s wzb="https://我的磨地址"
.这个是我的磨地址
hs(wzb,n)

f(n==null)

{

ufnsui()

{

tw("无网络或网络不稳定")

}

}

else

{

sj(n,"更新《","》更新",g)

.截取版本号，比如：1.5
sj(n,"公告@《","》@公告",w)
.这是截取公告内容

sr(w,"<br />","\n",ww)

sj(n,"下载@@《","》@@下载",xz)
sj(xz,"<a href="","">",xzzz)

.截取下载地址，我的磨下载地址要加这个
s x="1.5"

f(x<g)

{


ufnsui()

{

.下面是弹窗
s a="17301646"

.这里是弹窗图片

s b="更新提示"

.这里是弹窗标题

s nr=ww

.这里是弹窗的内容，可以输入界面名直接弹出界面

s button="取消"

s c="确认更新"

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

}


【列表的写法】
ula(a, 10="@1.png",5="你好",6="个人签名",-1="1",8=null)
ula(a, 10="@1.png",5="你好",6="个人签名",-1="1",8=null)
ula(a, 10="@1.png",5="你好",6="个人签名",-1="1",8=null)
ula(a, 10="@1.png",5="你好",6="个人签名",-1="1",8=null)
uls(1,a,"a.iyu",-1,-2)
注：以上在载入事件
ulag(st_vW, -1, h)
注：以上是在列表点击按钮里写


【获取SD卡根目录并显示在列表中】
s ss=""
.这是根目录
fl(ss,true,b)
for(c;b)
{
ula(a,2="@60a85caf970cd853ebf9529f4a46f42c.png",3=c)
}
fl(ss,false,b)
for(c;b)
{
ula(a,2="@79.png",3=c)
}
uls(8,a,"a.iyu","100dp",-2)


【随机字体颜色】
s id=这里是文本控件id

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
ss("-"+sjs,sjs)
us(id, "textcolor", sjs)
stop(sj)
}
}


【进度的参数】
s jd="progress"

.这是进度的参数

s id=.这里是进度条ID
t()
{
us(id,jd,1)
s a=1

s b=100

w(100>0)

{

ug(id,jd,pp)
s+(pp,1,ppk)

f(pp==99)

{

uigo("a1.iyu")

end()
}
us(id,jd,ppk)
stop(20)

}
}


【按返回键带弹窗实例】
.放在按键按下事件
f(st_kC==4)
{
ufnsui()
{
s a="17301646"

.这里是弹窗图片

s b="提示"

.这里是弹窗标题

s nr="是否确认退出？"

.这里是弹窗的内容，可以输入界面名直接弹出界面

s button="取消"

s c="确认退出"
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


【按两次返回键退出】
f(st_kC==4)
{
f(sss.exit==null)
{
sss exit=0
tw("再按一次退出程序",0)
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
//以上代码请放入：界面事件→按键按下事


【字体转换语音实例代码】
ug(id,"text",a)

.输入编辑框ID
f(a=="")

{

tw("请输入文字")

}

else

{

stobm(a,"utf-8",a)

sr(a," ","",a)

t()

{

ss("http://tts.baidu.com/text2audio?ie=UTF-8&lan=zh&text="+a,a)



ufnsui()

{

tw("下载中...",0)

}



hd(a,"%iappsj/转语音/转换后.mp3",true,b)



f(b==0)

{



ufnsui()

{

tw("已保存到根目录的%iappsj/转换后目录里面",0)

}

bfm("%iappsj/转语音/转换后.mp3",c)

bfms(c,"st")

}



}



}


【浏览器进度】
.放到浏览器事件的加载过程进度改变中
f(st_nS == 100)
{
ug(10,"title",a)
//10为浏览器id
us(7,"text",a)
//7为文本id
}
else
{
ss("正在加载网页..("+ st_nS +")",a)
us(7,"text",a)
}


【判断列表是否滑动到底部】
f(st_vT==0)

{

endcode

}

//列表可见项目为0时停止执行

f(ss.gd=="true")

{

endcode

}

//判断是否以提醒过

s(st_bT-st_vT,kj)

f(st_fM==kj)

{

//以滚动到底部执行的事件

ss gd="true"

tw("已经到底了，没有更多啦！",0)

}



//以上代码放到列表的 控件事件→触屏滚动事件→滚动


【调用浏览器打开页（非hws）】
sit(a,"ACTION", "android.intent.action.VIEW")
sit(a,"data","http://appv.pw")
uit(a, "chooser", "选择浏览器")

调用浏览器打开网页（支持自带浏览器，支持所有浏览器），比hws好用多了。


【调用应用市场给本软件评分】
sit(a,"ACTION", "Intent.ACTION_VIEW")
sit(a,"data","market://details?id=com.iapr")
uit(a, "chooser", "选择操作方式")

必须在应用市场有你的软件，否则会提示没有该应用。


【图片无限旋转动画】
dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, "duration", 3000)
us(图片id, "dh", dh)
dhon(dh)
{
us(图片id, "dh", dh)
}


【hs获取网页的新功能-代理IP】
来看看 手册的介绍
//带自动设置cookie方式获取网页，并记录当前网页的Cookie，并设置Header头:（可设置多条，以“||”隔开）文件头包括了Cookie，User-Agent设备型号，设置连接超时，设置接收超时，设置代理IP。
//传递cookie项值，当自定义为null 系统将自动设置已记录的cookie
t()
{
s a = "http://wap.baidu.com/"
hs(a, "title=你好&text=你好吗？", "utf-8", null, true, "User-Agent=Mozilla/5.0 (iPad; U; CPU OS 6_0 like Mac OS X; zh-CN; iPad2)||accept=*/*||accept-language=zh-CN", 20000, 20000, "10.0.0.172:80", b)
syso(b)
}

效果不明觉厉。简单点说就是。如果你有很多代理IP，你就能做一个cc攻击（效率低下），但做一个网页刷访问还是不错的，都是模拟真实用户访问的。

比如这样的，20000是访问超时时间也就是20秒，最好设置10000-20000左右最好，怎么无限更换代理IP呢？你只需要把很多IP分割为数组，如：

sl("109.22.33.58:80#36.69.52.33:80","#",ok)
然后for循环读取ok，再循环hs访问即可（不要做坏事哈）

t()
{
hs("网址",null, "utf-8", null, true, null, 20000, 20000, "10.0.0.172:80", b)
syso(b)
}


【给按钮加触摸时的深色 方法】
按钮控件又或者是文本控件，线性布局等，只要设置了背景颜色不是白色透明，比如绿色，那么点击时的深色颜色就没有了。

其实特别简单的做法就是，先给按钮套一个线性布局，设置线性布局背景为绿色，按钮背景为透明。再给按钮加个点击事件试试看！


【获取imei进行计算密码】
通常如果获取imei来计算一些密码，直接simei(imei)即可，但如果出现因为字母，那么计算就会出问题了。（有部分手机imei是有英文字符的）

比如
simei(imei)
s(imei/2,ok)
tw(ok)

如果imei有英文字母，这个计算就不成立了，也就出错！怎么办呢？很简单，用正则表达式替换下字符即可，示例：

simei(imei)
sr(imei,"[a-z]","9",imei)
s(imei/2,ok)
tw(ok)


【搜索列表关键字的实现方法】
sl("蛋疼;鸡肋;鸡蛋;鸡皮疙瘩;蛋糕",";",so)
//分割一段内容为数组
for(k;so)
{
//循环判断是否包含需要搜索的内容
f(k?"蛋")
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(k)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！


【调用其他程序分享文件代码】
sit(a, "action", "android.intent.action.SEND")
sit(a, "type", "*/*")
sit(a, "extra", "android.intent.extra.STREAM","/sdcard/iApp/Userimg/icon_iapp.png")
uit(a, "chooser", "分享")


【us设置滑动侧滑窗体里控件属性】
在有滑动窗体或者侧滑窗体的时候需要加个判断什么的，比如判断网络是否连接，需要通过us设置文字来显示，但是直接在mian界面载入事件，比如这样：

us(a.2,"text","有网络")

你会发现没有任何效果，因为界面无法交互，但你只需要把代码放在 “界面载入完毕事件” 就行了。因为这个事件界面可以交互。


【点击取消编辑框获得焦点】
编辑框获得焦点就是编辑框点击后的光标效果，默认只要点击了编辑框，除非退出再进，否则是无法取消掉光标的，这时候就需要代码来设置一下。

us(2,"focusable",false)
//设置id为2编辑框不获得焦点

可以放在返回事件等等，按一次返回取消掉获得焦点，不过这样后编辑框就无法点击了，怎么办呢？很简单，让编辑框再可以获得焦点即可。代码如下

us(2,"focusable",true)
us(2,"focusableintouchmode",true)

注意的是；必须放在编辑框的触屏监听事件！


【添加点击菜单时的选项】
代码如下：

case 选择A:
tw("A")
break
case 选择B:
tw("B")
break
case 选择C:
tw("C")
break
default:
tw("载入成功")
break

其中，选择A等是标题，tw是点击后的事件。


【列表里设置背景圆角参考iApc】
参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,"background","#336699")

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,"#336699",yes)
us(ok,"background",yes)


【下载文件简单代码】
t()
{
hd("http://flmle.com/ok.apk","iApp/ok.apk",true,ok)
//iApp/ok是保存路径，true是如果存在则覆盖

f(ok=="0")
{
ufnsui()
{
tw("下载成功")
}
}
else
{
ufnsui()
{
tw("下载失败")
}
}
}


【深度解析sss全局变量】
iAPP2.0最棒的改变莫过于全局变量了。因为全局变量的存在我们可以把很多原来需要写很多都东西最简化。但很多小白并不懂全局变量的使用。全局变量能做什么呢？比如视频播放器，点击一个视频就跳转到界面播放该视频！在很多方面都必须用的到的东西。

首先来看看s变量：
s ok="小白"
再看看全局变量：
sss ok="小白"

全局变量的作用是传递数据，比如有些小白不会使用的。点击一个列表跳转一个界面他可能会 新建若干个界面，然后跳转到指定的界面，非常麻烦鸡肋。

首先新建一个按钮，按钮点击事件如下：
sss ok="小白"
uigo("m.iyu")

再新建一个界面m.iyu，该界面载入事件如下：
tw(sss.ok)

当点击按钮后，全局变量ok就变成小白了。m.iyu界面载入事件就是提示这个全局变量，也就成小白了！也就说点击按钮后sss.ok这个变量就变成“小白”，所以m.iyu这个界面也会提示小白！


【post提交深度解析小白必看】
post在下面的内容我们就讲过，现在更彻底了讲一遍，保证你学会post提交数据！

post的是什么呢？post就是提交数据，提交内容给网站处理，然后获取返回的结果。类似登录功能，同理！

一般我们需要从网站获取源代码后才能知道该提交什么，接口是什么。
举个例子：我从某网站源代码中得出下列代码：

<form action="http://flmle.com/so.php"">
<input type="hidden" name="siteid" value="1000">
<input type="text" name="key" placeholder="输入关键字">
<input type="submit" value="搜索">
</form>

这是一个搜索表单（表单从form开头form结尾）

第一行：<form action="http://flmle.com/so.php">
其中action的这个地址就是提交的接口

第二行：<input type="hidden" name="id" value="1000">
表示这是一个隐藏的输入框 为什么要隐藏呢？因为不需要用户输入，但必须要提交。他的属性是id=1000
那就得出一个提交的内容

第三行： <input type="text" name="key" placeholder="输入关键字">
这是一个需要输入内容的输入框，他的属性是key，得出一个提交的内容：key=搜索关键字

第四行： <input type="submit" value="搜索">
这个完全不用管他，他是一个提交按钮，我们post的时候本身就是一个提交了，所以不需要他！

就这样得出post内容

hs("http://flmle.com/so.php","id=1000&key=搜索关键字","utf-8",ok)

提交的内容是通过&符号串联到一起的，不要写错！

ok就是返回的结果，你可以syso(ok)打印出来查看是否已经提交成功从而截取你需要的结果！


【随机启动语录】
sl("你爹|你大爷|你二爷|你大舅|你二舅|你大侄子","|",ok)
//分割为数组

sran(0,5,sj)
//生产1-6的随机数

sgsz(ok,sj,yes)
//随机访问语录

tw(yes)


【$私有文件夹的使用】
iAPP2.0以上，有一个私有文件夹，但很多人都不知道有什么用。其实这个私有文件夹特别实用的，比如你要保存一些东西，但又不想让用户看到，可以保存到私有文件夹下哦。

私有文件夹的路径是：/data/data/安装包名/files

路径不用管，直接在保存文件加个$符号就行了。私有文件夹的好处是，用户没有Root权限是无法修改你保存的内容的。比如一些txt文件等，若你保存在%手机内存里，那么很可能被人修改或者看到哦！


【给编辑框添加滚动条方法】
在使用编辑框的时候难免会遇到一个有点蛋疼的问题，编辑框没有滚动条而且主要的是编辑框下滑速度不忍直视，但一个方法即可解决。

首先添加一个滚动控件，在滚动控件里添加编辑框就行了。具体效果可参考iApc的内容预览。非常好用哦


【去除编辑框点击后有背景颜色】
默认编辑框只要设置颜色就会出现一个点击输入后颜色 浅蓝色的背景


比如设置编辑框白色，输入内容时编辑框背景颜色就会变成浅蓝色，非常影响美观。

解决办法非常简单，在编辑框的获得焦点事件写下代码：
us(编辑框id,"background","")

即可去除默认的颜色当然也可以设置其他颜色。在后面的""里输入颜色代码即可。


【编辑框的内容不垂直居中】
当你设置编辑框高度后，默认的编辑框里的文字是垂直居中的，可在属性里设置：

gravity=top

即可。


【给编辑框的文字设置颜色，语法高亮】
可参考iAPP的编辑代码时语法高亮。具体过程就不说了

编辑框属性里内容：

text=(html)<font color=#006000>我是绿色<font>我不是绿色


【点击发送QQ临时对话接口代码】
s qq=2279499274
//你的QQ号
ss("mqqwpa://im/chat?chat_type=wpa&uin="+qq+"&version=1",urlqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",urlqq)
uit(a, "chooser", "选择QQ")


【点击添加QQ群接口代码】
s qun=333797002
//群号
ss("mqqapi://card/show_pslcard?src_type=internal&version=1&uin="+qun+"&card_type=group&source=qrcode",joinqq)

sit(a,"action", "android.intent.action.VIEW")
sit(a,"data",joinqq)
uit(a, "chooser", "选择QQ")


【进度条的使用方法】
进度条，也可以是拖动条，这两个都是差不多的，以进度条为例子就行了。

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
us(进度条id,"progress",a)
}
}
}


到这里基本就好了，但是细心一点你会发现，进度条只到100就完了，没错！进度条默认最大值是100，也就是他只跑到100就完了，怎么设置呢？

只需要在属性里加：
max=120
也就是最大值是120就可以了！


【给控件加圆角的方法】
需要在载入事件先赋值，代码如下：

ngde(5,"#ffffff",ok)
us(1,"background",ok)

设置id为1的控件圆角的角度是5，背景颜色是#ffffff，通过ok调用，可以多个控件一起调用，还有其他更多属性，可搜索  ngde 查看。


【列表点击颜色的设置】
列表点击颜色有两种，一种是项目点击事件。

还有一种我比较推荐，就是在列表界面，给线性布局加点击事件，把背景设置为透明就


【Hello,World！你好，世界】
当您看到这句话时，这便意味着您的手册程序已经部署完成。
同时也意味着 空梦框架 已经成功的在您的设备上正常运行。
感谢您的使用！


【字符串倒着输出】
//作者 贴吧@我是大侠233
s str = "这是字符串"
javanew(a, "java.lang.StringBuffer", "String", str)
java(a, a, "java.lang.StringBuffer.reverse")
java(c, a, "java.lang.StringBuffer.toString")
syso(c)


【随机语录的启动语录】



sl("你爹|你大爷|你二爷|你大舅|你二舅|你大侄子","|",ok)
//分割为数组

sran(1,6,sj)
//生产1-6的随机数

sgsz(ok,sj,yes)
//随机访问语录

tw(yes)


【防止打开软件输入法】
在编辑框的父控件属性里添加：
focusable=true
focusableintouchmode=true
即可


【一建清除文件夹所有文件】
fn del(path)
t()
{
  f(ss.path0==null)
  {
    fi(path,f)
    f(f==false)
    {
      ufnsui()
      {
        tw("文件夹路径错误！")
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
      ss("删除："+path+"  成功1！",k)
      syso(k)
      //打印删除的文件（夹）路径详情
      slg(path,l)
      slof(path,"/",l,l1)
      //取路径path的倒数第一个字符"/"的位置
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
      ss(path+"/"+b,path2)
      fd(path2,f)
      f(f==false)
      {
        fn a.del(path2)
        //如果删除文件夹path2失败则重新以path2为叁数重新删除
        endcode
      }
      ss("删除："+path2+"  成功！",k)
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
    tw("删除完毕！")
  }
}
end fn

//以上代码请放到模块a.myu里，如果你要改模块名称，请将上面代码里的3个a.del改一下

//以下代码放到按钮点击事件中,传入要删的文件夹调用上面的模块一键删除
s lj="/sdcard/abc"
.模块会自动判断路径的正确性以及是否是文件夹
fn a.del(lj)
.调用模块开始删除


【远程弹窗公告】
t()
{
  hs("这里是网址",a)
  sj(a,"获取符","获取符",b)
  ufnsui()
  {
    utw(null,"公告",b,"知道了",true,sb)
    {
    }
  }
  
  
}


【文字逐渐缩小】
t()
{
  s id=文本控件ID
  s t=150
  .设置文本字体初始大小
  w(t&gt;15)
  .启用循环，当字体大小小于5时停止循环
  {
    s(t-2,t)
    ufnsui()
    {
      us(id,"textsize",t)
    }
    stop(20)
    .设置停顿间隔
  }
}



【文字逐渐向左无限移动】
t()
{
  s id=控件id
  swh("pxw",w)
  s s=w
  ufnsui()
  {
    us(id,"layout_marginleft",s)
  }
  w(1==1)
  {
    f(s&gt;0)
    {
      s(s-5,s)
      ufnsui()
      {
        us(id,"layout_marginleft",s)
      }
      stop(10)
      .循环间隔
    }
    else
    {
      s s=w
    }
  }
}


【在侧滑和滑动窗体显示列表的方法】
.很多小伙伴用原始方法都不行因为这里是侧滑和滑动窗体的主页


【全局循环背景音乐】
.这是全局的任何页面都可以播放哦

.设置音乐文件路径并播放，将播放组件对象设为全局
s miusic = "文件路径"
bfm(miusic, sss.mp3)
.设置循环播放
bfms(sss.mp3, "sl", true)


【文本取值与赋值】
s id=这里是文本或编辑框控件id


ug(id,"text",a)

.获取内容并赋值变量给a
._______________

s a="你好"
us(id,"text",a)

.将变量a赋值给控件


【文本保存、读取、查找】


保存:
1、
fw("abc.txt","这里是内容")

2、
s a="这里是内容"
fw("abc.txt",a)

3、
s a="iapp/abc.txt"
s b="这里是内容"
fw(a,b)

.iapp为文件夹，abc.txt为文件

________________


读取:
1、
fr("abc.txt",a)
tw(a)

2、
s a="iapp/abc.txt"
fr(a,b)
us(id,"text",b)

.iapp为文件夹，abc.txt为文件，id为控件id须修改

________________


查找:

s a="这里是要找的内容，我们来找这里有几个”找”字"
s b="找"

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
ss("查找完成，共"+d+"个",h)
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

.注：.a是要查找内容，b是要找的字，如果要查找的内容是读出文本那就加一个读出涵数，然后把上面s a="xxx"那句删除掉，如：

s a="这里是要找的内容，我们来找这里有几个”找”字"

改成:

fr("abc.txt",a)


【注册码与注册机的原理】


有时候作者为了保留权利，特加入了注册码做为正版软件，使用方需要向作者购买或索爱激活码才能通过检测，但如何才能让每个人的激活不通用呢？那么就需要获取使用方的imei号，因为每部机器的imei都是不同的，下面就教大家如何去写。

1.有两种办法保存数据，一种为本地，一种为服务器，我们先说说第一种，首先要用一个本地文件做为保存记录，下次打开才不会再次要求输入激活码，我们以根目录abc.txt文件为例。

2.
________________

simei(imei)
s2(imei*2,imei1)
s(imei1*2,imei2)
.获取机器号并乘以2后赋值给imei2，可任意计算，假设有s2算法最后一步一定要用单s计算

s wj="abc.txt"
.这个是保存数据的文件路径，越隐蔽越好

fe(wj,a)
f(a=="true")
{
fr(wj,b)
f(b=="")
{
tw("注册文件异常！")
}
else
{
f(b==imei2)
{
tw("已注册，欢迎使用！")
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw("注册失败！")
}
}
}
else
{
tw("未注册，请注册后使用！")
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
hs("http://1294858802.wodemo.net",null,null,a)
f(a?b)
{
tw("已注册，欢迎使用！")
.这里可以加上转跳代码，跳转前别忘了关闭当前界面
}
else
{
tw("未注册，请注册后使用！")
}
}

.通过网页的返回判断是否有该机器号，存在就成功注册，不存在就失败。

__________________


.注：有些手机的机器号带有字母，使用第一种办法需要判断字母后再计算，否则会出错，第二种办法就不用计算，任何机器号都可以。




【循环计算加法】


s id=这里是起始数输入框id
s id1=这里是结束数输入框id
s id2=这里是显示结果文本或输入框id

t()
{
ug(id,"text",a)
ug(id1,"text",b)
s d=a
s c=0
w(a<b)
{
s+(1,a)
s+(a,c)
}
s+(c,d)
us(id2,"text",d)
}


注：计算数是递次的



【限制使用密码进入软件】


ug(密码输入编辑框id,"text",a)
f(a=="初始密码")
{
tw("密码正确")
.这里可以加上其他代码，比如，密码正确后跳转界面uigo(界面名)
}
else
{
tw("密码错误")
}



【搜索列表关键词代码】


sl("iapp;youyou;iapp代码助手;i学习;无敌",";",po)
.分割一段内容为数组
for(a;po)
{
//循环判断是否包含需要搜索的内容
f(a?"iapp代码助手")
{
//打印包含蛋字的内容会打印蛋疼、鸡蛋、蛋糕
syso(a)
}
}


那怎么显示到列表呢？只需要把syso换成ula即可！




【图片无限旋转】
.放页面载入事件
dhr(dh, 0, 720, 1, 0.5, 1, 0.5)
dh(dh, "duration", 3000)
us(图片id, "dh", dh)
dhon(dh)
{
us(图片id, "dh", dh)
}



【光标位置插入内容】
ss tj="iapp代码助手"
s id="编框id"
slg(ss.tj,zfcd)
ug(id,"selectionstart",gbwz)
ug(id,"text",bjnr)
s(gbwz zfcd,gbwz2)
ssg(bjnr,0,gbwz,hq2)
ssg(bjnr,gbwz,hq3)
ss(hq2 ss.tj hq3,hq4)
us(id,"text",hq4)
us(id,"selection",gbwz2)

.作者：youyou 



【编辑框显示行号】
.放进编辑框监听事件文本更新后


t()
{
s bjk=编辑框id
s wb=用来显示行数的文本id
.先布局在弄
s hs=0
f(st_sS?"\n")
{
ug(bjk,"text",nr)
sr(nr,"\n","\nh%h",nr1)
//这里需要注意，2.08版本后添加了正则表达式，所以用的功能需要正则表达式才能正常，不过这里可以稍微改进下就可以了，不解释了，自己参悟
sl(nr1,"\n",nr2)
for(nr3;nr2)
{
s+(hs,1,hs)
ss(hs1+"\n"+hs,hs1)
}
sr(hs1,"\n1\n","1\n",hs2)
//这里是为了解决第一行显示的错误
ufnsui()
{
us(wb,"text",hs2)
}
}
}
sss hszkg=1


【编辑框高亮】
.放进编辑框监听事件文本更新后

s id=编辑框id
ug(id,"text",nr)
ug(id,"selectionstart",wz)
.获取部分
s ss="这里面填你要高亮的内容♡→这货是分隔符，可以换掉。♡可以批量替换"
sl(ss,"♡",ss)
sgszl(ss,sb)
.设置数组
s xh=0
for(0;sb)
{
sgsz(ss,xh,ss2)
ss("<font color=#FFA500>"+ss2+"</font>",th)
.用于高亮的html
sr(nr,ss2,th,nr)
s(xh+1,xh)
}
.循环拼接为html
sr(nr,"\n","<br>",nr)
ss("(html)"+nr,nr)
us(id,"text",nr)
us(id,"selection",wz)
.这个用来保存光标位置
.作者:不详


【仿iapp代码补全】


.需要自己布局，自己动脑
.下面是仿iapp代码补全辅助工具
ss gbwz0=0
.ug(xbx.19,"text",txjq2)
//xbx.19为编辑框的id
s txjq2=st_sS
sss txjq=txjq2
sr(txjq2,"\n","щ",txjq)
ug(xbx.19,"selectionstart",gbwz)
ss gbwz0=gbwz
ssg(txjq,0,gbwz,jq)
sss jq=jq
s zf=","={}><(); -*!|/:?&\#@$p[]_щ "
s zkh="("
s ykh=")"
sss gbwz=gbwz
t()
{
w(ss.gbwz0>0)
{
s-(ss.gbwz0,1,ss.gbwz0)
s-(ss.gbwz0,1,gbwz1)
ssg(jq,ss.gbwz0,gbwz,jq2)
ssg(jq,gbwz1,ss.gbwz0,jq3)
f(jq3==null)
{
s jq3=" "
}
sss jq2=jq2
f(zf?jq3&&zf!="")
{
sss gbwz0=ss.gbwz0
ss gbwz0=0
f(jq2!=zhk&&jq2!=ykh&&jq2!=" ")
{
fn ss.tx(jq2)
}
else f(jq2!=zhk||jq2!=ykh||jq2!=" ")
{
ufnsui()
{
us(xbx.87,"visibility","gone")
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
us(xbx.87,"visibility","gone")
}
ula(ssjg, "clear")
s sslj="@function/"
ss(sslj "fix.txt",ssnr1)
//要搜索的函数表
fr(ssnr1,nr1)
s fh="sl(nr1,fh,sc1)
s ssjg=null
s ssjl=0
t()
{
f(ssgj=="")
{
.tw("输入不能为空")
}
else
{
for(sd1;sc1)
{
sj(sd1,"「","」",hsj)
sj(sd1,"《","》",hsdm)
sj(sd1,"〖","〗",hsys)
f(hsdm?*ssgj)
{
s (ssjl,1,ssjl)
ula(ssjg,2=hsdm,3=hsys,-1=hsj)
}
}
f(ssjl>=5)
{
s w="200dp"
}
else
{
s h=-2
}
us(xbx.87,"height",h)
f(ssjl!=0)
{
ufnsui()
{
us(xbx.87,"visibility","visible")
uls(xbx.87,ssjg,"zdtxlb.iyu",-1,-2)
}
}
else
{
ufnsui()
{
us(xbx.87,"visibility","gone")
.tw("无匹配")
}
}
}
}


显示到右上角列表的单击项目事件
ulag(st_vW,st_pN,2,cr)
ulag(st_vW,st_pN,-1,ts)
s bjk=sss.bjk
ug(bjk,"selectionstart",dqgb)
f(sss.gbwz==dqgb)
{
sr(sss.jq2,"щ","\n",jq2x)
sr(sss.jq,"щ","\n",jqx)
slg(cr,jcd)
s (sss.gbwz0,jcd,szgb)
ss(jq2x "@jsmjq",jq2)
ss(jqx "@jsmjq",jq)
sr(sss.txjq,jqx,jq,zbcr)
sr(zbcr,jq2,cr,wccr)
us(bjk,"text",wccr)
us(bjk,"selection",szgb)
}
else
{
fn charu.cr(cr)
//这里是插入文本模块，前面貌似讲过
}
tw(ts)
us(st_vW,"visibility","gone")


【给列表载入各种动画效果】
//获取控件对象id1
gvs(st_vW,list.1,gvs_1)
//获取控件对象1


//.右往左滑动特效
swh("pxw",w)
dht(dh, w,0,150, 0)
dh(dh, "duration",450)
us(gvs_1, "dh", dh)






/.左往右动画
swh("pxw",w)
dht(dh,0,w,10, 0)
dh(dh, "duration",450)
us(gvs_1, "dh", dh)
./左往右动画

/.列表翻转动画
dhas(dh,gvs_1, "rotationY", 0,30,60,90,120,150,180,210,240,270,300,330,360)
dh(dh, "duration", 1500)
dh(dh, "start")
.//列表翻转动画


/.列表渐显动画

dha(dh,true, false)
dh(dh, "duration", 1000)
us(gvs_1, "dh", dh)

.//列表渐显动画


/.由小到大显示
dhs(dh, 0.4, 2.0, 0.4, 2.0, 1, 0.4, 1, 0.4)
dh(dh, "duration", 1500)
us(gvs_1, "dh", dh)
./由小到大显示
参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,"background","#336699")

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,"#336699",yes)
us(ok,"background",yes)
获取内容(界面名.控件id,控件属性,取值)


【设置列表背景为圆角】
参考iApc的 列表颜色图标

作用：可以设置每个列表的圆角或者背景颜色，又或者设置边框，其他一切等等

比如两个界面：mian.iyu主界面和list.iyu列表界面
首先在列表设计界面list.iyu的载入事件写代码

gvs(st_vW,list.1,ok)
us(ok,"background","#336699")

通过gvs获取id为1的对象并设置背景颜色为#336699

如何圆角或者边框呢？可以搜索ngde属性。
设置圆角例子：
gvs(st_vW,list.1,ok)
ngde(5,"#336699",yes)
us(ok,"background",yes)


【美化控钮或背景】
s a1 = 5
s b1 = 15
s c1 = "#ff059700|#ff059700|#ff059700"
s d1 = "#ff059700"
s e1 = "topbottom"
ngde(a1,b1,c1,d1,e1,f)
us(24,"background",f)


ーーーーーーーー

ngde("5","5","#ff00bdff","#ff00bdff", a)

us(6,"background",a)


