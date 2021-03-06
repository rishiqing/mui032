<?php defined('IN_MET') or exit('No permission'); ?>
<tag action="category" type="current" cid="$data['classnow']">
    <if value="$data['foldername'] eq 'price'"><!-- 价格页 常见问题部分 -->
        <div class="$uicss common-questions-list">
            <div class="container">
                <h3 class="text-xs-center m-t-0">{$data['namemark']}</h3>
                <div class="panel-group" id="faq" aria-multiselectable="true" role="tablist" m-id='{$ui.mid}'>
                <tag action='list' cid="$m['id']" num="$v['sub']">
                    <if value="$v['_index'] gt 3 && $v['_index'] lt 9">
                    <div class="panel">
                        <div class="panel-heading" id="<?php echo 'a'.($v['_index'] - 4) ?>" role="tab">
                          <a class="panel-title" data-toggle="collapse" href="<?php echo '#b'.($v['_index'] - 4) ?>" data-parent="faq" aria-expanded="true" aria-controls="<?php echo 'b'.($v['_index'] - 4) ?>">
                          {$v.title}
                        </a>
                        </div>
                        <div class="panel-collapse collapse in" id="<?php echo 'b'.($v['_index'] - 4) ?>" aria-labelledby="<?php echo 'a'.($v['_index'] - 4) ?>" role="tabpanel" aria-expanded="false">
                          <div class="panel-body">
                            <p>{$v.description}</p>
                          </div>
                        </div>
                    </div>
                    </if>
                </tag>
                </div>
            </div>
        </div>
    <elseif value="$data['foldername'] eq 'faq'"/>
        <div id="faq-page" m-id='{$ui.mid}'>
        <tag action="category" cid="$data[classnow]" type="son">
            <div class="faq-list">
                <div class="faq-heading">
                  <h3 class="faq-title m-t-0 m-b-0">{$m.name}</h3>
                </div>
                <div class="faq-body">
                    <ul class="p-l-20">
                        <tag action="list" cid="$m['id']" num="$ui[num]">
                            <li class="list-item">
                                <a href="{$v.url}" title="{$v.title}">
                                    {$v.title}
                                </a>
                            </li>
                        </tag>
                    </ul>
                </div>
            </div>
        </tag>
        </div>
    <else/>
    <main class="$uicss met-news <if value="!$m['nav'] && ($data['foldername'] eq 'solution' || $data['foldername'] eq 'method')">m-t-70</if>"><!-- 解决方案和使用方法的 全部 -->
        <div class="container">
            <div class="row">
                <tag action='news.list' num="$c['met_news_list']"></tag>
                <if value="$sub">
                    <if value="$ui[has][sidebar]">
                    <div class="col-md-9 met-news-body">
                        <div class="row">
                    </if>
                    <div class="met-news-list">
                        <ul class="ulstyle met-pager-ajax imagesize <if value="$data['foldername'] eq 'method' ">usage-list</if>" data-scale='{$c.met_newsimg_y}x{$c.met_newsimg_x}' m-id='{$ui.mid}'>
                            <include file='ui_ajax/news'/>
                        </ul>
                        <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                            <pager/>
                        </div>
                        <div class="met_pager met-pager-ajax-link hidden-md-up" m-type="nosysdata">
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