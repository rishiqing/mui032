<?php defined('IN_MET') or exit('No permission'); ?>
<main class="$uicss <if value="$data['foldername'] eq 'price' ">partners-list<elseif value="$data['classnow'] eq 10001"/>index-page</if>" m-id='{$ui.mid}'>
    <div class="<if value="$ui[style]">container-fliud<else/>container</if>">
        <div class="row text-xs-center">
            <tag action='category' cid="$ui['id']" type='current'>
                <!-- 价格 -->
                <if value="$data['foldername'] eq 'price' ">
                    <h3 class="text-xs-center m-b-45 m-t-0">{$data['ctitle']}</h3>
                    <!-- 读取价格页面下面的子栏目图片 -->
                    <ul class="partners-img-list">
                    <tag action='category' cid="$data['classnow']" type='son'>
                        <li>
                            <div class="vertical-align-middle">
                                <img src="{$m.columnimg}" alt="{$m.name}" />
                            </div>
                        </li>
                    </tag>
                    </ul>
                <!-- 培训课程 -->
                <elseif value="$data['foldername'] eq 'img'"/>
                    <ul class="no-space met-pager-ajax imagesize met-img-list" data-scale='{$c.met_imgs_y}x{$c.met_imgs_x}' m-id='{$ui.mid}'>
                        <include file='ui_ajax/img'/>
                    </ul>
                    <if value="!$c['met_img_page'] || !$data['sub']">
                    <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                        <pager/>
                    </div>
                    <div class="met_pager met-pager-ajax-link hidden-md-up" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" m-type="nosysdata">
                        <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
                            <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
                        </button>
                    </div>
                    </if>
                <!-- 首页 -->
                <elseif value="$data['classnow'] eq 10001"/>
                    <h3 class="text-xs-center m-b-45 m-t-10">{$m['ctitle']}</h3>
                    <ul class="<if value="$m['foldername'] eq 'partial'">solution-img-list<elseif value="$m['foldername'] eq 'settle'"/>problem-img-list</if> m-b-50">
                    <tag action='list' cid="$m['id']" num="$ui['num']">
                        <li>
                            <a href="{$v.url}" {$m.urlnew}>
                                <div class="vertical-align-middle img-wrap">
                                    <img src="{$v.imgurl}" alt="{$v.title}" />
                                </div>
                                <p class="m-b-0 m-t-10">{$v.title}</p>
                            </a>
                        </li>
                    </tag>
                    </ul>
                    <a href="{$m.description}" {$m.urlnew}>{$m.namemark}</a>
                <else/>
                    <div class='h-100 text-xs-center font-size-20 vertical-align' m-id='{$ui.mid}'>{$g.nodata}</div>
                </if>
            </tag>
        </div>
    </div>
</main>