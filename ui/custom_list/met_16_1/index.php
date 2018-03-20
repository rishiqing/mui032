<?php defined('IN_MET') or exit('No permission'); ?>
<div class="$uicss met-index-body <if value="$ui['bg_type']">bgcolor<else/>bgpic</if> <if value="$data['classnow'] eq 10001">index-page</if>"  m-id='{$ui.mid}'>
    <tag action='category' cid="$ui['id']" type='son'>
        <if value="$m['_index'] lt $ui[num]">
            <if value="$m[_index]%2 eq 0">
                <section class="" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false"
                 <if value="!$ui[bg_type] && $m[indeximg]"> style="background:url({$m.indeximg}) no-repeat center;background-size:cover;"</if>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 desc invisible" data-plugin="appear" data-animate="slide-left" data-repeat="false">
                                <div>
                                    <h4>{$m.name}</h4>
                                    <!-- <h6>{$m.namemark}</h6> -->
                                    <p>{$m.description}</p>
                                    <if value="$ui[more]">
                                        <a href="{$m.url}" title="{$m.name}">{$ui.more}</a>
                                    </if>
                                </div>
                            </div>
                            <div class="col-md-8 img text-xs-center vertical-align invisible" data-plugin="appear" data-animate="slide-right" data-repeat="false">
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
                            <div class="col-md-8 text-xs-center img vertical-align invisible" data-plugin="appear" data-animate="slide-left" data-repeat="false">
                                <div class="vertical-align-middle">
                                    <img src="{$m.columnimg}" alt="{$m.name}" />
                                </div>
                            </div>
                            <div class="col-md-4 desc invisible" data-plugin="appear" data-animate="slide-right" data-repeat="false">
                                <div>
                                    <h4>{$m.name}</h4>
                                    <!-- <h6>{$m.namemark}</h6> -->
                                    <p>{$m.description}</p>
                                    <a href="{$m.url}" title="{$m.name}">{$ui.more}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </if>
        </if>
    </tag>
</div>