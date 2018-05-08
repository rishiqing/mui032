<?php defined('IN_MET') or exit('No permission'); ?>
<main class="$uicss <if value="$data['foldername'] eq 'price' ">partners-list<elseif value="$data['classnow'] eq 10001"/>index-page<elseif value="$data['foldername'] eq 'skill'"/>skill-page</if>" <if value="$data['foldername'] neq 'skill'">m-id='{$ui.mid}'</if>>
    <div class="<if value="$ui[style]">container-fliud<else/>container</if>">
        <div class="row text-xs-center">
            <!-- 使用技巧 -->
            <if value="$data['foldername'] eq 'skill'">
            <tag action='img.list' num="$c['met_img_list']"></tag>
            <if value="$sub">
            <ul class="skill-img-list use-skill-list m-b-40" m-id='{$ui.mid}'>
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
            <else/>
            <div class='h-100 text-xs-center font-size-20 vertical-align' m-id='{$ui.mid}'>{$g.nodata}</div>
            </if>
            <div class="play-img-modal">
                <div class="wrapper">
                    <img src="" />
                    <i class="icon-close" title = '点击关闭'>×</i>
                </div>
            </div>
            <else/>
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
                <!-- 帮助中心 第一部分 -->
                <elseif value="$m['foldername'] eq 'helpone'"/>
                <ul class="helpone-img-list m-b-35">
                <tag action='list' cid="$m['id']" num="$ui['num']">
                    <li>
                        <a href="{$v.url}" {$m.urlnew}>
                            <div class="vertical-align-middle img-wrap">
                                <img src="{$v.imgurl}" alt="{$v.title}" />
                            </div>
                            <p class="m-b-0 m-t-20">{$v.description}</p>
                        </a>
                    </li>
                </tag>
                </ul>
                <!-- 帮助中心 第二部分 -->
                <elseif value="$m['foldername'] eq 'helptwo'"/>
                <h3 class="text-xs-center m-b-60 m-t-0">{$m['ctitle']}</h3>
                <ul class="skill-img-list m-b-40">
                <tag action='list' cid="$m['id']" num="$ui['num']">
                    <li>
                        <div class="vertical-align-middle img-wrap" data-src="{$v.url}">
                            <img src="{$v.imgurl}" alt="{$v.title}" />
                        </div>
                        <p class="m-b-0 m-t-10">{$v.title}</p>
                    </li>
                </tag>
                </ul>
                <a href="{$m.description}" {$m.urlnew}>{$m.namemark}</a>
                <div class="play-img-modal">
                    <div class="wrapper">
                        <img src="" />
                        <i class="icon-close" title = '点击关闭'>×</i>
                    </div>
                </div>
                <!-- 帮助中心 第三部分 -->
                <elseif value="$m['foldername'] eq 'helpthree'"/>
                <ul class="helpthree-img-list m-b-45">
                <tag action='list' cid="$m['id']" num="$ui['num']">
                    <li>
                        <div class="vertical-align-middle img-wrap">
                            <img src="{$v.imgurl}" alt="{$v.title}" />
                            <div class="play-btn" data-src="{$v.url}">
                                <i></i>
                            </div>
                        </div>
                        <p class="m-b-0 m-t-10">{$v.title}</p>
                    </li>
                </tag>
                </ul>
                <div class="play-video-modal">
                    <div class="wrapper">
                        <video controls="" ></video>
                        <i class="icon-close" title = '点击关闭'>×</i>
                    </div>
                </div>
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
            </if>
        </div>
    </div>
<if value="$data['foldername'] eq 'skill' || $data['foldername'] eq 'help'">

</if>
</main>