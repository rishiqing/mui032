<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss met-index-body text-xs-center <if value="$ui['bg_type'] eq 1">bgcolor<else/>bgpic</if>" m-id='{$ui.mid}'>
	<div class="container">
		<if value="$ui['title']">
			<h2 class="invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false">{$ui.title}</h2>
		</if>
		<!-- <if value="$ui['desc']">
			<p class="desc m-b-0 font-weight-300 invisible" data-plugin="appear" data-animate="fade" data-repeat="false">{$ui.desc}</p>
		</if> -->
		<ul class="
			<if value="$ui['column_xs'] eq 1">
			block-xs-100
			<else/>
			blocks-xs-{$ui.column_xs}
			</if>
			<if value="$data['classnow'] eq 10001">index-page</if>
		 	blocks-md-{$ui.column_md} blocks-lg-{$ui.column_lg} blocks-xxl-{$ui.column_xxl} index-service-list">
			<tag action='category' cid="$ui['id']" type='son'>
			<if value="$m['_index'] lt $ui[num]">
				<li class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false">
					<if value="$ui['link_ok']">
					<a href="{$m.url}" title="{$m.name}" {$m.urlnew}>
					</if>
						<div class="service_img pull-xs-left">
							<img data-original="{$m.columnimg}" alt="{$m.name}">
	          </div>
	          <div class="service_des pull-xs-left">
	            <h3>{$m.name}</h3>
							<p>{$m.description}</p>
							<if value="$data['classnow'] eq 10001">
							<a href="{$lang.know_url}">{$lang.know_text}</a>
							</if>
	          </div>
					<if value="$ui['link_ok']">
					</a>
					</if>
				</li>
			</if>
			</tag>
		</ul>
	</div>
</div>