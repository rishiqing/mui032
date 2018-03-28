<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved.

defined('IN_MET') or exit('No permission');

define ('TEM_INSTALL_VER', '1.000');

class install {
	function dosql(){
		global $_M;		
		
$sql = array (
  0 => 'pos =\'1\',no_order=\'1\',type=\'1\',style=\'3\',selectd=\'\',name =\'banner\',value=\'\',defaultvalue=\'\',valueinfo =\'广告栏\',tips=\'\',bigclass =\'0\'',
  1 => 'pos =\'1\',no_order=\'2\',type=\'2\',style=\'3\',selectd=\'\',name =\'banner_img\',value=\'/metinfo/upload/201803/1521538015.png\',defaultvalue=\'/metinfo/upload/201803/1521538015.png\',valueinfo =\'日事清\',tips=\'首页banner大图\',bigclass =\'115\'',
  2 => 'pos =\'0\',no_order=\'3\',type=\'1\',style=\'3\',selectd=\'\',name =\'global\',value=\'\',defaultvalue=\'\',valueinfo =\'全局参数\',tips=\'\',bigclass =\'0\'',
  3 => 'pos =\'1\',no_order=\'3\',type=\'1\',style=\'3\',selectd=\'\',name =\'service_list\',value=\'\',defaultvalue=\'\',valueinfo =\'服务列表\',tips=\'\',bigclass =\'0\'',
  4 => 'pos =\'0\',no_order=\'4\',type=\'9\',style=\'3\',selectd=\'\',name =\'play_btncolor\',value=\'#0E6DCE\',defaultvalue=\'#0E6DCE\',valueinfo =\'播放按钮颜色\',tips=\'点击播放视频的按钮颜色\',bigclass =\'102\'',
  5 => 'pos =\'1\',no_order=\'4\',type=\'2\',style=\'3\',selectd=\'\',name =\'know_url\',value=\'http://rishiqing\',defaultvalue=\'http://rishiqing\',valueinfo =\'了解详情\',tips=\'首页service_list模块链接地址\',bigclass =\'117\'',
  6 => 'pos =\'0\',no_order=\'5\',type=\'1\',style=\'3\',selectd=\'\',name =\'met_head\',value=\'\',defaultvalue=\'\',valueinfo =\'顶部导航\',tips=\'\',bigclass =\'0\'',
  7 => 'pos =\'1\',no_order=\'5\',type=\'2\',style=\'3\',selectd=\'\',name =\'know_text\',value=\'了解详情  >\',defaultvalue=\'了解详情  >\',valueinfo =\'了解详情\',tips=\'首页service_list模块链接文字\',bigclass =\'117\'',
  8 => 'pos =\'0\',no_order=\'6\',type=\'2\',style=\'3\',selectd=\'\',name =\'met_dinglogo\',value=\'/metinfo/upload/201803/1521540762.png\',defaultvalue=\'/metinfo/upload/201803/1521540762.png\',valueinfo =\'钉钉\',tips=\'钉钉图片地址\',bigclass =\'105\'',
  9 => 'pos =\'1\',no_order=\'6\',type=\'1\',style=\'3\',selectd=\'\',name =\'img_list\',value=\'\',defaultvalue=\'\',valueinfo =\'解决方案列表\',tips=\'\',bigclass =\'0\'',
  10 => 'pos =\'0\',no_order=\'7\',type=\'2\',style=\'3\',selectd=\'\',name =\'ding_url\',value=\'http://appcenter.dingtalk.com/detail.html?goodsCode=FW_GOODS-1000330934\',defaultvalue=\'http://appcenter.dingtalk.com/detail.html?goodsCode=FW_GOODS-1000330934\',valueinfo =\'钉钉\',tips=\'点击钉钉图片的跳转地址\',bigclass =\'105\'',
  11 => 'pos =\'1\',no_order=\'7\',type=\'2\',style=\'3\',selectd=\'\',name =\'solution_title\',value=\'为各行各业提供全方位的解决方案\',defaultvalue=\'为各行各业提供全方位的解决方案\',valueinfo =\'标题\',tips=\'\',bigclass =\'0\'',
  12 => 'pos =\'0\',no_order=\'8\',type=\'2\',style=\'3\',selectd=\'\',name =\'met_dingname\',value=\'钉钉\',defaultvalue=\'钉钉\',valueinfo =\'钉钉\',tips=\'图片的alt显示名字\',bigclass =\'105\'',
  13 => 'pos =\'0\',no_order=\'9\',type=\'1\',style=\'3\',selectd=\'\',name =\'banner\',value=\'\',defaultvalue=\'\',valueinfo =\'广告栏\',tips=\'\',bigclass =\'0\'',
  14 => 'pos =\'0\',no_order=\'10\',type=\'1\',style=\'3\',selectd=\'\',name =\'met_foot\',value=\'\',defaultvalue=\'\',valueinfo =\'底部导航\',tips=\'\',bigclass =\'0\'',
  15 => 'pos =\'0\',no_order=\'11\',type=\'1\',style=\'3\',selectd=\'\',name =\'service_list\',value=\'\',defaultvalue=\'\',valueinfo =\'服务列表\',tips=\'\',bigclass =\'0\'',
);
$no='mui032';
$devices='0';
		$re['sql'] = $sql;
		$re['no'] = $no;
		$re['devices'] = $devices;
		return $re;
	}
}

# This program is an open source system, commercial use, please consciously to purchase commercial license.
# Copyright (C) MetInfo Co., Ltd. (http://www.metinfo.cn). All rights reserved.
?>