<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss" m-id='{$ui.mid}' m-type='nocontent'>
	<div class="container">
		<div class="time-manage">
      <div class="vertical-align-middle m-t-10">
        <img data-original="{$ui.imgurl}" alt="{$ui.title}">
      </div>
      <div class="detail">
        <h3 class="m-t-10">{$ui.title}</h3>
        <p class="m-b-0">{$ui.desc}</p>
      </div>
      <a href="{$ui.link_url}" class="m-t-10 text-xs-center" title="{$ui.link_name}" target="_blank">{$ui.link_name}</a>
    </div>
	</div>
</div>