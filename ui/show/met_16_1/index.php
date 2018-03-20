<?php defined('IN_MET') or exit('No permission'); ?>
<article class="$uicss met-show-body panel panel-body m-b-0 <if value="$ui['bg_type']">bgcolor<else/>bgpic</if>" boxmh-mh m-id='{$ui.mid}'>
<if value="$ui['container']">
<div class="container-fluid">
<else/>
<div class="container">
</if>
	<section class="met-editor clearfix">
		<if value="$data['content']">
		{$data.content}
		<else/>
		<div class='h-100 text-xs-center font-size-20 vertical-align'>{$lang.nodata}</div>
		</if>
	</section>
</div>
</article>