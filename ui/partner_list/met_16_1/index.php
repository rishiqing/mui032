<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss met-index-body <if value="$ui[bg_type]">bgcolor<else/>bgpic</if>" m-id='{$ui.mid}'>
    <div class="container text-xs-center">
        <h2 class="title invisible" data-plugin="appear" data-animate="slide-top" data-repeat="false">{$ui.title}</h2>
        <!-- <p class="desc invisible" data-plugin="appear" data-animate="fade" data-repeat="false">{$ui.desc}</p> -->
        <if value="$data['classnow'] eq 10001">
        <div class="image-list">
        <div class="list-container">
        </if>
        <ul class="
            <if value="$ui['column_xs'] eq 1">
            block-xs-100
            <else/>
            blocks-xs-{$ui.column_xs}
            </if>
            <if value="$data['classnow'] eq 10001">index-page</if>
            blocks-md-{$ui.column_md} blocks-lg-{$ui.column_lg} blocks-xxl-{$ui.column_xxl} no-space imglist p-l-0"
             data-scale='$ui[img_y]x$ui[img_x]'>
            <tag action="category" type="current" cid="$ui['id']">
                <tag action="list" cid="$m['id']" num="$ui['num']" type="$ui['type']">
                    <li class="invisible" data-plugin="appear" data-animate="slide-bottom" data-repeat="false">
                        <div>
                            <if value="$ui[link_ok]">
                                <a href="{$v.url}" title="{$v.title}">
                            </if>
                             <img data-original="{$v.imgurl|thumb:$ui[img_w],$ui[img_h]}" alt="{$v.title}" >
                            <if value="$ui[link_ok]">
                                </a>
                            </if>
                        </div>
                    </li>
                </tag>
            </tag>
        </ul>
        <if value="$data['classnow'] eq 10001">
        </div>
        <span class="prev"><i class="icon fa-angle-left"></i></span>
        <span class="next"><i class="icon fa-angle-right"></i></span>
        </div>
        </if>
    </div>
    <if value="$data['classnow'] eq 10001">
    <div class="cutting-line"></div>
    </if>
</div>