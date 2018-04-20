<?php defined('IN_MET') or exit('No permission'); ?>
<main class="$uicss <if value="$data['index_num'] eq 99">partners-list</if>">
    <div class="<if value="$ui[style]">container-fliud<else/>container</if>">
        <div class="row">
            <tag action='img.list' num="$c['met_img_list']"></tag>
            <if value="$sub">
            <ul class="<if value="$ui['img_column_xs'] eq 1">
                        blocks-100
                        <else/>
                        blocks-xs-{$ui.img_column_xs}
                        </if>
                        blocks-md-{$ui.img_column_sm} blocks-lg-{$ui.img_column_md} blocks-xxl-{$ui.img_column_xlg}  no-space met-pager-ajax imagesize met-img-list" data-scale='{$c.met_imgs_y}x{$c.met_imgs_x}' m-id='{$ui.mid}'>
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
            <elseif value="$data['index_num'] eq 99" /> <!-- 价格页 -->
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
            <else/>
            <div class='h-100 text-xs-center font-size-20 vertical-align' m-id='{$ui.mid}'>{$g.nodata}</div>
            </if>
            </div>
    </div>
</main>