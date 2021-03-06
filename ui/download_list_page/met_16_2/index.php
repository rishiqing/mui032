<?php defined('IN_MET') or exit('No permission'); ?>
<main class="$uicss met-download animsition" m-id='{$ui.mid}'>
    <div class="container">
        <div class="row">
<tag action='download.list' num="$c['met_download_list']"></tag>
<if value="$sub">
        <if value="$ui[has][sidebar]">
            <div class="met-download-list col-md-9">
            <div class="row">
        <else/>
            <div class="met-download-list">
            <div class="row">
        </if>
                <ul class="list-group list-group-dividered list-group-full met-pager-ajax clearfix">
                	<tag action='download.list' num="$c['met_download_list']">
                        <li class="list-group-item col-md-4 col-xs-6">
                            <div class="media">
                                <div class="media-icon">{$v.content}</div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <?php
                                            $downloadUrl = $v['downloadurl'];
                                            if (strpos($downloadUrl, 'void(0)')) {
                                                $v['downloadurl']='';
                                            }
                                        ?>
                                        <a class="name" href="{$v.downloadurl}">{$v.title}</a>
                                        <if value="$v['para'][0][value] && $v['para'][1][value]">
                                        <div class="download-menu">
                                            <a class="win-download-item" href="{$v['para'][0][value]}">{$v['para'][0][name]}</a>
                                            <a class="win-download-item" href="{$v['para'][1][value]}">{$v['para'][1][name]}</a>
                                        </div>
                                        </if>
                                    </h4>
                                    <!-- <p>{$v.description}</p>
                                    <div>
                                        <a class="btn btn-outline btn-primary" href="{$v.downloadurl}" title="{$v.title}">{$ui.download}</a>
                                    </div> -->
                                </div>
                            </div>
                        </li>
                    </tag>
                </ul>
                <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                    <pager/>
                </div>
                <div class="met_pager met-pager-ajax-link hidden-md-up" m-type="nosysdata">
                    <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
                        <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            </div>
            <else/>
            <div class='h-100 text-xs-center font-size-20 vertical-align' m-id='{$ui.mid}'>{$g.nodata}</div>
</if>
<if value="!$ui[has][sidebar]">
        </div>
    </div>
</main>
</if>