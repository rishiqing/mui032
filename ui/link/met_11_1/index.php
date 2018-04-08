<?php defined('IN_MET') or exit('No permission'); ?>
<tag action='link.list'></tag>
<if value="$sub">
<div class="$uicss" m-id='{$ui.mid}' m-type="link">
    <div class="container">
        <h2>{$ui.footlink_title}</h2>
        <ul class="breadcrumb p-0 link-img m-0">
            <tag action='link.list'>
            <li class="col-lg-3 col-md-3 col-xs-6">
                <a href="{$v.weburl}" title="{$v.webname}" target="_blank">
                <if value="$v.link_type eq 1">
                    <img data-original="{$v.weblogo}" alt="{$v.webname}" height='40'>
                <else/>
                    <span>{$v.webname}</span>
                </if>
                </a>
            </li>
            </tag>
        </ul>
    </div>
    <div class="cutting-line"></div>
</div>
</if>