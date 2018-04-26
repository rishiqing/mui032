<?php defined('IN_MET') or exit('No permission'); ?>
<tag action='category' cid="$data[releclass1]" type='son'>
<if value="$m['_first']">
<div class="$uicss" m-id='{$ui.mid}' m-type='nocontent'>
	<div class="container">
		<div class="subcolumn-nav text-xs-center">
			<ul class="$uicss-ul m-b-0 p-y-30 ulstyle <if value="$data['index_num'] eq 50">left</if>">
				<tag action='category' cid="$data[releclass1]">
				<if value="$data['index_num'] eq 50 || $data['index_num'] eq 49 || $data['index_num'] eq 47">
					<tag action='category' cid="$m['id']" type='son' class="active">
						<if value="$m['sub']">
							<tag action='category' cid="$m['id']" type='son' class="active">
							<if value="$data['bigclass'] eq $m['bigclass'] || $data['classnow'] eq $m['bigclass']">
							<li>
								<a href="{$m.url}" title="{$m.name}" class='{$m.class}'>{$m.name}</a>
							</li>
							</if>
							</tag>
						</if>
					</tag>
				<else/>
				<if value="$m[module] neq 1">
					<li>
						<a href="{$m.url}"  title="{$ui.all}"
						<if value="$data['classnow'] eq $m['id']">
						class="active"
						</if>
						>{$ui.all}</a>
					</li>
				<else/>
					<if value="$m[isshow]">
						<li>
							<a href="{$m.url}"  title="{$m.name}"
							<if value="$data['classnow'] eq $m['id']">
							class="active"
							</if>
							>{$m.name}</a>
						</li>
					</if>
				</if>
				</if>
				<if value="$data['index_num'] neq 50">
				<tag action='category' cid="$m['id']" type='son' class="active">
				<if value="$m['sub']">
				<li>
					<a href="{$m.url}" title="{$m.name}" class="{$m.class}">{$m.name}</a>
					<if value="$m['id'] eq $data['class2']">
					<div class="sub-list">
						<if value="$m['module'] neq 1">
							<div>
								<a href="{$m.url}"  title="{$ui.all}" class='{$m.class}'>{$ui.all}</a>
							</div>
						</if>
						<tag action='category' cid="$m['id']" type='son' class="active">
						<div>
						<a href="{$m.url}" title="{$m.name}" class='{$m.class}'>{$m.name}</a>
						</div>
						</tag>
					</div>
					</if>
				</li>
				<else/>
				<li>
					<a href="{$m.url}" title="{$m.name}" class='{$m.class}'>{$m.name}</a>
				</li>
				</if>
				</tag>
				</if>
				</tag>
			</ul>
		</div>
		<if value="$ui['product_search'] && $data['module'] eq 3">
		<tag action='search.option' type="page" order="1"></tag>
		<div class="product-search">
			<form method="post" action="{$search[form][action]}">
				<div class="form-group">
					<div class="input-search">
						<button type="submit" class="input-search-btn">
							<i class="icon wb-search" aria-hidden="true"></i>
						</button>
						<input
							type="text"
							class="form-control"
							name="content"
							value=""
							placeholder="{$ui.product_placeholder}"
						>
					</div>
				</div>
			</form>
		</div>
		</if>
	</div>
</div>
</if>
</tag>