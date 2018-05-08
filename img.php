<?php defined('IN_MET') or exit('No permission'); ?>
<include file="head.php" page="img"/>
<!-- 培训课程 -->
<if value="$data['foldername'] eq 'img'">
<ui name="img_list_page" style="met_16_1" id="11" />
<ui name="service_list" style="met_16_6" id="51" />
</if>
<!-- 帮助中心 -->
<if value="$data['foldername'] eq 'help'">
<ui name="img_list_page" style="met_16_1" id="53" />
<ui name="img_list_page" style="met_16_1" id="54" />
<ui name="img_list_page" style="met_16_1" id="55" />
</if>
<!-- 使用技巧 -->
<if value="$data['foldername'] eq 'skill'">
<ui name="subcolumn_nav" style="met_16_1" id="21" />
<ui name="img_list_page" style="met_16_1" id="11" />
</if>
<include file="foot.php" />