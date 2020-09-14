<div align="center">
  
   【空梦logo】 【EmptyDream_World title】
   
<img src="https://icdn.7t5j.cn/2020/09/12/3b7a4d0cc69de.png" alt="made-with-pug.png" title="made-with-pug.png" width="20%" />
&ensp;
<img src="https://icdn.7t5j.cn/2020/09/12/a6f794a42dcb7.png" alt="cc-nc-sa.png" title="cc-nc-sa.png" width="36%" />
&ensp;
<img src="https://icdn.7t5j.cn/2020/09/12/652c75d23133c.png" alt="chat.png" title="chat.png" width="20%" />

   
---

<p>全开源 轻量级 响应式</p>
<p>一个高度集成的PHP开发框架</p>
<h3>†</h3>
<p>在这介于虚幻于现实之间，而又万物皆可萌的世界之中</p>
<p>彼此的相遇，又会带来怎样的奇迹呢</p>
<p>♢</p>

</div>

## Edwforever 空梦永恒
<br>
<div align="center">
<p>当幻想与现实交织，不再存在界限之时，所有的一切编不再区分于虚实</p>
<p>于此，存在的一切也便成为了现实</p>
</div>
<div align="right">
  <p>——空梦世界</p>
</div>


空梦一名中，空的引申义为虚幻、无尽，而梦则可理解为梦幻、无尽

因此，空梦世界，其实也便是一切皆为幻想(现实)的世界

空梦世界是隶属于```永恒计划```这个工程中的一个项目，在这个项目中，大多数项目的名称都与空梦或者空梦世界有关

我们希望能够以此建立出一个真正开放且易于上手的开源工程

### 参与的项目

我们将已知的所有参与到永恒计划中的项目列于此处

如果您的开源项目直接或间接的使用了永恒计划中的项目，我们也同样鼓励您对您的项目对于本工程的集合仓库进行Pull Request。

之后，您的项目也会被添加于此，但是也请不要忘了项目描述

- 空梦框架 EdwFramework
  - 短网址API ShortURL
  - 空梦世界（原晓空iApp手册Web版） xksc
  - 网络图片转HTML API ImgToHtml
  - 开放式登录接口 Openid
  - 欢迎主页[计划中] index
  - 抽老婆 ExWaifu
  - 校园辅助信息管理系统[计划中] SchoolServerAdmin
  
- 基于Mirai框架协同开发的机器人插件
  - EdwApiCore For Minecraft

- 基于Minecraft民间二次开发服务器内核Paper、Akarin和BungeeCord的Minecraft Server
  - 空梦世界 EmptyDream World 群组服务器
  
- 基于iApp iyu V3开发的程序
  - 晓空iApp手册（安卓版）
  - 空梦文字游戏引擎 FontGames

- 基于Lua语言和FusionApp框架开发的程序
  - 空梦手册Lite版
  
### 主要的贡献者名单

  - 晓空 KJZH001
  - Lincannm
  - 残页 canyie
  - 群主大号
  - 仿佛如风 Like_Wind
  - 纯之 yanyi
  - 血色之夜 xszy
  - 暮阳之君
  - 罗[秋口]
  - Rosemoe
  
以上排名不分先后

如果您愿意将您的项目开源并提交于合集仓库中，那么您的名字也可以被添加于此

### 一切项目仅用于开发学习，切勿用于违法用途

所有的一切项目和相关的源代码仅用于开发和学习使用，在使用和进行开发时请遵守中华人民共和国大陆以及您所在地和服务器所在地的相关法律规定

否则，空梦框架以及永恒计划和其他相关的项目参与者均不承担任何（以及相关的连带）责任

## EdwFramework 空梦框架 / 项目简介

空梦框架是一个高度自由的开源轻量级PHP开发框架，定位类似于ThinkPHP、Laraval等PHP框架，但也有一些不同之处，我们将辅助开发和面板的管理功能做到了一起

