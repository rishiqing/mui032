<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss" m-id='{$ui.mid}' m-type='foot_nav'>
	<div class="container">
		<div class="row mob-masonry">
			<tag action='category' type='foot'>
			<if value="$m['_index'] lt 4">
			<div class="col-lg-3 col-md-3 col-xs-6 list masonry-item">
				<h4 class='font-size-20 m-t-0' title="{$m.name}">{$m.name}</h4>
				<if value="$m['sub']">
				<ul class='ulstyle m-b-0'>
					<tag action='category' cid="$m['id']" type='son' num={$ui.num}>
					<if value="$m['index_num'] eq 47 && $m['sub']">
							<?php
                 $urlnew = $m['urlnew'];
                 $name = $m['name'];
              ?>
              <tag action='category' cid="$m['id']" type='son'>
	              <if value="$m['_index'] eq 0">
	              <?php $firstSubUrl = $m['url']; ?>
	              </if>
              </tag>
              <li>
              	<a href="<?php echo $firstSubUrl; ?>" <?php echo $urlnew.'title='.$name.'>'.$name.'</a>'; ?>
              </li>
					<else/>
					<li>
						<a href="{$m.url}" {$m.urlnew} title="{$m.name}">{$m.name}</a>
					</li>
					</if>
					</tag>
				</ul>
				</if>
			</div>
			</if>
			</tag>
			<!-- <div class="col-lg-3 col-md-12 col-xs-12 info masonry-item">
				<if value="$ui['footinfo_tel']">
				<em class='font-size-26'><a href="tel:{$ui.footinfo_tel}" title="">{$ui.footinfo_tel}</a></em>
				</if>
				<if value="$ui['footinfo_dsc']">
				<p>{$ui.footinfo_dsc}</p>
				</if>
				<if value="$ui['footinfo_wx_ok']">
				<a id="met-weixin" data-plugin="webuiPopover" data-trigger="hover" data-animation="pop" data-placement='top' data-width='155' data-padding='0' data-content="<div class='text-xs-center'>
					<img src='{$ui.footinfo_wx}' alt='{$c.met_webname}' width='150' height='150' id='met-weixin-img'></div>
				">
					<i class="fa fa-weixin light-green-700"></i>
				</a>
				</if>
				<if value="$ui['footinfo_qq_ok']">
				<a
				<if value="$ui['footinfo_qq_type'] eq 1">
    			href="http://wpa.qq.com/msgrd?v=3&uin={$ui.footinfo_qq}&site=qq&menu=yes"
    			<else/>
    			href="http://crm2.qq.com/page/portalpage/wpa.php?uin={$ui.footinfo_qq}&aty=0&a=0&curl=&ty=1"
    			</if>
				rel="nofollow" target="_blank">
					<i class="fa fa-qq"></i>
				</a>
				</if>
				<if value="$ui['footinfo_sina_ok']">
				<a href="{$ui.footinfo_sina}" rel="nofollow" target="_blank">
					<i class="fa fa-weibo red-600"></i>
				</a>
				</if>
				<if value="$ui['footinfo_twitterok']">
				<a href="{$ui.footinfo_twitter}" rel="nofollow" target="_blank">
					<i class="fa fa-twitter red-600"></i>
				</a>
				</if>
				<if value="$ui['footinfo_googleok']">
				<a href="{$ui.footinfo_google}" rel="nofollow" target="_blank">
					<i class="fa fa-google red-600"></i>
				</a>
				</if>
				<if value="$ui['footinfo_facebookok']">
				<a href="{$ui.footinfo_facebook}" rel="nofollow" target="_blank">
					<i class="fa fa-facebook red-600"></i>
				</a>
				</if>
				<if value="$ui['footinfo_emailok']">
				<a href="mailto:{$ui.footinfo_email}" rel="nofollow" target="_blank">
					<i class="fa fa-envelope red-600"></i>
				</a>
				</if>
			</div> -->
		</div>
	</div>
	<div class="cutting-line"></div>
</div>