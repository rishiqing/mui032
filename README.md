# mui032

安装
-----
直接把源代码clone到metinfo的templates文件夹下，然后在后台系统里直接导入即可

应用工具下载
-----
* 在后台系统中 增值服务--官方商城--应用，右上角搜索处进行应用的搜索、下载和安装。

1.模板制作助手
* 修改模板的时候，需要自定义一些标签使用，借助模板制作助手，可以往我们的模板中增加一些变量，避免页面中的文字和图片等信息写死，后期不方便产品运营在后台修改，不方便维护。
* 我们通过模板制作助手添加的一些分区、变量等数据信息会保存在我们模板中的install文件夹--template.json文件中。首次在模板制作助手添加，会自动生成一个install文件夹。

2.上传文件管理器（米拓暂时下架这个应用了，无需安装）
* 方便管理那些我们已经上传的图片、视频、文本文件等。

栏目管理
-----
* 点击 栏目管理--添加新栏目，按照以下栏目添加。属于二级栏目的对应在其一级栏目的 更多--添加 即可。下面列出的分别按照 栏目等级--排序--栏目名称--导航栏显示--所属模块--目录名称 的顺序，对照设置。本项目最多用到二级栏目。
* 下面表格中的 `-`仅仅是为了对照方便查看而插入的分割线，表格太长，设置项较多，分割线便于对照。
<table>
   <tr>
      <td>栏目等级</td>
      <td>排序</td>
      <td>栏目名称</td>
      <td>导航栏显示</td>
      <td>所属模块</td>
      <td>目录名称</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>0</td>
      <td>产品</td>
      <td>尾部导航条</td>
      <td>产品模块</td>
      <td>product</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>0</td>
      <td>功能</td>
      <td>头部主导航条</td>
      <td>产品模块</td>
      <td>product</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>0</td>
      <td>日程安排</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>product</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>1</td>
      <td>计划管理</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>product</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>2</td>
      <td>工作笔记</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>product</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>3</td>
      <td>在线云盘</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>product</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>4</td>
      <td>公司同事</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>product</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>1</td>
      <td>价格</td>
      <td>头部主导航条</td>
      <td>产品模块</td>
      <td>product</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>2</td>
      <td>下载</td>
      <td>头部主导航条</td>
      <td>下载模块</td>
      <td>download</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>3</td>
      <td>更新日志</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>log</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>1</td>
      <td>使用</td>
      <td>尾部导航条</td>
      <td>简介模块</td>
      <td>usage</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>4</td>
      <td>解决方案</td>
      <td>头部主导航条</td>
      <td>图片模块</td>
      <td>solution</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>5</td>
      <td>使用技巧</td>
      <td>不显示</td>
      <td>图片模块</td>
      <td>skill</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>6</td>
      <td>帮助中心</td>
      <td>不显示</td>
      <td>图片模块</td>
      <td>help</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>7</td>
      <td>产品手册</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>manual</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>8</td>
      <td>培训课程</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>course</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>10</td>
      <td>使用方法</td>
      <td>头部主导航条</td>
      <td>简介模块</td>
      <td>method</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>11</td>
      <td>钉钉</td>
      <td>头部主导航条</td>
      <td>产品模块</td>
      <td>ding</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>0</td>
      <td>轻应用，轻办公</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>ding</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>1</td>
      <td>一键发DING</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>ding</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>2</td>
      <td>随时发起讨论</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>ding</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>12</td>
      <td>支持</td>
      <td>头部主导航条</td>
      <td>简介模块</td>
      <td>about</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>0</td>
      <td>帮助中心</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>about</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>1</td>
      <td>产品手册</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>about</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>2</td>
      <td>培训课程</td>
      <td>不显示</td>
      <td>图片模块</td>
      <td>img</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>3</td>
      <td>官方博客</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>article</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>0</td>
      <td>官方公告</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>article</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>1</td>
      <td>媒体报道</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>article</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>2</td>
      <td>活动沙龙</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>article</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>3</td>
      <td>用户故事</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>article</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>4</td>
      <td>更新日志</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>toplog</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>0</td>
      <td>Web</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>toplog</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>1</td>
      <td>Android</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>toplog</td>
   </tr>
   <tr>
      <td>三级</td>
      <td>2</td>
      <td>iOS</td>
      <td>不显示</td>
      <td>文章模块</td>
      <td>toplog</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>13</td>
      <td>公司</td>
      <td>尾部导航条</td>
      <td>简介模块</td>
      <td>company</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>0</td>
      <td>关于我们</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>company</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>1</td>
      <td>官方博客</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>company</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>2</td>
      <td>代理合作</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>company</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>3</td>
      <td>服务条款</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>company</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>4</td>
      <td>加入我们</td>
      <td>不显示</td>
      <td>招聘模块</td>
      <td>job</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>14</td>
      <td>其他</td>
      <td>尾部导航条</td>
      <td>简介模块</td>
      <td>other</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>0</td>
      <td>电话：010-57294778</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>other</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>1</td>
      <td>邮箱：rishiqing@126.com</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>other</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>2</td>
      <td>申请友情链接</td>
      <td>不显示</td>
      <td colspan="2">外部模块(tencent://message/uin=3500636638&Site=&Menu=yes)</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>3</td>
      <td>自助检测</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>other</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>102</td>
      <td>使用用户</td>
      <td>不显示</td>
      <td>图片模块</td>
      <td>use</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>103</td>
      <td>产品介绍</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>introduce</td>
   </tr>
   <tr>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
      <td>－</td>
   </tr>
   <tr>
      <td>一级</td>
      <td>104</td>
      <td>产品动画列表</td>
      <td>不显示</td>
      <td>简介模块</td>
      <td>animate</td>
   </tr>
   <tr>
      <td>二级</td>
      <td>0</td>
      <td>随时随地享受工作</td>
      <td>不显示</td>
      <td>产品模块</td>
      <td>show</td>
   </tr>
</table>

需要特殊设置标识的栏目(其它无说明的默认为0即可)
-----
* 1.一级栏目--产品，标识设置为 22
* 2.一级栏目--钉钉，标识设置为 1
* 3.二级栏目--功能，标识设置为 100
* 4.三级栏目--价格，标识设置为 99
* 5.二级栏目--官方博客，以及此栏目下的所有三级栏目，标识设置为 50
* 6.二级栏目--更新日志，以及此栏目下的所有三级栏目，标识设置为 49
* 7.二级栏目--服务条款，标识设置为 48

需要进一步进行设置的二级栏目和三级栏目
-----
* 1.一级栏目--产品动画列表，是在首页`custom_list`部分中用到的，其下面的1个二级栏目，也需要进一步进行设置。同理，需要进行描述和栏目图片的设置。
* 2.二级栏目--功能，是在 功能 这个列表页用到的，其下面的5个三级栏目，需要进一步设置描述以及栏目图片。
* 3.一级栏目--钉钉，是在 钉钉 这个列表页用到的，其下面的3个二级栏目，需要进一步设置描述以及栏目图片。

风格--Banner管理
-----
* 点击 风格--Banner管理--添加Banner，按照以下banner信息添加。
* 为空没填的项，代表清空此项的数据即可。

<table>
   <tr>
      <td>排序</td>
      <td>图片标题</td>
      <td>图片标题颜色</td>
      <td>图片描述</td>
      <td>图片描述颜色</td>
      <td>图片文字位置</td>
      <td>所属栏目</td>
   </tr>
   <tr>
      <td>0</td>
      <td>日事清  工作开始的地方</td>
      <td>#5698db</td>
      <td>阿里钉钉战略合作伙伴，数十万家企业共同选择，打造高效企业</td>
      <td>#97acc1</td>
      <td>左</td>
      <td>网站首页</td>
   </tr>
   <tr>
      <td>1</td>
      <td>覆盖工作方方面面</td>
      <td>#5698db</td>
      <td>高效之旅，远不止于此</td>
      <td#97acc1</td>
      <td>居中</td>
      <td>功能</td>
   </tr>
   <tr>
      <td>2</td>
      <td>永久免费，按需付费</td>
      <td>#5698db</td>
      <td>做最适合你的选择，用最低的价格</td>
      <td#97acc1</td>
      <td>居中</td>
      <td>价格</td>
   </tr>
   <tr>
      <td>3</td>
      <td>让工作超越距离</td>
      <td>#5698db</td>
      <td>全平台支持，只为时刻准备着的你</td>
      <td#97acc1</td>
      <td>居中</td>
      <td>下载</td>
   </tr>
   <tr>
      <td>4</td>
      <td>全方位企业管理解决方案</td>
      <td>#5698db</td>
      <td>让每个行业、每份工作都能运转自如</td>
      <td#97acc1</td>
      <td>居中</td>
      <td>解决方案</td>
   </tr>
   <tr>
      <td>5</td>
      <td>深入场景，玩转日事清</td>
      <td>#5698db</td>
      <td>完美解决办公场景中的每一个问题</td>
      <td#97acc1</td>
      <td>居中</td>
      <td>使用方法</td>
   </tr>
   <tr>
      <td>6</td>
      <td>日事清 X 钉钉</td>
      <td>#5698db</td>
      <td>保持高昂生产力</td>
      <td#97acc1</td>
      <td>居中</td>
      <td>钉钉</td>
   </tr>
   <tr>
      <td>7</td>
      <td>帮助中心</td>
      <td>#5698db</td>
      <td>获悉你想要的一切</td>
      <td#97acc1</td>
      <td>居中</td>
      <td>帮助中心</td>
   </tr>
   <tr>
      <td>8</td>
      <td>产品手册</td>
      <td>#5698db</td>
      <td>欢迎使用日事清！</td>
      <td#97acc1</td>
      <td>居中</td>
      <td>产品手册</td>
   </tr>
   <tr>
      <td>9</td>
      <td>培训课程</td>
      <td>#5698db</td>
      <td>走进企业    了解企业    服务企业</td>
      <td>#97acc1</td>
      <td>居中</td>
      <td>培训课程</td>
   </tr>
   <tr>
      <td>10</td>
      <td>官方博客</td>
      <td>#5698db</td>
      <td>记录日事清的点滴</td>
      <td>#97acc1</td>
      <td>居中</td>
      <td>官方博客</td>
   </tr>
   <tr>
      <td>11</td>
      <td>更新日志</td>
      <td>#5698db</td>
      <td>变化之间，无不洞悉</td>
      <td>#97acc1</td>
      <td>居中</td>
      <td>更新日志</td>
   </tr>
   <tr>
      <td>12</td>
      <td>日事清，工作开始的地方</td>
      <td>#5698db</td>
      <td></td>
      <td>#97acc1</td>
      <td>居中</td>
      <td>加入我们</td>
   </tr>
</table>

模板制作助手中增加的变量
-----
* 在后台系统--我的应用--模板制作助手--模板管理，找到所使用的模板，点击自定义标签，进入标签自定义页面。
* 点击添加自定义标签，依次设置 类型--变量名--默认值--标题--说明--位置。以下列表按照顺序，列出所设置的变量。
* 建议先设置分区，后设置所属分区的变量，便于查找和修改。
* 如果选择 类型 为分区，可点击 编辑 选项中的 添加子选项 进行变量的添加。下面列表中的非分区类型(简短文本，多行文本等) 变量都是在最近一个分区下添加的（向上查找所属分区）。

<table>
   <tr>
      <td>类型</td>
      <td>变量名</td>
      <td>默认值</td>
      <td>标题</td>
      <td>说明</td>
      <td>位置</td>
   </tr>
   <tr>
      <td>分区</td>
      <td>met_head</td>
      <td></td>
      <td>顶部导航</td>
      <td></td>
      <td>全局</td>
   </tr>
   <tr>
      <td>简短文本</td>
      <td>ding_url</td>
      <td>http://appcenter.dingtalk.com/detail.html?goodsCode=FW_GOODS-1000330934</td>
      <td>点击钉钉图片的跳转地址</td>
      <td></td>
      <td>全局</td>
   </tr>
   <tr>
      <td>简短文本</td>
      <td>met_dingname</td>
      <td>钉钉</td>
      <td>图片的alt显示名字</td>
      <td></td>
      <td>全局</td>
   </tr>
   <tr>
      <td>简短文本</td>
      <td>btn_text1</td>
      <td>立即体验</td>
      <td>按钮文字</td>
      <td></td>
      <td>全局</td>
   </tr>
   <tr>
      <td>分区</td>
      <td>met_price</td>
      <td></td>
      <td>价格</td>
      <td></td>
      <td>列表页</td>
   </tr>
   <tr>
      <td>简短文本</td>
      <td>price_desc_0</td>
      <td>适用于个人</td>
      <td>免费版描述</td>
      <td></td>
      <td>列表页</td>
   </tr>
   <tr>
      <td>简短文本</td>
      <td>price_desc_1</td>
      <td>适用于个人或微型团队</td>
      <td>专业版描述</td>
      <td></td>
      <td>列表页</td>
   </tr>
   <tr>
      <td>简短文本</td>
      <td>price_desc_2</td>
      <td>适用于部门或企业</td>
      <td>企业版描述</td>
      <td></td>
      <td>列表页</td>
   </tr>
   <tr>
      <td>简短文本</td>
      <td>price_desc_3</td>
      <td>适用于大中型企业</td>
      <td>旗舰版描述</td>
      <td></td>
      <td>列表页</td>
   </tr>
</table>

其它数据配置(可视化后台中的一些顶部选项配置信息)
-----
* 1.页面设置，地址栏图标---上传日事清.ico文件
* 2.风格--风格设置，模板主色调---#5b5b5b；模板副色调---#8c8c8c；模板配色调---#5698db

下面的设置和内容均指在可视化后台中某个部分的设置/内容，只有设置的表示此部分只需要点击设置，不需要点击内容；只有内容的表示此部分只需要点击内容，不需要点击设置；
-----

头部导航条设置(公共)
-----
<table>
   <tr>
      <td>导航固定时下拉时logo</td>
      <td>（自己上传logo图片）</td>
   </tr>
   <tr>
      <td>下拉展示</td>
      <td>无</td>
   </tr>
   <tr>
      <td>导航禁用下拉菜单</td>
      <td>钉钉|功能|</td>
   </tr>
   <tr>
      <td>一级导航文字颜色</td>
      <td>#97acc1</td>
   </tr>
   <tr>
      <td>导航固定时一级导航文字颜色</td>
      <td>#4a4a4a</td>
   </tr>
   <tr>
      <td>一级导航鼠标经过文字颜色</td>
      <td>#5698db</td>
   </tr>
   <tr>
      <td>区块背景色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>二、三级菜单字体颜色</td>
      <td>#4a4a4a</td>
   </tr>
   <tr>
      <td>二、三级菜单背景色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>二、三级菜单鼠标经过字体颜色</td>
      <td>#5698db</td>
   </tr>
   <tr>
      <td>二、三级菜单鼠标经过背景色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>一级导航菜单禁止跳转</td>
      <td>支持|</td>
   </tr>
</table>

首页banner部分设置
-----
* 由于banner被头部导航条覆盖，所以对banner进行单独设置的时候，需先将鼠标置于头部导航条，右键--点击隐藏掉头部导航条
<table>
   <tr>
      <td>内页无banner时头部标语的位置</td>
      <td>左</td>
   </tr>
   <tr>
      <td>按钮1文字</td>
      <td>立即进入</td>
   </tr>
   <tr>
      <td>按钮2文字</td>
      <td></td>
   </tr>
   <tr>
      <td>按钮颜色</td>
      <td>#0e6dce</td>
   </tr>
</table>

首页第二部分`partner_list`
-----
* 1.设置

<table>
   <tr>
      <td>标题</td>
      <td>深受数十万企业用户的喜爱</td>
   </tr>
   <tr>
      <td>描述</td>
      <td></td>
   </tr>
   <tr>
      <td>大尺寸电脑显示列数</td>
      <td>6</td>
   </tr>
   <tr>
      <td>普通电脑显示列数</td>
      <td>6</td>
   </tr>
   <tr>
      <td>平板显示列数</td>
      <td>3</td>
   </tr>
   <tr>
      <td>手机显示列数</td>
      <td>2</td>
   </tr>
   <tr>
      <td>栏目选择</td>
      <td>使用用户</td>
   </tr>
   <tr>
      <td>调用条数</td>
      <td>8</td>
   </tr>
   <tr>
      <td>区块背景展示方式</td>
      <td>背景色</td>
   </tr>
   <tr>
      <td>区块背景色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>缩略图宽</td>
      <td>177</td>
   </tr>
   <tr>
      <td>缩略图高</td>
      <td>94</td>
   </tr>
   <tr>
      <td>图片展示方式</td>
      <td>灰度</td>
   </tr>
   <tr>
      <td>区块标题颜色</td>
      <td>#9c9c9c</td>
   </tr>
   <tr>
      <td>区块描述颜色</td>
      <td></td>
   </tr>
   <tr>
      <td>列表图片是否有链接</td>
      <td>纯展示</td>
   </tr>
</table>

* 2.内容

* 可视化后台中点击内容--右上角选择使用用户--再点击添加内容，设置以下三项即可，按设计图上依次共需要设置八个，设置好之后，将这八个的排序按照排序值从大到小（可以是从8到1），对应设计图上的从前到后顺序(即排序数值越大越靠前)。

<table>
   <tr>
      <td>所属栏目</td>
      <td>使用用户</td>
   </tr>
   <tr>
      <td>标题</td>
      <td>中国铁塔</td>
   </tr>
   <tr>
      <td>展示图片</td>
      <td>上传对应图片即可</td>
   </tr>
</table>

首页第三部分`service_list`
-----
* 1.设置

<table>
   <tr>
      <td>标题</td>
      <td>覆盖工作方方面面，释放每个人的潜力</td>
   </tr>
   <tr>
      <td>描述</td>
      <td></td>
   </tr>
   <tr>
      <td>调用栏目</td>
      <td>产品介绍</td>
   </tr>
   <tr>
      <td>调用栏目数量</td>
      <td>9</td>
   </tr>
   <tr>
      <td>是否链接</td>
      <td>纯展示</td>
   </tr>
   <tr>
      <td>大尺寸电脑显示列数</td>
      <td>3</td>
   </tr>
   <tr>
      <td>普通电脑显示列数</td>
      <td>3</td>
   </tr>
   <tr>
      <td>平板显示列数</td>
      <td>1</td>
   </tr>
   <tr>
      <td>手机显示列数</td>
      <td>1</td>
   </tr>
   <tr>
      <td>区块背景方式</td>
      <td>背景色</td>
   </tr>
   <tr>
      <td>标题颜色</td>
      <td>#5b5b5b</td>
   </tr>
   <tr>
      <td>描述颜色</td>
      <td></td>
   </tr>
</table>

* 2.内容
* 点击添加内容，设置以下几项
* 下面以日程安排为例，其它八项同理按设计图上一一设置添加即可
<table>
   <tr>
      <td>所属栏目</td>
      <td>产品介绍</td>
   </tr>
   <tr>
      <td>标题</td>
      <td>日程安排</td>
   </tr>
   <tr>
      <td>展示图片</td>
      <td>上传对应图片即可</td>
   </tr>
   <tr>
      <td>详细内容</td>
      <td>工作任务分轻重缓急逐一破，日、周、月视图任意切换</td>
   </tr>
   <tr>
      <td>其他设置--链接至</td>
      <td>写入对应链接即可</td>
   </tr>
</table>

首页第四部分`custom_list`
-----
* 1.设置
<table>
   <tr>
      <td>栏目选择</td>
      <td>产品动画列表</td>
   </tr>
   <tr>
      <td>是否链接</td>
      <td>超链接</td>
   </tr>
   <tr>
      <td>查看文字</td>
      <td>开始使用</td>
   </tr>
   <tr>
      <td>调用条数</td>
      <td>1</td>
   </tr>
   <tr>
      <td>区块背景展示方式</td>
      <td>背景色</td>
   </tr>
   <tr>
      <td>奇块背景色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>偶块背景色</td>
      <td>#f5f8fa</td>
   </tr>
   <tr>
      <td>区块标题颜色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>区块副描述</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>超链接颜色</td>
      <td>#ffffff</td>
   </tr>
</table>

首页第七部分`contact`
-----
* 设置
<table>
   <tr>
      <td>标题</td>
      <td>从此，拥有更好的前程</td>
   </tr>
   <tr>
      <td>描述</td>
      <td></td>
   </tr>
   <tr>
      <td>展示内容</td>
      <td>按钮链接</td>
   </tr>
   <tr>
      <td>按钮文字</td>
      <td>立即体验</td>
   </tr>
   <tr>
      <td>区块背景展示方式</td>
      <td>背景图</td>
   </tr>
   <tr>
      <td>区块背景色</td>
      <td>#f9fcff</td>
   </tr>
   <tr>
      <td>区块标题颜色</td>
      <td>#5b5b5b</td>
   </tr>
   <tr>
      <td>区块背景图</td>
      <td>上传背景图即可</td>
   </tr>
   <tr>
      <td>区块描述颜色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>按钮颜色</td>
      <td>#0e6dce</td>
   </tr>
   <tr>
      <td>按钮文字颜色</td>
      <td>#ffffff</td>
   </tr>
</table>

首页第八部分友链`link`
-----
* 1.设置
<table>
   <tr>
      <td>友情链接标题</td>
      <td>合作伙伴</td>
   </tr>
   <tr>
      <td>背景色</td>
      <td></td>
   </tr>
   <tr>
      <td>标题颜色</td>
      <td>#333333</td>
   </tr>
   <tr>
      <td>描述颜色</td>
      <td></td>
   </tr>
   <tr>
      <td>鼠标经过颜色</td>
      <td></td>
   </tr>
   <tr>
      <td>线框颜色</td>
      <td></td>
   </tr>
</table>

底部导航栏设置(公共)
-----
* 设置

<table>
   <tr>
      <td>服务热线</td>
      <td></td>
   </tr>
   <tr>
      <td>描述文字</td>
      <td></td>
   </tr>
   <tr>
      <td>微信</td>
      <td>关闭</td>
   </tr>
   <tr>
      <td>微信二维码</td>
      <td></td>
   </tr>
   <tr>
      <td>QQ</td>
      <td>关闭</td>
   </tr>
   <tr>
      <td>新浪</td>
      <td>关闭</td>
   </tr>
   <tr>
      <td>邮箱</td>
      <td>关闭</td>
   </tr>
   <tr>
      <td>显示栏目数量</td>
      <td>4</td>
   </tr>
   <tr>
      <td>鼠标经过颜色</td>
      <td></td>
   </tr>
   <tr>
      <td>当前栏目颜色</td>
      <td>#3d3d3d</td>
   </tr>
   <tr>
      <td>区块背景色</td>
      <td></td>
   </tr>
   <tr>
      <td>子栏目字体颜色</td>
      <td>#8c8c8c</td>
   </tr>
   <tr>
      <td>边框线条颜色</td>
      <td>#ffffff</td>
   </tr>
</table>

功能页`product_list_page`设置
-----
* 设置
<table>
   <tr>
      <td>区块背景色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>标题颜色</td>
      <td>#3d3d3d</td>
   </tr>
   <tr>
      <td>描述颜色</td>
      <td>#8c8c8c</td>
   </tr>
   <tr>
      <td>区块背景展示方式</td>
      <td>背景色</td>
   </tr>
   <tr>
      <td>奇块背景色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>偶块背景色</td>
      <td>#f9fcff</td>
   </tr>
</table>

价格页`product_list_page`内容
-----
* 内容
* 点击添加内容，设置以下几项
<table>
   <tr>
      <td>所属栏目</td>
      <td>价格</td>
   </tr>
   <tr>
      <td>标题（名称）</td>
      <td>免费版</td>
   </tr>
   <tr>
      <td>展示图片</td>
      <td></td>
   </tr>
   <tr>
      <td>参数管理</td>
      <td>按下面表格新增参数</td>
   </tr>
</table>

* 然后是 参数管理 选项，参照下面表格

<table>
   <tr>
      <td>所属栏目</td>
      <td>价格</td>
   </tr>
   <tr>
      <td>标题（名称）</td>
      <td>免费版</td>
   </tr>
   <tr>
      <td>展示图片</td>
      <td></td>
   </tr>
   <tr>
      <td>参数管理</td>
      <td>按下面表格新增参数</td>
   </tr>
</table>

* 接着 返回到 内容设置页面，点击参数管理后面的 刷新 按钮，就可以看到刚才添加的参数了，依次按设计图上文字设置，注意价格一栏由于下角标的特殊显示，其参数需要填充为html形式，如免费版中是`0<sub>元/年</sub>`
* 按照以上设置，依次设置免费版，专业版，企业版，旗舰版参数
* 其中专业版，企业版，旗舰版的存储空间和文件大小一栏，同样由于一些文字的特殊样式显示，其参数也需要填充为html形式，如专业版中存储空间为`<span>50G</span>储存空间`，文件大小为`上传单个文件最大支持<span>1G</span>`。企业版和旗舰版同理。

价格页`img_list_page`
-----
* 这部分的设置显示比较特殊，需从 栏目管理--价格--设置--栏目标题，设置为'谁在用日事清？'，就是此部分展示的标题；所以修改也需要到这里修改。图片的展示按照设计图上，在可视化后台中这部分的对应图片点击上传即可。

价格页`news_list_page`
-----
* 同样，这部分的标题也需要从 栏目管理--价格--设置--栏目修饰名称，设置为'常见问题'；
* 然后点击 内容，右上角选择 产品--价格--三级栏目，再添加内容，只需要设置标题(名称)和详细信息即可，这两个分别对应页面中的问题标题和答案。
* 注意：点击 内容，选择 产品--价格--三级栏目 后，能看到四个已经存在的 免费版，专业版，企业版，旗舰版 列表，继续添加内容即可，只不过最后添加完问题以后，将列表排序更新正确即可。即前四个是价格详情中展示需要的，从第5个开始，是展示在此部分中的。

下载页`download_list_page`内容
-----
* 1.设置
<table>
   <tr>
      <td>标题颜色</td>
      <td>#000000</td>
   </tr>
   <tr>
      <td>鼠标经过颜色和按钮颜色及当前页的颜色</td>
      <td>#5698db</td>
   </tr>
</table>

* 2.内容
* 点击 内容，右上角选择 下载，然后点击 添加内容，按照下面进行设置即可
* 在弹窗的添加内容框中，先找到点击参数管理，新增两个参数，Windows 32位---所属栏目选择下载---排序0；Windows 64位---所属栏目选择下载---排序1，然后保存，回到内容设置弹窗页面，点击 刷新 按钮，即可看到参数设置中多了两个选项 Windows 32位 和 Windows 64位.
* 然后只在 Windows 下载 中设置这两项参数，其它下载中这两项参数值为空
* Windows 下载 中：
* 1.Windows 32位---https://rishiqing-client.oss-cn-shenzhen.aliyuncs.com/pc-autoupdate/win/ia32/release/rishiqing-win-ia32-release-3.1.6.exe
* 2.Windows 64位---https://rishiqing-client.oss-cn-shenzhen.aliyuncs.com/pc-autoupdate/win/x64/release/rishiqing-win-x64-release-3.1.6.exe

<table>
   <tr>
      <td>所属栏目</td>
      <td>标题</td>
      <td>下载地址</td>
      <td>详细内容</td>
   </tr>
   <tr>
      <td>下载</td>
      <td>Windows 下载</td>
      <td>void(0)</td>
      <td>上传图片对应要展示的图片即可</td>
   </tr>
   <tr>
      <td>下载</td>
      <td>MAC 下载</td>
      <td colspan="2">https://rishiqing-client.oss-cn-shenzhen.aliyuncs.com/pc-autoupdate/mac/release/rishiqing-mac-release-3.1.4.dmg</td>
   </tr>
   <tr>
      <td>下载</td>
      <td>网页版</td>
      <td></td>
      <td>上传图片对应要展示的图片即可</td>
   </tr>
   <tr>
      <td>下载</td>
      <td>Android 下载</td>
      <td>void(0)</td>
      <td>上传图片对应要展示的图片即可</td>
   </tr>
   <tr>
      <td>下载</td>
      <td>iOS 下载</td>
      <td>void(0)</td>
      <td>上传图片对应要展示的图片即可</td>
   </tr>
   <tr>
      <td>下载</td>
      <td>微信公众号</td>
      <td>void(0)</td>
      <td>上传图片对应要展示的图片即可</td>
   </tr>
</table>

官方博客页`news_list_page`
-----
1.设置
<table>
   <tr>
      <td>列表展示</td>
      <td>图文</td>
   </tr>
   <tr>
      <td>新闻头条</td>
      <td>关闭</td>
   </tr>
   <tr>
      <td>区块背景色</td>
      <td>#ffffff</td>
   </tr>
   <tr>
      <td>标题字体颜色</td>
      <td>#3d3d3d</td>
   </tr>
   <tr>
      <td>描述字体颜色</td>
      <td>#8c8c8c</td>
   </tr>
   <tr>
      <td>点缀颜色</td>
      <td>#b1b1b1</td>
   </tr>
</table>

2.内容
* 点击 内容，右上角选择 官方博客--官方公告，然后点击 添加内容，按照文章标题--详细内容--封面图上传设置即可
* 依次按上面操作给几个部分添加文章

3.点击任何一篇博客，进入博客详情页也可进行单独具体设置和内容

更新日志页`news_list_page`
* 同上面 官方博客 操作

自定义ui组件
-----

* 自定义ui组件，有几个需要关注的点
   1. ui.json文件，这个文件非常重要，记录着哪些页面用到了哪些ui组件，对应的配置信息，每次在安装模板的时候，系统都会解析这个文件，把ui组件的默认配置信息给写的到数据库
   2. id, 这个id是指一个页面里，使用的一个组件，对应的id
   3. page, 是页面的名称，如`./agency.php`这个文件，里面有个page属性，这个值需要和php文件名一样，这样才能正常读取和解析页面下面的ui组件和配置
   4. config.json文件，这个文件在ui组件的文件夹下，如`ui/contact/met_16_3/config.json`，这个文件目前我了解到的是和组件的css和js代码的打包有很大关系
   5. `met_`开头的一个值，它和组件名一起决定组件的唯一性

* 在使用自定义组件的时候，需要确定id，需要根据ui.json里用到的id来确定一个还没有用到的id，保证这个新id在ui.json里的唯一性

* 确定组件需要哪些参数的时候，可以参考ui.json里已有的一些参数，来写新的参数
