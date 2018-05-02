<?php defined('IN_MET') or exit('No permission'); ?>
<if value="$data['foldername'] eq 'about'">
<div class="product-manual m-b-20">
  <div class="container">
</if>
<tag action='category' cid="$data[releclass1]" type='son'>
<if value="$m['_first']">
<div class="$uicss" m-id='{$ui.mid}' m-type='nocontent'>
	<ul class="$uicss-ul p-t-10 p-b-10">
		<tag action='category' cid="$data[releclass1]">
      <tag action='category' cid="$m['id']" type='son' class="active">
        <if value="$m['sub']">
          <tag action='category' cid="$m['id']" type='son' class="active">
          <if value="$data['bigclass'] eq $m['bigclass'] || $data['classnow'] eq $m['bigclass']">
          <li class="p-t-10 p-b-10 <if value="$m['index_num'] eq 1">sub-title</if>">
            <a href="{$m.url}" title="{$m.name}" class='{$m.class}'>{$m.name}</a>
          </li>
          </if>
          </tag>
        </if>
      </tag>
		</tag>
	</ul>
</div>
</if>
</tag>