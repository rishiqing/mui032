<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss" m-id='{$ui.mid}' m-type='nocontent'>
  <h3 class="title m-t-0">{$ui.title}</h3>
  <div class="detail">
    <div class="name">
      <div class="vertical-align-middle">
        <img src="{$ui.name_url}" alt="{$ui.name}">
      </div>
      <span>{$ui.name}</span>
    </div>
    <div class="phone">
      <div class="vertical-align-middle">
        <img src="{$ui.phone_url}" alt="{$ui.phone}">
      </div>
      <span>{$ui.phone}</span>
    </div>
    <div class="wx">
      <div class="vertical-align-middle" alt="{$ui.wx}">
        <img src="{$ui.wx_url}">
      </div>
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