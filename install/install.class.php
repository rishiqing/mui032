<?php
# MetInfo Enterprise Content Management System 
# Copyright (C) MetInfo Co.,Ltd (http://www.metinfo.cn). All rights reserved.

defined('IN_MET') or exit('No permission');

define ('TEM_INSTALL_VER', '1.000');

class install {
	function dosql(){
		global $_M;		
		
$sql = array (
  0 => 'pos =\'0\',no_order=\'1\',type=\'2\',style=\'3\',selectd=\'\',name =\'met_dinglogo\',value=\'/metinfo/upload/201803/1521540762.png\',defaultvalue=\'/metinfo/upload/201803/1521540762.png\',valueinfo =\'钉钉\',tips=\'头部导航栏钉钉图片地址\',bigclass =\'0\'',
  1 => 'pos =\'0\',no_order=\'2\',type=\'2\',style=\'3\',selectd=\'\',name =\'ding_url\',value=\'http://appcenter.dingtalk.com/detail.html?goodsCode=FW_GOODS-1000330934\',defaultvalue=\'http://appcenter.dingtalk.com/detail.html?goodsCode=FW_GOODS-1000330934\',valueinfo =\'钉钉\',tips=\'点击钉钉图片的跳转地址\',bigclass =\'0\'',
  2 => 'pos =\'0\',no_order=\'3\',type=\'2\',style=\'3\',selectd=\'\',name =\'met_dingname\',value=\'钉钉\',defaultvalue=\'钉钉\',valueinfo =\'钉钉\',tips=\'图片的alt显示名字\',bigclass =\'0\'',
  3 => 'pos =\'1\',no_order=\'4\',type=\'2\',style=\'3\',selectd=\'\',name =\'banner_img\',value=\'/metinfo/upload/201803/1521538015.png\',defaultvalue=\'/metinfo/upload/201803/1521538015.png\',valueinfo =\'日事清\',tips=\'首页banner大图\',bigclass =\'0\'',
  4 => 'pos =\'0\',no_order=\'4\',type=\'2\',style=\'3\',selectd=\'\',name =\'know_url\',value=\'http://rishiiqng\',defaultvalue=\'http://rishiiqng\',valueinfo =\'了解详情\',tips=\'首页service_list模块链接地址\',bigclass =\'0\'',
  5 => 'pos =\'0\',no_order=\'5\',type=\'2\',style=\'3\',selectd=\'\',name =\'know_text\',value=\'了解详情  >\',defaultvalue=\'了解详情  >\',valueinfo =\'了解详情\',tips=\'首页service_list模块链接文字\',bigclass =\'0\'',
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