这个项目最初源自于我所编写的RAPI这个系列的项目（尽管我当时写的确实比较糟糕，而且没什么人用），在当时我就已经开始逐渐有意识的将其网页中的部分内容开始整合，并且开始将其模块化的放在了一起

现在的这个框架，其实期初也只是想对我当初所写的东西做出一个整合，然后写成一个类似CMS之类的玩意。不过没过多久，我就开始希望能够自己写出一个框架，于此，这个项目也就诞生了

因为最初开发的性质和初衷，所以这是一个从底层编写开始就支持多站点的框架，每个站点之间都是各自独立的同时也是相互关联的，因此可以轻易的做到跨站点的资源共享，此外由于开放式登录接口API的高度一致新和独特的数据结构，天然具备了单点登录甚至跨框架登录的功能

## 如何上手

请阅读文档：快速上手-Quick Start

为了能够方便您使用框架和对框架中的一切进行内容进行定制和修改

我们强烈建议您掌握web前端语言(HTML、Javascript、css)以及PHP语言的基础

## 环境要求

- PHP版本 >= 5.6 (需要file和mysqli组件的扩展，切无禁用函数)

- Mysql >= 5.2 

- 框架目录授予 777 权限且框架运行在root权限下（非必须）

- 浏览器支持HTML5标准

## 在集成环境中使用

- 宝塔面板 √

- 小皮面板 phpstudy √

- EasyPanel 

- Cpanel 尚未测试

## 运作流程

 全框架中仅有两个唯一入口
 
  index.php 标准图形GUI界面入口

  api.php API接口入口（用于交互数据）


## 空梦世界 x 永恒计划 并不是属于一个人的项目，其著作权归全体开源社区贡献者所有

您可以对全体工程项目进行随意的修改、定制及二次打包（包括版权）

您也可以将您的名字加入其中但是您必须保留所有源代码注释中的版权界作者声明，以及附上本文和相关的开源许可，并至少保留注释中的空梦框架这个名称

否则，任何人或单位都无权使用本工程中的任何项目

## 不推荐用于任何大规模商业化行为

永恒计划中的所有项目一律不建议用于任何大规模商业化行为活动中

今后也不会对任何大规模商业化活动提供任何额外的支持

若您的开源项目使用了相关的开源项目中的并利用其月收入达到4000及以上时，您必须将其开源，否则不得继续使用

## in 18n

我们欢迎所有人来帮助我们进行翻译以及改进反应的内容

在日后我们会将基本GUI中的界面文本独立于单独的语言文件中，欢迎各位对本工程的国际化助力于更好的推广

## 许可证

框架主体采用MIT协议进行许可

大多数框架支持程序以GPL v3/AGPL协议进行许可

此外，工程中的一切项目都遵循Anti 996协议进行许可，抵制996工作制度是我能内个人都应做的事情和义务

只有这样才能更好的维护我们每个人的身体和生命以及财产权益

我们鼓励所有参与到永恒计划这个工程中的项目使用GPL v3协议进行开源，但这并不强制（大型商业化使用除外）

## 鸣谢
Visual Studio Code、Eclipse、Android Studio、IDEA等IDE工具

Github、Gitee、OsChina、CSDN、Gitter、Gogs、Gitlab等开源社区

最后鸣谢所有参与到永恒计划中的贡献者和使用者

感谢Jsdlivr、CloudFlare提供的免费全球CDN加速服务

以及Mirai、MDUI.org、jquery、CRYPTOJS框架的开源贡献

<img src="https://icdn.7t5j.cn/2020/09/12/93c4f701f8558.png" alt="0-percent-optimized.png" title="0-percent-optimized.png" width="20%" />
<br><img src="https://icdn.7t5j.cn/2020/09/12/d9b21d7ab971a.png" alt="powered-by-black-magic.png" title="powered-by-black-magic.png" width="36%" />



