<?php defined('IN_MET') or exit('No permission'); ?>
<include file="head.php" page="show"/>
<if value="$data['foldername'] eq 'about'">
  <ui name="subcolumn_nav" style="met_16_2" id="56" />
<else/>
<ui name="subcolumn_nav" style="met_16_1" id="18" />
</if>
<ui name="show" style="met_16_1" id="9" />
<include file="foot.php" />