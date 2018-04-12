<?php defined('IN_MET') or exit('No permission'); ?>
<tag action="category" type="current" cid="$data['class1']">
<div class="$uicss met-product animsition <if value="$ui[product_pagetype] eq 1 && $m[index_num] neq 1">type-1</if><if value="$ui[product_pagetype] eq 2 && $m[index_num] neq 1">type-2</if><if value="$ui[product_pagetype] eq 3 && $m[index_num] neq 1">type-3</if>" m-id='{$ui.mid}'>
<if value="$m[index_num] eq 1 && !$c['met_product_page']">
	<tag action='category' cid="$data['classnow']" type='son'>
        <if value="$m['_index'] lt $c['met_product_list']">
            <if value="$m[_index]%2 eq 0">
                <section class="<if value='$m[_index] eq 0'>animation-slide-bottom50 appear-no-repeat</if>" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false"
                 <if value="!$ui[bg_type] && $m[indeximg]"> style="background:url({$m.indeximg}) no-repeat center;background-size:cover;"</if>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 desc <if value='$m[_index] eq 0'>animation-slide-left appear-no-repeat</if>" data-plugin="appear" data-animate="slide-left" data-repeat="false">
                                <div>
                                    <h4>{$m.name}</h4>
                                    <p>{$m.description}</p>
                                    <if value='$m[_index] eq 0 || $m[_index] eq 2' >
                                        <a href="{$lang.ding_url}" title="{$lang.btn_text1}" target="_blank" class="btn first-btn about_link">{$lang.btn_text1}</a>
                                    </if>
                                </div>
                            </div>
                            <div class="col-md-8 img text-xs-right <if value='$m[_index] eq 0'>animation-slide-right appear-no-repeat</if>" data-plugin="appear" data-animate="slide-right" data-repeat="false">
                                <div class="vertical-align-middle">
                                    <img src="{$m.columnimg}" alt="{$m.name}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <else/>
                <section class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false" <if value="!$ui[bg_type] && $m[indeximg]"> style="background:url({$m.indeximg}) no-repeat center;background-size:cover;"</if>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 text-xs-left img vertical-align invisible" data-plugin="appear" data-animate="slide-left" data-repeat="false">
                                <div class="vertical-align-middle">
                                    <img src="{$m.columnimg}" alt="{$m.name}" />
                                </div>
                            </div>
                            <div class="col-md-4 desc invisible" data-plugin="appear" data-animate="slide-right" data-repeat="false">
                                <div>
                                    <h4>{$m.name}</h4>
                                    <p>{$m.description}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </if>
        </if>
    </tag>
    <elseif value="$m[index_num] eq 22"/>
        <if value="$data['classnow'] eq 137">
    	<div class="pricing">
    		<div class="container">
    			<tag action='category' cid="$data['classnow']" type='current'>
    				<h1 class="text-xs-center">{$m.keywords}</h1>
					<h3 class="text-xs-center">{$m.description}</h3>
    			</tag>
    			<div class="font-size-0">
                    <tag action='product.list' num="$c['met_product_list']">
                        <div class="pricing-column">
							<div class="pricing-header">
								<div class="package-title">
                                    <h2>{$v.title}</h2>
                                    <if value="$v[_index] eq 0"><p>{$lang.price_desc_0}</p></if>
                                    <if value="$v[_index] eq 1"><p>{$lang.price_desc_1}</p></if>
                                    <if value="$v[_index] eq 2"><p>{$lang.price_desc_2}</p></if>
                                    <if value="$v[_index] eq 3"><p>{$lang.price_desc_3}</p></if>
                                </div>
								<div class="package-value">
									<list data="$v['para']"  name='$para'>
										<if value="$para[value]">
											<if value="$para['_index'] eq 0">
												<?php 
                                                $arr=explode('<m',$para[value])[0];
                                                $arr=explode(" ",$arr); 
                                                ?>
												<span class="package-currency">{$arr[0]}</span>
												<span class="package-price">{$arr[1]}</span>
												<span class="package-time">{$arr[2]}</span>
											</if>
							            </if>
						            </list>
								</div>
							</div>
							<ul class="package-features">
                                <list data="$v['para']"  name='$para1'>
                                    <if value="$para1['_index'] gt 0 && !$para1['_last']">
                                        <li>{$para1.value}</li>
                                    </if>
					            </list>
							</ul>
							<!-- <div class="signup">
                                <list data="$v['para']"  name='$para2'>
                                    <if value="$para2['_last']">
                                    <?php // $url=explode('<m',$para2[value])[0]; ?>
							             <a href="{$url}" class="btn white" target="_blank">{$para2.name}</a>
                                    </if>
                                </list>
							</div> -->
						</div>
	    			</tag>
    			</div>
    		</div>
    	</div>
        <elseif value="$data['classnow'] eq 153"/>
        <tag action='category' cid="$data['classnow']" type='son'>
        <if value="$m['_index'] lt $c['met_product_list']">
            <div class="product_introduce text-xs-center">
                <div class="container">
                    <h3 class="m-t-15 m-b-35">{$m.name}</h3>
                    <p class="m-b-20">{$m.description}</p>
                    <div class="vertical-align-middle">
                        <img src="{$m.columnimg}" alt="{$m.name}" />
                    </div>
                </div>
            </div>
        </if>
        </tag>
        </if>
	<else/>
	<div class="<if value="$ui['product_pagetype'] eq 1">container<else/>container-fluid</if>">
    	<tag action='product.list' num="$c['met_product_list']"></tag>
		<if value="$sub">
			<ul class="<if value="$ui['column_xs'] eq 1">
				block-xs-100
				<else/>
				blocks-xs-{$ui.column_xs}
				</if>
			 	blocks-md-{$ui.column_md} blocks-lg-{$ui.column_lg} blocks-xxl-{$ui.column_xxl}  met-pager-ajax imagesize cover met-product-list met-grid" id="met-grid" data-scale='{$c.met_productimg_y}x{$c.met_productimg_x}'>
				<include file='ui_ajax/product'/>
			</ul>
			<if value="!$c['met_product_page']">
				<div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
				    <pager/>
				</div>
				<div class="met_pager met-pager-ajax-link hidden-md-up" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" m-type="nosysdata">
				    <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
				        <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
				    </button>
				</div>
			</if>
		<else/>
			<div class='h-100 text-xs-center font-size-20 vertical-align'>{$ui.nodata}</div>
		</if>
    </div>
</if>
 </div>
 </tag>
