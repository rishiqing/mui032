<?php defined('IN_MET') or exit('No permission'); ?>
<include file="head.php" page="product"/>
<ui name="product_list_page" style="met_16_2" id="10" />
<!-- 功能页 目录名'function' 需要引入cantact-->
<if value="$data['foldername'] eq 'function' ">
<ui name="contact" style="met_16_2" id="17" />
</if>
<!-- 价格页 目录名'price' 需要引入img_list_page-->
<if value="$data['foldername'] eq 'price' ">
<ui name="img_list_page" style="met_16_1" id="11" />
<ui name="news_list_page" style="met_16_2" id="20" />
</if>
<include file="foot.php" />