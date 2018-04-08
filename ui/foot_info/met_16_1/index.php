<?php defined('IN_MET') or exit('No permission'); ?>
<footer class='$uicss met-foot ' m-id='{$ui.mid}' m-type='foot'>
	<div class="container text-xs-center">
		<if value="$c['met_footright'] || $c['met_footstat']">
		<p>{$c.met_footright}</p>
		</if>
		<if value="$c['met_footaddress']">
		<p>{$c.met_footaddress}</p>
		</if>
		<if value="$c['met_foottel']">
		<p>{$c.met_foottel}</p>
		</if>
		<if value="$c['met_footother']">
			<p>{$c.met_footother}</p>
		</if>
		<!-- <ul class="met-langlist p-0">
		<if value="$c['met_lang_mark'] && $ui[langlist_ok]">
		<li class="vertical-align m-x-5" m-id='lang' m-type='lang'>
			<div class="inline-block dropup">
				<lang>
				<if value="$v['_first']">
				<button type="button" data-toggle="dropdown" class="btn btn-outline btn-default btn-squared dropdown-toggle btn-lang">
					<if value="$ui['langlist_icon_ok']">
					<span class="flag-icon flag-icon-{$v.iconname}"></span>
					</if>
					<span >{$v.name}</span>
				</button>
				</if>
				</lang>
				<ul class="dropdown-menu dropdown-menu-right animate animate-reverse" id="met-langlist-dropdown" role="menu">
					<lang>
					<a href="{$v.met_weburl}" title="{$v.name}" class='dropdown-item'>
						<if value="$ui['langlist_icon_ok']">
						<span class="flag-icon flag-icon-{$v.iconname}"></span>
						</if>
						{$v.name}
					</a>
					</lang>
				</ul>
			</div>
		</li>
		</if>
		<if value="$c['met_ch_lang'] && $ui['simplified']">
	        <if value="$data[lang] eq cn">
	            <li class="met-s2t  vertical-align nav-item m-x-5" m-id="lang" m-type="lang">
	            <div class="inline-block">
		            <button type="button" class="btn btn-outline btn-default btn-squared btn-lang btn-cntotc" data-tolang='tc'>繁体</button>
		            <elseif value="$data[lang] eq tc"/>
		            <button type="button" class="btn btn-outline btn-default btn-squared btn-lang btn-cntotc" data-tolang='cn'>简体</button>
	            </div>
	        </li>
	        </if>
	    </if>
	    </ul> -->
	</div>
</footer>