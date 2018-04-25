<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss" m-id='{$ui.mid}' m-type='nocontent'>
  <h3 class="title">{$ui.title}</h3>
  <div class="detail">
    <div class="name">
      <i class="fa fa-weixin"></i>
      <span>{$ui.name}</span>
    </div>
    <div class="phone">
      <i class="fa fa-weixin"></i>
      <span>{$ui.phone}</span>
    </div>
    <div class="wx">
      <i class="fa fa-weixin"></i>
      <span>{$ui.wx}</span>
    </div>
  </div>
  <div class="operate">
    <a
      href="{$ui.button_url}"
      title="{$ui.button_name}"
      target="_blank">{$ui.button_name}</a>
  </div>
</div>