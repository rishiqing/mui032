<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss met-index-body text-xs-center <if value="$ui['bg_type'] eq 1">bgcolor<else/>bgpic</if>" m-id='{$ui.mid}'>
	<div class="container">
		<if value="$ui['title']">
			<h2>{$ui.title}</h2>
		</if>
		<ul class="
			<if value="$ui['column_xs'] eq 1">
			block-xs-100
			<else/>
			blocks-xs-{$ui.column_xs}
			</if>
			<if value="$data['classnow'] eq 10001">index-page</if>
		 	blocks-md-{$ui.column_md} blocks-lg-{$ui.column_lg} blocks-xxl-{$ui.column_xxl} index-service-list">
			<tag action='category' cid="$ui['id']" type='current'>
				<tag action='list' cid="$m['id']" num="$ui['num']">
					<if value="$v['_index'] lt $ui[num]">
						<li>
							<!-- <if value="$ui['link_ok']">
							<a href="{$v.url}" title="{$v.title}" {$v.urlnew}>
							</if> -->
								<div class="service_img pull-xs-left">
									<img data-original="{$v.imgurl}" alt="{$v.title}">
			          </div>
			          <div class="service_des pull-xs-left">
			            <h3>{$v.title}</h3>
									<p>{$v.description}</p>
									<if value="$data['classnow'] eq 10001">
						      <a href="{$v.url}">{$v.ctitle}</a>
									</if>
			          </div>
							<!-- <if value="$ui['link_ok']">
							</a>
							</if> -->
						</li>
					</if>
				</tag>
			</tag>
		</ul>
	</div>
</div>