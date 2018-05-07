<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss met-index-body <if value="$ui['bg_type']">bgcolor<else/>bgpic</if> <if value="$data['classnow'] eq 10001">index-page</if>"  m-id='{$ui.mid}'>
    <tag action='category' cid="$ui['id']" type='current'>
        <tag action='list' cid="$m['id']" num="$ui['num']">
        <if value="$v['_index'] lt $ui[num]">
            <if value="$v[_index]%2 eq 0">
                <section class="" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 desc invisible" data-plugin="appear" data-animate="slide-left" data-repeat="false">
                                <div>
                                    <h4>{$v.title}</h4>
                                    <p>{$v.description}</p>
                                    <if value="$ui[more]">
                                        <a href="{$v.url}" title="{$v.title}">{$ui.more}<img src="{$v['displayimgs'][0]['img']}" alt="{$v.title}"></a>
                                    </if>
                                </div>
                            </div>
                            <div class="col-md-8 img text-xs-center vertical-align invisible" data-plugin="appear" data-animate="slide-right" data-repeat="false">
                                <div class="vertical-align-middle">
                                    <img src="{$v['displayimgs'][1]['img']}" alt="{$v.title}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <else/>
                <section class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 text-xs-center img vertical-align invisible" data-plugin="appear" data-animate="slide-left" data-repeat="false">
                                <div class="vertical-align-middle">
                                    <img src="{$v.imgurl}" alt="{$v.title}" />
                                </div>
                            </div>
                            <div class="col-md-4 desc invisible" data-plugin="appear" data-animate="slide-right" data-repeat="false">
                                <div>
                                    <h4>{$v.title}</h4>
                                    <p>{$v.description}</p>
                                    <a href="{$v.url}" title="{$v.title}">{$ui.more}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </if>
        </if>
        </tag>
    </tag>
</div>