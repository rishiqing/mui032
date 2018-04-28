<?php defined('IN_MET') or exit('No permission'); ?>
<include file="head.php" page="news"/>
<if value="$data['foldername'] neq 'faq'">
<ui name="subcolumn_nav" style="met_16_1" id="25" />
</if>
<ui name="news_list_page" style="met_16_2" id="20" />
<include file="foot.php" />