<?php defined('IN_MET') or exit('No permission'); ?>
 <tag action="category" type="current" cid="$data['classnow']">
    <if value="$m[index_num] eq 2">
        <div class="panel-group" id="faq" aria-multiselectable="true" role="tablist" m-id='{$ui.mid}'>
         <tag action="category" cid="$data[classnow]" type="son">
                  <div class="panel">
                    <div class="panel-heading" id="a{$m._index}" role="tab">
                      <a class="panel-title" data-toggle="collapse" href="#b{$m._index}" data-parent="faq" aria-expanded="true" aria-controls="b{$m._index}">
                      {$m.name}
                    </a>
                    </div>
                    <div class="panel-collapse collapse in" id="b{$m._index}" aria-labelledby="a{$m._index}" role="tabpanel" aria-expanded="false">
                      <div class="panel-body">
                        <ul class="list--vertical article-list">
                            <tag action="list" cid="$m['id']" num="$ui[num]">
                                <li class="list__item">
                                    <a href="{$v.url}" title="{$v.title}" class="link">
                                        {$v.title}
                                    </a>
                                </li>
                            </tag>
                        </ul>
                      </div>
                    </div>
                  </div>
            </tag>
        </div>
        
    <else/>
    <main class="$uicss met-news">
        <div class="container">
            <div class="row">
                <tag action='news.list' num="$c['met_news_list']"></tag>
                <if value="$sub">
                        	<if value="$ui[has][sidebar]">
                        	<div class="col-md-9 met-news-body">
                                <div class="row">
                            </if>
                            <div class="met-news-list">
                	            <ul class="ulstyle met-pager-ajax imagesize" data-scale='{$c.met_newsimg_y}x{$c.met_newsimg_x}' m-id='{$ui.mid}'>
                	                <include file='ui_ajax/news'/>
                	            </ul>
                	            <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                				    <pager/>
                				</div>
                				<div class="met_pager met-pager-ajax-link hidden-md-up" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" m-type="nosysdata">
                				    <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
                				        <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
                				        {$lang.page_ajax_next}
                				    </button>
                				</div>
                			</div>
                <else/>
                            <div class='h-100 text-xs-center font-size-20 vertical-align' m-id='{$ui.mid}'>{$ui.nodata}</div>
                </if>
                		<if value="$ui[has][sidebar]">
                			</div>
                    	</div>
                		</if>	
        <if value="!$ui[has][sidebar] && $sub">
                        </div>
                    </div>
                </main>
        </if>
</if>
</tag>
